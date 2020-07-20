<?php
session_start();
// error_reporting(0);
// $servername = "localhost";
// $username = "root";
// $password = "Andrw@12345";
// $dbname = "andrw";

// // Create connection with mysql database
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection 
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


if (isset($_POST['submit'])) {
  // echo "<script>alert('Hello')</script>";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  //Serverside Validation
  if (empty($name)) {
    $name_p = "Your Name Field is required !";
    $code = 1;
    $backgroundColour = "red";
    $foreColour = "white";
  } else if (empty($email)) {
    $email_p = "Your  Email is required !";
    $code = 2;
    $backgroundColour = "red";
    $foreColour = "white";
  } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
    $email_p = "Your Email Field is not valid   !";
    $code = 2;
    $backgroundColour = "red";
    $foreColour = "white";
  } else if (empty($subject)) {
    $subject_p = "Your Subject Field is required !";
    $code = 3;
    $backgroundColour = "red";
    $foreColour = "white";
  } else if (empty($phone)) {
    $phone_p = "Your Phone Field is required !";
    $code = 4;
    $backgroundColour = "red";
    $foreColour = "white";
  } else if (empty($message)) {
    $message_p = "Your Message Field is required !";
    $code = 5;
    $backgroundColour = "red";
    $foreColour = "white";
  }
}

