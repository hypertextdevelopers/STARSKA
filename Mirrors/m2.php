<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../styles/large.css" rel="stylesheet" />
    <link href="../styles/medium.css" rel="stylesheet" />
    <link href="../styles/small.css" rel="stylesheet" />
    <meta name="description" content="STARSKA | The official website of high quality leather goods company STARSKA." />
      <meta name="keywords" content="high quality bag,luxury bag,jewelery bags,luxury brand,leather craftsmanship,leather craft,luxury leather goods,bag brand poland,leather goods poland,high quality leather accessories,high quality leather bags,luxury leather goods for woman,the best leather bag,designer bag,designer leather accessories,krakow bag brand,zuza stepien bags,women's bags,bags made in Italy,bags made in Krakow,wave bag ,drop bag,jewel strap,hoop strap,add a strap,modern bags,designed in Krakow ,leather artisans,luxury craft,high quality craft,high end craft,contemporary bags,mirror mirror,vanity mirror,changable strap bag,Starska bag,starska art,starska design,high quality leather goods,avantgarde bag,best seller,the best bag brand,minimalist bag,elegant bag,timeless accessories,longevity ,durability,prestige" />
      <meta name="author" content="ht-dev" />
      <link rel="icon" href="../si.png" type="image/x-icon" />
      <link rel="shortcut icon" href="../si.png" type="image/x-icon" />
    <script src="../scripts/gallery1.js"></script>
    <script src="../scripts/h.js"></script>
    <script src="../scripts/loc11.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126119902-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126119902-1');
</script>

    <title>STARSKA | Mirror Mirror II</title>
</head>
<body>
    
    <div id="collectionContainer">

        <div id="collectionMain">

            <div id="navBar2">

                <div id="navBarTop2">

                    <a href="../index.php?homepageloaded"><img src="../images/logo/STARSKA CZARNE DOCIETE.png" /></a>

                </div>

                <div id="navBarBottom2">

                    <ul id="navBarBottomUl3">

                        <a href="../collection.php?entirecollectionloaded"><li id="nB1">Collections</li></a>
                        <li class="vanish">Faceboooo</li>
                        <a href="../products.php?productsloaded"><li id="nB2">Products</li></a>
                        <li class="vanish">Instagrammmmmmmmni</li>
                        <a href="../care.php?carepageloaded"><li id="nB3">Care</li></a>
                        <li class="vanish">Soreeeeeemnmmmmnnnnnnnnnnmm</li>
                        <a href="../about.php?aboutpageloaded"><li id="nB4">About</li></a>

                    </ul>

                    <ul id="navBarBottomUl4">

                        <a href="../newsletter.php?newletterLoaded"><li id="nB5">Newsletter</li></a>
                        <li class="vanish">Facebook</li>
                        <li class="vanish">Produciiimmmmm</li>
                        <a href="https://www.instagram.com/starska_/" target="_blank"><li id="nB6">Instagram</li></a>
                        <li class="vanish" id="back2">Careeeeeeeeeeeeemmnm</li>
                        <a href="../store.php?storePageLoaded"><li id="nB7">Store</li></a>
                        <li class="vanish" id="g">Carnennnnmnnm</li>
                        <a href="../contact.php?contactpageloaded"><li id="nB8">Contact</li></a>

                    </ul>
                </div>

            </div>

        </div>

        <div class="gallery" id="b">
        
            <div class="galleryIn">

                <div class="galleryInLeft">
                
                <img id="p1img1"src="../images/Mirrors/Mirror Mirror II.jpg" />
                <img id="p1img2"src="../images/Mirrors/Mirror Mirror II (1).jpg" />

                </div>

                <div class="galleryInRight">
                
                    <div class="smImg m2" id="mT1"><img src="../images/Mirrors/Mirror Mirror II.jpg" /></div>
                    <div class="smImg m2" id="mT2"><img src="../images/Mirrors/Mirror Mirror II (1).jpg" /></div>
                    <div class="smImg" id="op"><img src="../images/Mirrors/Mirror Mirror II.jpg" /></div>
                    <div class="smImg" id="op"><img src="../images/Mirrors/Mirror Mirror II.jpg" /></div>

                </div>
            
            </div>

               <div id="t2" class="up">

<p>Mirror Mirror II</p>
<p>040.008 Red Poppie / Cloudy Blue / Light Rose</p><br />
<p>Leather patchwork<br /> 
Vanity mirror<br />
Gold metal attachment in bagle shape<br />
Calf leather<br />
Can be attached to bag </p><br />
<p>7.5W x 0.5D</p>

 <?php

if(isset($_GET['saved'])){

    echo "<br/><br /><p>Thank you!</p>";

}else if(isset($_GET['error'])){

    echo '<form id="noticeBox"  action="m2Mail.php" method="POST">

    <div id="top">
    
        <p>Notify me while this product is available</p>
    
    </div>

    <div id="bottom" style="border: 1px solid #ff4d4d;">
    
        <div id="left">
        
            <input name="mailP" type="email" placeholder="Email" />
        
        </div>

        <input id="right" type="submit" value="OK"/>

    
</div>

</form>';

}else{
    echo '<form id="noticeBox"  action="m2Mail.php" method="POST">

    <div id="top">
    
        <p>Notify me while this product is available</p>
    
    </div>

    <div id="bottom">
    
        <div id="left">
        
            <input name="mailP" type="email" placeholder="Email" />
        
        </div>

        <input id="right" type="submit" value="OK"/>

    
</div>

</form>';
}

?>

</div>

        </div>

      
        
    </div>

</body>
</html>