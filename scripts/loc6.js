window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var em3 = document.getElementsByClassName('em3')[i];

            em3.addEventListener('click', function(){

                location.href="http://starska.co/EmeraldGreen/e3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);