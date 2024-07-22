<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
    require_once('connect.php');
        $id = $_GET['id'];
        $selSql = "SELECT *FROM `categorie` WHERE id='$id' ";
        $res = mysqli_query($con, $selSql);
        $r=mysqli_fetch_assoc($res);
        if(isset($_POST['envoyer'])){
            

           $libelle=$_POST['libelle'];
 
           if(isset($libelle) && $libelle != "" ){
                       //si ça n'existe pas , créons le compte
                       $resultat ="UPDATE `categorie` SET nom_categorie='$libelle' WHERE id= '$id' ";

                       $req = mysqli_query($con ,$resultat );
                       if($req){
                           // si le compte a été créer , créons une variable pour afficher un message dans la page de
                           //connexion
                           $_SESSION['message'] = "<h5 class='message_inscription text-primary'>La mise à jour effectuée avec succès !</h5>" ;
                           //redirection vers la page de connexion
                       } else {
                           //si non
                           $error = "Inscription Echouée !";
                       }
               
            }
            else {
               $error = "Veuillez remplir tous les champs !" ;
           }
        }
?>


<style>
 .foot{
   font-family: "Lobster Two", sans-serif;
   font-size: 20px;
 }
 label{
    font-family:"Patua One";
 }
 h5{
    font-family:"Patua One";
 }
 .card-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
 }
 .categorie{
    display:flex;
    align-items:center;
    justify-content:center;
    
 }
 .control-label{
    font-family:"Patua One";
    font-size:25px;
 }
 form{
    width: 350px;
    height:220;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
</style>
<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <h3 class="card-title foot" style="font-size: 25px; color:blue;">Création de catégorie</h3>
            <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <h5 class="text-primary">
                            <?php
                                //affichons le message qui dit qu'un compte a été créer
                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'] ;
                                }
                            ?>
                        </h5>
                   </div>
                   <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
           </div>
           <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <h5 class="text-danger">
                             <?php 
                                //affichons l'erreur
                               if(isset($error)){
                                   echo $error ;
                                }
                            ?>
                       </h5>
                   </div>
                   <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
           </div>
            
            <div>
                <a href="?page=voir_categorie">
                    <button class="btn btn-primary m-2"style="color:white;font-family:Lobster; font-size:15px;" type="button">Retour</button>
                </a>
            </div> 
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                    <input type="hidden" name ="id" value="">
                    <div class="form-group">
                        <div class="text-center"><label for="libelle" class="control-label">Catégorie</label></div>
                         <br>
                        <input type="text" name="libelle" class="form-control form no-resize" value="<?php echo $r['nom_categorie']?>">
                    </div>
                    <br>
                    <div class="card-footer text-center">
                            <input type="submit" name="envoyer" value="Mise à jour" style="border-radius:15px;font-family:Patua One;" class="btn btn-primary" >
                            <input type="reset" value="Annuler" style="border-radius:15px;font-family:Patua One;" class="btn btn-secondary" >
                    </div>
                </form>
           </div>
        </div>
</section>