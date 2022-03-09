<html>
    <!DOCTYPE html>
    <head>
        <title>Exercicios aula Emerson. </title>
    </head>
    <body>
        <form action ="Exercicios.php" method ="POST">
            <label>kilometros</label>
            <input type="number" name="kilometros"placeholder="digite a kilometragem"><br/><br/>
            <label>combustivel em L</label>
            <input type="number" name="combustivel"placeholder="digite combustivel em L"><br/><br/>
            <input type="submit" value="calcular media">
            <hr>

    </html>
    <?php
        if(isset($_POST['kilometros'])){
            $kilometros = $_POST['kilometros'];
            $combustivel = $_POST['combustivel'];
            $media = ($kilometros+$combustivel)/2;
            echo"distancia percorrida por L:<b>$media</b>";
            
            
        };
    ?>
 <hr>
 <h2>Exercicio2<h2>
 <html>
<body>
<label>fareheint</label>
<input type="number" name="fareheint" placeholder='temperatura em fareheint'/><br/><br/>
<input type = "submit" value =">> graus celsius"/><hr>
</body>
<?php
if(isset($_POST['fareheint'])){



$fareheint = $_POST['fareheint'];
$celsius = 5*($fareheint-32)/9;
echo"graus celsius:.$celsius";



}
else{}
 ?>
 </html>
 <h3>Exercicio3<h3>
 <hr>
 <label>numero inteiro>></label>
 <input type ="number" name ="numero inteiro>>" placeholder='digite um numero (inteiro)'><br/><br/>
 <input type ="submit" value ="par ou impar?"><hr>
<?php
if(isset($_POST['numero inteiro>>'])){



$numero = ['numero inteiro>>']%2;



}
if($numero=0){



    echo"é um numero par";



} 
else($numero>0);{
    
    
    echo"é um numero impar";


}
?>
