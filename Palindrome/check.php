<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php 

    $input = $input_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        if(empty($_POST["input"]) || is_numeric($_POST["input"]) || strlen($_POST["input"]) <= 2) {
            $input_error = "Invalid Word";

          }elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["input"] )){
                $input_error = "Illegal Chars detected ";
          }
          
          else {
              $input = test($_POST["input"]);

          $reverse = strrev($input);

          if($input == $reverse){
              $answerr = "True";
          }else {
              $answerr = "False";
          }
          
        }

    }
    
    function test($data)
        {
          return htmlspecialchars(stripslashes(trim($data)));
        };
    

       

    
    ?>

    <div class="wrapper">
    <header><h1>Palindrome Checker</h1></header>
        <div class="content">
            
            <form action="" method="POST">
                <div><?php echo "<p class='answer'>$answerr</p>"; echo "<p class='answer'>$input_error</p>";?></div> 
                <label for="word">Enter a word to check</label>
                <input type="text" name="input" id="word" value="<?php if(isset($_POST["input"])){ echo htmlentities($_POST['input']);} ?>">
                <input type="submit" value="Check">
 
            </form>
        
        </div>
    
    </div>
</body>
</html>