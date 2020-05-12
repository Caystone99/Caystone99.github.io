function open_modal(){

    var a = document.getElementById("modal-form");
    var b = document.getElementById("screen-btn-hold");

    if (a.style.display == "" || a.style.display =="none"){
        a.style.display = "block";
        b.style.display = "none";
    }
    else {
        a.style.display = "none";
    }
}

function close_modal(){

    var a = document.getElementById("modal-form");
    var b = document.getElementById("screen-btn-hold");

    
    if (b.style.display == "" || b.style.display =="none"){
        b.style.display = "block";
        a.style.display = "none";
    }
    else {
        b.style.display = "none";
    }
}


function open_modal_2(){

    var a = document.getElementById("modal-form-2");
    var b = document.getElementById("screen-btn-hold");

    if (a.style.display == "" || a.style.display =="none"){
        a.style.display = "block";
        b.style.display = "none";
    }
    else {
        a.style.display = "none";
    }
}

function close_modal_2(){

    var a = document.getElementById("modal-form-2");
    var b = document.getElementById("screen-btn-hold");

    
    if (b.style.display == "" || b.style.display =="none"){
        b.style.display = "block";
        a.style.display = "none";
    }
    else {
        b.style.display = "none";
    }
}




var countDownDate = new Date("May 11, 2020 13:48:59").getTime();
var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("paper-timer").innerHTML = "Paper Starts in:  " + minutes + "m : " + seconds + "s";
    
    var v = document.getElementById("question");
    var y = document.getElementById("result");
    v.style.display = "none";
    if (distance < 0){
        document.getElementById("paper-timer").innerHTML = "Your Paper has started";
        v.style.display = "block";
        y.style.display = "none";
    }   
},1000)


var countUpTo = new Date("May 14, 2020 14:54:59").getTime();
var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countUpTo - now;
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = "TIMER:  " + minutes + "m : " + seconds + "s" + "/ 20m : 00s";
    
    var v = document.getElementById("question_item");

    if (distance < 0){
        document.getElementById("timer").innerHTML = "YOU HAVE RUN OUT OF TIME, PLEASE SUBMIT YOUR PAPER NOW";
        v.style.opacity = "0";
        
    }   
},1000)



