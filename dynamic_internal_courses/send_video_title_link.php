<?php 

include "./db.php";

if( isset($_POST['video_title']) )
{
     $video_title = $_POST['video_title'];
     
     $sql_1 = "SELECT * FROM `video_title_description_links` WHERE `video_title`= '$video_title'";
     
     if($result = mysqli_query($conn,$sql_1))
     {

         $row = mysqli_fetch_assoc($result);

         $video_id = $row['video_id'];
         $course_name = $row['course_name']; 
         $video_title = $row['video_title']; 
         $video_description = $row['video_description']; 
         $video_link = $row['video_link']; 
         $video_code = $row['video_code']; 

         echo $video_link;
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