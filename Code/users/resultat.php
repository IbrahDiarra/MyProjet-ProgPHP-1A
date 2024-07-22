<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">

<?php
    include "connect.php";
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
</style>
<section>
    <div class="card card-outline mb-5 card-info">
        <div class="card-header d-flex">
            <p class="card-title foot" style="font-size: 20px; color:black;font-family:'Patua One';">Resultat du test de <span style="font-size: 20px; color:black;font-family:'Patua One';color:red;"><?php echo $r['prenom_et']?></span></p>
        </div>
        <div class="card-body">
            <div class="categorie">
                <form action=""  method="POST" enctype="multipart/form-data" class="p-3">
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
                            }else{
                                //si non 
                                ?>
                                    <p class="text-secondary">Tu t'es planté à la question <?=$cle?>:</p>
                                        <?php
                                        // liste des questions qui ont été mal répondues
                                        $req2="SELECT *FROM questions WHERE idq='$cle' ";
                                        $res2=mysqli_query($con,$req2);
                                        $ligne=mysqli_fetch_assoc($res2);
                                        ?>
                                    <p><b><?=$ligne['libelleQ']?></b></p>
                                    <p class="text-secondary">Il fallait répondre</p>
                                        <?php
                                        // liste des reponses vraies
                                        $ibr=1;
                                        $req3="SELECT *FROM reponses WHERE idq='$cle' AND verite='$ibr'";
                                        $res3=mysqli_query($con,$req3);
                                        $ligne3=mysqli_fetch_assoc($res3);
                                        ?>
                                        <p class="text-success"><b><?=$ligne3['libeller']?></b></p>
                                <?php
                            }
                        }
                        ?>

                            <?php
                                //changer la couleur de la note

                                if($note<20){
                                echo "<style> .note_valeur{color:red;}</style>";
                                }else if($note==20){
                                echo "<style> .note_valeur{color:orange;}</style>";
                                }else{
                                echo "<style> .note_valeur{color:blue;}</style>";
                                }
                            ?>
                        <p class="note">Vous avez obtenu <span class="note_valeur"><b> <?=$note?>/40</b></span></p>
                </form>
           </div>
        </div>
</section>