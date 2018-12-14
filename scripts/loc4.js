window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var em1 = document.getElementsByClassName('em1')[i];

            em1.addEventListener('click', function(){

                location.href="http://starska.co/EmeraldGreen/e1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);