window.addEventListener('load', function(){

    if(this.window.innerWidth<= 1199){

        for(var i = 0; i <= 2; i++){
            var n2 = document.getElementsByClassName('n2')[i];

            n2.addEventListener('click', function(){

                location.href="http://starska.co/NightBlue/n2Gallery.php?galleryContentLoaded";

            }, false);
        }
    }

}, false);