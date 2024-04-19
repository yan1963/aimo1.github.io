<?php
  header('Content-Disposition:attachment;filename="photo.zip"');
  //
  $file_content=file_get_contents('./code0.txt');

  //readfile('./photo.zip');
  readfile('http://['.$file_content.']/photo.zip');

?>