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

@section('admin')
	<div id="lesson" class="container-fluid bg-grey">
  	<div class="row">
    <div class="col-sm-8">
      <p style="font-size: 20px">
      <?php 
        //retrieving of files
        $contents = File::get(storage_Path('../resources/lessons/vince.txt'));
        $exploded = explode("@",$contents);

        foreach ($exploded as $line) {
          if (strpos($line, '20') == true)
            echo "<h1>$line</h1><br>";
          else
            echo "$line<br>";
        }
      ?>
      </p>
    </div>
  </div>
</div>
@stop
