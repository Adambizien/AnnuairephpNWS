<?php 
    require_once "./src/dbConnect.php";

    //fonction getall de foramtion
    function getAllFormation($connection){
        $statement = $connection->query("SELECT * FROM formation WHERE 1");
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data ;
    }
    //fonction getById de formation
    function getByIdFormation ($connection,$id){
        $statement = $connection->prepare("SELECT * FROM `formation` WHERE id_formation = ?");
        $statement->bindParam(1,$id);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //fonction de recherche, de tri et de filtre
    function searchFiltreTri($connection,$filtre,$searchName,$tri){
        $prepare = "SELECT * FROM `listUser` WHERE 1";
        if($filtre != ''){
            $prepare .= " AND formation_id = ".$filtre;
        }
        
        if ($searchName != '') {
            $names = explode(' ', $searchName);

            $first_name = isset($names[0]) ? trim($names[0]) : '';
            $last_name = isset($names[1]) ? trim($names[1]) : '';
    
            if ($first_name != '') {
                $prepare .= " AND (name LIKE '%" . $first_name . "%' OR surname LIKE '%" . $first_name . "%')";
            }
            if ($last_name != '') {
                $prepare .= " AND (name LIKE '%" . $last_name . "%' OR surname LIKE '%" . $last_name . "%')";
            }
        }
        if($tri != ''){
            if($tri == "asc"){
                $ordre = 'ASC';
            }else{
                $ordre = 'DESC';
            }
            $prepare .= " ORDER BY surname ". $ordre;
        }
        $statement = $connection->prepare($prepare);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //fonction getById de listUser
    function getByID ($connection,$id){
        $statement = $connection->prepare("SELECT * FROM `listUser` WHERE id = ?");
        $statement->bindParam(1,$id);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // dd(getByID($connection, 10));

    //function getByName 
    function getByName ($connection,$name,$surname){
        $statement = $connection->prepare("SELECT * FROM listUser WHERE `name` = ? AND `surname` = ?");
        $statement->bindParam(1,$name);
        $statement->bindParam(2,$surname);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    // dd(getByName($connection,"exemple","exemple"));
   

    //fonction create
    function create($connection,$payload ){
        $table = '(';
        $first = false;
        foreach($payload as $value){
            if(!$first){
                $table .= '"'.htmlspecialchars($value).'"';
                $first = true;
            }else{
                $table .= ",". '"'.htmlspecialchars($value).'"';
            }
        }
        $table .= ')';
         $statement = $connection->prepare("INSERT INTO `listUser` (`surname`,`name`,`birthday`,`email`,`phone`,`address`,`postalcode`,`city`,`description`,`formation_id`) 
        VALUES ".$table );
        $statement ->execute();
    }
    // create($connection,["exemple","exemple","2023-10-15","exemple","exemple","exempel","76100","exe","ee"]);

    //fonction getAll de liste user
    function getAll($connection){
        $statement = $connection->query("SELECT * FROM listUser WHERE 1 ORDER BY surname ASC");
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data ;
    }
    // dd(getAll($connection));
    

    // fonction delete 
    function delete($connection,$id){
        $statement = $connection->prepare("DELETE FROM `listUser` WHERE id = ?");
        $statement->bindParam(1,$id);
        $statement ->execute();
    }
    // delete($connection,1);
    

    //fonction update
    function update($connection,$id,$payload){
        $first = false;
        $table ='';
        $colmName = ["surname","name","birthday","email","phone","address","postalcode","city","description","formation_id"];
        foreach($payload as $key => $value){
            if(!$first){
                $table .= '`'.$colmName[$key].'` = "'.htmlspecialchars($value).'"';
                $first = true;
            }else{
                $table .= ",".'`'.$colmName[$key].'` = "'.htmlspecialchars($value).'"';
            }
        }

        $statement = $connection->prepare("UPDATE `listUser` SET ".$table." WHERE id = ?");
        $statement->bindParam(1,$id);
        $statement ->execute();
    }
    // update($connection,2,["surname"=>"test","name"=>"test","birthday"=>"2023-10-16","email"=>"test","phone"=>"test","address"=>"test","postalcode"=>"76101","city"=>"test","description"=>"test"]);

 
