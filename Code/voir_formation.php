<?php  require_once('connect.php');
    $id=$_GET['id'];
    if(isset($id)){
        $req = mysqli_query($con , ("SELECT * FROM `formation` where id = $id"));
        $row = mysqli_fetch_assoc($req);
        $row['description_forma']=stripslashes(html_entity_decode($row['description_forma']));
    }
       
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster Two">
<style>
    .page-section{
        font-family:cambria;
    }
    .descrip{
        font-family:cambria;
    }
	.mysite{
     border-radius:10px;
	 box-shadow: 5px 5px 10px black;
	}
	.ibsite{
	  color:black;
      font-family: "Lobster";
      
	}
	.package-item{
		background-color: #ebf6ff;
	}
	.site-titre{
		font-family:"Lobster Two";
	}
	.ib-bt{
		font-family:"Patua One";
	}
    .ib-btt{
		font-family:"Patua One";
	}
</style>

<section class="page-section pt-5 mt-5">
    <div class="container bg-light pt-3 pb-3 mysite">
        <div class="row">
            <div class="col-md-5">
                <div id="tourCarousel"  class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" >
                    <div class="carousel-inner h-100 ">
                        <div class="carousel-item  h-100 active">
                            <img class="d-block w-100  h-100" src="image/<?=$row['image_formation']?>" alt="" style="border-radius:15px;">
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <hr class="border-info">
                    <p>La formation vous interresse? Si oui alors vous pouvez télecharger</p>
                    <hr class="border-info">
                    <div class="w-100 d-flex justify-content-between">
                            <a href="index.php#formations">
                                <button class="btn m-1 btn1" style="background:grey;color:black;font-family:Lobster" type="button">
                                     <span><img src="icon/back.svg" alt="" style="width:30px; height:30px;"></span>
                                     <span class="btn1" style="background:grey;color:black;font-family:Lobster">Retour</span>
                                </button>
                            </a>
                        <?php if(isset($_SESSION['user'])):?>
                            <a  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <button class="btn m-1 btn1" style="background:orange;color:black;font-family:Lobster" type="button">
                                     <span><img src="icon/download.svg" alt="" style="width:30px; height:30px;"></span>
                                     <span class="btn1" style="background:orange;color:black;font-family:Lobster">Telecharger le PDF</span>
                                </button>
                            </a>
                        <?php else: ?>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal1">
                               <button class="btn m-1 btn1" style="background:orange;color:black;font-family:Lobster" type="button">
                                     <span><img src="icon/download.svg" alt="" style="width:30px; height:30px;"></span>
                                     <span class="btn1" style="background:orange;color:black;font-family:Lobster">Telecharger le PDF</span>
                                </button>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h3 class="site-titre"><?=$row['nom_formation']?></h3>
                <hr class="border-info">
                <h4 class="ib-btt">Details</h4>
                <div class="descrip">
                    <p><?=$row['description_forma']?></p>  
                <hr class="border-info">
            </div>
        </div>
    </div>
                   <div class="modal fade" id="exampleModal" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header text-center">
                                <h3 style="font-family:'Lobster Two';">Confirmation</h3>
                            </div>
                            <div class="modal-body">
                                <p style="font-family:'Patua One';">Voulez-vous télécharger le fichier de formation?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="image/<?=$row['fichier_forma']?>" target="_blank">
                                   <button class="btn btn-danger">Confirmer</button>
                                </a>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModal1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h3 style="font-family:'Lobster Two';">Information</h3>
                            </div>
                            <div class="modal-body">
                                <p style="font-family:'Patua One';">Vous devez vous inscrire pour participer à la formation</p>
                            </div>
                            <div class="modal-footer">
                                <a href="?page=login">
                                   <button class="btn btn-primary">S'inscrire</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                      </div>
                    </div>
</section>
