<?php
  header('Content-Disposition:attachment;filename="phpStudy_64.zip"');
  //
  $file_content=file_get_contents('./code0.txt');
  //$str=rtrim($file_content);
  //$new_str=str;

  //echo $file_content."<br>";
  //readfile('http://[240e:306:d82:b9f2:3127:ad32:f962:2700]/phpStudy_64.zip');
  //$file_content='240e:306:d82:b9f2:3127:ad32:f962:2700';
  readfile('http://['.$file_content.']/phpStudy_64.zip');
  