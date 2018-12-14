window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var em2 = document.getElementsByClassName('em2')[i];

            em2.addEventListener('click', function(){

                location.href="http://starska.co/EmeraldGreen/e2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);