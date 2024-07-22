<?php 
    //inclure la page de connexion
    require_once('connect.php');
        $id = $_GET['id'];
        $selSql = "SELECT *FROM `formation` WHERE id=$id ";
        $res = mysqli_query($con, $selSql);
        $r=mysqli_fetch_assoc($res);
    //verifier que les données sont envoyés
    if(isset($_POST['envoyer'])){
            $time = time();
            $img_nom = $_FILES['image']['name'];
            $fich_nom = $_FILES['fichier']['name'];

            $tmp_nom = $_FILES['image']['tmp_name'];
            $tmp_fich = $_FILES['fichier']['tmp_name'];
           
            $nouveau_img_nom = $time.$img_nom ;
            $nouveau_fich_nom = $time.$fich_nom ;

            $deplacer_img = move_uploaded_file($tmp_nom,"../image/".$nouveau_img_nom);
            $deplacer_fich = move_uploaded_file($tmp_fich,"../image/".$nouveau_fich_nom);

            $descri = $_POST['describe'] ; $descrip=addslashes($descri);
            $lib = $_POST['libelle'] ; $libe=addslashes($lib);
            $categorie = $_POST['categorie'] ;


            if(isset($lib) && isset($categorie) && isset($descri)  && $lib != "" && $categorie != "" && $descri != ""  ){
                // créons la question
                $resultat ="UPDATE `formation` SET nom_formation='$libe', categorie_formation='$categorie', description_forma='$descrip' , fichier_forma='$nouveau_fich_nom' , image_formation='$nouveau_img_nom' WHERE id= '$id' ";

                $req = mysqli_query($con ,$resultat );
                if($req){
                    
                    $_SESSION['messagemi'] = "La mise à jour effectuée avec succès !" ;
                    //redirection vers la page de connexion
                    echo "<script> window.location.href='index.php?page=voir_forma';</script>";
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
    width: 90%;
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
            <h3 class="card-title foot" style="font-size: 25px; color:blue;">Mise à jour du contenu de la formation</h3>
            <?php if(isset($_SESSION['messagemi'])):?>
                <div class='toast show'>
                    <div class='toast-header text-center'>
                        <strong class='me-auto text-dark text-center' style="font-family:'Patua One';"><?php echo $_SESSION['messagemi'] ;?></strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                    </div>
                </div>
            <?php else: ?>
                <p></p>
            <?php endif; ?>

            <?php if(isset($error)): ?>
                <div class='toast show'>
                    <div class='toast-header text-center'>
                        <strong class='me-auto text-danger text-center' style="font-family:'Patua One';"><?php echo $error ;?></strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                    </div>
                </div>
            <?php endif; ?>
            <div>
                <a href="?page=voir_forma">
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
                            <label for="libelle" class="control-label">Libellé</label>
                        </div>
                        <div class="col-sm-9 mb-3 mt-2 mb-sm-0">
                            <input type="text" name="libelle" class="form-control form no-resize" value="<?php echo $r['nom_formation']?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="categorie" class="control-label">Categorie</label>
                        </div>
                        <div class="col-sm-9 mb-3 mt-2 mb-sm-0">
                           <select name="categorie"  class="custom-select form-control selevt">
                                <option <?php if($r['categorie_formation']=='Amateur PHP'){echo "selected";} ?>>Amateur PHP</option>
                                <option <?php if($r['categorie_formation']=='Animateur PHP'){echo "selected";} ?>>Animateur PHP</option>
                                <option <?php if($r['categorie_formation']=='Développeur Web D01'){echo "selected";} ?>>Développeur Web D01</option>
                                <option <?php if($r['categorie_formation']=='Développeur Web D02'){echo "selected";} ?>>Développeur Web D02</option>
                                <option <?php if($r['categorie_formation']=='Concepteur site Web'){echo "selected";} ?>>Concepteur site Web</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="describe" class="control-label">Description</label>
                        </div>
                        <div class="col-sm-9 mb-3 mt-2 mb-sm-0">
                            <textarea name="describe" id="describe" cols="50" rows="5"  class="form-control form no-resize summernote"><?php echo $r['description_forma']?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="image" class="control-label">Le Fichier</label>
                        </div>
                        <div class="col-sm-9 mb-3 mt-2 mb-sm-0">
                            <input type="file" name="fichier" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-3 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="image" class="control-label">Images</label>
                        </div>
                        <div class="col-sm-9 mb-3 mt-2 mb-sm-0">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="card-footer">
                        <input type="submit" name="envoyer" value="Mise à jour" style="border-radius:15px;" class="btn btn-primary" >
                        <input type="reset" value="Annuler" style="border-radius:15px;" class="btn btn-secondary" >
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