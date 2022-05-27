<?php

namespace App\Traits;



Trait Traitsarticle
{
    protected function saveimage($photo ,$folder){
    $name = $photo->getClientOriginalName();
    $file_name= time().'.'.$name;
    $path =  $folder ;
    $photo->move($path,$file_name);
    return $file_name;
   }
}
