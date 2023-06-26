<?php
    include("./conexion.php");
    session_start();
    $id_user = $_SESSION['id'];

    if(isset($_POST["modulo"]) && isset($_POST["apartado"]) && isset($_POST["numero"])){
        $uno = $_POST['modulo'];
        $dos = $_POST['apartado'];
        $tres = $_POST['numero'];

        $cons = "SELECT JSON_EXTRACT($uno , '$.$dos') as status FROM `$tres` WHERE id_user=$id_user;";
        $search = mysqli_query($conexion, $cons);
        $row_cnt = $search->num_rows;
        // echo $row_cnt;
        if($row_cnt != 0){
            $row = mysqli_fetch_array($search);
            if($row['status']){
                echo 1;
            } else 
                echo 0;
        }else 
            echo 0; 

    }
?>