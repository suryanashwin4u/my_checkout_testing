<?php 

include "./db.php";

if( isset($_POST['video_title']) )
{
    $video_title = $_POST['video_title'];
     
    $previous= mysqli_query($mysqli, "SELECT * FROM `webdata` WHERE `id`< '$id' order by `id` DESC");

    if($row = mysqli_fetch_array($previous)){

        echo '<a href="show.php?id='.$row['id'].'"><button type="button">Previous</button></a>';  

    }else{
        
        echo "query failed";
     
    }
}
else{
        echo "value not set";
        // header();
}

?>