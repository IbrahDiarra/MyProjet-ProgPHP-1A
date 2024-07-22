<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
    include "connect.php";
    if (isset($_POST['envoyer'])){
      
      if (isset($_POST['niveau'])){
        $_SESSION['niveau'] = $_POST['niveau'];
        echo "<script> window.location.href='index.php?page=qcm';</script>";
      }else{
        $message= "Veuillez choisir un niveau!! ";
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
    width: 500px;
    height:100%;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
</style>
<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <p class="card-title foot" style="font-size: 20px; color:black;font-family:'Patua One';">Salut <span style="font-size: 18px; color:black;font-family:'Patua One';color:red;"><?php echo $r['prenom_et']?></span> , choisissez le niveau des questions de votre test</p>
            
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                    <div class="text-center"><label for="libelle" class="control-label"style="font-size: 17px; color:black;font-family:'Patua One';">Votre niveau actuel est:
                        <b style="color:red;">
                            <?php 
                                if(isset($_SESSION['niveau'])){ 
                                    if($_SESSION['niveau']==1){
                                        echo "Amateur PHP";
                                    }else if($_SESSION['niveau']==2){
                                        echo "Animateur PHP";
                                    }else if($_SESSION['niveau']==3){
                                        echo "Développeur Web D01";
                                    }else if($_SESSION['niveau']==4){
                                        echo "Développeur Web D02";
                                    }else if($_SESSION['niveau']==5){
                                        echo "Développeur Web D02";
                                    }
                                }else{
                                    echo "Aucun";
                                }  
                            ?>
                    </label></div><br>
                    <p style="font-size: 16px; color:black;font-family:'Patua One';"><?php if(isset($message)) echo $message; ?></p>
                    <div class="form-group" style="font-size: 15px; color:black;font-family:'Patua One';">
                         <label><input type="radio" name="niveau" class="form-check-input"  value="1">Amateur PHP</label><br>
                         <label><input type="radio" name="niveau" class="form-check-input"  value="2">Animateur PHP</label><br>
                         <label><input type="radio" name="niveau" class="form-check-input"  value="3">Développeur Web D01</label><br>
                         <label><input type="radio" name="niveau" class="form-check-input"  value="4">Développeur Web D02</label><br>
                         <label><input type="radio" name="niveau" class="form-check-input"  value="5">Concepteur site Web</label><br>      
                    </div>
                    <br>
                    <div class="card-footer text-center">
                        <button name="envoyer"  class="btn btn-primary m-2" style="border-radius:15px;font-family:Patua One;">Soumettre</button>
                    </div>
                </form>
           </div>
        </div>
</section>