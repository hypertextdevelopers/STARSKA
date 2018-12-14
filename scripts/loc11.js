window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var m2 = document.getElementsByClassName('m2')[i];

            m2.addEventListener('click', function(){

                location.href="http://starska.co/Mirrors/m2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);