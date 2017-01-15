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
      $file = $request -> file('image');

      //retrieving of files
      File::get(storage_Path('uploads/vince.txt'));
      // show the file name
      if ($file == null) {
        # code...
         Redirect::route('uploadfile');

      }
      
      else {


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
      $destinationPath = 'storage';
      $file->move($destinationPath,$file->getClientOriginalName());
      }


      
    }
}

