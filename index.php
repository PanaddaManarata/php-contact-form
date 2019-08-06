<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<section id="contactform">
        <div id="contact">
            <h3>Contact Us</h3>
            <div id="errors"></div>
                <form action="form.php" method="post">  <br>
                    <label for="firstname">First name</label>
                        <input type="text" id="nameClient" name="nameClient" placeholder="Your name.."> <br>  <br>
                    <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="email.." value="<?php echo $clientEmail;?>"><br><br>
                    <label for="message"></label>
                        <textarea name="message" id="message" cols="30" rows="10" value="<?php echo $clientMessage;?>"></textarea> <br><br>
                        <input type="submit" value="submit">
                        </form>
</div>


</section>




</body>
</html>