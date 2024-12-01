<?php

if (!empty($_FILES['file'])) {
    $targetDir = '../propiedades/';
    $fileName = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        echo "File Uploaded";
    }
}
