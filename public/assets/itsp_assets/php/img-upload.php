<?php

$uploaddir = public_path().'/assets/itsp_assets/data/'.$_GET['by'].'/';
$uploadfile = $uploaddir . basename("t".$_GET['no'].".png");


if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "done";
} else {
    echo "Possible file upload attack!\n";
}

?>
