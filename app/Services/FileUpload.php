<?php

namespace App\Services;

class FileUpload
{
    public function storeFile($file, $path)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file = $file->storeAs($path, $fileName);
        return $fileName;
    }
}
