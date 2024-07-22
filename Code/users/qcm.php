<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
      include "connect.php";
            if(!isset($_SESSION['niveau'])){
                echo "<script> window.location.href='index.php?page=categorie';</script>";
            }
        $niveau=$_SESSION['niveau'];
?>
<?php
   $ib=1;
   $note=0;
   foreach($_POST as $cle=>$val){
      //$cle représente idq (indentifiant de la question ) et $ val représente idr (identifiant de la réponse)
      // cette requette nous permet d'afficher la bonne réponse
      $req = "SELECT *FROM reponses WHERE idr='$val' AND verite='$ib' ";
      $res=mysqli_query($con,$req);
      if(mysqli_num_rows($res)>0){
         // si cette requete retourne un nombre de ligne >0 on ajoute a la note
         $note = $note+4;
         $_SESSION['note']=$note;
      }
   }
?>
<?php
        if(isset($_POST['envoy'])){
                       //si ça n'existe pas , créons le compte
            $matricul= $r['matricule_et'];
            $resultat ="INSERT INTO historique (Matricule,Niveau,Note) VALUES ('$matricul','$niveau','$note')";
            $req = mysqli_query($con ,$resultat );
               if($req){
                  // si le compte a été créer , créons une variable pour afficher un message dans la page de
                  $_SESSION['messagecer'] = "message envoyé  avec succès !" ;
                  //redirection vers la page de connexion
                  echo "<script> window.location.href='index.php?page=certif';</script>";
              } else {
                  //si non
                  $error = "Inscription Echouée !";
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
    font-size:20px;
 }
 form{
    width: 850px;
    height:100%;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
</style>
<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <h3 class="card-title foot" style="font-size: 25px; color:black;">Bonne chance à vous <span class="text-danger"><?php echo $r['prenom_et']?></span></h3>
            
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                    <div class="form-group">
                      <?php
                          $req= "SELECT *FROM questions WHERE categorie=$niveau ORDER BY rand() limit 5";
                          $res = mysqli_query($con,$req);
                          //affichage des questions
                              echo "<ol>";
                              while($row=mysqli_fetch_assoc($res)){
                                $idq=$row['idq'];
                                ?>
                                <h6 class="question"><b><li><?=$row['libelleQ']?></li></b></h6>
                                <?php 
                                //affichage des réponses associées à ces questions
                                $req2= "SELECT *FROM reponses WHERE idq=$idq";
                                //excuter la requette
                                $res2=mysqli_query($con,$req2);
                                //afficher les questions
                                while($row2=mysqli_fetch_assoc($res2)){
                                  ?>
                                  <input type="radio" name="<?=$idq?>" class="form-check-input"  value="<?=$row2['idr']?>" required><?=$row2['libeller']?><br> 
                                  <?php
                                }
                                echo "<br>";
                              }
                            ?>
                                  
                    </div>
                    <br>
                    <div class="card-footer text-center">
                       <input type="submit" name="envoy" value="Envoyer" class="btn btn-primary m-2" style="border-radius:15px;font-family:Patua One;">
                    </div>
                </form>
           </div>
        </div>
</section>