<?php

session_start();
if( isset($_POST['txtusrnm']) && isset($_POST['txtpwd']) )
{
    if( Authen($_POST['txtusrnm'], $_POST['txtpwd']) )
    {
        // auth okay, setup session
        $_SESSION['user'] = $_POST['txtusrnm'];
        echo $_SESSION['user'];
        // redirect to required page
        header( "Location: index1.php" );
     } else {
        // didn't auth go back to loginform
        header( "Location: errpwdlogout.php" );
     }
 } else {
     // username and password not given so go back to login
     header( "Location: errpwdlogout.php" );
 }





function Authen($str,$str1)
{
$servername = "localhost";
$username = "root";
$password = "kumar1234";
$dbname = "kumar";

//echo $username;

$userid=$_POST['txtusrnm'];
$pwd=$_POST['txtpwd'];

//echo $userid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} 

//echo "connection error";
$sql = "select uname,pwd from uspwd where uname='".$userid."' and pwd='".$pwd."'";
//echo $sql;

$result = $conn->query($sql);
if($result->num_rows>0)
	return 1;
	//header("location: index.html");
else
{
return 0;
	//echo '<script language="javascript"> alert("wrong user name or password") </script>';
	//header("location: Login.html");
}

}
//$userid=$_POST['txtusrnm'];
//$pwd=$_POST['txtpwd'];


?>