window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var n1 = document.getElementsByClassName('n1')[i];

            n1.addEventListener('click', function(){

                location.href="http://starska.co/NightBlue/n1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);