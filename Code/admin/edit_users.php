<?php 
    //inclure la page de connexion
    require_once('connect.php');
        $id = $_GET['id'];
        $selSql = "SELECT *FROM `etudiant` WHERE id='$id' ";
        $res = mysqli_query($con, $selSql);
        $re=mysqli_fetch_assoc($res);
    //verifier que les données sont envoyés
    if(isset($_POST['envoyer'])){
            
            $statut = $_POST['statut'] ; 



            if(isset($statut) &&  $statut != ""  ){
                // créons la question
                $resultat ="UPDATE `etudiant` SET Statut='$statut' WHERE id= '$id' ";

                $req = mysqli_query($con ,$resultat );
                if($req){
                    
                    $_SESSION['message_con'] = "La mise à jour effectuée avec succès !" ;
                    //redirection vers la page de connexion
                    echo "<script> window.location.href='index.php?page=voir_users';</script>";
                } else {
                    //si non
                    $error = "Mise à jour a échouée !";
                }  
           }
            else{
                $error = "Veuillez remplir tous les champs !" ;
           }
        }
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">
<style>
 .foot{
   font-family: "Lobster Two", sans-serif;
   font-size: 20px;
 }
 label{
    font-family:"Patua One";
 }
 .card-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
 }
 form{
    width: 50%;
    height:100%;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
 .categorie{
    display:flex;
    align-items:center;
    justify-content:center;
  }
</style>
<section class="page-section">
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <h3 class="card-title foot" style="font-size: 25px; color:blue;">Confirmation de l'inscription</h3>
            
            <?php if(isset($error)): ?>
                <div class='toast show'>
                    <div class='toast-header text-center'>
                        <strong class='me-auto text-danger text-center' style="font-family:'Patua One';"><?php echo $error ;?></strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                    </div>
                </div>
            <?php endif; ?>
            <div>
                <a href="?page=voir_users">
                    <button class="btn btn-primary m-2"style="color:white;font-family:Lobster; font-size:15px;" type="button">Retour</button>
                </a>
            </div> 
        </div>
        <div class="card-body">
           <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                    <input type="hidden" name ="id" value="">
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="libelle" class="control-label">Etudiant(e) : </label>
                        </div>
                        <div class="col-sm-8 mb-3 mt-2 mb-sm-0">
                             <span><?php echo $re['nom_et']?> <?php echo $re['prenom_et']?> de sexe <?php echo $re['sexe_et']?> </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="libelle" class="control-label">Email : </label>
                        </div>
                        <div class="col-sm-8 mb-3 mt-2 mb-sm-0">
                             <span><?php echo $re['email_et']?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="libelle" class="control-label">Matricule : </label>
                        </div>
                        <div class="col-sm-5 mb-3 mt-2 mb-sm-0">
                             <span><?php echo $re['matricule_et']?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="libelle" class="control-label">Photo</label>
                        </div>
                        <div class="col-sm-5 mb-3 mt-2 mb-sm-0">
                             <span><img src="../image/<?=$re['photo_et'];?>" style="width:90px; height:90px; border-radius:15px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="categorie" class="control-label">Statut :</label>
                        </div>
                        <div class="col-sm-5 mb-3 mt-2 mb-sm-0">
                           <select name="statut"  class="custom-select form-control selevt">
                                <option value="0" <?php if($re['Statut']==0){echo "selected";} ?>>En attente</option>
                                <option value="1" <?php if($re['Statut']==1){echo "selected";} ?>>Confirmé</option>
                                <option value="2" <?php if($re['Statut']==2){echo "selected";} ?>>Annulé</option>
                          </select>
                        </div>
                    </div>
                    <br>
                    <div class="card-footer">
                        <input type="submit" name="envoyer" value="Mise à jour" style="border-radius:15px;" class="btn btn-primary" >
                    </div>
                </form>
            </div>   
        </div>
</section>



<script>
	$(document).ready(function(){
        $('.summernote').summernote({
		        height: 200,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
</script>