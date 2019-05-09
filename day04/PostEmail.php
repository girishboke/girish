<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Email</title>
</head>
<body>

    <?php
        $myEmailAddress = "girish.ivision@gmail.com";
        $subject = "Email from Demo Website";

        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['emailAddress'];
        $telephone = $_POST['contact'];
        $message = $_POST['Message'];
        $header = "from: $firstname $lastname <$email>";

        mail( $myEmailAddress, $subject, $message, $header, $telephone );        
    ?>
        <p>Thank you for Sending email.</p>
    
</body>
</html>