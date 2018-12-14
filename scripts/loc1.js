window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var c2 = document.getElementsByClassName('c2')[i];

            c2.addEventListener('click', function(){

                location.href="http://starska.co/CloudyBlue/c2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);