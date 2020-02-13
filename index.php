  
<?php
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html>
    <head>
        <title> ENTERTAINMENT ZONE </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
                <div class="wrapper">
                        <div class="index"> <img src="img/logo.png" alt="" style="width:600px;height:300px;"> </div>
                        <div class="nav">
                          <ul class="nav-menu">
                            <li> <a href="index.php?navigation=home"> HOME </a> </li>
                            <li> <a href="index.php?navigation=Games"> GAMES </a> </li>
                            <li> <a href="index.php?navigation=Music"> MUSIC  </a> </li>
                            <li> <a href="index.php?navigation=tvshows"> TV SHOWS </a> </li>
                     <h2>DEFENSE OF THE ANCIENTS (DOTA)</h2>
                <p></p>
                <p></p>
                </div>
                     
                          </ul>
                        </div>
                        <div class="content">
                        <?php
                        switch($navigation){           
                            case 'Games':
                            require_once 'Games.php';
                            break;
                            case 'Music':
                            require_once 'music.php';
                            break;
                            case 'tvshows':
                            require_once 'tvshows.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>

                        <div id="footer">
                        <div class="index"><div style="background-color: #FFFFCC"> <div class="font-title"> RELAX AND LIVE A LITTLE! </div></div></div>
                        </div>
    </div>
    </body>
</html>
