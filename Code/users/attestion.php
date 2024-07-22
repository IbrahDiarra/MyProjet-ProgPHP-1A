<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster Two">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua One">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="style/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Impression Certificat</title>
</head>

<style>
 .attesta{
    background-color: #ebf6ff;
 }
 .mtitre{
    font-family: 'Patua One';
 }
</style>
<body>
       <div id="element" class="attesta m-5" style="border:1px solid black; width:700px; padding:15px; font-family:cambria; border-radius:15px;">
            <div class="text-center">
                <img src="logo.jpg" alt="">
            </div>
            <br>
            <br>
            <h3 class="text-center" style="font-family:Lobster;">Attestation de particpation à la formation de certification en PHP</h3>
            <br>
            <div>
                <img src="../images/ib.jpg" alt="" style="width:110px; height:110px; border-radius:20px;">
            </div>
            <br>
            <p> Je sousigné <span class="mtitre">Mr Imacertif</span>, Expert en Programmation Web, Réseau et 
                Télécom agissant en qualité de formateur interne Imacertif, certifie que:
            </p>
            <span class="mtitre"><b>L'étudiant(e) :</b> DIARRASSOUBA Ibrahim</span><br>
            <span class="mtitre"><b>Matricule :</b>  22INP00100</span><br>
            <span class="mtitre"> <b>Email: </b>ibrahidiarra410@gmail.com</span><br>
            <span>A reussi son test en PHP de niveau <b class="mtitre">Animateur</b></span> avec un nombre de tentative <span class="mtitre">5 fois</span><br>
            <span>Avec une note de <span style="color:red;"> <b>15/20</b> </span> </span>,
            <span>avec une durée de formation de : <span class="mtitre" style="color: blue;">10 jours</span></span>
            <br>
            <br>
            <p>La présente attestion est délivrée à l'intéressé pour servir et valoir ce que de droit</p>
            <div>
                <div>
                    <div>
                        <span class="mtitre">Formateur</span>
                    </div><br>
                    <div class="text-center" style="width:200px; height:90px; border: 2px solid black;">
                        <span class="mtitre">Signature</span>
                    </div>
                </div>
            </div>

       </div>
</body>
<script>
   var element = document.getElementById("element")

   html2pdf(element)
</script>
</html>

