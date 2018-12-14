window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var l3 = document.getElementsByClassName('l3')[i];

            l3.addEventListener('click', function(){

                location.href="http://starska.co/LightRose/l3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);