<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Client</title>
</head>
<body>

<?php
if(isset($_GET['ok'])){
    if($_GET['ok'] == 1){
        
        echo "<div style='margin-top: 410px; font-size: 35px; color:#02a1a1; margin-left: 130px;'>Client inseré avec succès</div>";
    }else{
        echo "<div style='margin-top: 50px; font-size: 35px; color:red; margin-left: 130px;'>Erreur d'insertion</div>";
 
    }
}
?>
 
 
    <div class="contenue">
        <div class="error" id="message_error"></div>
        <form action="<?php echo $base_url ?>controller/ClientController.php" method="POST" class="formClient" id="formClient" onsubmit="return validationClient()">

            <fieldset class="fieldset">
                <legend class="legend">Gestion des clients:</legend>
                <div class="itemFieldset">
                
                    <div>
                        <label for="">Type de client:</label>
                        <select name="type_client_id" id="type_client_id" onchange="verifTypeClient()">
                            <option value="">Choisir un type de client</option>

                            <?php
                                //on va parcourir la liste de typeclient envoye au niveau de l'index
                                while($tab = mysqli_fetch_row($listeTypeClient)){
                                
                                    echo"<option value='$tab[0]'>$tab[1]</option>";
                                }          
                            ?>
                        </select>

                    </div>
            
                    <div>
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Nom.....">
                    </div>
                    <div>
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prenom.....">
                    </div>

                    <div>
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse.....">
                    </div>

                    <div>
                        <label for="">Telephone</label>
                        <input type="text" name="tel" id="tel" placeholder="Telephone.....">
                    </div>

                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email.....">
                    </div>

                    <div id="listeEmployeur" class="listeEmployeur">
                        <label for="">Liste employeur:</label>
                        <select name="employeur_id" id="employeur_id">
                            <option value="">Votre entreprise</option>
                            <?php
                                //on va parcourir la liste des entreprise envoye au niveau de l'index
                                while($tab = mysqli_fetch_row($listeEmployeur)){
                                
                                    echo"<option value='$tab[0]'>$tab[2]</option>";
                                }          
                            ?>
                        </select>

                    </div>

                </div>

            </fieldset> 
            
            <fieldset class="fieldset" id="emp">
                <legend class="legend">Information supplémentaire:</legend>
                <div class="itemFieldset">

                    <div>
                        <label for="">Salaire</label>
                        <input type="text" name="salaire" id="salaire" placeholder="Salaire....." placeholder="salaire">
                    </div>

                    <div>
                        <label for="">Profession</label>
                        <input type="text" name="profession" id="profession" placeholder="Profession....."> 
                    </div>
                    <div id="ninea">
                        <label for="">Ninea</label>
                        <input type="text" name="numIdentification" id="numIdentification" placeholder="Num identification.....">
                    </div>

                    <div id="raisonsocial">
                        <label for="">Raison social</label>
                        <input type="text" name="raisonSocial" id="raisonSocial" placeholder="Raison social.....">
                    </div>

                    <div id="nomemployeur">
                        <label for="">Nom entreprise</label>
                        <input type="text" name="nom_employeur" id="nom_employeur" placeholder="Nom entreprise.....">
                    </div>
                   
                    <div id="adresseemployeur">
                        <label for="">Adresse entreprise</label>
                        <input type="text" name="adresse_employeur" id="adresse_employeur" placeholder="Adresse entreprise.....">
                    </div>


                </div>
                <div class="btnSave">
                    <input type="submit" name="btnAjouter" class="btn" value="Enregistrer"/>
                </div>
            </fieldset>    
        </form>  
    </div>
    </body>
</html>
