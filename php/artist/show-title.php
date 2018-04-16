<?php 

    $conn = new mysqli("localhost","root","","project");
    $artist=$_GET['artist'];

    $data_count_music = $conn->query("SELECT count(*) from music where artist = '$artist' ");
    $data_count_album = $conn->query("SELECT count(*) from album where artist = '$artist' ");

    while ($row_music = $data_count_music->fetch_array()){
        while($row_album = $data_count_album->fetch_array()) {
            if($row_music['0'] != 0 && $row_album['0'] != 0){
                if($row_music['0'] > $row_album['0']){
                    if($data_check->num_rows > 0){
                        $data = $conn->query("SELECT * from music where  artist = '$artist' group by artist ");
                        while($row = $data->fetch_assoc()){
                            echo "<h1 class='display-4'>$artist </h1>";
                    
                        }
                    }
                }else{
                    $data = $conn->query("SELECT * from album where  artist = '$artist' group by artist");
                    if($data->num_rows > 0){
                        while($row = $data->fetch_assoc()){
                            echo "<h1 class='display-4'>$artist </h1>";
                        }
                    }
                }
            }else if($row_music['0'] != 0 && $row_album['0'] == 0){
                $data = $conn->query("SELECT * from music where  artist = '$artist' group by artist");
                while($row = $data->fetch_assoc()){
                    echo "<h1 class='display-4'>$artist </h1>";
            
                }
            }else if($row_music['0'] == 0 && $row_album['0'] != 0){
                $data = $conn->query("SELECT * from album where  artist = '$artist' group by artist");
                if($data->num_rows > 0){
                    while($row = $data->fetch_assoc()){
                        echo "<h1 class='display-4'>$artist </h1>";
                    }
                }
            }
        }
    }












    // $data = $conn->query("SELECT * from album where  artist = '$artist' group by artist");
    // while($row = $data->fetch_assoc()){
    //     $url = $row['album_file'];

    //     echo "<h1 class='display-4'>$artist</h1>";

    // }

?>