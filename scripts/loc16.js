window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var p2 = document.getElementsByClassName('p2')[i];

            p2.addEventListener('click', function(){

                location.href="http://starska.co/Poppy/p2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);