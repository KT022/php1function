<?php 
// connect database 
function pdo_get_connection() {
    $db = "mysql:host=localhost;dbname=assignment1";
    $user = 'root';
    $password = '';

    $conn = new PDO($db, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

    if($conn) echo "connect database successfully";
    else echo"connect database failed";
}

function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch (Exception $e){
        throw $e;
    }
    finally{
        unset ($conn);
    }
}

function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch (Exception $e){
        throw $e;
    }
    finally{
        unset ($conn);    
    }
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch (PDOException $e){
        throw $e;
    }
    finally{
        unset ($conn);
    }
}