let count = '0' // compteur de point 
let zone = '800' //zone de jeux
var noburgerclick = 'red' //si la cible n'est pas touche 
var burgerclick = 'green' //si la cible est touche

  $(window).click(function()
  {
    var burgercolor = noburgerclick 
    var burgericon = '<i class="fa-solid fa-burger" style="color: '+ burgercolor + ';"></i>'
 
    count--
    $("#count").html(count);
    $("#countlast").html('-1');
    $("#cible").html(burgericon);
    $('#count').css("color", 'red');
    $('#countlast').css("color", 'red');

    var top = Math.floor((Math.random() * zone) + 1);
    var left = Math.floor((Math.random() * zone) + 1);
    var right = Math.floor((Math.random() * zone) + 1);
    var bot = Math.floor((Math.random() * zone) + 1);
    $('#play').css({'position' : 'absolute', "top" : top , "bottom" : bot , 'right' : right , "left" : left});

  });
  $('#cible').click(function(event)
  {
    var burgercolor = burgerclick
    var burgericon = '<i class="fa-solid fa-burger" style="color: '+ burgercolor + ';"></i>'

    count++

    $("#count").html(count);
    $('#count').css("color", 'green');
    $("#countlast").html('+1');
    $("#cible").html(burgericon);
    $('#countlast').css("color", 'green');

    var top = Math.floor((Math.random() * zone) + 1);
    var left = Math.floor((Math.random() * zone) + 1);
    var right = Math.floor((Math.random() * zone) + 1);
    var bot = Math.floor((Math.random() * zone) + 1);
    $('#play').css({"height" : '15px',"witdh" : '15px','size' : '25px','position' : 'absolute', "top" : top , "bot" : bot , 'right' : right , "left" : left});

   event.stopPropagation();
  });


  const addBtn = document.getElementById("cible");
  const particleBox = document.getElementById("particle-area");
  
  function createParticle(parentElement = document.body) {
    const particle = document.createElement("div");
    particle.classList.add("particle");
    particle.innerHTML = "<h1>click</h1>";
    if (parentElement) {
      parentElement.append(particle);
    }
    return particle;
  }
  
  addBtn.addEventListener("click", function() {
    const particle = createParticle(particleBox);
    particle.addEventListener("animationend", function() {
      particle.remove();
    });
  });


 