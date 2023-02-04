<!DOCTYPE html>
<html>
    <header>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="author" content="BubbleGuppies">
        <meta name="description" content="Login to ReadReceipt.">
        <meta name="keywords" content="Recipt,Receipt Scan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shared.css">
        <script src="index.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="./Assets/icons/FavIcon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </header>
    <body>
        <?php
            include_once "sharedphp/accountclass.php"
        ?>
        <section class="loginCase">
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" name="username"><br>
                <label for="username">Password</label>
                <input type="password" id="password" name="password">
                <input type="submit" class="submitButton">
            </form>
        </section>
    </body>

</html>