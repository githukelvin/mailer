<?php

declare(strict_types=1);
$root = dirname(__DIR__).DIRECTORY_SEPARATOR;
include $root."view/function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>MAILER</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" placeholder="Enter your subject" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Enter your message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send" name="send">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script src="../js/index.js"></script>