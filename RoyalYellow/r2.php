<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../styles/large.css" rel="stylesheet" />
    <link href="../styles/small.css" rel="stylesheet" />
    <link href="../styles/medium.css" rel="stylesheet" />
    <meta name="description" content="STARSKA | The official website of high quality leather goods company STARSKA." />
      <meta name="keywords" content="high quality bag,luxury bag,jewelery bags,luxury brand,leather craftsmanship,leather craft,luxury leather goods,bag brand poland,leather goods poland,high quality leather accessories,high quality leather bags,luxury leather goods for woman,the best leather bag,designer bag,designer leather accessories,krakow bag brand,zuza stepien bags,women's bags,bags made in Italy,bags made in Krakow,wave bag ,drop bag,jewel strap,hoop strap,add a strap,modern bags,designed in Krakow ,leather artisans,luxury craft,high quality craft,high end craft,contemporary bags,mirror mirror,vanity mirror,changable strap bag,Starska bag,starska art,starska design,high quality leather goods,avantgarde bag,best seller,the best bag brand,minimalist bag,elegant bag,timeless accessories,longevity ,durability,prestige" />
      <meta name="author" content="ht-dev" />
      <link rel="icon" href="../si.png" type="image/x-icon" />
      <link rel="shortcut icon" href="../si.png" type="image/x-icon" />
    <script src="../scripts/gallery1.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126119902-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126119902-1');
</script>

    <script src="../scripts/h.js"></script>
    <script src="../scripts/loc19.js"></script>
    <title>STARSKA | Wave II Royal Yellow</title>
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

        <div class="gallery">
        
            <div class="galleryIn">

                <div class="galleryInLeft">
                
                <img id="p1img1"src="../images/RoyalYellow/Wave II Old Royal Yellow - front.jpg" />
                <img id="p1img2"src="../images/RoyalYellow/Wave II Old Royal Yellow - side.jpg" />
                <img id="p1img3"src="../images/RoyalYellow/Jewel Strap Old Royal Yellow.jpg" />

                </div>

                <div class="galleryInRight">
                
                   <div class="smImg r2" id="mT1"><img src="../images/RoyalYellow/Wave II Old Royal Yellow - front.jpg" /></div>
                    <div class="smImg r2" id="mT2"><img src="../images/RoyalYellow/Wave II Old Royal Yellow - side.jpg" /></div>
                   <div class="smImg r2" id="mT3"><img src="../images/RoyalYellow/Jewel Strap Old Royal Yellow.jpg" /></div>
                    <div class="smImg" id="op"><img src="../images/RoyalYellow/Jewel Strap Old Royal Yellow.jpg" /></div>

                </div>
            
            </div>

               <div id="productRight">

<p>WAVE II</p>
<p>020.001 Old Royal Yellow</p><br/>
<p>Hand, shoulder and crossbody carry option<br/>
Removable and adjustable straps<br/>
Snaphooks with pleated logo<br/>
Gold metal hardware<br/>
Flap closure with magnetic button<br/> 
Flat pocket inside<br/>
Calf leather<br/>
Suede lining in cream color</p><br />
<p>12.5H x 13.5W x 8D</p><br />
<p>More Colors</p>
  <a href="../EmeraldGreen/e1.php"><p>020.004 Emmerald Green</p></a>
  <a href="../Poppy/p3.php"><p>020.002 Red Poppie</p></a>
  <a href="../NightBlue/n1.php"><p>020.003 Night Blue</p></a>
  <a href="../CloudyBlue/c3.php"><p>020.005 Cloudy Blue</p></a> 
  <a href="../LightRose/l2.php"><p>020.006 Light Rose</p></a>

  <?php

if(isset($_GET['saved'])){

    echo "<br/><br /><p>Thank you!</p>";

}else if(isset($_GET['error'])){

    echo '<form id="noticeBox"  action="r2Mail.php" method="POST">

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
    echo '<form id="noticeBox"  action="r2Mail.php" method="POST">

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