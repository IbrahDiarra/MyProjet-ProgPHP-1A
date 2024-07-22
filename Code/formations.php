
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster Two">
<style>
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
		font-size:25px;
	}
	.ib-bt{
		font-family:"Patua One";
	}
</style>
<section class="page-section bg-light mt-5 mb-5 pb-3 pt-5">
	<div class="container bg-light mb-5 pb-5 mysite">

		    <h2 class="text-center ibsite">Nos Formations</h2>
			<div class="d-flex w-100 justify-content-center">
				<hr class="border-info" style="border:3px solid" width="15%">
			</div>
			<div class="w-100 g-2">
                <?php
                    require_once('connect.php');
                    $req = mysqli_query($con , "SELECT * FROM formation order by rand()");
                    while($row = mysqli_fetch_assoc($req)):
                            
                            
                            
                    ?>

					<div class="card w-100 rounded-3  package-item" style="display:flex; flex-direction:row;">
                        <img class="card-img-top ibcard" src="image/<?=$row['image_formation']?>" style="height:10rem; width:14rem;">
						<div class="card-body">
						    <h3 class="card-title truncate-1 site-titre"><?=$row['categorie_formation']?></h3>
						    <p class="card-text"><?php echo $row['description_forma'] ?></p>
							<div class="w-100 d-flex">
                               <a href="?page=voir_formation&id=<?php echo ($row['id']) ?>" >
                                    <button class="btn m-2 btn1" style="background:orange;position: relative;right:0px;color:black;font-family:Lobster" type="button">Voir plus </button>
                                </a>
							</div>
						</div>
					</div>   
                    <br>  
                <?php endwhile; ?>
			</div>
			
	</div>
</section>