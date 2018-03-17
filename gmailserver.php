  <?php
     $firstName = "";
     $lastName = "";
     $email = "";
     $password = "";
     $confirmPassword = "";
     $contactNo = "";
     $dob = "";
     $male = "";
     $female = "";
     $errors = array();

  if(isset($_POST['sub'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];
    $dob = $_POST['dob'];
    $contactNo = $_POST['number'];

    if(empty($firstName)){
      array_push($errors, "firstname is required");
    }
    if(empty($lastName)){
      array_push($errors, "lastname is required");
    }
    if(empty($email)){
      array_push($errors, "email is required");
    }
    if(empty($password)){
      array_push($errors, "password is required");
    }
    if(empty($confirmPassword)){
      array_push($errors, "confirm password is required");
    }
    if(empty($dob)){
      array_push($errors, "Date of Birth is required");
    }
    if(empty($contactNo)){
      array_push($errors, "Contact no is required");
    }
    require_once('connection.php');

  if(count($errors)==0){
  $insert = "INSERT INTO register(First Name , Last Name , Gmail, Password, Confirm Password, Date_of_Birth, Contact_no, Male, Female, Other) values('$firstName' , '$lastName' , '$email' , '$password' , $confirmPassword' , '$dob' , '$contactNo')";

    mysqli_query($connection,$insert) or die('Cannot execute query');

    /*echo "Records inserted successfully";*/
     header("Location: dashboard.php");

    mysqli_close($connection);
  } 
  }
?>