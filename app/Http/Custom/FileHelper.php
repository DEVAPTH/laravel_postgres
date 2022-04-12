<?php

namespace App\Http\Custom;

use Illuminate\Http\Request;

class FileHelper{

    public function upload_photo(Request $request)
    {
        $file = $request->file('pic');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
    }
}
