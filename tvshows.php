<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.techradar.com/rss/news/television");//XML page URL

 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <div class="fonttitle"> <div class="index">Games For You </div></div>

<?php
foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $image= $data->getElementsByTagName("image")->item(0)->nodeValue;
   $dc:date = $data->getElementsByTagName("dc:date")->item(0)->nodeValue;
   $dc = $data->getElementsByTagName("dc:creator")->item(0)->nodeValue;
   ?>

    <html>
    <head> <title> TV SHOWS For You </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
                  <div class="wholeart">
                    <div class="arttitle"> <u><?php echo $title;?></u></div>
                                <ul class="artcontent">
                                 <li> <a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a></li>
                                 <li> <b>Date: </b><br> <?php echo $dc:date ?><br/> </li>
                                 
                     
                                </ul>
                                <hr>
                               <li> <div class="article-description"> <?php echo $description; ?> </div> <br/>
                            </li>
                </div>
  <?php
 }
?>

</body>
</html>
