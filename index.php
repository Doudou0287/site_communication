
<!DOCTYPE html>
<html>
    <head>
        <title> Choucroute Pursuit</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" style="width: 200PX;" type="image/png" href="./img/logo.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <meta charset="UTF-8">
        <meta name="description" content="Choucroute Pursuit">
        <meta name="keywords" content="videogame, games,  jeux, Choucroute, Pursuit, Choucroute Pursuit ">
        <meta name="author" content="Sundus">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light ">
            <header> <a  href="#"><img class="img" src="./img/logo.png" alt="logo"></a></img></header>
                <!-- <header><img src="./img/logo.png" alt="logo"></img></header> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#presentation">Présentation </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#regles" >Règles  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#qui_sommes_nous" > Qui sommes nous ? </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" > Contactez-Nous </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <button id="btnScrollToTop">
          <i class="fa  fa-arrow-up arrow "></i>
        </button>
        

        <div class="section1" id="accueil">
          <!-- <div class="container"> -->
            <!-- <div class="row"> -->
              <!-- <section> -->
                
                <h1 class="logotext" alt="logotext">Choucroute pursuit</h1>
                

                <p id="titlebine" class="text-center"></p>
                <div class="column content">
                  <!-- <h1 class="logotext" alt="logotext">Choucroute pursuit</h1> -->
                  <a class="js-open-modal btn" href="#" data-modal-id="popup1"> Téléchargez le jeu</a>
                  <a class="js-open-modal btn" href="#" data-modal-id="popup2"> Téléchargez l'appli</a> 
                </div>

                <div id="popup1" class="modal-box">
                  <header> 
                    <a href="#" class="js-modal-close ferm">×</a>
                  </header>
                  
                  <div class="modal-body">
                    <img class="image" src="img/coming_soon.png" alt="Coming soon">
                  </div>
                  <footer> 
                      <a href="#" class="btn1 btn-small js-modal-close">Close</a> 
                  </footer>
                </div>
                <div id="popup2" class="modal-box">
                  <header> 
                    <a href="#" class="js-modal-close ferm">×</a>                      
                  </header>
                    <div class="modal-body">
                       <img class="image" src="img/coming_soon.png" alt="Coming soon">  
                    </div>
                    <footer> 
                        <a href="#" class="btn1 btn-small js-modal-close">Close</a> 
                    </footer>
                </div>
            



                <div class="column menu" id="bo">

                  <div class="col-sm-6 text-center">

                    <div class="container_body">

                      <div class="dice1" id="dice">
                        <div class="front">
                            <span class="dot dot1"></span>
                        </div>
                        <div class="back">
                            <span class="dot dot1"></span>
                            <span class="dot dot2"></span>
                        </div>
                        <div class="right">
                            <span class="dot dot1"></span>
                            <span class="dot dot2"></span>
                            <span class="dot dot3"></span>
                        </div>
                        <div class="left">
                            <span class="dot dot1"></span>
                            <span class="dot dot2"></span>
                            <span class="dot dot3"></span>
                            <span class="dot dot4"></span>
                        </div>
                        <div class="top">
                            <span class="dot dot1"></span>
                            <span class="dot dot2"></span>
                            <span class="dot dot3"></span>
                            <span class="dot dot4"></span>
                            <span class="dot dot5"></span>

                        </div>
                        <div class="bottom">
                            <span class="dot dot1"></span>
                            <span class="dot dot2"></span>
                            <span class="dot dot3"></span>
                            <span class="dot dot4"></span>
                            <span class="dot dot5"></span>
                            <span class="dot dot6"></span>
                        </div>
                      </div>
                    <!-- </div> -->
                      <div class="board">
                          <div class="layer"></div>
                      </div>
                    </div>
                  </div>
                </div>

              <!-- </section> -->
            <!-- </div> -->
          <!-- </div> -->
        </div>

        <div class="wave-container2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF" fill-opacity="1" d="M0,192L30,213.3C60,235,120,277,180,288C240,299,300,277,360,240C420,203,480,149,540,122.7C600,96,660,96,720,117.3C780,139,840,181,900,208C960,235,1020,245,1080,224C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        </div>

        <section id="presentation">
          <div class="container">
            <div class="row">

              <div class="col-md-6">
                <p class="title"> Choucroute Pursuit   : Présentation    </p>
                <p class="parag">
                  Choucroute Pursuit est un jeu de société dont la progression dépend de la capacité du joueur à répondre à des questions de culture générale.
                  
                    Le plateau consiste en cases arrangées sous la forme d'une roue, avec cinq « rayons ». Les cases sont colorées dans une distribution systématique avec une case dédiée à chacune des cinq couleurs au centre, où les joueurs commencent, sur le début du rayon.
                    Le jeu continue jusqu'à ce que l'un des participants collectionne une part des cinq couleurs et place son pion sur la case centrale. Si le joueur échoue, il doit continuer pour replacer son pion sur la case spéciale et ainsi de suite.
                    Une très large variété de questions est disponible pour le jeu. Chaque couleur correspond à un thème.
                    Ce jeu est dérivé du jeu à succès de la société Hasbro “Trivial Pursuit” et s’inspire également du « Burger Quiz », jeu télévisé d'Alain Chabat.
                
                </p>
                
                <!-- <button class="buttons button" onclick="myFunction()" id="myBtn">Read more</button> -->

                
              </div>
              <div class="col-md-6 text-center">
                <img src="img/logo.png" alt="illustration" >
              </div>


            </div>
          </div>
        </section>
          <div class="wave-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L40,90.7C80,117,160,171,240,192C320,213,400,203,480,186.7C560,171,640,149,720,122.7C800,96,880,64,960,80C1040,96,1120,160,1200,181.3C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
          </div>
          <section id="regles">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p class="title"> Choucroute Pursuit   : Règles      </p>
                  <p class="parag">
                    Retrouvez ici les règles du jeu “Choucroute Pursuit”.
                    
                      <br>
                      Ce jeu basé sur les connaissances générales vous fera passer un excellent moment et vous apprendrez peut-être même des choses !
                      Pour jouer, il faut être entre 2 et 4 personnes. Le but du jeu est d’être le premier à posséder tous les éléments de sa choucroute en répondant correctement aux questions.

                      Catégories des éléments :
                      <br>
                      Bleu :  Histoire - Choux
                      <br>
                      Rose : Sport - Knack
                      <br>
                      Jaune : Sciences & Nature - Pomme de Terre<br>
                      Violet : Art & Culture - Lard<br>
                      Vert : Géographie - Vin Blanc<br>
                      Orange : L'Addition ! (Questions centrales)<br>
                      <br>
                    

                  </p>
                  <!-- <button class="buttons button1" onclick="myFunction1()" id="myBtn1">Read more</button> -->
                  <div id="hideme1" class="col-md-6 image1">
                    <!-- <img src="img/logo.png" alt="illustration" width="800px" height="1900px"> -->
                  </div>
                  <p class="title2"> Comment gagner au Choucroute Pursuit :      </p>
                  <p class="parag">
                    Lorsqu’un des joueurs a en sa possession les 5 éléments différents,
                    <br>
                    il doit remonter vers la case au centre du jeu pour terminer la partie. Quand le joueur se situe sur cette case, une question de la dernière catégorie lui ai posé. Si vous répondez correctement, félicitations, vous venez de gagner ! Sinon vous passez votre tour et attendez le prochain.
                    <br>
                    
                    <br>
                    
                  </p>
                  <!-- <button class="buttons button3" onclick="myFunction3()" id="myBtn3">Read more</button> -->
                </div>

                <div class="col-md-6">

                  <div id="hideme2" class="col-md-6 image1">
                    <!-- <img src="img/logo.png" alt="illustration" width="800px" height="1900px"> -->
                  </div>
                  <p class="title1">Commencer une partie de Choucroute Pursuit : </p>
                  <p class="parag">
                    Tout d’abord, chaque joueur commence la partie au centre du plateau.
                     
                    <br>
                      Le premier joueur lance le dé et avance son pion d’autant de cases dans la direction qu’il souhaite. Il devra répondre à une question de thème correspondant à la couleur sur lequel se trouve son pion.
                    Si le joueur répond correctement, il peut rejouer. Sinon, il passe son tour. Dans le cas où son pion se trouve sur l’une des 6 cases « Cuisine » et qu’il répond correctement, il peut insérer dans son pion l’élément correspondant et rejouer.
                    <br>
                    
                    <div id="hideme3" class="col-md-6 image1">
                      <!-- <img src="img/logo.png" alt="illustration" width="800px" height="1900px"> -->
                    </div>
                    <br>
                  </p>
                  <!-- <button class="buttons button2" onclick="myFunction2()" id="myBtn2">Read more</button> -->
                </div>
              </div>
            </div>
          </section>
          <div class="wave-container4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF" fill-opacity="1" d="M0,192L30,213.3C60,235,120,277,180,288C240,299,300,277,360,240C420,203,480,149,540,122.7C600,96,660,96,720,117.3C780,139,840,181,900,208C960,235,1020,245,1080,224C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
          </div>

       <section class="section3" id="qui_sommes_nous">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                  <li data-target="#demo" data-slide-to="4"></li>
                  <li data-target="#demo" data-slide-to="5"></li>
                  <li data-target="#demo" data-slide-to="6"></li>
                  <li data-target="#demo" data-slide-to="7"></li>
                  <li data-target="#demo" data-slide-to="8"></li>
                  <li data-target="#demo" data-slide-to="9"></li>

                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/dices.png" alt="me" width="500" height="500"  >
                    <div class="carousel-caption">
                      <h3>Victor Beaucourt</h3>
                      <p>Je suis Victor Beaucourt, actuellement en 3ème année d’informatique à l’Université de Strasbourg.
                        Chef de projet du Choucroute Pursuit, je suis responsable du management de l’équipe et des relations clients. J’espère que notre jeu saura vous faire passer un agréable moment !

                      </p>
                      <a href="https://www.linkedin.com/in/victor-beaucourt-8126a01a3" target="_blank" class="fa fa-linkedin"></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/pepper.png" alt="me" width="500" height="500"  >
                    <div class="carousel-caption">
                      <h3>Antoine Berger</h3>
                      <p>Antoine Berger, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Front-end.
                      </p>
          
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/bacon.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Corentin Beaufils</h3>
                      <p>Corentin Beaufils, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Réseau.</p>
                    </div>   


                  </div>
                  <div class="carousel-item">
                    <img src="./img/serving-dish.png" alt="lui2" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Evan Dubois</h3>

                      <p>Evan Dubois, actuellement en 3ème année d’informatique à l’Université de Strasbourg.
                        Je travaille principalement sur la partie back-end, en particulier sur l’interaction back-end et base de données.
                        </p>
                        <a href="https://www.linkedin.com/in/evan-dubois-6a43a71b8/ " target="_blank" class="fa fa-linkedin"></a>
                    </div>   

                  </div>
                  <div class="carousel-item">
                    <img src="./img/champagne.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Rahma Albekbashy</h3>

                      <p>Rahma Albekbashy, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Front-end. </p>
                    </div>   

                  </div>
                  <div class="carousel-item">
                    <img src="./img/sausage.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Thibault Brard</h3>
                      <p>Thibault Brard, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Back-end</p>
                    </div>   

                  </div>
                  <div class="carousel-item">
                    <img src="./img/potato.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Florian Eckert</h3>
                      <p>Florian Eckert, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Front-end</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="./img/cabbage.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Mohamed Benzahia</h3>
                      <p>Mohamed Benzahia, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Réseau</p>
                    </div>   

                  </div>
                  <div class="carousel-item">
                    <img src="./img/mustard.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Robin Caron</h3>
                      <p>Robin Caron, actuellement en 3ème année d’informatique à l’Université de Strasbourg. Back-end</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="./img/salt.png" alt="lui" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Sundus Al kebsi</h3>
                      <p>Sundus alkebsi, actuellement en 3ème année d’informatique à l’Université de Strasbourg.
                        Je suis responsable de la Base De Données du jeu, en plus des aspects communication de ce projet, donc concepteur/développeur de ce site.
                        </p>
                      <a href="https://www.linkedin.com/in/sundus-al-kebsi-b96b89202" target="_blank" class="fa fa-linkedin"></a>
                      <a href="https://www.facebook.com/sundus.alkebsi.3" target="_blank" class="fa fa-facebook"></a>
                      <a href="https://www.instagram.com/doudou_4303/" target="_blank" class="fa fa-instagram"></a>

                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>

        <div class="wave-container3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L40,90.7C80,117,160,171,240,192C320,213,400,203,480,186.7C560,171,640,149,720,122.7C800,96,880,64,960,80C1040,96,1120,160,1200,181.3C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
        

        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logotext1" alt="logotext">Choucroute pursuit</h1>        
                    <div class="contact"><p class="parag4">
                        <span><i class="fa fa-envelope"></i> &nbsp; groupeproject5a@gmail.com</span>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <!-- <a href="https://www.facebook.com/Choucroute-Poursuite-113123034604216" target="_blank">
                            <span> <i class="fa fa-facebook-f"></i> </span>
                            </a>
                            <a href="https://twitter.com/Choucro82303598" target="_blank"><span><i class="fa fa-twitter"></i> </a>
                            <a href="https://www.instagram.com/choucroute_pursuit/" target="_blank"> <span><i class="fa fa-instagram"></i></a> -->
                    </div>
                </div>


                <div class="footer-section contact-form" id="contact">
                
                    <h2 class="logotext1" >Contactez-Nous</h2>
                    <br>
                    <form id="contacter" action="server.php" method="post">
                        
                    <input type="text" required class="text-input contact-input" name="email" id="email" placeholder="Email..." >
                    
                    <textarea type="textarea" required class="text-input contact-input" name="textarea" id="msg" placeholder="Tapez Votre Message Ici ..." ></textarea>
                    <p id="erreur"></p>
                    <button type="submit" id="envoyer" class="btn2 btn-big" name="envoyer">
                        <i class="fa  fa-envelope "></i>
                        Envoyer
                    </button>
                        
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <a href="legal.html" target="_blank">Conditions générales d'utilisation</a>|<a href="https://www.flaticon.com/free-icons/dice" target="_blank" title="dice icons">Site's icons created by Freepik - Flaticon</a>
            </div>
        </div>
        <script src="js.js"></script> 
    


    </body>
</html>
