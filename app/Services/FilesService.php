<?php

namespace App\Services;


use Illuminate\Http\Request;

class FilesService {
    public static function storeFile(Request $request)
    {
        $extension = $request->file('attachment')->extension();
        $imageName = time().'.'. $extension;
        $pathInfo = $request->file('attachment')->move(public_path('users'), $imageName);
    
        $attachment = explode('\\' , $pathInfo->getPathName());

        for ($i=0; $i < count($attachment); $i++) { 
            $i=0;
            $attachment = array_values($attachment);
            
            if($attachment[$i] == 'public'){ 
                unset($attachment[$i]);
                break;
            }
            unset($attachment[$i]);
        }
        $attachment = implode('\\' , $attachment);
        
        return $attachment;
    }
}