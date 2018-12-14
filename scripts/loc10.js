window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var m1 = document.getElementsByClassName('m1')[i];

            m1.addEventListener('click', function(){

                location.href="http://starska.co/Mirrors/m1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);