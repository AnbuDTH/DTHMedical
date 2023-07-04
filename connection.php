
<?php
$connection = mysqli_connect('localhost', 'dth', 'cFCe9hLxWb28JMPA');
//$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'dth');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}



$from = 'sjskrk04411@gmail.com';
$to = 'sjsrkrk0411@gmail.com';
$subject = "Your Recovered Password";
$message = "Please use this password to login ";
$headers  = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From:  <$from>" . "\r\n";
    //$headers .= 'Cc: info@jayatechnology.com' . "\r\n";
    @mail($to, $subject, $message, $headers);

	
	
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forgot password</title>

  </head>
<body>

<link rel="stylesheet" type="text/css" href="assets\ia_assets\css\style2.css">

<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
   <span class="input-group-addon" id="basic-addon1">@</span>
   <input type="text" name="username" class="form-control" placeholder="Username" required>
 </div>
 <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
</form>

</body>
</html>
<?php



 


    if(isset($_POST['username']) & !empty($_POST['username'])){
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $sql = "SELECT * FROM users WHERE username = '$username'";
		//echo $sql;
        $res = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
         //echo "Send email to user with password";
		 
$r = mysqli_fetch_array($res);
$password = decryptIt($r['password']);
$passwordd=decryptIt( $password );

/*echo $passwordd;
 die();*/
//echo $password;
//die();
/* $to = $r['email']; */

$from = 'jeyamravip@gmail.com';
$to = $r['email'];
$subject = "Your Recovered Password";
$message = "Please use this password to login " . $password;
$headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From:  <$from>" . "\r\n";
    //$headers .= 'Cc: info@jayatechnology.com' . "\r\n";
    @mail($to, $subject, $message, $headers);


        }else{
         echo "User name does not exist in database";
		 
		 
        }
       }



?>