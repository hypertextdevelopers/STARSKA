window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var l2 = document.getElementsByClassName('l2')[i];

            l2.addEventListener('click', function(){

                location.href="http://starska.co/LightRose/l2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);