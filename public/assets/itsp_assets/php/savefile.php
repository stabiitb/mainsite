<?php
session_start();
if(isset($_GET['by']))
    {
        $by=$_GET['by'];
    }
    else
    {
        die("error");
    }

$path_chk="../data/".$by."/";
if(isset($_POST['intro'])){
  $file = fopen($path_chk."intro.txt", "w");
         		fwrite($file,$_POST['intro']);
         		fclose($file);
}
if(isset($_POST['motivation'])){
  $file = fopen($path_chk."motivation.txt", "w");
            fwrite($file,$_POST['motivation']);
            fclose($file);
}
if(isset($_POST['referencetext'])){
  $file = fopen($path_chk."referencetext.txt", "w");
            fwrite($file,$_POST['referencetext']);
            fclose($file);
}
if(isset($_POST['idea'])){
  $file = fopen($path_chk."idea.txt", "w");
            fwrite($file,$_POST['idea']);
            fclose($file);
}
if(isset($_POST['planofaction'])){
  $file = fopen($path_chk."planofaction.txt", "w");
            fwrite($file,$_POST['planofaction']);
            fclose($file);
}
if(isset($_POST['theoryinvolved'])){
  $file = fopen($path_chk."theoryinvolved.txt", "w");
            fwrite($file,$_POST['theoryinvolved']);
            fclose($file);
}
if(isset($_POST['projectdetailstext'])){
  $file = fopen($path_chk."projectdetailstext.txt", "w");
            fwrite($file,$_POST['projectdetailstext']);
            fclose($file);
}
if(isset($_POST['componentlist'])){
  $file = fopen($path_chk."componentlist.txt", "w");
            fwrite($file,$_POST['componentlist']);
            fclose($file);
}
echo "done";
?>