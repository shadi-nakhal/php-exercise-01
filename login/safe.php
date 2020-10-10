<?php 





if(isset($_POST['btn1'])) {

$fullname = $_POST["full"];
$username = $_POST["username"];
$password = $_POST["pwd"];
$re_password = $_POST["repeat-pwd"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$birth_date = $_POST["date"];
$social = $_POST["social"];


if(empty($fullname) || empty($username) || empty($email) || empty($phone)
         || empty($birth_date) || empty($social) || empty($password) || empty($re_password)) {
          
        header("Location: home.php?error=emptyfields");
        exit();
            
     }

     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: home.php?error=invalidmail");
        exit();
     }

     elseif($password !== $re_password) {
        header("Location: home.php?error=pwd");
        exit();
     }

     elseif(!preg_match("/^(961(3|70|71|1)|(03|70|71|01))\d{6}$/", $phone)) {
         header("Location: home.php?error=phone");
         exit();
     }
     else {


echo "<h1>Registered Successfully</h1>";

echo "Fullname: $fullname <br>
      Username: $username <br>
      Password: $password <br>
      E-mail: $email <br>
      Phone: $phone <br>
      Date of Birth: $birth_date <br>
      Social Security Number: $social <br>";
    };
};

if(isset($_POST['btn2'])){


$login_name = $_POST["login-name"];
$login_pwd = $_POST["login-pwd"];


if(empty($login_name) || empty($login_pwd)){
    header("Location: home.php?error=incorrectpassword");
    exit();
}

elseif($login_name == "khaldoun" && $login_pwd == "khaldoun"){

    echo "<h1>Logged in Successfully</h1> <br>";
    
    echo "Username: $login_name <br>
          Password: $login_pwd <br>";
}else {
    header("Location: home.php?error=incorrectpassword");
    exit();
}


    
}




