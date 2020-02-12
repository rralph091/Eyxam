<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.allmusic.com/rss");//XML page URL

 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <div class="font-title"> <div class="index">Games For You </div></div>

<?php
foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $image= $data->getElementsByTagName("image")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("dc:date")->item(0)->nodeValue;
   $dc = $data->getElementsByTagName("dc:creator")->item(0)->nodeValue;
   ?>

    <html>
    <head> <title> Games For You </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
                  <div class="whole-article">
                    <div class="article-title"> <u><?php echo $title;?></u></div>
                                <ul class="article-content">
                                  <li> <b> Link: </b> <br><a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a> </li>
                                  <li> <b>Creator: </b><br> <?php echo $dc ?></li>
                                 
                                </li>
                                </ul>
                                <hr>
                                <div class="article-description"> <?php echo $description; ?> </div> <br/>
                            </li>
                </div>
  <?php
 }
?>

</body>
</html>