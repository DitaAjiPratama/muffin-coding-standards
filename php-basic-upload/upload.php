<?php
if(@$_POST){
  echo $_FILES["fileToUpload"]["name"]; // yang keluar adalah judul dan format file
  
  if( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/".$_FILES["fileToUpload"]["name"]) )
    echo "<br>Success";
  else
    echo "<br>Failed<br>";
}
?>
