<?php
// $connect = new mysqli ("localhost", "root","", "guvi") or die("COnnection Failed");
// $username=$_POST['email'];
// $password=$_POST['upassword'];
// if(!empty($_POST['save']))
// {
//     $query="select * from register where  email='$username' and upassword='$password'";
//     $result=mysqli_query($connect,$query);
//     $count =mysqli_num_rows($result);
//     if($count>0)
//     {
        
//         if (!empty($username) || !empty($password))
//         {

//             $host = "localhost";
//             $dbusername = "root";
//             $dbpassword = "";
//             $dbname = "guvi"; 



//             // Create connection
//             $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

//             if (mysqli_connect_error()){
//                 die('Connect Error ('. mysqli_connect_errno() .') '
//                 . mysqli_connect_error());
//             }
//             else{
//                 $SELECT = "SELECT email From register Where email = ? Limit 1";
//                 $INSERT = "INSERT Into login (email,upassword)values(?,?)";

//             //Prepare statement
//             $stmt = $conn->prepare($SELECT);
//             $stmt->bind_param("s", $email);
//             $stmt->execute();
//             $stmt->bind_result($email);
//             $stmt->store_result();
//              $rnum = $stmt->num_rows;

//             //checking username
//             if ($rnum!=0) { 
//             $stmt->close();
//             $stmt = $conn->prepare($INSERT);
//             $stmt->bind_param("ss", $username, $password);
//             $stmt->execute();
//              } 
//      $stmt->close();
//      $conn->close();
//     }
//     } else {
//         echo "All field are required";
//         die();
//     }
       
//     header('Location: ../profile.html');
//     exit; 
//     }
//     else
//     {
//         echo "Username Not Found";
//     }
// };

$connect = new mysqli ("localhost", "root","", "guvi") or die("Connection Failed");
session_start();
if(isset($_POST['save'])){

   $name = mysqli_real_escape_string($connect, $_POST['email']);
   $pass = $_POST['upassword'];
   $select = " SELECT * FROM register WHERE email = '$name' && upassword = '$pass' ";
   $insert= "INSERT INTO login (email,upassword) values(?,?)"; 

   
   $result = mysqli_query($connect, $select);

   if(mysqli_num_rows($result) > 0){
         $_SESSION["Login"]=true;
         header('location: ../profile.html');
         exit();
      }
     
     else{
      echo "incorrect email or password!";
   }

};

?>











 
