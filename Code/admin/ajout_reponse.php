<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
    require_once('connect.php');
        if(isset($_POST['envoyer'])){
            

           $nb1=$_POST['nb1'];$nb2=$_POST['nb2'];$nb3=$_POST['nb3'];$nb4=$_POST['nb4'];
           $vt1=$_POST['vt1'];$vt2=$_POST['vt2'];$vt3=$_POST['vt3'];$vt4=$_POST['vt4'];
           $rp1=$_POST['rp1'];$rp2=$_POST['rp2'];$rp3=$_POST['rp3'];$rp4=$_POST['rp4'];
           $rps1=addslashes($rp1);$rps2=addslashes($rp2);$rps3=addslashes($rp3);$rps4=addslashes($rp4);
 
           if(isset($nb1) && isset($nb2)&& isset($nb3)&& isset($nb4) && isset($vt1)&& isset($vt2)&& isset($vt3) && isset($vt4)
                && isset($rp1) && isset($rp2)&& isset($rp3)&& isset($rp4 ) && $nb1 != "" && $nb2 != "" && $nb3 != "" && $nb4 != "" 
                && $vt1 != "" && $vt2 != "" && $vt3 != "" && $vt4 != "" && $rp1 != "" && $rp2 != "" && $rp3 != "" && $rp4 != "" ){

                    if($nb1 != $nb2 ){
                        $error = "Les numéros des questions sont différents !";
                    }else if($nb1 != $nb3 ){
                        $error = "Les numéros des questions sont différents !";
                    }else if($nb1 != $nb4 ){
                        $error = "Les numéros des questions sont différents !";
                    }else if($nb2 != $nb3 ){
                        $error = "Les numéros des questions sont différents !";
                    }else if($nb2 != $nb4 ){
                        $error = "Les numéros des questions sont différents !";
                    }else if($nb4 != $nb3 ){
                        $error = "Les numéros des questions sont différents !";
                    }else{
                            // créons la question
                            $resultat ="INSERT INTO reponses (idq,libeller,verite) VALUES ('$nb1','$rps1','$vt1'),('$nb2','$rps2','$vt2'),('$nb3','$rps3','$vt3'),('$nb4','$rps4','$vt4')";

                            $req = mysqli_query($con ,$resultat );
                            if($req){
                                
                                $_SESSION['messager'] = "Les reponses ont été ajoutées avec succès !" ;
                                //redirection vers la page de connexion
                                echo "<script> window.location.href='index.php?page=ajout_reponse';</script>";
                            } else {
                                //si non
                                $error = "Insertion à échouée !";
                            }
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
    width: 80%;
    height:100%;
    background-color: #ebf6ff;
    border-radius:15px;
    box-shadow: 3px 3px 7px black, -2px -2px 5px black; 
 }
</style>
<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <h3 class="card-title foot" style="font-size: 25px; color:blue;">Ajout des réponses</h3>
            <?php if(isset($_SESSION['messager'])):?>
                <div class='toast show'>
                    <div class='toast-header text-center'>
                        <strong class='me-auto text-dark text-center' style="font-family:'Patua One';"><?php echo $_SESSION['messager'] ;?></strong>
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
                <a href="">
                    <button class="btn btn-primary m-2"style="color:white;font-family:Lobster; font-size:15px;" type="button">Retour</button>
                </a>
            </div> 
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
                    <input type="hidden" name ="id" value="">
                    <div class="form-group row">
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <label for="matricule">Question N°</label>
                        </div>
                        <div class="col-sm-8 mb-3 mt-2 mb-sm-0">
                            <label for="matricule">Réponses</label>
                        </div>
                        <div class="col-sm-2 mb-3 mt-2 mb-sm-0">
                            <label for="matricule">Verité</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                             <input type="number" class="form-control form-control-user" name="nb1">
                        </div>
                        <div class="text-center col-sm-8 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <textarea name="rp1" id="rp1" cols="30" rows="1" class="form-control form-control-user"></textarea>
                        </div>
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <select name="vt1"  class="custom-select form-control selevt">
                                <option>0</option>
                                <option>1</option>
                            </select>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                             <input type="number" class="form-control form-control-user" name="nb2">
                        </div>
                        <div class="text-center col-sm-8 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <textarea name="rp2" id="rp2" cols="30" rows="1" class="form-control form-control-user"></textarea>
                        </div>
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <select name="vt2"  class="custom-select form-control selevt">
                                <option>0</option>
                                <option>1</option>
                            </select>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                             <input type="number" class="form-control form-control-user" name="nb3">
                        </div>
                        <div class="text-center col-sm-8 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <textarea name="rp3" id="rp3" cols="30" rows="1" class="form-control form-control-user"></textarea>
                        </div>
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <select name="vt3"  class="custom-select form-control selevt">
                                <option>0</option>
                                <option>1</option>
                            </select>
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                             <input type="number" class="form-control form-control-user" name="nb4">
                        </div>
                        <div class="text-center col-sm-8 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <textarea name="rp4" id="rp4" cols="30" rows="1" class="form-control form-control-user"></textarea>
                        </div>
                        <div class="text-center col-sm-2 mb-3 mt-2 mb-sm-0 d-flex align-items-center">
                            <select name="vt4"  class="custom-select form-control selevt">
                                <option>0</option>
                                <option>1</option>
                            </select>
                        </div>  
                    </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="envoyer" value="Sauver" style="border-radius:15px;font-family:Patua One;" class="btn btn-primary" >
                    </div>
                </form>
           </div>
        </div>
</section>