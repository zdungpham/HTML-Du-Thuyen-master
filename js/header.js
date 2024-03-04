var a = document.getElementById("head-1");
function fixedHeader(){
    if(window.scrollY > 100){
        var b = Math.min((window.scrollY - 100) / 600, 0.4);
        b = Math.min(Math.max(b, 0), 0.4);
        a.style.transition = "background 0.5s ease";
        a.style.background = "rgba(32, 32, 32, " + (1 - b) + ")";
    }else{
        a.style.transition = "background 0s";
        a.style.background = "rgb(32, 32, 32)";
    }
}

window.onscroll = function(){
    fixedHeader();
};

var b = document.getElementById("hidden-bar");
function openHeader(){
    b.style.width = "50%";
}
function closeHeader(){
    b.style.width = "0%";
}