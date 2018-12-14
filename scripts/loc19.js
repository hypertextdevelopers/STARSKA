window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var r2 = document.getElementsByClassName('r2')[i];

            r2.addEventListener('click', function(){

                location.href="http://starska.co/RoyalYellow/r2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);