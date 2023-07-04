
<?php
class MY_connection
        {
        protected $host = "localhost";
        protected $user = "dth";
        protected $password = "cFCe9hLxWb28JMPA";
        protected $database = "dth";
       public function connectDB(){
                $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
                return $conn;
        }
        public function role_search(){
                $conn=$this->connectDB();
                $query="SELECT * FROM `courses` where id='22';";
               // echo $query;die;
                $result=mysqli_query($conn,$query);
                return $result;
        }

 }




$class_F=new MY_connection();

   $user_insert=$class_F-> role_search();
   $row_user=mysqli_fetch_assoc($user_insert);
   $tid=$row_user['ttype'];
  echo $tid;

 

?>
