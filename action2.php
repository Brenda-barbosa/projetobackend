
<?php
include_once "getset2.php";
include_once "conexao.php";
$get = new test($sku,$name,$price,$quantity,$categories,$description);
try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO product(sku, name, price, quantity, categories, description) VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssdiis',$get->getsku(),$get->getname(),$get->getprice(), $get->getquantity(),$get->getcategories(),$get->getdescription());
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
}catch(Exception $e){
    echo "erro";
}
?>