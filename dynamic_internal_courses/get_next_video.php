<?php 

include "./db.php";

if( isset($_POST['video_title']) )
{
     $video_title = $_POST['video_title'];
     
     $next = mysqli_query($mysqli, "SELECT * FROM `webdata` WHERE `id`>'$id' order by `id` ASC");
     
    if($row = mysqli_fetch_array($next))
    {
      echo '<a href="show.php?id='.$row['id'].'"><button type="button">Next</button></a>';  
    } 
     else
     {
           echo "query failed";
     }
}
else
{
         echo "value not set";
          // header();
}

?>