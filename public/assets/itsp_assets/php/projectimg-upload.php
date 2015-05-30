<?php

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
}

$uploaddir = '../data/'.$_GET['uploadedby'].'/images/';
$uploadfile = $uploaddir . basename(clean($_FILES['img']['name']));
if(( ($_FILES["img"]["type"] != "image/gif")
&&   ($_FILES["img"]["type"] != "image/jpeg")
&& ($_FILES["img"]["type"] != "image/jpg")
&& ($_FILES["img"]["type"] != "image/pjpeg")
&& ($_FILES["img"]["type"] != "image/x-png")
&& ($_FILES["img"]["type"] != "image/png"))
|| ($_FILES["img"]["size"] > 3*1024*1024)
)
{
	die( "File not an image of less than 3MB");
}
else if (move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile )) {
    echo "done";
} else {
    echo die("Possible file upload attack!\n");
}

$txt='<div class="project-details" style="margin-top:-10%">
									<h5 class="white-text red-border-bottom" >
									'.$_GET['heading'].'</h5>
									<div class="details white-text">
										'.$_GET['detail'].'
									</div>
								</div>';
$path= '../data/'.$_GET['uploadedby'].'/imgalt/'.clean($_FILES['img']['name']).".txt";
$file = fopen($path, "w");
            fwrite($file,$txt);
            fclose($file);

?>

