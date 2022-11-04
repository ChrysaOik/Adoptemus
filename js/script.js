var coll = document.getElementsByClassName("accessibilityBtn");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

var zoomPressed = false;
function zoomClicked(num) {
    if (!zoomPressed) {
        zoomPressed = true;
        document.getElementById("title").style.fontSize = "60px";
        document.getElementById("foot").style.fontSize = "20px";

        
        if (num == 1){
          var btn = document.getElementsByClassName("botonSlide");
          var slide = document.getElementsByClassName("slide__text");
          var i;

          for (i = 0; i < btn.length; i++) {

            btn[i].style.fontSize = "18px";
            slide[i].style.fontSize = "50px";  
          }
        } else if (num == 2){
          document.getElementById("meetus").style.fontSize = "20px";
          document.getElementById("contactBtn").style.fontSize = "20px";
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            description[i].style.fontSize = "22px";
          }
         
        }  else if(num == 3) {
          var raza = document.getElementsByClassName("raza");
          var sexo = document.getElementsByClassName("sexo");
          var edad = document.getElementsByClassName("edad");
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            raza[i].style.fontSize = "22px";
            sexo[i].style.fontSize = "22px";
            edad[i].style.fontSize = "22px";
            description[i].style.fontSize = "22px";
          }


        } else if (num == 4){
          document.getElementById("cuerpoP").style.fontSize = "25px";
          document.getElementById("submitButton").style.fontSize = "18px";
          var cont = document.getElementsByClassName("inputContacto");
          var i;

          for (i = 0; i < cont.length; i++) {
            cont[i].style.fontSize = "20px";
          } 
        
        } else if (num == 5){
          var coll = document.getElementsByClassName("collapsible");
          var cont = document.getElementsByClassName("content");
          var i;

          for (i = 0; i < coll.length; i++) {
            coll[i].style.fontSize ="18px";
            cont[i] .style.color = "18px";
          } 
        }
        
        
    } else {
        zoomPressed = false;
        document.getElementById("title").style.fontSize = "50px";
        document.getElementById("foot").style.fontSize = "16px";


        if (num == 1){
          var btn = document.getElementsByClassName("botonSlide");
          var slide = document.getElementsByClassName("slide__text");
          var i;

          for (i = 0; i < btn.length; i++) {

            btn[i].style.fontSize = "14px";
            slide[i].style.fontSize = "40px";  
          }
        } else if (num == 2) {
          document.getElementById("meetus").style.fontSize = "18px";
          document.getElementById("contactBtn").style.fontSize = "18px";
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            description[i].style.fontSize = "16px";
          }
        } else if(num == 3){
          var raza = document.getElementsByClassName("raza");
          var sexo = document.getElementsByClassName("sexo");
          var edad = document.getElementsByClassName("edad");
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            raza[i].style.fontSize = "16px";
            sexo[i].style.fontSize = "16px";
            edad[i].style.fontSize = "16px";
            description[i].style.fontSize = "16px";
          }
        } else if (num == 4 ) {
          document.getElementById("cuerpoP").style.fontSize = "20px";
          document.getElementById("submitButton").style.fontSize = "14px";
          var cont = document.getElementsByClassName("inputContacto");
          var i;

          for (i = 0; i < cont.length; i++) {
            cont[i].style.fontSize = "17px";
          } 
        } else if (num == 5) {
          var coll = document.getElementsByClassName("collapsible");
          var cont = document.getElementsByClassName("content");
          var i;

          for (i = 0; i < coll.length; i++) {
            coll[i].style.fontSize ="15px";
            cont[i] .style.color = "14px";
          } 
        } 
        
        
    }
}

