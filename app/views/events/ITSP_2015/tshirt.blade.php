@extends('events.ITSP_2015.layout')
@section('inner-content')
<?php
     date_default_timezone_set('Asia/Kolkata');
     $closetime=strtotime("2015:07:15 23:59:59 "); 
     $curtime = time();
     //echo $closetime."  ".$curtime."\n";
?>
@if ($curtime <= $closetime)
<h3>ITSP Tshirt</h3>
<iframe src="https://docs.google.com/forms/d/1AfIkKNAT8MFv2qWfpeUkc-0e_h-kq_GKhXsJv4n7PiM/viewform" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
@else
<h3> Form is removed.</h3>
@endif
@endsection
