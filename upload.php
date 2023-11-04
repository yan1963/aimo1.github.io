<?php
  //var_dump($_FILES['pic']['name'],$_FILES['pic']['tmp_name']);
  //file_uploads = On
 
  //$filename=$_FILES['pic']['name'];
  //$name="c:/2.txt";
  //$pic="c:/2.txt";
  var_dump($_FILES);
  $filename=$_FILES['pic']['name'];
  //$filename='c:\2.txt';//new add
 ;
  $ext=pathinfo($filename,PATHINFO_EXTENSION);
  $randFilename=date('YmdHis').random_int(100000,999999);
  $newFileName=$randFilename.'.'.$ext;
  //$randFilename='10000'.'1000'.
  $newFileName='d0'.'.'.$ext;//new add

  //if(move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/' . $newFileName)){
  if(move_uploaded_file($_FILES['pic']['tmp_name'],'photo/' . $newFileName)){
	  echo'文件上传成功';
	  //echo file.pathinfo();
	  //echo pic;
	  //echo $tmp_name;
  }else{
	  echo'文件上传失败';
  }

