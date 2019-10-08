<?php
$allowedTypes = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');

if (!(in_array($_FILES['image']['type'], $allowedTypes))) {
    echo "Not a valid image file";
    return;
}

//If no folder exists, it will create one
if (!file_exists('uploads')) {
    mkdir('uploads', 0777);
}

$filename = rand() . '_' . $_FILES['image']['name'];
$uploadPath = 'uploads/' . $filename;
move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);

echo "File uploaded successfully.";