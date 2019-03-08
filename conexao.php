<?php
   $host = "localhost";
   $banco = "produtos";
   $usr = "root";
   $pwd = "Quejao1234!";

   $conn = mysqli_connect($host, $usr, $pwd, $banco);
   if  (!$conn){

       die ("falha na conexão:". mysqli_connect_erro());
   }

   else {

       echo "Conexão realizada com sucesso";
   }
   ?>