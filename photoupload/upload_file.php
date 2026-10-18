<?php
  $successpage = "http://oldyellowdoor.com/photoupload/uploadsuccess.html";
  $errorpage = "http://oldyellowdoor.com/photoupload/uploaderror.html";
  $uploadpath = "/home3/lylehadl/public_ftp/incoming/";    

  if ($_FILES["file"]["error"] > 0)
    {
      //header("Location: " . $errorpage);
      echo "Error uploading file: " . $_FILES["file"]["error"];
    }
  else
    {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadpath . $_FILES["file"]["name"]))
          {
            header("Location: " . $successpage);
          }
      else
          {
            echo "An error was encountered while moving the file";
          }
    }
?>