var contrastPressed = false;
function contrastClicked(num) {
    if (!contrastPressed) {
        contrastPressed = true;
        document.body.style.backgroundColor = "black";
        document.body.style.color = "yellow";
        document.getElementById("title").style.color = "yellow";
        document.getElementById("foot").style.backgroundColor = "yellow";
        document.getElementById("foot").style.color = "black";
        document.getElementById("navBar").style.backgroundColor = "black";

        if (num == 1){
          var btn = document.getElementsByClassName("botonSlide");
          var slide = document.getElementsByClassName("slide__text");
          var i;

          for (i = 0; i < btn.length; i++) {

            btn[i].style.backgroundColor = "yellow";
            btn[i].style.color = "black";
            slide[i].style.color = "yellow";  
          }
        } else if (num == 2){
          document.getElementById("meetus").style.backgroundColor = "yellow";
          document.getElementById("meetus").style.color = "black";
          document.getElementById("contactBtn").style.color = "black";
        } else if (num == 4){ 
          document.getElementById("cuerpoP").style.color = "yellow";
          document.getElementById("submitButton").style.backgroundColor = "yellow";
          document.getElementById("submitButton").style.color = "black";
        } else if (num == 5){
          var coll = document.getElementsByClassName("collapsible");
          var cont = document.getElementsByClassName("content");
          var i;

          for (i = 0; i < coll.length; i++) {
            coll[i].style.backgroundColor ="yellow";
            coll[i].style.color ="black";
            cont[i].style.color = "black";
          } 
        } else if (num == 6){
          var list = document.getElementsByClassName("serLi");
          var i;

          for (i = 0; i < list.length; i++) {
            list[i].style.backgroundColor ="yellow";
          } 
          
        }  


    } else {
        contrastPressed = false;
        document.body.style.backgroundColor = "#e4e4e4";
        document.body.style.color = "rgb(39, 39, 39)";
        document.getElementById("title").style.color ="rgb(77, 0, 172)";
        document.getElementById("foot").style.backgroundColor = "rgb(77, 0, 172)";
        document.getElementById("foot").style.color = "white";
        document.getElementById("navBar").style.backgroundColor = "rgb(77, 0, 172)";  

        if (num == 1){
          var btn = document.getElementsByClassName("botonSlide");
          var slide = document.getElementsByClassName("slide__text");
          var i;

          for (i = 0; i < btn.length; i++) {

            btn[i].style.backgroundColor = "#F6F9FE";
            btn[i].style.color = "rgb(77,0,172)";
            slide[i].style.color = "#F6F9FE";  
          }
        } else if (num == 2){
          document.getElementById("meetus").style.backgroundColor = "rgb(77, 0, 172)";
          document.getElementById("meetus").style.color = "white";
          document.getElementById("contactBtn").style.color = "white";
        } else if (num == 4){ 
          document.getElementById("cuerpoP").style.color = "rgb(65,65,65)";
          document.getElementById("submitButton").style.backgroundColor = "rgb(77, 0, 172)";
          document.getElementById("submitButton").style.color = "white";
        } else if (num == 5){
          var coll = document.getElementsByClassName("collapsible");
          var cont = document.getElementsByClassName("content");
          var i;

          for (i = 0; i < coll.length; i++) {
            coll[i].style.backgroundColor ="rgb(89, 89, 89)";
            coll[i].style.color ="white";
            cont[i] .style.color = "rgb(39, 39, 39);";
          } 
        } else if (num == 6){
          var list = document.getElementsByClassName("serLi");
          var i;

          for (i = 0; i < list.length; i++) {
            list[i].style.backgroundColor ="#9c5dc361";
          } 
        }  
        
        
    }
}

function resetClicked(num) {
    zoomPressed = false;
    contrastPressed = false;
        document.body.style.backgroundColor = "#e4e4e4";
        document.body.style.color = "rgb(39, 39, 39)";
        document.getElementById("title").style.color ="rgb(77, 0, 172)";
        document.getElementById("foot").style.backgroundColor = "rgb(77, 0, 172)";
        document.getElementById("foot").style.color = "white";
        document.getElementById("navBar").style.backgroundColor = "rgb(77, 0, 172)";  

        document.getElementById("title").style.fontSize = "50px";
        document.getElementById("foot").style.fontSize = "16px";

        if (num == 1){
          var btn = document.getElementsByClassName("botonSlide");
          var slide = document.getElementsByClassName("slide__text");
          var i;

          for (i = 0; i < btn.length; i++) {
            btn[i].style.backgroundColor = "#F6F9FE";
            btn[i].style.color = "rgb(77,0,172)";
            slide[i].style.color = "#F6F9FE";  

            btn[i].style.fontSize = "14px";
            slide[i].style.fontSize = "40px";  
          }
        } else if (num == 2){
          document.getElementById("meetus").style.backgroundColor = "rgb(77, 0, 172)";
          document.getElementById("meetus").style.color = "white";
          document.getElementById("contactBtn").style.color = "white";

          document.getElementById("meetus").style.fontSize = "18px";
          document.getElementById("contactBtn").style.fontSize = "18px";
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            description[i].style.fontSize = "16px";
          }
        } else if(num ==3){
          var raza = document.getElementsByClassName("raza");
          var sexo = document.getElementsByClassName("sexo");
          var edad = document.getElementsByClassName("edad");
          var description = document.getElementsByClassName("description");
          var i;

          for (i = 0; i < description.length; i++) {

            raza[i].style.fontSize = "16px";
            sexo[i].style.fontSize = "16px";
            edad[i].style.fontSize = "16px";
            description[i].style.fontSize = "16px";
          }
        } else if (num == 4){ 
          document.getElementById("cuerpoP").style.color = "rgb(65,65,65)";
          document.getElementById("submitButton").style.backgroundColor = "rgb(77, 0, 172)";
          document.getElementById("submitButton").style.color = "white";

          document.getElementById("cuerpoP").style.fontSize = "20px";
          document.getElementById("submitButton").style.fontSize = "14px";
          var cont = document.getElementsByClassName("inputContacto");
          var i;

          for (i = 0; i < cont.length; i++) {
            cont[i].style.fontSize = "17px";
          } 
        } else if (num == 5){
          var coll = document.getElementsByClassName("collapsible");
          var cont = document.getElementsByClassName("content");
          var i;

          for (i = 0; i < coll.length; i++) {
            coll[i].style.backgroundColor ="rgb(89, 89, 89)";
            coll[i].style.color ="white";
            cont[i] .style.color = "rgb(39, 39, 39);";
            coll[i].style.fontSize ="15px";
            cont[i] .style.color = "14px";
          } 
        } else if (num == 6){
          var list = document.getElementsByClassName("serLi");
          var i;

          for (i = 0; i < list.length; i++) {
            list[i].style.backgroundColor ="#9c5dc361";
          } 
        }  

    
}