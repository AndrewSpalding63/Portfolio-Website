<?php
include('../app/conn.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    /** Validation */
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $status = "ok";

    if (empty($_POST["subject"])) {
        $_SESSION['subjectErr'] = "Subject is required";
        $status = "error";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["name"])) {
        $_SESSION['nameErr'] = "Name is required";
        $status = "error";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $_SESSION['emailErr'] = "Email is required";
        $status = "error";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailErr'] = "Invalid email format";
            $status = "error";
        }
    }

    if (empty($_POST["phone"])) {
        $_SESSION['phoneErr'] = "Phone is required";
        $status = "error";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
        $_SESSION['messageErr'] = "Message is required";
        $status = "error";
    } else {
        $message = test_input($_POST["message"]);
    }




    /** Validation */

    if ($status == "ok") {
        $to = "a.spalding55@outlook.com";
        $subject = $_POST['subject'];

        $message = "<html>
        <head>
        <title>Contact form infomrmation</title>
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
        $headers .= 'From: <contact@netmatters.com>' . "\r\n";

        $mail = mail($to, $subject, $message, $headers);


        $sql = "INSERT INTO `contact_form` (`name`, `email`, `phone`, `subject`, `message`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['subject'] . "','" . $_POST['message'] . "')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['status'] = 'ok';
            header('location: ../contact.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['status'] = 'error';
            header('location: ../contact.php');
        }
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['validateErr'] = 'yes';
        $_SESSION['old'] = $_POST;
        header('location: ../contact.php');
    }
}
