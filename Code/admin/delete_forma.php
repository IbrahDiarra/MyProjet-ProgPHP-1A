<?php
    require_once('connect.php');

        $id = $_GET['id'];
        $DelSql = "DELETE FROM `formation` WHERE id='$id' ";

        $res = mysqli_query($con, $DelSql);
        if ($res){
            header("Location:index.php?page=voir_forma");
        }else{
            echo "Echec de suppression";
        }

?>

