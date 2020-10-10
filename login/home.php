<?php


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="background"></div>
        <div class="over-lay"></div>
        <div class="content">
            <div class="content-overlay"></div>
            <div class="register">
                <form action="safe.php" method="POST">
                    <fieldset>
                        <?php 
                            if(isset($_GET['error'])){

                                if($_GET['error'] == "emptyfields"){

                                    echo "<p>Fill in all fields!</p>";

                                }
                                elseif($_GET['error'] == "invalidmail"){

                                        echo "<p>Invalid E-mail!</p>";
                                    }

                                elseif($_GET['error'] == "pwd"){

                                        echo "<p>Check password!</p>";
                                    }
                                    elseif($_GET['error'] == "phone"){
                                        echo "<p>Enter a valid lebanese number</p>";
                                    }
                                };
                        ?>
                        <legend>Sign-up</legend>
                        <input type="text" name="full" placeholder="FullName">
                        <input type="text" name="username" placeholder="UserName">
                        <input type="password" name="pwd" placeholder="Password">
                        <input type="password" name="repeat-pwd" placeholder="Confirm Password">
                        <input type="text" name="email" placeholder="Email">
                        <input type="tel" name="phone" placeholder="Phone Number">
                        <input type="date" name="date" placeholder="Date of Birth">
                        <input type="text" name="social" placeholder="Social Security Number">
                        <input type="submit" value="Sign up" name="btn1" id="btn">
                    </fieldset>
               </form>
            </div>
            <div class="log-in">
                <form action="safe.php" method="POST">
                    <fieldset>
                        <?php 
                        if(isset($_GET['error'])){

                            if($_GET['error'] == "incorrectpassword"){

                                echo "<p>Incorrect password!</p>";

                            }
                        }
                        ?>
                        <legend>Log-in</legend>
                        <input type="text" name="login-name" placeholder="UserName">
                        <input type="text" name="login-pwd" placeholder="Password">
                        <input type="submit" value="Login" name="btn2" id="btn">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
