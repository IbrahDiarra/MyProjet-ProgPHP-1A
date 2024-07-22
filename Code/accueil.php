<?php  require_once('connect.php');
       $req = mysqli_query($con , "SELECT * FROM formation order by rand()");
?>

<section class="page-section pt-5 mt-2" id="about">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active" >
                <img src="images/qcmcon.jpg" class="d-block imag1" alt="..." >
            </div>
            <div class="carousel-item" >
                <img src="images/qcmamateur.jpg" class="d-block imag1" alt="..." >
            </div>
            <div class="carousel-item" >
                <img src="images/qcmd01.jpg" class="d-block imag1" alt="..." >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="page-section" id="formations">
    <div class="cardss">
        <div>
            <h3 class="ibtexte1">Nos principales formations en PHP:</h3>
        </div>
        <br>
        <div class="cards">
        <?php while($row = mysqli_fetch_assoc($req)){?>        
                    <div class="card" >
                           <img class="card-img-top ibcard" src="image/<?=$row['image_formation']?>">
                            <div class="cardi-body">
                                <div class="card1-body"> 
                                    <span><h4 class="ibtexte12" style="padding-left:10px;font-size:20px;"><?=$row['categorie_formation']?></h4></span>  
                                </div>
                            <div class="card2-body">
                                <a href="?page=voir_formation&id=<?php echo ($row['id']) ?>">
                                    <button class="btn m-2 btn1" style="background:orange;color:black;font-family:Lobster" type="button">Voir plus </button>
                                </a>
                            </div>
                        </div>
                    </div>  
        <?php }?>
               
                                
       </div>
    </div>
</section>

<section class="page-section pb-5 mb-5" id="contact">
               <div class="cardss1 pb-3">
                    <div class="pt-3">
                        <h3 class="ibtexte1 text-center">Nous contactez:</h3>
                    </div>
                    <br>
                    <div class="row" contact>
                          <div class="col-lg-5" style="background-image:url('images/php2.jpg');background-position:center; border-radius: 15px 0 0 15px;">
                          </div>
                          <div class="col-lg-7 p-5 bg-info" style="border-radius: 0 15px 15px 0; font-family:Lobster;">
                                <div>
                                    <form class="user" id="contactForm">
                                        <div class="ca">
                                            <div class="row">
                                                  <div class="col-md-6">
                                                    <label>Votre Nom</label>
                                                    <div class="input-group mb-4">
                                                          <input class="form-control" placeholder="eg. William"  type="text" id="name" name="name"  required />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 ps-2">
                                                      <label>Objet</label>
                                                      <div class="input-group mb-4">
                                                          <input id="subject" class="form-control" name="subject" type="subject" placeholder="L'objet de votre message *" required />
                                                      </div>
                                                  </div>
                                              </div>
                                              <div>
                                                  <label>Adresse Email</label>
                                                  <div class="input-group">
                                                      <input type="email" class="form-control" placeholder="will@gmail.com" id="email" name="email"  data-sb-validations="required,email" />
                                                  </div>
                                              </div>
                                              <div class="form-group mt-4">
                                                <label>Votre message</label>
                                                <textarea class="form-control" id="message" name="message" placeholder="Votre message *" required></textarea>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <button class="btn bg-primary mt-3" id="submitButton" style="color:black; font-family:Patua One;" type="submit">Envoyer votre message</button>
                                                  </div>
                                              </div>
                                        </div>
                                    </form>
                              </div>
                          </div>
                    </div> 
                </div> 
</section>