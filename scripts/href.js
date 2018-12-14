window.addEventListener('load', function(){

    var hrefDiv = document.getElementById('container');
    var hrefLogo = document.getElementById('navBarTop');
    

    
    if(window.innerWidth <= 812){
        
        hrefDiv.addEventListener('click', function(){

            location.href="http://starska.co/collection.php?collectionLoaded";

        }, false);

        hrefLogo.addEventListener('click', function(){

            location.href="http://starska.co/collection.php?collectionLoaded";

        }, false);

    }

    if(window.innerWidth >= 812){

        hrefLogo.addEventListener('click', function(){

            location.href="http://starska.co/index.php?homepageloaded";

        }, false);

    }

   

}, false);