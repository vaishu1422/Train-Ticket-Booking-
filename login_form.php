<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      $_SESSION['admin_name'] = $row['name']; // Store admin name
      $_SESSION['admin_email'] = $row['email']; // Store admin email
      $_SESSION['admin_type'] = $row['user_type']; // Store admin user type
      $_SESSION['email'] = $email; // Store email in session

      // Debugging messages
      echo "Admin name: ".$_SESSION['admin_name']."<br>";
      echo "Admin email: ".$_SESSION['admin_email']."<br>";
      echo "Admin type: ".$_SESSION['admin_type']."<br>";

      if($row['user_type'] == 'admin'){
         // Redirect to admin_page.php with email parameter
         header("location: admin_page.php?email={$email}");
      } elseif($row['user_type'] == 'user'){
         // Redirect to user_page.php with email parameter
         header("location: user_page.php?email={$email}");
      } else {
         // Redirect to ticket.php with email parameter
         header("location: ticket.php?email={$email}");
      }
   } else {
      $error[] = 'Incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login form</title>

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      body {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
         text-transform: uppercase;
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100vh;
         margin-bottom: -150px;
         overflow: hidden; /* To prevent scrollbars due to the video */
      }

      video {
         position: fixed;
         right: 0;
         bottom: 0;
         min-width: 100%;
         min-height: 100%;
         width: auto;
         height: auto;
         z-index: -1;
      }
   </style>
</head>
<body>

<video autoplay loop muted plays-inline class="back-video">
   <source src="train_video.mp4" type="video/mp4">
</video>

<div class="form-container">
   <form action="" method="post">
      <h3>Login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error_msg){
            echo '<span class="error-msg">'.$error_msg.'</span>';
         }
      }
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>
</div>

</body>
</html>
