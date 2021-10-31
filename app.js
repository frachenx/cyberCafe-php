const sidebar = document.querySelector(".sidebar");
const mainContent = document.querySelector(".main-content");

document.getElementById("sidebarButton").addEventListener("click",function(){
    sidebar.classList.toggle("sidebar_small");
    mainContent.classList.toggle("main-content-large");

    var sidebarTexts = document.querySelectorAll(".sidebarText");
    console.log(sidebarTexts);
    sidebarTexts.forEach(function(sidebarText,index){
        // sidebarText.innerHTML ="";
        if(sidebarText.style.display ===  "none"){
            sidebarText.style.display = "inline";
        }else{
            sidebarText.style.display = "none";
        }
    })

    var logoText = document.querySelector(".logoText");
    if(logoText.style.display ===  "none"){
        logoText.style.display = "block";
    }else{
        logoText.style.display = "none";
    }
});

document.addEventListener("DOMContentLoaded",function(){
    var sidebarTexts = document.querySelectorAll(".sidebarText");
    console.log(sidebarTexts);
    sidebarTexts.forEach(function(sidebarText,index){
        sidebarText.style.display = "inline";
    })

    var logoText = document.querySelector(".logoText");
    logoText.style.display = "inline";
})


//DROPDOWN INSIDE SIDEBAR
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i=0; i<dropdown.length;i++){
    dropdown[i].addEventListener("click",function(){
        var dropdownContent = this.nextElementSibling;

        if (dropdownContent.style.display === "block"){
            dropdownContent.style.display = "none";
        }else{
            dropdownContent.style.display = "block";
        }
    })
}


