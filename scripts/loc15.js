window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var p1 = document.getElementsByClassName('p1')[i];

            p1.addEventListener('click', function(){

                location.href="http://starska.co/Poppy/p1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);