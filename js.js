// """
// @brief: je suis une fonction qui vérifie si toutes les entrées que l'utilisateur met dans le formulaire de contact sont valides,
// vérifie l'e-mail et vérifie qu'il n'y a pas de messages vides
// """
document.getElementById("envoyer").addEventListener("click", function(event){
    var erreur;
    var inputs = document.forms["contacter"];
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var email = inputs["email"];
    var msg = inputs["textarea"];
    // """
    // vérifie l'e-mail
    // """
    if ((email.value.match(regex) == null)) {
      email.classList.add("invalid");
      erreur = "email invalide"
    }
    email.addEventListener('input', function() {
        if ((email.value.match(regex) == null)) {
            email.classList.add("invalid");
            erreur = "email invalide"
        } 
        else {
            email.classList.remove("invalid");
            erreur = ""
        }
    })
    if (msg.value.length == 0) {
        msg.classList.add("invalid");
        erreur = "message trop court"
    }
    // """
    // vérifie qu'il n'y a pas de messages vides
    // """
    msg.addEventListener('input', function() {
        if (msg.value.length == 0) {
            msg.classList.add("invalid");
            erreur = "message trop court"
        } else {
            msg.classList.remove("invalid");
            erreur = ""
        }
    })
    // """
    // mettre le message d'erreur dans un paramètre qui sera appelé en html en utilisant l'id 
    // """
    if (erreur) {
        event.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});


// """
// @brief:Je suis une fonction qui tape la description du jeu
// rien de spécial, juste pour l'esthétique
// 
var i = 0,
text;
text = "Jeu vidéo dérivé du jeu “Trivial Pursuit” et s’inspire également du « Burger Quiz »"

function typing() 
{
    if (i < text.length) 
    {
        document.getElementById("titlebine").innerHTML += text.charAt(i);
        i++;
    }
    setTimeout(typing, 20);
}

typing();

var btnTop = document.getElementById("btnScrollToTop"); 

btnTop.addEventListener("click" ,function (){
    //window.scrollTo(0,0);
    window.scrollTo
    ({
        top : 0,
        left : 0,
        behavior : "smooth",
    })
});


  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
    }
  }

  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
    }

  }

  function myFunction1() {
      var dots = document.getElementById("dots1");
      var moreText = document.getElementById("more1");
      var btnText = document.getElementById("myBtn1");

      if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
      } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
      }
  }


  var dice = document.getElementById('dice');
  var min = 1;
  var max = 24;
  dice.onclick = function()
  {
      var xRand = getRandom(max,min);
      var yRand = getRandom(max,min);
      dice.style.webkitTransform = 'rotateX('+xRand+'deg)rotateY('+yRand+'deg)';
      dice.style.transform = 'rotateX('+xRand+'deg) rotateY('+yRand+'deg)';
  }
  function getRandom(max,min)
  {
      return (Math.floor(Math.random() * (max-min)) + min) * 90
  }






  // Modal script
  (function($) {
      $(function(){
  
      var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
  
          $('a[data-modal-id]').click(function(e) {
              e.preventDefault();
              $("body").append(appendthis);
              $(".modal-overlay").fadeTo(500, 0.9);
              //$(".js-modalbox").fadeIn(500);
              var modalBox = $(this).attr('data-modal-id');
              $('#'+modalBox).fadeIn($(this).data());
              // Show a specific class when opened
              $('#'+modalBox).addClass('opened');
        if (($('.modal-box.opened').find('video').attr('autoplay') === 'autoplay')) {
          $('.modal-box.opened').find('video').get(0).play();
        }
          });
  
      $(".js-modal-close, .modal-overlay").click(function() {
          $(".modal-box, .modal-overlay").fadeOut(500, function() {
              $(".modal-overlay").remove();
          });
          // Remove the specific class
          $('.modal-box').removeClass('opened');
          // Stop the video from playing
          $('.modal-box').find('video').each(function() {
                  $(this).get(0).pause();
          });
      });
  
      $(window).resize(function() {
          $(".modal-box").css({
              //top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
              //left: ($(window).width() - $(".modal-box").outerWidth()) / 2
  
              top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
              left: ($(window).width() - $(".modal-box").outerWidth()) / 2
  
          });
      });
  
      $(window).resize();
  
      });
  })(jQuery);