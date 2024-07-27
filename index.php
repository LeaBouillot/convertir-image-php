<?php
$image_path = "img.png";

$image_info = getimagesize($image_path);
$image_extension = image_type_to_extension($image_info[2], false);
// var_dump($image_info);

switch ($image_extension) {
    case ".png":
        $image = imagecreatefrompng($image_path);
        break;
    case ".jpg":
    case ".jpeg":
        $image = imagecreatefromjpeg($image_path);
        break;
    case ".gif":
        $image = imagecreatefromgif($image_path);
        break;
    default:
        die("Format d'image non supporté");
}

$destination_path = "nouvelle-img.jpg";

imagejpeg($image, $destination_path, 90);
imagedestroy($image);

echo "Image convertie avec succès";
