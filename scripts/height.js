window.addEventListener('load', function(){

    var mainBox = document.getElementById("container");
    var randomNumber = Math.floor(Math.random()*4);
    mainBox.style.height = window.innerHeight + 'px';

    mainBox.style.backgroundImage = "url(images/STARSKAcontent/img"+randomNumber+".jpg)";

}, false);