window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var r1 = document.getElementsByClassName('r1')[i];

            r1.addEventListener('click', function(){

                location.href="http://starska.co/RoyalYellow/r1Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);