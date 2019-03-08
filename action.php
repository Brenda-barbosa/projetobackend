<?php
include_once "getset.php";
include_once "conexao.php";
$get = new test2 ($category_code,$category_name);
try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO categories (category_code, category_name) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt,'is',$get->getcategory_code(),$get->getcategory_name());
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
}catch(Exception $e){
    echo "erro";
}
?>