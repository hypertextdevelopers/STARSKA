window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var c3 = document.getElementsByClassName('c3')[i];

            c3.addEventListener('click', function(){

                location.href="http://starska.co/CloudyBlue/c3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);