if (!isset($backgroundColour)  && isset($name) && isset($email) && isset($phone) && isset($message) && isset($subject)) {
  $to = "a.spalding55@outlook.com";
  $subject = $_POST['subject'];

  $msg = "<html>
        <head>
        <title>Contact form information</title>
        </head>
        <body>
        <table>
        <tr>
        <th>Name</th>
        <th>" . $_POST['name'] . "</th>
        </tr>
        <tr>
        <td>Email</td>
        <td>" . $_POST['email'] . "</td>
        </tr>
        <tr>
        <td>Telephone Number</td>
        <td>" . $_POST['phone'] . "</td>
        </tr>
        <tr>
        <td>Message</td>
        <td>" . $_POST['message'] . "</td>
        </tr>
        </table>
        </body>
        </html>";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <contact@andrewspalding.co.uk>' . "\r\n";

  $mail = mail($to, $subject, $msg, $headers);


  if ($mail) {
    $_SESSION['status'] = 'ok';
  }

  $name = $email = $subject = $phone = $message = "";

  // $sql = "INSERT INTO `contact_form` (`name`, `email`, `phone`, `subject`, `message`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['subject'] . "','" . $_POST['message'] . "')";

  // if (mysqli_query($conn, $sql)) {
  //   echo "<script>alert('Thank you!');</script>";
  // } else {
  //   echo "<script>alert('Something went wrong in server, Try again!');</script>";
  // }
} else {
  if (isset($backgroundColour) && $backgroundColour == "red") {
    $_SESSION['status'] = 'error';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Contact Me | Web Developer</title>


  <script>
    function validateform() {
      var name = document.myform.name.value;
      // var password=document.myform.password.value;  

      var email = document.myform.email.value;
      var subject = document.myform.subject.value;
      var phone = document.myform.phone.value;
      var message = document.myform.message.value;





      if (name == null || name == "") {
        alert("Name can't be blank");
        return false;
      } else if (email == null || email == "") {
        alert("Email Can't be Blanked");
        return false;
      } else if (subject == null || subject == "") {
        alert("Subject Can't be Blanked");
        return false;
      } else if (phone == null || phone == "") {
        alert("Please Enter Phone");
        return false;
      } else if (message == null || message == "") {
        alert("Please Enter Message");
        return false;
      }
    }
  </script>

  <style>
    .swal2-container {
      zoom: 0.5 !important;
    }

    .swal2-popup {
      font-size: 1.2rem;
    }
  </style>

</head>

<body>
  <!-- Header -->
  <header id="header-inner">
    <div class="container">
      <nav id="main-nav">
        <a href="index.php"> <img src="img/logo-02.png" alt="My Portfolio" id="logo" /></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="work.php">Work</a></li>
          <li><a href="contact.php" class="current">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Section A: Contact Form -->
  <section id="contact-a" class="text-center py-3">
    <div class="container" style="background-color: <?php echo $backgroundColour ?>; color:<?php echo $foreColour ?>">
      <h2 class="section-title">Contact Me</h2>
      <div class="bottom-line"></div>
      <p class="lead">Here is how you can reach me</p>
      <!-- <form name="myform" method="POST" onsubmit="return validateform()"> -->
      <form method="POST">

        <div class="text-fields">
          <input type="text" class="text-input name-input" placeholder="Name" name="name" value="
         <?php if (isset($name)) {
                                                                                                    echo $name;
                                                                                                  } ?>" <?php if (isset($code) && $code == 1) {
                                                                                                          echo "autofocus";
                                                                                                        }  ?> />
          <p class="nameP" align="left"><?php if (isset($name_p)) {
                                          echo $name_p;
                                        } ?></p>
          <input type="text" class="text-input subject-input" placeholder="Subject" name="subject" value="<?php if (isset($subject)) {
                                                                                                            echo $subject;
                                                                                                          } ?>" <?php if (isset($code) && $code == 3) {
                                                                                                                  echo "autofocus";
                                                                                                                }  ?> />
          <p class="emailP" align="left"><?php if (isset($email_p)) {
                                            echo $email_p;
                                          } ?> </p>
          <input type="email" class="text-input email-input" placeholder="Email Address" name="email" value="<?php if (isset($email)) {
                                                                                                                echo $email;
                                                                                                              } ?>" <?php if (isset($code) && $code == 2) {
                                                                                                                      echo "autofocus";
                                                                                                                    }  ?> />
          <p class="subjectP" align="left"><?php if (isset($subject_p)) {
                                              echo $subject_p;
                                            } ?> </p>

          <input type="text" class="text-input phone-input" placeholder="Phone Number" name="phone" value="<?php if (isset($phone)) {
                                                                                                              echo $phone;
                                                                                                            } ?>" <?php if (isset($code) && $code == 4) {
                                                                                                                    echo "autofocus";
                                                                                                                  }  ?> />
          <p class="phoneP" align="left"><?php if (isset($phone_p)) {
                                            echo $phone_p;
                                          } ?> </p>
          <textarea class="text-input message-input" placeholder="Enter Message" name="message" <?php if (isset($code) && $code == 5) {
                                                                                                  echo "autofocus";
                                                                                                }  ?>><?php if (isset($message)) {
                                                                                                        echo $message;
                                                                                                      } ?></textarea>
          <p class="messageP" align="left"><?php if (isset($message_p)) {
                                              echo $message_p;
                                            } ?> </p>
          <!-- <div class="my-2">

          </div> -->
        </div>
        <button type="submit" name="submit" class="btn-dark" value="submit">Submit</button>
        </br>
        </br>
      </form>


    </div>
  </section>

  <!-- Section B: Contact Info -->
  <section id="contact-b" class="py-3 bg-dark">
    <div class="container">
      <div class="contact-info">
        <div>
          <i class="fas fa-envelope fa-2x"></i>
          <h3>Email</h3>
          <p>a.spalding55@outlook.com</p>
        </div>
        <div>
          <i class="fas fa-phone fa-2x"></i>
          <h3>Phone</h3>
          <p>(01362) 850055</p>
        </div>
        <div>
          <i class="fas fa-address-card fa-2x"></i>
          <h3>Address</h3>
          <p>75 Burgh Lane, Mattishall, Norfolk</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section C: Tagline -->
  <section id="contact-c" class="bg-main py-4">
    <div class="container">
      <h1>Let's Start Your Next Project</h1>
    </div>
  </section>

  <!-- Footer -->
  <footer id="main-footer">
    <div class="footer-content container">
      <p>Copyright &copy; 2020. All Rights Reserved</p>
      <div class="social">
        <a href="https://github.com/AndrewSpalding63" class="text-white" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/andrew-spalding-53518137/" class="text-white" target="_blank"><i class="fab fa-linkedin"></i>
      </div>
    </div>
  </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</html>

<?php
if (isset($_SESSION['status'])) {


  if ($_SESSION['status'] == 'ok') {

    echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Mail send successfully!',
        icon: 'success',
        confirmButtonText: 'Close'
        })</script>";
    session_unset();
    session_destroy();
  }


  if ($_SESSION['status'] == 'error') {
    echo "<script>Swal.fire({
        title: 'Error!',
        text: 'Something went wrong!',
        icon: 'error',
        confirmButtonText: 'Close'
        })</script>";
    session_unset();
    session_destroy();
  }
}
?>