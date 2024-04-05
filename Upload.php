<?php
   if(isset($_FILES['file']))
   {
      /*print("Success! ");
      print("tmpName: " . $_FILES['file']['tmp_name'] . " ");
      print("size: " . $_FILES['file']['size'] . " ");
      print("mime: " . $_FILES['file']['type'] . " ");
      print("name: " . $_FILES['file']['name'] . " ");*/

      move_uploaded_file($_FILES["file"]["tmp_name"],
         "upload/" . $_FILES["file"]["name"]);
      echo "upload/" . $_FILES["file"]["name"];

   } else
   {
      print("Failed!");
   }
?>