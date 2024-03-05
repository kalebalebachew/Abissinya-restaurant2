

function valid(){
    if(document.getElementById("pn").value.length > 10 && document.getElementById("pn").value.length < 10){
    alert("Invalid Phone number")
  }
  if(document.getElementById("fd").value == "top"){
    alert("You must select one food from the list.")
  }
}
function calc(){
    let doro = 400;
    let kitfo = 350;
    let tibs = 330;
    let dulet = 250;
    let kikil = 250;
    let tegabino = 180;
    let beyaynet = 200;
    let mahberawi = 280;
    let firfir = 190;
    let tela = 70;
    let tej = 70;
    let arada = 50;
    let heinken = 45;
    let buna = 30;
    if(document.getElementById("fd").value == "doro"){
        document.getElementById("tt").value =  (document.getElementById("it").value * doro)
    }
    if(document.getElementById("fd").value == "kitfo"){
      document.getElementById("tt").value =  (document.getElementById("it").value * kitfo)
      }
      if(document.getElementById("fd").value == "tibs"){
          document.getElementById("tt").value =  (document.getElementById("it").value * tibs)
      }
      if(document.getElementById("fd").value == "dulet"){
          document.getElementById("tt").value =  (document.getElementById("it").value * dulet)
      }
      if(document.getElementById("fd").value == "kikil"){
          document.getElementById("tt").value =  (document.getElementById("it").value * kikil)
      }
      if(document.getElementById("fd").value == "tegabino"){
          document.getElementById("tt").value =  (document.getElementById("it").value * tegabino)
      }
      if(document.getElementById("fd").value == "beyaynet"){
        document.getElementById("tt").value =  (document.getElementById("it").value * beyaynet)
    }
    if(document.getElementById("fd").value == "mahberawi"){
      document.getElementById("tt").value =  (document.getElementById("it").value * mahberawi)
      }
      if(document.getElementById("fd").value == "firfir"){
          document.getElementById("tt").value =  (document.getElementById("it").value * firfir)
      }
      if(document.getElementById("fd").value == "tela"){
          document.getElementById("tt").value =  (document.getElementById("it").value * tela)
      }
      if(document.getElementById("fd").value == "tej"){
          document.getElementById("tt").value =  (document.getElementById("it").value * tej)
      }
      if(document.getElementById("fd").value == "arada"){
          document.getElementById("tt").value =  (document.getElementById("it").value * arada)
      }
      if(document.getElementById("fd").value == "heinken"){
        document.getElementById("tt").value =  (document.getElementById("it").value * heinken)
    }
    if(document.getElementById("fd").value == "buna"){
        document.getElementById("tt").value =  (document.getElementById("it").value * buna)
    }
      
}$(document).ready(function() {
    
    var currentSlide = 1;
  
    
    var numSlides = $('.card').length;
  
   
    $('#next').click(function() {
      if (currentSlide < numSlides) {
        currentSlide++;
        $('.cards-container').animate({left: '-=440'}, {duration: 100});
      }
    });
  
    $('#prev').click(function() {
      if (currentSlide > 1) {
        currentSlide--;
        $('.cards-container').animate({left: '+=440'}, {duration: 100});
      }
    });
  });
  $(document).ready(function() {
    
    var currentSlide = 1;
  
   
    var numSlides = $('.card2').length;
  
    $('#next2').click(function() {
      if (currentSlide < numSlides) {
        currentSlide++;
        $('.cards-container2').animate({left: '-=440'}, {duration: 100});
      }
    });
  
    $('#prev2').click(function() {
      if (currentSlide > 1) {
        currentSlide--;
        $('.cards-container2').animate({left: '+=440'}, {duration: 100});
      }
    });
  });
  
 
  
