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
            <h1>Contact Us</h1>
            <?php $errorMessage= "fill in your name" ?>
                <form action="form.php" method="post">  <br>
                        <input type="text" name="nameClient" placeholder="Full name"> <br><br>
                        <input type="email" name="email" placeholder="Email"><br><br>
                        <input type="subject" id="subject" name="subject" placeholder="Subject"> <br><br>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea> <br><br>
                        <input type="submit" value="submit" id="submitBtn">
                </form>
        </div>
</section>

</body>
</html>