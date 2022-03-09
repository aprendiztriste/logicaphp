<html>
    <body>
    <form action = exemplo1.php method ="POST">
        <label>numero qualquer</label>
        <input type = number name = numero placeholder="numero qualquer" required><br/><hr>
        <input type = submit value = resultado>
        <?php
            if(isset($_POST['numero'])){
                $n = $_POST['numero'];
                if($n % 2 == 0){


                echo"é par";


                }
            

            else{
                
                
                echo"é impar";



            }


            }
        ?>
        </body>
        </html>


    