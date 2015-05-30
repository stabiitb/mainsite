cur = 0;
function exampleClickToEdit(area) {

    if(cur==area)
    {
        return;
    }
    if(cur!=0)
    {
        exampleClickToSave(cur);
    }

    cur = area;
    $('#' + area).redactor({
        focus: true,
        plugins: ['fontcolor','fontfamily'],
        convertDivs: false
       /* focus: true,
        convertDivs: true,
        deniedTags: ['h1','h2'],*/
        //  allowedTags: ['p', 'h1', 'h2', 'pre','li','u','i','ul','ol','b']
    });
    $(".redactor_toolbar").css("height", "30px");
}

function exampleClickToSave(area) {
  
    $('#' + area).redactor('destroy');
    var t=$('#'+area).html();
    cur = 0;
    var data={};
    data[area]=$("#"+area).html();
    //alert(baseurl);
    $.post(baseurl+"/savefile?by="+id,data)

    .done(function(data){
        console.log(data);
        console.log(area+" saved");
    }).fail(function(){
        console.log("Network error");
    })
}

$(document).on('click', '#intro', function (e) {
      exampleClickToEdit('intro');
});
$(document).on('click', '#motivation', function (e) {
      exampleClickToEdit('motivation');
});
$(document).on('click', '#referencetext', function (e) {
      exampleClickToEdit('referencetext');
});
$(document).on('click', '#idea', function (e) {
      exampleClickToEdit('idea');
});
$(document).on('click', '#planofaction', function (e) {
      exampleClickToEdit('planofaction');
});
$(document).on('click', '#theoryinvolved', function (e) {
      exampleClickToEdit('theoryinvolved');
});
$(document).on('click', '#projectdetailstext', function (e) {
      exampleClickToEdit('projectdetailstext');
});
$(document).on('click', '#componentlist', function (e) {
      exampleClickToEdit('componentlist');
});
$(document).on('click', '#projectdesc', function (e) {
      exampleClickToEdit('projectdesc');
});
jQuery(function ($) {
    $('body').click(function (e) {
        //alert(e.target.className==='redactor_toolbar');
        var clickedOn = $(e.target);
        //alert((e.target.id.trim()==cur.trim()+'-edit-btn') + "#"+e.target.id.trim()+"#"+cur.trim()+'-edit-button'+"#"  );
        if (cur == 0 || clickedOn.parents().andSelf().is('.redactor_box') || clickedOn.parents().andSelf().is('#redactor_modal') || clickedOn.parents().andSelf().is('.redactor-link-tooltip') || e.target.id===cur+'-edit-btn') {} else if (clickedOn.parents().andSelf().is('#' + cur)) {} else {
        exampleClickToSave(cur);
        }
    });
});







$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


    function uploadimg(i){
        var filename=$("#img-uploader"+i).prop("files")[0].name;
                    var name=filename.split('.').pop();
                    name=name.toLowerCase();
                    var filesize=$("#img-uploader"+i).prop("files")[0].size;
                    if(name=='jpg'||name=='jpeg'||name=='png'||name=='gif'||name=='icon'||name=='jfif'||name=='JPG')
                    {
                        if(filesize>1024*1024*2)
                        {
                            alert("File size exeeds max of 2MB its of size :"+parseInt(filesize/1024)+"kb");
                        }
                        else
                        {
                             var formData = new FormData($('#img-up'+i)[0]);
                             var txt= "?by="+$("#uploadedby"+i).val()+"&no="+i;
                                $.ajax({
                                    url: baseurl+'/img-upload'+txt,  //Server script to process data
                                    type: 'POST',
                                    //Ajax events
                                    success: function(data){
                                        console.log(data);
                                        if(data=="done")
                                            location.reload();
                                        else
                                            alert(data);
                                    },
                                    error: function(data){
                                        alert("error");},
                                    // Form data
                                    data: formData,
                                    //Options to tell jQuery not to process data or worry about content-type.
                                    cache: false,
                                    contentType: false,
                                    processData: false
                                });
                        }
                    }
                    else
                    {
                        alert("Bad File type "+name);
                    }
    }
          $("#projectimg").submit(function(e){
            e.preventDefault();
                     var formData = new FormData($('#projectimg')[0]);
                             var txt= $("#projectimg").serialize();
                                y=baseurl+'/projectimg-upload?'+txt;
                                $.ajax({
                                    url: baseurl+'/projectimg-upload?'+txt,  //Server script to process data
                                    type: 'POST',
                                    //Ajax events
                                    success: function(data){
                                        if(data=="done")
                                            location.reload();
                                        else{
                                        console.log(data);
                                            alert(data);}
                                    },
                                    error: function(data){
                                        console.log(data);
                                        alert(data);},
                                    // Form data
                                    data: formData,
                                    //Options to tell jQuery not to process data or worry about content-type.
                                    cache: false,
                                    contentType: false,
                                    processData: false
                                });
                        
                    
                });

      

