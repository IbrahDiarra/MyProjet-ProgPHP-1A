
<section class="page-section">
    <?php

        require_once('connect.php');
        $ReadSql = "SELECT *FROM `etudiant` ";
        $res = mysqli_query($con, $ReadSql);
    ?>


        <div class="container bg-white" style="border-radius:15px;">
            <div class="row  mt-5">
                <h2 class="text-center text-primary" style="font-family: 'Lobster Two';">La liste des etudiants</h2><br>
            </div>

            <table class="table table-striped mt-3" >
                <colgroup >
					<col width="12%">
					<col width="14%">
					<col width="12%">
					<col width="22%">
					<col width="12%">
                    <col width="8%">
                    <col width="10%">
                    <col width="10%">
				</colgroup>
                <thead style="font-family: 'Patua One';" >
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>E-mail</th>
                        <th>Sexe</th>
                        <th>Photo</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($r=mysqli_fetch_assoc($res)){ ?>

                        <tr>
                            <th scope="row"><?php echo $r['matricule_et']; ?></th>
                            <td><?php echo $r['nom_et']; ?></td>
                            <td><?php echo $r['prenom_et']; ?></td>
                            <td><?php echo $r['email_et']; ?></td>
                            <td><?php echo $r['sexe_et']; ?></td>
                            <td><img src="../image/<?=$r['photo_et'];?>" style="width:40px; height:40px; border-radius:15px;"></td>
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <?php if($r['Statut'] == 0): ?>
                                        <span class="badge bg-warning text-dark" style="position:relative; top:10px;">En attente</span>
                                    <?php elseif($r['Statut'] == 1): ?>
                                        <span class="badge bg-primary  text-dark" style="position:relative; top:10px;">Confirmé</span>
                                    <?php elseif($r['Statut'] == 2): ?>
                                        <span class="badge bg-danger text-dark" style="position:relative; top:10px;">Annulé</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">

                                    <i data-bs-toggle="modal" data-bs-target="#exampleModalet<?php echo $r['id']; ?>" style="cursor:pointer;">
                                        <span><img src="icon1/edit.svg" alt="" style="width:30px; height:30px;"></span>
                                    </i>
                                    <i data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $r['id']; ?>" style="cursor:pointer;">
                                        <span><img src="icon1/delete.svg" alt="" style="width:30px; height:30px;"></span>
                                    </i>
                                </div>
                                <div class="modal fade" id="exampleModal1<?php echo $r['id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 style="font-family:'Lobster Two';">Attention</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p style="font-family:'Patua One';">Voulez-vous supprimer cet étudiant?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="delete_users.php?id=<?=$r['id'];?>">
                                                     <button class="btn btn-danger">Confirmer</button>
                                                </a>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalet<?php echo $r['id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 style="font-family:'Lobster Two';">Attention</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p style="font-family:'Patua One';">Voulez-vous changer le statut?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="?page=edit_users&id=<?php echo $r['id']; ?>">
                                                    <button class="btn btn-danger">Confirmer</button>
                                                </a>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                   <?php }?>
                </tbody>
            </table>
        </div>


</section>

                   