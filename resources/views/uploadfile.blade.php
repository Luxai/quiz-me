<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
  </head>
  <body>

@extends('master')

@section('audio')
  <audio id="myaudio" loop="true" autoplay="true" src="/rsc/004.mp3"></audio>
@stop

@section('title')
    Lessons
@stop

@section('navbar')
  <li><a href="#lesson">LESSON</a></li>
  <li><a href="/profile">PROFILE</a></li>
@stop

    <?php
      
     echo '<p align=\'left\'>';
        echo '<br><br><br>';

       echo '&nbsp;&nbsp;';//.Form::open(array(url=>/uploadfile','files'=>\'true\'));
          
        echo Form::open(array('url'=>'/uploadfile','method'=>'POST', 'files'=>true));
        //echo '<form action="upload" id="uploadfile" enctype="multipart/form-data">';
       // echo '<input type="file" name="file[]" multiple files="true">';
        echo '&nbsp;&nbsp;&nbsp;Upload a New Lesson? ';
        echo '<br>';
        $file = Form::file('image');
       echo Form::file('image[]', ['multiple' =>'multiple']);


       //echo   '<a href="/register"><button class="btn btn-default btn-lg" type="submit">Choose File</button></a>';
        echo '<br>';  
        echo '&nbsp;&nbsp;';
        echo Form::submit('Upload File');

     // echo  '<a href="/uploadfile"><button class="btn btn-default btn-lg" type="">Upload File</button></a>';
      // echo '$up'
        echo '<br>';
        echo Form::close();
      echo '</p>';

     ?>

  </body>
</html>