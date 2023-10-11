<?php 
    require_once "./src/dbConnect.php";

    //fonction getById
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
         $statement = $connection->prepare("INSERT INTO `listUser` (`surname`,`name`,`birthday`,`email`,`phone`,`address`,`postalcode`,`city`,`description`) 
        VALUES ".$table );
        $statement ->execute();
    }
    // create($connection,["exemple","exemple","2023-10-15","exemple","exemple","exempel","76100","exe","ee"]);

    //fonction getAll
    function getAll($connection){
        $statement = $connection->query("SELECT * FROM listUser WHERE 1");
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
        $colmName = ["surname","name","birthday","email","phone","address","postalcode","city","description"];
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


// function queryBuilder($method, $table, ...$payload){
//     $query ="";
//     switch ($method) {
//         case 'c':
//             $query .= "INSERT INTO ";
//             break;
//         case 'r':
//             $query .= "SELECT * FROM ";
//             break;
//         case 'u':
//             $query .= "UPDATE ";
//             break;
//         case 'd':
//             $query .= "DELETE ";
//             break;
//         default:

//             die("ERROR : Prepared query method not defined");
//             break;
//     }

//     $query .= '`'.  htmlspecialchars($table) . '` ';
//     if($method ==='u'){
//         $query .= "SET ";


//     }
//     if($method ==="c"){
//         $columnParse  = '(';
//         $valueParse  = '(';
//         foreach ($payload as $index => $column) {
//             foreach ($column as $key => $value) {
//                 if(is_string($value)){
//                     $value = "\"" . $value. "\"";
//                 }
//                 $columnParse .= "`" . $key . "`"; 
//                  if(!(count($payload) == ($index + 1 ))){
//                 $columnParse .= ", ";
//             }
//             }

//         }
//         $columnParse.= ")";
//              foreach ($payload as $index => $column) {
//             foreach ($column as $key => $value) {
//                 if(is_string($value)){
//                     $value = "\"" . $value. "\"";
//                 }
//                 $valueParse .= $value ; 
//                  if(!(count($payload) == ($index + 1 ))){
//                 $valueParse .= ", ";
//             }
//             }

//         }
//         $valueParse.= ")";
//         $query .= $columnParse . " VALUES " . $valueParse;
//     }
//     if($method ==='u'){
//         foreach ($payload as $index => $filter) {
//             foreach ($filter as $key => $value) {
//                 if($key !== "id"){
//                     if(is_string($value)){
//                         $value = "\"" . $value. "\"";
//                     }

//                     $query .= "`" . $key . "` = ". $value .' ' ; 

//                     if(!(count($payload) == ($index + 2 ))){
//                         $query .= ", ";
//                     }
//                 }
//             }

//         }
//     }
//     if($method !=='c' && $method !== "u" && count($payload)){
//         $query .= "WHERE ";
//         foreach ($payload as $index => $filter) {
//             foreach ($filter as $key => $value) {
//                 if(is_string($value)){
//                     $value = "\"" . $value. "\"";
//                 }
//                 $query .= "`" . $key . "` = ". $value . " AND "; 
//             }
//             if(count($payload) == ($index + 1 ) && $method !=='r'){
//                 $query .= "1";
//             } else if(count($payload) == ($index + 1 )) {
//                 $query .= '`status` = "online"';
//             }
//         }
//     } else if($method === "u"){
//         $idFound = false;
//         foreach ($payload as $index => $filter) {
//             foreach ($filter as $key => $value) {
//                 if($key === "id"){
//                     $idFound = true;

//                     $query .= "WHERE ";
//                     $query .= "`" . $key . "` = ". $value;
//                 } 
//             }
//         }
//         if(!$idFound){
//             die("ERROR : Not id to update");
//         }
//     }

//    return $query;

// } 
// dd(queryBuilder("c", "voiture", ["modele" =>"Ferrari"], ["couleur" => "rouge" ], ["test" => "taste"]));
// dd(queryBuilder("r", "contacts",  ["name" => "Delaistre" ]));
// dd(queryBuilder("u", "voiture", ["modele" => "Ferrari" ], ["couleur" => "rouge" ], ["id" => 2]));
// dd(queryBuilder("d", "voiture", ["modele" => "Ferrari" ], ["couleur" => "rouge" ]));

   
