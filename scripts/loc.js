window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var c1 = document.getElementsByClassName('c1')[i];

            c1.addEventListener('click', function(){

                location.href="http://starska.co/CloudyBlue/c1Gallery.php?galleryContentLoaded";

            }, false);
        }


    }


}, false);

