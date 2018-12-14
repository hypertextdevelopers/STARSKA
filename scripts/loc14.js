window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 3; i++){
            var n3 = document.getElementsByClassName('n3')[i];

            n3.addEventListener('click', function(){

                location.href="http://starska.co/NightBlue/n3Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);