<?php

namespace QuizMe\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class FileuploadingController extends Controller
{
    //
    // create function for our upload page
    public function index(){
      return view('uploadfile');

    }
    // create new function for show uploaded page
    public function showfileupload(Request $request){
      $file[] = $request -> file('images');
      //$file_count = count($file);
       $uploadcount = 0;
       $failcount = 0;
      /*
      //$files[];
      if($request -> file('images')){

        foreach($request->file('files') as $file) {
        $file->move(base_path().'/public/uploads/', $file->getClientOriginalName());
    }
  }  */



     
    
      //
      //$file = $request -> file('image');
     // $file = $request -> file('image');

    //original
      // show the file name
      if ($file == null) {
        # code...
        return view('uploadfile');

      }
      
      else {

        $destinationPath = '../resources/lessons/';

        foreach($request->file('image') as $file) {

        if($file->getMimeType() === "text/plain"){
        
          $uploadcount++;
          
          echo 'Uploaded : '.$file->getClientOriginalName();
          echo '<br>';    
          echo '<br>'; 
          echo '<br>';
          //move file to a destination       renames the file moved
          $file->move($destinationPath, $file->getClientOriginalName());

        }
        else{
          
        $failcount++;
          echo 'Failed to upload : '.$file->getClientOriginalName();
          echo '<br>'; 
        }
        
      }
      echo "$uploadcount"." file(s) successfully uploaded.";
          echo '<br>';
        echo "$failcount"." file(s) failed.";
    /*
        if($file->getMimeType() === "text/plain"){

          echo 'File Name : '.$file->getClientOriginalName();
          echo '<br>';

          // show file extensions
          echo 'File Extensions : '.$file->getClientOriginalExtension();
          echo '<br>';

          // show file path
          echo 'File Path : '.$file->getRealPath();
          echo '<br>';

          // show file size
          echo 'File Size : '.$file->getSize();
          echo '<br>';

          // show file mime type
          echo 'File Mime Type : '.$file->getMimeType();
          echo '<br>';

          // move uploaded File
          $file->move($destinationPath,$file->getClientOriginalName());
        }
        else{
          echo 'It is not a text file';
          // unlink();
        }
        */
     
    
      
      


      
    }
  }
}
