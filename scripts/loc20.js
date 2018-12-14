window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var r3 = document.getElementsByClassName('r3')[i];

            r3.addEventListener('click', function(){

                location.href="http://starska.co/RoyalYellow/r3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);