window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var p3 = document.getElementsByClassName('p3')[i];

            p3.addEventListener('click', function(){

                location.href="http://starska.co/Poppy/p3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);