<?php
require './src/dbConnect.php';
require './configs/global.php';
require_once './src/crud.php';
?>
<div class="container ">
    <div class="col-md-12 col-lg-12">
        <table class="table text-center">
        <thead class="thead">
            <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro de Téléphone</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $data = getAll($connection);
                    $i = 0;
                    foreach ( $data as $key => $value) { 
                ?>
                        <tr>
                            <th scope="row"><?= ++$i ?></th>
                            <td><?= $value["surname"] .' '.$value["name"] ?></td>
                            <td><?= $value["email"] ?></td>
                            <td><?= $value["phone"] ?></td>
                            <td><a href="./?page=detail&layout=html&id=<?= $value["id"] ?>"><i class="bi bi-eye"></i></a>   <a href="./?page=formmodifier&layout=html&id=<?= $value["id"] ?>" ><i class="bi bi-pencil-square"></i></a>   <a href="./?page=supprimer&layout=html"><i class="bi bi-trash"></i></a></td>
                        </tr>
                <?php      
                    }
                ?>
        </tbody>
        
        </table>
    </div>
</div>
