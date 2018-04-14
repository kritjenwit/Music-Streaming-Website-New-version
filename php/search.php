<?php 

    $conn = new mysqli("localhost","root","","project");

    $search = $conn->real_escape_string($_POST['search']);

    // Search music

    $data_music = $conn->query("SELECT * from music where music_name = '$search' artist = '$search' ");
    $data_album = $conn->query("SELECT * from album where album_name = '$search' or music_name = '$search' or artist = '$search' ");

    if($data_music->num_rows > 0){
        $data = $conn->query("SELECT * from music where music_name = '$search' artist = '$search' ");
            while($row = $data->fetch_assoc()){
                $url = $row['music_file'];
                $music_name = $row['music_name'];
        
                echo "<li><a href='$url'>$music_name</a></li>";
        
            }
    }

?>