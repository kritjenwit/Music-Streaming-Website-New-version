<?php 

    $conn = new mysqli("localhost","root","","project");

    $music = $conn->real_escape_string($_POST['music_name']);
    $artist = $conn->real_escape_string($_POST['music_artist']);

    $data=$conn->query("SELECT * from music");
    if($data->num_rows > 0){
        $delete = $conn->query("DELETE from music where artist = '$artist' and music_name = '$music' ");
        if ($delete === true){
            echo "<script>alert('Selected music is deleted');</script>";
            header("Location: ../../../../admin-panel/delete-music.php");
        }else{
            echo "<script> alert('No music to be deleted');</script>";
            header("Location: ../../../../admin-panel/delete-music.php");

        }
    }else{
        echo "<script>alert('No data available');</script>";
    }

?>