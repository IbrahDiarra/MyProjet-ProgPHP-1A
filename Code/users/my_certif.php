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
<body>
       <div id="element" class="attesta m-5" style="border:1px solid black; width:700px; padding:15px; font-family:cambria; border-radius:15px;">
            <div>
                <img src="logo.png" alt="">
            </div>
            <br>
            <br>
            <h4 style="font-family:impact;">CERTIFICAT DE FORMATION EN PHP</h4>
            <br>
            <br>
            <p> Je sousigné Mr Imacertif, Expert en Programmation Web, Réseau et 
                Télécom agissant en qualité de formateur interne Imacertif, certifie que:
            </p><br>
            <span><b>L'étudiant(e) :</b> DIARRASSOUBA Ibrahim</span><br>
            <span><b>Matricule :</b>  22INP00100</span><br>
            <span> <b>Email: </b>ibrahidiarra410@gmail.com</span><br>
            <span>A reussi son test en PHP de <b>niveau</b>  </span><span>Animateur</span><br>
            <span>Avec une note de <span style="color:red;"> <b>15/20</b> </span> </span>
            <br>
            <br>
            <p>La présente attestion est délivrée à l'intéressé pour servir et valoir ce que de droit</p>
       </div>
</body>

<script>
   var element = document.getElementById("element")

   html2pdf(element)
</script>
</html>

