window.onscroll = function(){myFunction()};

var sidebar = document.getElementById("sidebar");
var sticky = sidebar.offsetTop;

function myFunction(){
    if(window.pageYOffset+50 >= sticky){
        sidebar.classList.add("sidebar-fixed");
    }else{
        sidebar.classList.remove("sidebar-fixed");
    }
}

