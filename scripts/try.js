window.addEventListener('load', function(){

    var b = document.getElementById("mT1");
    var d = document.getElementsByClassName('gallery')[0];

    b.addEventListener('click', function(){

        var box = document.createElement('div');
        box.classList.add('try');
        document.body.appendChild(box);

    }, false);

}, false);