<!DOCTYPE html>
<html>
    <header>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="author" content="BubbleGuppies">
        <meta name="description" content="Login to ReadReceipt.">
        <meta name="keywords" content="Recipt,Receipt Scan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shared.css">
        <link rel="stylesheet" href="css/home.css">
        <script src="javascript/shared.js"></script>
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
    </header>
    <body>
        <?php
            include_once "sharedphp/accountclass.php";
            include_once "sharedphp/header.php"
        ?>
        <div style="height: 65px;"></div>
        <section class="homeContainer">
          <div class="leftContainer">
            
            <div id="drop-area">
            <form class="my-form">
                <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
                <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                <label class="button" for="fileElem">Select some files</label>
                
              </form>
              <progress id="progress-bar" max=100 value=0></progress>
              <div id="gallery"></div>
            </div>
          </div>
          <div class="rightContainer"></div>
        </section>
        
    </body>

</html>