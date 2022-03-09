<html>
    <head>
     <title>Soma de dois valores</title>
       <meta name="description" content="Exercício 1"/>;
<head>
<body>
    <center>Marioridade</center>
    <hr>
    <form action="index.php" method="POST">
        <label>Digite seu nome</label><br>
        <input type="nome" placeholder= "Digite seu nome"/><br/>
        <label>Idade</label><br/>
        <input type="nome" name="Idade"placeholder="Digite sua idade"/><br/><br/>
        <input type="submit" value="Resultado"/>
     </fom>
<?php
if(isset($_POST['nome'])){

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $resultado = $a + $b;
   echo "<hr/>";
   echo "Seu nome é: <b>".$nome."</b><br/>";
   if($idade >= 18){
      echo "é maior.<br/>";
   }else {
      echo "Sua idade é: <b>".$idade."<b/>";
} else {
   echo "";
}
?>
<body>
<html>