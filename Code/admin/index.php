<?php
    session_start();
    require_once('connect.php');
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster Two">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">
<link rel="stylesheet" href="style/bootstrap.min.css">
<script src="style/bootstrap.bundle.min.js"></script>


<style>
    .ibtexte2{
      font-family: "Lobster", sans-serif;
      color:green;
      font-size: 35px;
    }
    .ibtexte3{
      color:orange;
      font-family: "Lobster", sans-serif;
      font-size: 35px;
    }
    h3{
        font-family: "Patua One", sans-serif;   
    }
    .titre{
        font-family: "Lobster", sans-serif;
    }
    body{
        font-family:cambria;
    }
</style>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diarrabook</title>
    <!-----------------------CODE CSS-.......------------------->
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <!--....................SECTION NAV DEBUT......................-->
   <nav style="background-color: #ebf6ff;border-bottom: 3px solid white;width: 100%;padding: .7rem 0;">
      <div class="container1 nav-container1 ">
            <div style="display:flex; align-items:center; gap:1rem;">
                    <span><img src="../images/phpq.jpg" alt="" width="60px" height="60" style="border-radius:20px;"></span>
                    <a class="navbar-brand" href="#"><b class="ibtexte2"><span class="ibtexte3">iMa</span>Certif</b></a>
            </div>
            <div class="search-bar">
                <img src="icon1/search_black_24dp.svg" class="icon2">
                <input type="search" placeholder="rechercher ....">
            </div>
            <div class="create">
                <div class="profil-photo">
                    <i data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor:pointer;">
                       <img src="images/admin3.jpg" alt="">
                    </i>
                </div>
            </div>
      </div>
   </nav> 
   <!--.........................SECTION NAV FIN...................--> 


   <!--.........................SECTION MAIN DEBUT...................--> 
   <main>
     <div class="container1 main-container1">
        <!--.......MAIN LEFT........-->
        <div class="main-left">
            <!--.......PROFILE........--> 
            <div data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor:pointer;">
                <div class="profile">
                    <div class="profil-photo">
                        <img src="images/admin3.jpg" alt="">
                    </div>
                            <div class="hende1">
                                <h4 style="color:black;font-family: 'Patua One';">Formateur</h4>
                                <p class="text-gry" style="color:black;font-family: 'Patua One';">imacertif@gmail.com</p>
                            </div>
                </div>
            </div>
           <!--.......SIDEBAR........-->
           <div class="side-bar">
           
                <a href="?page=home" class="nav-link menu-item active">
                    <span><img src="icon1/home_black_24dp.svg" class="icon1"></span><h3>Accueil</h3>
                </a>
                <a href="?page=voir_forma" class="nav-link menu-item">
                    <span><img src="icon1/search_black_24dp.svg" class="icon1"></span><h3>Formations</h3>
                </a>
                <a href="?page=voir_users" class="nav-link menu-item">
                    <span><img src="icon1/person_black_24dp.svg" class="icon1"></span><h3>Etudiants</h3>
                </a>
                <a href="?page=voir_categorie" class="nav-link menu-item">
                    <span><img src="icon1/chat_black_24dp.svg" class="icon1"></span><h3>Catégorie</h3>
                </a>
                <a href="?page=ajout_question" class="nav-link menu-item">
                    <span><img src="icon1/bookmarks_black_24dp (1).svg" class="icon1"></span><h3>Questions</h3>
                </a>
                <a href="?page=ajout_reponse" class="nav-link menu-item">
                    <span><img src="icon1/palette_black_24dp.svg" class="icon1"></span><h3>Réponses</h3>
                </a>
                <a href="?page=voir_historique" class="nav-link menu-item">
                    <span><img src="icon1/settings_black_24dp.svg" class="icon1"></span><h3>Historique Test</h3>
                </a>
                <label for="creatPost" class="btn btn-primary">Créer Post</label>
           </div>

        </div>

        <!--==========MAIN MID=========.-->
        <div class="main-mid p-3 mb-2" style="background-color: #ebf6ff;box-shadow: 5px 5px 10px black;border-radius:15px;">

            <!--.......feeds debut........-->
                <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
                <?php 
                    if(!file_exists($page.".php") && !is_dir($page)){
                        include '404.html';
                    }else{
                    if(is_dir($page))
                        include $page.'index.php';
                    else
                        include $page.'.php';

                    }
                ?>
            <!--.......feeds fin........-->
        </div>
     </div>
   </main>
  
   <!--.........................SECTION MAIN FIN...................-->

    <!--............................CODE JS...........................-->
    <script src="index.js"></script>
</body>
</html>

<div class="modal fade" id="exampleModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 style="font-family:'Lobster Two';">Mon profil</h3>
            </div>
            <div class="modal-footer">
                <a href="login.php">
                    <button class="btn btn-danger">Se deconnecter</button>
                </a>
                <a href="?page=edit_admin">
                    <button class="btn btn-warning">Voir mon profil</button>
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
