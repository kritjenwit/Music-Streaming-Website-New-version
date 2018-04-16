<?php 

    $conn = new mysqli("localhost","root","","project");

    $music = $conn->real_escape_string($_POST['album_name']);
    $artist = $conn->real_escape_string($_POST['album_artist']);

    $data=$conn->query("SELECT * from album");
    if($data->num_rows > 0){
        $delete = $conn->query("DELETE from album where artist = '$artist' and album_name = '$music' ");
        if ($delete === true){
=            $_SESSION['msg']='<div class="alert alert-success"><strong>Success!</strong> Selected Album is deleted.</div>';
            header("Location: ../../../../admin-panel/delete-music.php");
        }else{
            $_SESSION['msg']='<div class="alert alert-danger"><strong>Error!</strong> Cannot delete the album.</div>';
            header("Location: ../../../../admin-panel/delete-music.php");

        }
    }else{
        $_SESSION['msg']='<div class="alert alert-danger"><strong>Error!</strong> No data available.</div>';
    }

?>