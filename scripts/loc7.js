window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var l1 = document.getElementsByClassName('l1')[i];

            l1.addEventListener('click', function(){

                location.href="http://starska.co/LightRose/l1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);