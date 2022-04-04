<?php

namespace coding\app\system;


class SystemUtils{

    public static function uploadFile(array $imageFile,$destination,$filename=""): string
    {
        if (!is_dir($destination)) {
            mkdir($destination);
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            if(!empty($filename))
            {
                unlink($destination.'/' . $filename);
            }

            $imageName =  uniqid(). "." . $imageExtension;
            $imagePath =  $destination.'/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    
}
?>