<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
    include "connect.php";
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
        }
    }
?>
<?php
    //changer la couleur de la note
    if($note<10){
    echo "<style> .note_valeur{color:red;}</style>";
    }else if($note==10){
        echo "<style> .note_valeur{color:orange;}</style>";
    }else{
        echo "<style> .note_valeur{color:blue;}</style>";
    }

    if(isset($_SESSION['niveau'])){ 
        if($_SESSION['niveau']==1){
            $niv="Amateur PHP";
        }else if($_SESSION['niveau']==2){
            $niv="Animateur PHP";
        }else if($_SESSION['niveau']==3){
            $niv="Développeur Web D01";
        }else if($_SESSION['niveau']==4){
            $niv="Développeur Web D02";
        }else if($_SESSION['niveau']==5){
            $niv= "Développeur Web D02";
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
    width: 85%;
    height:100%;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
 .haut{
   display:flex;
   justify-content:space-between;
 }
 .bas{
   display:flex;
   justify-content:space-between;
 }
</style>

<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <p class="card-title foot" style="font-size: 20px; color:black;font-family:'Patua One';">Resultat du test de <span style="font-size: 20px; color:black;font-family:'Patua One';color:red;"><?php echo $r['prenom_et']?></span></p>

            <?php if(isset($_SESSION['messagecer'])):?>
                <div class='toast show'>
                    <div class='toast-header text-center'>
                        <strong class='me-auto text-dark text-center' style="font-family:'Patua One';"><?php echo $_SESSION['messagecer'] ;?></strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                    </div>
                </div>
            <?php else: ?>
                <p></p>
            <?php endif; ?>
            <div>
                <a href="certificat.php" target="_blank">
                    <button class="btn btn-primary m-2"style="color:white;font-family:Lobster; font-size:15px;" type="button">Telecharger le certificat</button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                  <h2 class="text-center" style="font-family:Lobster">Attestation de participation à une formation de certification en PHP</h2><br>
                  <div>
                     <div class="haut d-flex">
                           <div class="imager">
                              <img src="../image/<?=$r['photo_et'];?>" alt="" style="width:150px;height:150px;border-radius:20px;">
                           </div>
                           <div class="p-3">
                              <br>
                              <span style="font-size: 20px; color:black;font-family:'Patua One';"><?php echo $r['nom_et']?></span><br>
                              <span style="font-size: 15px; color:black;font-family:'Lobster Two';"><?php echo $r['prenom_et']?></span><br>
                              <span style="font-size: 15px; color:black;font-family:'Patua One';"><?php echo $r['email_et']?></span><br>
                              <span style="font-size: 15px; color:black;font-family:'Lobster';"><?php echo $r['matricule_et']?></span>
                           </div>
                     </div><br>
                     <hr class="border-info">
                     <div class="milieu">
                         <div >
                           <p class="contenu text-center">Je sousigné Mr Imacertif, Expert en Programmation Web, Réseau et Télécom agissant en qualité de formateur interne Imacertif, atteste que <b><?php echo $r['nom_et']?> <?php echo $r['prenom_et']?> </b>, etudiant(e) en Informatique, a suivi une formation de certification en PHP niveau <span class="text-primary"><?php if(isset($niv)) echo  $niv;?></span> avec une note de <span class="note_valeur"><b> <?php echo $_SESSION['note'];?>/20</b></span> </p>
                           <p>Cette attestation est délivrée pour servir et valoir ce que de droit</p>
                           <p class="float-right">Fait à Yamoussoukro, le 10/06/2023</p>
                         </div>
                     </div>
                     <br>
                     <hr class="border-info">
                     <div class="bas">
                        <div class="signaturef pb-5" style="font-size: 20px; color:black;font-family:'Patua One';">
                            <p style="font-size: 20px; color:black;font-family:'Patua One';">Le formateur</p>
                        </div>
                        <div class="pb-5">
                           <p style="font-size: 20px; color:black;font-family:'Patua One';">Le Directeur des Opérations</p>
                        </div>
                     </div>
                  </div>
                </form>
           </div>
        </div>
</section>