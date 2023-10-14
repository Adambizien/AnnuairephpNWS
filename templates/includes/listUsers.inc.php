<?php
require './src/dbConnect.php';
require_once './src/crud.php';
$formations = getAllFormation($connection);
?>
<div class="container ">
    <div class="row">
        <div class="col-mb-4 col-lg-4 bg-light ">
            <form action="#" method="post">
                <div class="col-sm-12">
                    <label for="search" class="form-label">Recherche</label>
                    <input type="text" class="form-control " id="search" name="search" value="<?php echo (!empty($_POST['search']) ? $_POST['search'] : "" ); ?>" placeholder="Nom,prenom..." >
                </div>
                <div class="col-sm-12">
                    <label for="filtre" class="form-label">Formation</label>
                    <select name="filtre" id="filtre" class="form-select">
                        <option disabled selected hidden>Filtrer selon la formation... </option>
                        <option value="">Toutes les formations</option>
                        <?php
                            foreach ($formations as $formation) {
                                echo "<option value='{$formation['id_formation']}' " .
                                ( !empty($_POST['filtre']) && $_POST['filtre'] == $formation['id_formation'] ? 'selected' : ''
                                ) . ">{$formation['nom_formation']}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-sm-12">
                    <label for="tri" class="form-label">Ordre de tri des noms</label>
                    <select name="tri" id="tri" class="form-select">
                        <option value='asc' <?= ( isset($_POST['tri']) && $_POST['tri'] == 'asc' ? 'selected' : '') ?>>Croissant</option>
                        <option value='desc' <?= ( isset($_POST['tri']) && $_POST['tri'] == 'desc' ? 'selected' : '') ?>>Décroissant</option> 
                    </select>
                </div>

                <input type="submit" class="w-100 btn btn-primary btn-lg mr-3 mb-3 mt-3 " name="submit" value="Envoyer">
            </form>
        </div>
        <div class="col-md-8 col-lg-8">
            <table class="table text-center">
            <thead class="thead">
                <tr class="table-dark">
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Numéro de Téléphone</th>
                <th scope="col">Formation</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        if(isset($_POST['submit'])){
                            $data = searchFiltreTri($connection,(isset($_POST['filtre'])? $_POST['filtre'] : '' ),(isset($_POST['search'])? $_POST['search'] : ''),(isset($_POST['tri'])? $_POST['tri'] : ''));
                        }else{
                            $data = getAll($connection);
                        }
                         
                        $i = 0;
                        foreach ( $data as $key => $value) { 
                           $formation = getByIdFormation($connection,$value["formation_id"]);
                    ?>
                            <tr>
                                <td><?= $value["surname"] .' '.$value["name"] ?></td>
                                <td><?= $value["email"] ?></td>
                                <td><?= $value["phone"] ?></td>
                                <td><?= $formation[0]['nom_formation'] ?></td>
                                <td><a href="./?page=detail&layout=html&id=<?= $value["id"] ?>"><i class="bi bi-eye"></i></a>   <a href="./?page=formmodifier&layout=html&id=<?= $value["id"] ?>" ><i class="bi bi-pencil-square"></i></a>   <a href="./?page=supprimer&layout=html&id=<?= $value["id"] ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                    <?php      
                        }
                    ?>
            </tbody>
            
            </table>
        </div>
    </div>
</div>
