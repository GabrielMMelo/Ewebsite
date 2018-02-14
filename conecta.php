<?php 
                        # servidor_local  user_bd    senha_bd     nome_bd
    $con = @mysqli_connect('localhost', 'emakers', 'emakers', 'bd_emakers');

    if (!$con) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }
    #echo 'Connected to MySQL';
?>
