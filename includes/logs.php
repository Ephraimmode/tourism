<!-- database added to the page for connection -->
<?php include ('connect.php'); ?>

<!-- registration code coming from the register action page -->
<?php 

if (isset($_POST['register'])) {

// inputs coming from form fields

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$username = $_POST['user'];
$password = $_POST['passcode'];
$email = $_POST['emailx'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];

// query to insert the data into data base users table.

$query = query("INSERT INTO users (firstname,lastname,username,password,email,country,gender,occupation)
values ('$firstname','$lastname','$username','$password','$email','$country','$gender','$occupation')                                    
");

// confirm connection

confirm($query);

// for a user to login instantly after registration, the below comes are written...
$user = $username; //username variable from above is re-assigned
$pass =  $password; //password variable from above is re-assigned

//checking the users table if the username and password coming from the input field is same as what is present in the database...
$query = query("SELECT * FROM users WHERE  username='$user' && password='$pass'");
//this confirms the query to see if there's any error...
confirm($query);
//This will obtain the data in rows querried.
$row = fetch_array($query);
//the conditional statement below check for the row that matches the login and if a true... the code block will be executed.
if (mysqli_num_rows($query) > 0) {
//Session will start immediately if the query returns true to track the user's activity within the browser.
  session_start();
  session_regenerate_id();
  //the session is being assigned to the user ID.
  $_SESSION['id'] = $row['user_id'];
  //redirecting the user to 
  header('location:../dashboard.php?registered');
  session_write_close();
  exit();

}
else{
//if the connection/query is invalid, the user will be redirected to the link indicated below.
  header('location:register.php?invalidQuery');
  session_write_close();

      
}

//code for return if error.....
}
// end of registration code...
//=================================================================================================



// login codes here.....
//check if the submit button was clicked
if(isset($_POST['login'])){
// data coming in from input field validated with mysqli real escape string 
    $username = escape_string($_POST['user']);
    $password = escape_string($_POST['passcode']);
//quering the database to see if the input matches with each other.
    $query = query("SELECT * FROM users WHERE  username='$username' && password='$password'");
//check of the query is error free
    confirm($query);
//extract the data from the table row as an array containing all the columns of the user if the query was true
    $row = fetch_array($query);
// blocks of codes to execute if the user details match as querried
if (mysqli_num_rows($query) > 0) {
//start session
    session_start();
    session_regenerate_id();
//assign session to the user id
    $_SESSION['id'] = $row['user_id'];
// switch to user dashboard
    header('location:../dashboard.php');
    session_write_close();
    exit();
}
else{
    // send the user back to login page if the login credentials are not correct.      
    header('location:../login.php?invalidLogin');
    session_write_close();
     
   }
}



?>