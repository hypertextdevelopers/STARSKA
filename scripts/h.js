window.addEventListener('load', function(){

if(window.innerWidth <= 812){

    var colMain = document.getElementById('collectionMain');
    var nB2 = document.getElementById('navBar2');

    colMain.style.height = nB2.clientHeight + 'px';

}

}, false);


window.addEventListener('resize', function(){

    if(window.innerWidth <= 812){

        var colMain = document.getElementById('collectionMain');
        var nB2 = document.getElementById('navBar2');
    
        colMain.style.height = nB2.clientHeight + 'px';
    
    }

}, false);