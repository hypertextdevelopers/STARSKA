window.addEventListener('load', function(){

    var pb1 = document.getElementById("p1img1");
    var pb2 = document.getElementById("p1img2");
    var pb3 = document.getElementById("p1img3");
    var pb4 = document.getElementById("p1img4");

    var pimg1 = document.getElementById("mT1");
    var pimg2 = document.getElementById("mT2");
    var pimg3 = document.getElementById("mT3");
    var pimg4 = document.getElementById("mT4");

    pimg1.addEventListener('mouseover', function(){

        pb1.style.opacity = 1;
        pb2.style.opacity = 0;
        pb3.style.opacity = 0;
        pb4.style.opacity = 0;

    }, false);

    // pimg1.addEventListener('mouseout', function(){

    //     pb1.style.opacity = 1;
    //     pb2.style.opacity = 0;
    //     pb3.style.opacity = 0;
    //     pb4.style.opacity = 0;

    // }, false);

    pimg2.addEventListener('mouseover', function(){

        pb1.style.opacity = 0;
        pb2.style.opacity = 1;
        pb3.style.opacity = 0;
        pb4.style.opacity = 0;

    }, false);

    // pimg2.addEventListener('mouseout', function(){

    //     pb1.style.opacity = 0;
    //     pb2.style.opacity = 1;
    //     pb3.style.opacity = 0;
    //     pb4.style.opacity = 0;

    // }, false);

    pimg3.addEventListener('mouseover', function(){

        pb1.style.opacity = 0;
        pb2.style.opacity = 0;
        pb3.style.opacity = 1;
        pb4.style.opacity = 0;

    }, false);

    // pimg3.addEventListener('mouseout', function(){

    //     pb1.style.opacity = 0;
    //     pb2.style.opacity = 0;
    //     pb3.style.opacity = 1;
    //     pb4.style.opacity = 0;

    // }, false);

    pimg4.addEventListener('mouseover', function(){

        pb1.style.opacity = 0;
        pb2.style.opacity = 0;
        pb3.style.opacity = 0;
        pb4.style.opacity = 1;

    }, false);

    // pimg4.addEventListener('mouseout', function(){

    //     pb1.style.opacity = 0;
    //     pb2.style.opacity = 0;
    //     pb3.style.opacity = 0;
    //     pb4.style.opacity = 1;

    // }, false);

}, false);