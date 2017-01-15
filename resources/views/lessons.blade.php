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
      
        <!-- //list available lessons
        //retrieving of files
        // $ctr = 1;
        // for($ctr;$ctr<4;$ctr++){
          
        //   $contents = File::get(storage_Path("../resources/lessons/lesson$ctr.txt"));
        //   //$exploded = explode("@",$contents);

        //   <p>$contents</p>";
        //   // foreach ($exploded as $line) {
        //   //   if (strpos($line, '20') == true)
        //   //     <h1>$line</h1><br>";
        //   //   else
        //   //     $line<br>";
        //   // }
        //     <br>";
        //   } -->
         <center>
           <select class="form-control" size="1" style="width:auto;font-size: 20px;" name="selectCoach" id="selectCoach" onchange="changeCoach(this.value)">  
          <!-- //creates choices of available lessons
          //change 4 to available lessons in db -->
          @for($ctr = 1;$ctr<4;$ctr++)
            <option value={{$ctr}}> lesson{{$ctr}} </option>
          @endfor 

          lesson {{$ctr}}
          </select>
          <br/>
          <div id="display_coach"></div>
        </center>
      
        <script type="text/javascript">

          function changeCoach(userChoice){
            var output= document.getElementById("display_coach");
            output.innerHTML="";

            //loops content of selected lesson
            
              if(userChoice == 1) {
                output.innerHTML = '<div> lesson1 {{ $contents = File::get(storage_Path("../resources/lessons/lesson1.txt")) }} {{ $contents}} </div>';
              }
          // $ctr = 2;
          // for($ctr;$ctr<4;$ctr++){
          //     else if(userChoice == \"lesson$ctr\") {";
          //       output.innerHTML=\'<div>
                  
          //         //contents of lesson here
          //         lesson$ctr";

          //         $contents = File::get(storage_Path("../resources/lessons/lesson$ctr.txt"));
          //         $exploded = explode("@",$contents);


          //         foreach (explode("@",$contents) as $line) {
          //           if (strpos($line, '20') == true)
          //             <h1>$line</h1><br>";
          //           else
          //             $line<br>";
          //         }
                  
          //       <\div>\
          //     }

         }

          
        
        </script>
      </p>
    </div>
  </div>
</div>
@stop
