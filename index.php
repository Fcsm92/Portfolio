<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width= device-width, initial-scale=1.0" />
    <title>My portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
  </head>
  <body class="">
    <div class="container">
      <nav class="navbar">
        <div class="box theme">
          <div class="item" onclick=theme()>
            <ion-icon id="jourBtn" name="sunny-outline"></ion-icon>
            <ion-icon id="nuitBtn" name="moon-outline" style="display: none;" ></ion-icon>


          </div>
        </div>

        <div class="box nav">
          <div class="item">
           <a href="#about">  <ion-icon name="person-circle-outline"></ion-icon>
            <p>A propos</p>
          </a>
          
            <div class="divider rtl"></div>
          </div>

          <div class="item">
            <a href="#competences">
                <ion-icon name="file-tray-full-outline"></ion-icon>
                <p>Compétences</p>
            </a>
           
            <div class="divider rtl"></div>
          </div>

          <div class="item">
            <a href="#experiences">
                 <ion-icon name="layers-outline"></ion-icon>
                <p>Parcours</p>
            </a>
           
            <div class="divider rtl"></div>
          </div>

        <div class="item">
            <a href="#projets">
                <ion-icon name="reader-outline"></ion-icon>
                <p>Projets</p>
            </a>
                
            <div class="divider rtl"></div>
          </div>

           <div class="item">
            <a href="#contact">
                 <ion-icon name="mail-outline"></ion-icon>
                <p>Contact</p>
            </a>
           
            <div class="divider rtl"></div>
          </div>
        </div>
      </nav>

      <!------------ profile -------------->
      <div class="box profile">
        <img class="header" src="Img/self code ia.jpg" alt="" srcset="" />
        <img class="img" src="Img/self Ia.jpg" alt="" srcset="" />
        <h2 id="about">Thibaud Mouffron</h2>
        <p id ="typed" class="colored">Etudiant</p>
        <ul>
          <li>
            <a href="#"><ion-icon name="logo-github"></ion-icon></a>
          </li>
          <li>
            <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
          </li>
          <li>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          </li>
          <li>
            <a href="#"><ion-icon name="logo-github"></ion-icon></a>
          </li>
        </ul>
        <div class="footer">
            <div class="divider rtl"></div>
            <table>
                <tr>
                    <td><a href="#"><p>a<ion-icon name="file-tray-outline"></ion-icon></a></td>
                    <td><a href="#">a<ion-icon name="call-outline"></ion-icon></td>
                </tr>
            </table>
        </div>
      </div>





      <div class="box content">
            <div class="wrapper">
            <h2>Bonjour <span class="colored">Bienvenue</span></h2>
            <div class="divider rtl"></div>
            <p>Bonjour je suis etudiant en master</p>
            <section class="realisations">
            <div>
                <h3><ion-icon name="layers-outline"></ion-icon>4</h3>
                <p>Projets persos</p>
            </div>
            <div>
                <h3><ion-icon name="school-outline"></ion-icon>Master 1</h3>
                <p>Etudes</p>
            </div>
            <div>
                <h3><ion-icon name="rocket-outline"></ion-icon></h3>
                <p></p>
            </div>
            </section>

            <!--   compétences  -->
            <h2 class="colored" id="competences">Mes Compétences</h2>
            <div class="divider ltr"></div>
            <section class="competences">
                <div><ion-icon name="logo-html5"></ion-icon><p>Html</p></div>
                <div><ion-icon name="logo-css3"></ion-icon><p>Css</p></div>
                <div><ion-icon name="pencil-outline"></ion-icon><p>Sql</p></div>
                <div><ion-icon name="logo-python"></ion-icon><p>Python</p></div>
                <div>
                    <div class="circle" style="--percent: 50%" >
                        <h4>50 <small>%</small></h4>
                    </div>
                    <p>React</p>
                
                </div>
                <div>
                <div class="progress-bar">
                    <p>Node js </p>
                    <progress max="100" value="70"></progress>
                </div>
                </div>
            </section>


            <!--   Expérience  -->
            <h1 id="experiences"><span class="colored" >Expériences</span></h1>
            <div class="divider ltr"></div>
            <section>
                <div class="experiences">
                    <h2>Licence 3 Miage</h2>
                    <h4>Paris-Saclay  <span class="date">2022</span> &#x26AC; <span class="date">2024</span></h4>
                    <p>L3 informatique, option Miage (Méthodes informatiques appliqué à la gestion des entreprises) à l'université Paris Saclay</p>
                </div>
                <div class="experiences">
                    <h2>Licence Informatique </h2>
                    <h4>Trois Rivières, Québec <span class="date">2018</span> &#x26AC; <span class="date">2021</span></h4>
                    <p>L1, L2 et moitié de L3 a L'université du Québec à trois Rivières (UQTR)</p>
                </div>
                <div class="experiences">
                    <h2>DUT informaque </h2>
                    <h4>IUT du Puy en Velay <span class="date">2014</span> &#x26AC; <span class="date">2016</span></h4>
                    <p>DUT informatique option imagerie de Numérique</p>
                </div>
                <div class="experience">
                    <h2></h2>
                    <h4></h4>
                    <p></p>
                </div>
            </section>




            <!--   Projets   -->

            <h1 id="projets">Mes<span class="colored">Projets</span></h1>
            <div class="divider ltr"></div>
            <section class="projets">
                 <div class="projet1">
                    <img src="Img/contact.png" alt="">
                    <h3>Gestionnaire <span class="colored">de contact</span></h3>
                 </div>
                 <div class="projets2">
                    <img src="Img/Uno.png" alt="">
                    <h3><span class="colored">Uno</span></h3>
                 </div>
                 <div class="projets3">
                    <img src="Img/Quizz.png" alt="">
                    <h3><span class="colored">Quizz-Up</span></h3>
                 </div>
                 <div class="projets4">
                    <img src="" alt="">
                    <h3></h3>
                 </div>
            </section>
        </div>

      </div>
      
     
    </div>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script.js"></script>
  </body>
</html>
