@extends('events.ITSP_2015.layout')
@section('inner-content')
<?php
     date_default_timezone_set('Asia/Kolkata');
     $closetime=strtotime("2015:06:12 23:59:59 "); 
     $curtime = time();
     //echo $closetime."  ".$curtime."\n";
?>
@if ($curtime <= $closetime)
<h3>This form in compulsory for all.</h3>
<h3>Last date of filling the form is 11-June 11:59:59 pm. We will remove it after that.</h3>
<h3>Information given in this form will be treated as the final information about your ITSP project and the same will get printed on the certificates.</h3>
<iframe src="https://docs.google.com/forms/d/1NbBw3hwpNjLnb5IbjQvBiEj6QrOKHN5M4i8E2g_sQAY/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
@else
<h3> Form is removed.</h3>
@endif
@endsection
