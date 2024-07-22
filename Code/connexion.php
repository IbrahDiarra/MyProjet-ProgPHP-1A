
<?php 
       if(isset($_POST['bt_connecter'])){
           //si le formulaire est envoyé
           //se connecter à la base de donnée
           include "connect.php";
           //extraire les infos du formulaire
           extract($_POST);
           //verifions si les champs sont vides
           if(isset($matricule) && isset($mdp1) && $matricule != "" && $mdp1 != ""){
               //verifions si les identifiants sont justes
               $req = mysqli_query($con , "SELECT * FROM etudiant WHERE matricule_et = '$matricule' AND mdp_et = '$mdp1'");

               if(mysqli_num_rows($req) > 0){
                        $re = mysqli_fetch_assoc($req);
                        if($re['Statut']==0){
                            $error = "Votre demande d'inscription est en attente!";
                        }else if($re['Statut']==2){
                            $error = "Votre demande d'inscription a été annulée!";
                        }else{
                                //si les ids sont justes
                            $_SESSION['user'] = $matricule;
                            $user = $_SESSION['user'];
                            echo "<script> window.location.href='index.php';</script>";
                        }

                }else {
                   //si non
                   $error = "Matricule ou Mots de passe incorrecte(s) !";
               }

            }else {
               //si les champs sont vides
               $error = "Veuillez remplir tous les champs !" ;
           }   
        }        
?>

<section class="m-5 ps-5 pt-3 pe-5 pb-5">
                <div class="row pt-5 ps-5 cardss mt-2" >
                    <div class="col-lg-5 bg-light  formul1" style="border-radius: 20px 0px 0px 20px;">
                        <img src="icon/login.jpg" alt="" class="w-100 h-100">
                    </div>
                    <div class="col-lg-7 bg-light formul" style="border-radius: 0px 20px 20px 0px;" >
                        <div class="p-2">
                            <div class="">
                                <a href="?page=login">
                                    <button class="btn m-2 float-right btn1" style="background:rgb(163, 160, 160);;color:black;font-family:Lobster" type="button">S'inscrire</button>
                                </a>
                                <a href="#">
                                    <button class="btn m-2 float-end btn1" style="background:orange;color:black;font-family:Lobster" type="button">Se connecter</button>
                                </a>
                            </div>
                            <form method="post" action="">
                                
                                <div class="form-group row">
                                   <div class="col-sm-6">
                                       <label for="matricule">Matricule</label>
                                       <input type="text" class="form-control form-control-user" name="matricule">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password">Mot de passe </label>
                                        <input type="password" class="form-control form-control-user" name="mdp1">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4 ">
                                      <input type="submit" value="S'identifier" name="bt_connecter" class="btn  m-2 btn1" style="background:blue;color:white;font-family:Lobster">
                                    </div>
                                    <div class="col-sm-8">

                                            <?php if(isset($error)): ?>
                                                    <div class='toast show'>
                                                        <div class='toast-header text-center'>
                                                            <strong class='me-auto text-danger text-center' style="font-family:'Patua One';"><?php echo $error ;?></strong>
                                                            <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                                                        </div>
                                                    </div>
                                            <?php endif; ?>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

</section>