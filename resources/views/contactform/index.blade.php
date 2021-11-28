@extends('layouts.welcome1')

<style type="text/css">
/*  modal  css  */
.cmodal-window {
  right: -50% !important;
 /* position: absolute !important;*/
}


.progress3 {
  
    background-color: #00FF00;

}

/* show entries of datatables css changed  */

#car-table_length {
border-color: cyan;
background-color: #fffbf8;
font-weight: bold;
padding:5px 5px 2px 10px;
width:165px;
margin: 10px auto;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
border-radius:6px;
-webkit-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
-moz-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;

}


/* search css changed */

.dataTables_filter {
text-align: center !important;
background-color: #fffbf8;
padding:5px 10px 2px 0px;
width:275px;
margin: 10px auto;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
border-radius:6px;
-webkit-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
-moz-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;

}

/* search css changed */

h2 { text-align: center }

.cblue {
  background-color:  lightblue !important;
  opacity: 1;
}

.cpurple {
   background-color:  purple !important;
   color : white;
  
}

.corange {
   background-color:  orange !important;
   color : black;
  
}

.cgreen {
   background-color:  green !important;
   color : white;
  
}

.cred {
   background-color:  red !important;
   color : black;
  
}

th, td { white-space: nowrap; overflow: hidden}
    div.dataTables_wrapper {
        width: 1100px;
        margin: 0 auto;
    }
 
div.dataTables_wrapper {
  font-family: tahoma;
  font-size: 12px;
} 

  table.dataTable th:nth-child(1) {
  width: 20px;
  max-width: 20px !important;
  word-break: break-all;
  white-space: pre-line;
}




.side2 {
  padding-right: 14px;
}

</style>
@section('content')

<section>
  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div style ="float:center;" class="delmsg  col-md-2"> </div>

 
<div class='container'>

  <div class="row side2" >
     
    <div class="col-md-2 col-md-offset-2"><center><h3> Customers </h3></center></div>
			<div class="col-md-4  col-md-offset-4" style="float: right;text-align: right; position: relative;  z-index: 99; clear:none;">
  
			<a href='{{ route("customers.create") }}'  class="btn btn-warning createmodalopen btn-border wow fadeInUp " >New Customer</a>
    
  
			</div> 
  </div>
  
    

  


             
<div class="table-responsive ">
<table class="table table-responsive select table-striped table-hover table-condensed" id="car-table">
 
<thead>
	<tr>
   
    <th> name </th>
		<th>email</th>
   <th>Subject</th>
		<th>Message</th>
   
    <th>Download</th>
    
    
	</tr>
</thead>
<tbody></tbody>


</table>


</div>
</div>
</section>


@endsection


@section('script')


<script type="text/javascript">
$(document).ready( function () {

 
$('#car-table').DataTable({
        processing: true,
        serverSide: true,
        async: true,
        responsive: true,
        scrollCollapse: true, 
        stateSave: true,
        stateDuration: -1,
        bStateSave: true,
        
        scrollX: true,
        scrollY: 400,
        scrollCollapse: true,
        paging:   true,
        scroller: {
           rowHeight: 1
        }, 
        
        ajax: '{!! route('customers.index') !!}',
         stateSaveCallback: function(settings,data) {
               localStorage.setItem( 'DataTables2_' + settings.sInstance, JSON.stringify(data) )
              },
            stateLoadCallback: function(settings) {
                   return JSON.parse( localStorage.getItem( 'DataTables2_' + settings.sInstance ) )
            },
           
    
        columns: [
            { data: 'action2', name: 'action2' ,  class: 'dt-center',   width: '30px', orderable: false, searchable: false   },
               
          { data: 'customer_name', name: 'customer_name' , width: '100px', class: 'dt-center',
                 "render": function (data, type, full, meta) {
                           // myStr = data.replace(/,/g, " ");
                         return '<span class="test" data-toggle="tooltip" title="' +  data + '">' + data + '</span>';
                       }
                    
            },
            { data: 'customer_type', name: 'customer_type' , width: '100px' ,class: 'dt-center',
                    "render": function (data, type, full, meta) {
                                                        
                              return '<span class="test" data-toggle="tooltip" title="' +  data + '">' + data + '</span>';
                              }
             },

             { data: 'id_number', name: 'id_number',  orderable: true, width: '100px', class: 'dt-center',
                  "render": function (data, type, full, meta) {
                                                        
                              return '<span class="test" data-toggle="tooltip" title="' +  data + '">' + data + '</span>';
                              }
             },

             { data: 'classification', name: 'classification',  orderable: true, width: '100px', class: 'dt-center'
                

             },

              { data: 'action5', name: 'action5' ,  class: 'dt-center',   width: '30px', orderable: false, searchable: false   },
              { data: 'action', name: 'action' ,  class: 'dt-center',   width: '30px', orderable: false, searchable: false   }


              
           
            ],

                       
            
              pageLength: '50' ,
              pagination: true,
              responsive: true,
              order: [[ 1, "desc" ]]
           
       
        
    });

   
// $('#myModal').modal('toggle');
// $('#myModal').modal('show');
// $('#myModal').modal('hide');
   
   // $("div[aria-describedby='divDialog'] .ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-icon-only.ui-dialog-titlebar-close").click();

  var id = 0;
  $('#CreateOrderModal').modal('hide'); 

 

 
     $(document).on('click' , '.createmodalopen', function(){     
      //  $("#ordermodal").trigger( "reset" );
      // $('.files').empty();
      //          $('#files_list').empty();
      //          $('#loading').empty();

             //  alert('yes modal opening');
                
                 $("#orderadd").trigger( "reset" );
                 $("#orderadd")[0].reset();
                $('.files').empty();
                $('#files_list').empty();
                $('#loading').empty();
                 $('#CreateOrderModal').modal('show'); 

  });

  $(document).on('click' , 'button.close', function(){
            //alert('hide');
            alert('Process will be Cancel');
            $('#CreateOrderModal').modal('hide');
            location.reload(); 
            // don't use as  will terminate process
  });


  var table = $('#car-table').DataTable();
   // Handle click on "Select all" control
   $('#car-table-select-all').on('click', function(){
      // Get all rows with search applied
      var rows = table.rows({ 'search': 'applied' }).nodes();
      // Check/uncheck checkboxes for all rows in the table
     
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   // $('#car-table tbody').on('change', 'input[type="checkbox"]', function(){
         
   //    // If checkbox is not checked
   //     // alert('individual checkbox clicked');
   //    //  if ($(this).closest('tr').find('td.status_class').text() == 'Orders Fulfilled') {
   //        $('input[type="checkbox"]', rows).prop('checked', this.checked);  
   //    // }
   //    // else
   //    // {
   //      //    toastr.info('Order should be in Fulfilled status for download');
   //   // }

   //    if(!this.checked){
   //       var el = $('#car-table-select-all').get(0);
   //       // If "Select all" control is checked and has 'indeterminate' property
   //       if(el && el.checked && ('indeterminate' in el)){
   //          // Set visual state of "Select all" control
   //          // as 'indeterminate'
   //          el.indeterminate = true;
   //       }
   //    }
   // });

  $('#car-table tbody').delegate('input[type="checkbox"]','change',function() {
     if(this.checked){
        // alert("checked");
         $(this).addClass('selected');
        return true;
     } else {
         //alert("unchecked");
          $(this).removeClass('selected');
         return true;
     }
});


   $('#car-table tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );

   $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
   $($.fn.dataTable.tables(true)).DataTable()
      .columns.adjust();
});


    //$(".downloadbutton").click(function(event){
    $(document).on("click", ".downloadbutton", function(e){
   // alert('hello');
    e.preventDefault();
     //$( "a.downloadbutton").dblclick();
     $(".delmsg>a").remove();

      var result = new Array();
      var url1   = new Array();
      var found = true;
     $('#car-table').find('input[type="checkbox"]:checked').each(function (index, rowId) {

       //  var temp = $(this).closest('tr').find('td.fooid').text();
          var temp =  $(this).val();
         //alert(temp);
          if (!isNaN(parseFloat(temp))) {
            result.push(parseFloat(temp));
            var lnk =  $(this).closest('tr').find('a.urllink').attr('href');
            //alert('http://localhost/bdatest_s4/public/'+ lnk);
             //url1.push('http://localhost/bdatest_s4/public/'+ lnk);
              url1.push(lnk);
             // lnk.click();
          }
          found = false;
     });

     if ( found == true ) {
             alert('Select Row to Download');
             return false;
     }
     //alert('wait');
     //console.log(result);
     console.log(url1);

//      var links = [
//   'https://s3.amazonaws.com/Minecraft.Download/launcher/Minecraft.exe',
//   'https://s3.amazonaws.com/Minecraft.Download/launcher/Minecraft.dmg',
//   'https://s3.amazonaws.com/Minecraft.Download/launcher/Minecraft.jar'
// ];

  
 

  //link.setAttribute('download', 'download);
  //link.setAttribute('class', 'my-file');
  //link.style.display = 'none';
  //alert(link);

    var link = document.createElement('a');
 
  for (var i = 0; i < url1.length; i++) {
    //alert('hello');
 
   
   // link.setAttribute('href', url1[i]);
   // link.setAttribute('download', true);
    //link.setAttribute('href', 'document.zip');
  // link.setAttribute('class', 'my-file');
   // link.target = '_blank';
   // link.click();
  // alert(link);
   // link.download = '1.psd';
    //window.open(link);
    //link.click ;
     //document.body.appendChild(link);
//      var link = $('<a>',{
//     href: url1[i],
//     class: 'my-file'
// }).appendTo('body');

      var link = $('<a>',{
    href: url1[i],
    target: '_blank',
    class: 'my-file'
}).appendTo('.delmsg');
    
     console.log(link);
     //link[0].click(); 
    //link.remove();
    //downloadAll(files);
    
   // link.click();
  }
  

  
       var count=0;     
    //$( "a.my-file" ).each(function(  index ) {

       for (var i = 0; i < url1.length; i++) {
              
           //   var $this = $(this);
              //  console.log($this);
             //   alert( $this.attr('href'));

                var url =  url1[i];
            
               //      window.location = $this.attr('href');
            
               //   var url = window.location.pathname;
               //   var filename = url.substring(url.lastIndexOf('/')+1);
             //  downloadURL(url);
                var hiddenIFrameID = 'hiddenDownloader' + count++;
  var iframe = document.createElement('iframe');
  iframe.id = hiddenIFrameID;
  iframe.style.display = 'none';
  document.body.appendChild(iframe);
  iframe.src = url;

     } 
         
 
});

 $(document).on("click", ".change-comment", function(e){
        e.preventDefault(); 

        // TABLE MANIPULATION
        var $rowid = table.row( this ).index() ;
        var currentPageIndex = table.page.info().page;

        // TABLE MANIPULATION
        var target  = $(this);
        var key  = $(this).closest('tr').find('td.fooid').text();

        var oldnotes = table.cell( this ).data();
           // alert(oldnotes);
            
        var re = /<br *\/?>/gi;
        var oldnotes1 = oldnotes.replace(re,"\n");
        var currentPageIndex = table.page.info().page;


         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
              }); 

        $( "#notedialog" ).dialog({
               
            title : "Enter Notes This field is required",
            resizable: true,
            modal: true,
            autoOpen:false,
            closeButton:true,
            show: 'fold',
            hide: 'fold',
            width: 500,
            height:400,
            center: true,
            position: {
                       my: "left",
                       at: "right",
                       of: target
                              },


            buttons: [
                {
   
              text: "Submit",
              title: "Submit",
              id: 'notes',
              tabindex: '3',
              // form: "client_form_submit",
              click: function() {
   
                    var oldnotes = $('#notedialog .oldnotes').val();
                    var newnotes = $('#notedialog .newnotes').val();
                  //  var _token   = $("#notedialog .token").val();
                       

                    var formData = {
                                id:  key, 
                                oldnotes: oldnotes,
                                newnotes: newnotes
                               // _token: _token
                          };
               
                     $.ajax({
                            type:"POST",
                            async: true,
                            datatype:"JSON",
                            url:"orders/clientupdatenotes",
                            data: formData,
                            success: function(result)
                            { 
                            console.log(result[0].msg) ; 
                             //$( "#notedialog .success" ).html("Data Updated Successfully");  
                             $('#notedialog .newnotes').val("");
                              
                             // table.page(currentPageIndex).draw(false);
                             // table.row( $rowid ).scrollTo();
                                table.ajax.reload();

                            }
                        });

                     setTimeout(function(){
                               $('#notedialog').dialog('close');                
                                }, 300);                             

              }, // click function
 
    
                }, // buttons
      
              ],

          close : function() {
    
      
          },
          open: function(event, ui) {
            var dialog = $(event.target).parents(".ui-dialog.ui-widget");
            var buttons = dialog.find(".ui-dialog-buttonpane").find("button");
        
            var AddButton = buttons[0];
        
            $(AddButton).addClass("btn btn-small btn-primary");
            
            //$(AddButton).blur();
            $(AddButton).html("<i class='icon-plus-sign'></i>   Submit");
            $("#notedialog .newnotes").focus();
           
            //$(this).find('.ui-dialog-titlebar-close').blur();
        
            },

            
        });

           $( "#notedialog" ).dialog("open");
           $( "#oldnotes" ).text( oldnotes1 );
            //     // alert(id1);
           $( "#notedialog .noteid" ).val( key );

});

$(document).on("click", ".downfile", function(e){
        e.preventDefault(); 

        //alert($(this).html());
        var file1 = $(this).text();

        //alert($(this).text());
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
              }); 

        formData = { file: file1 };
        
          $.ajax({
                            type:"GET",
                            async: true,
                            datatype:"JSON",
                            url:"downloadFile",
                            data: formData,
                            success: function(result)
                            { 
                             //console.log(result[0].msg) ; 
                             //$( "#notedialog .success" ).html("Data Updated Successfully");  
                            // $('#notedialog .newnotes').val("");
                              
                             // table.page(currentPageIndex).draw(false);
                             // table.row( $rowid ).scrollTo();
                           

                            }
                        });

});  


$(document).on("click", ".editstatus", function(e){
  e.preventDefault();
   

    var table = $('#car-table').DataTable();
    var currentPageIndex = table.page.info().page;
    
   

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
    })

    var target = $(this);
   // var _token = $(this).parents('form:first').find('input[name=_token]').val();
   // var url = $(this).parents('form:first').attr('action');
    //var id = $(this).prev().find('input[name=id]').val();
    //var id = $(this).closest('div').find('.updatestatus1').val();
    var id = $(this).closest('tr').find('td.fooid').text();
    // alert(id);
    var status1 = $(this).text();
    //alert(status1);

    $('#statusModal').modal('show');

    $("#statusModal #status").val(status1); 
    $("#statusModal .statusid").val(id); 
    $("#statusModal #status").focus();

  });
    
  
  $(document).on("click", "#statusModal .submit_status", function(e){
      e.preventDefault();

       var table = $('#car-table').DataTable();
    var currentPageIndex = table.page.info().page;
    
      var id = $("#statusModal .statusid").val();
      //alert(id);
      var status2  = $("#statusModal .ostatus").val();
                       // var _token   = $("#statusdialog .token").val();
                       //alert( newalloc + _token);

                        var formData = {
                            id:  id, 
                            status2: status2
                            
                        };

                        $.ajax({
                            type:"POST",
                            async: true,
                            datatype:"JSON",
                            url:"orders/updateorderstatus",
                            data: formData,
                            error: myError,
                            success: function(result)
                            { 
                              res = result[0].msg ;
                              if (res == 'Updated successfully') {
                                  console.log(res);
                              }
                              else {
                                  //alert(res);
                              }
                            console.log(result[0].msg) ; 
                            
                             
                             table.ajax.reload();
                             table.page(currentPageIndex).draw(false);
                             //$(this).dialog( "close" );
                         
                            }

                        });

          $('#statusModal').modal('hide');
    });

  function myError(jqx, textStatus, errStr) {
    alert(errStr);
}




});

 

</script>

<!-- new script added for file upload -->

<script src="{{ URL::asset('fileupload/js/vendor/jquery.ui.widget.js') }}"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{ URL::asset('fileupload/js/jquery.iframe-transport.js') }}"></script>

<!-- The basic File Upload plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload.js') }}"></script>

<!-- The File Upload processing plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-process.js') }}"></script>

<!-- The File Upload image preview & resize plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-image.js') }}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-audio.js') }}"></script>
<!-- The File Upload video preview plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-video.js') }}"></script>
<!-- The File Upload validation plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-validate.js') }}"></script>
<!-- The File Upload user interface plugin -->
<script src="{{ URL::asset('fileupload/js/jquery.fileupload-ui.js') }}"></script>
<script src="{{ URL::asset('fileupload/js/main.js') }}"></script>

<!-- FILE UPLOAD SCRIPT -->
<!-- The template to display files available for upload -->

<!--  FILE UPLOAD SCRIPT -->



<script>

      
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        }); 
   
      
        

    $(function () {
          'use strict';

           // $(".create-submit").click(function(e){
           //    //  e.preventDefault();
           //    // alert('yes correct');
           //    // alert($('#services').val());
           //    //alert($('#comments').val());
           //    if ($('#comments').val()=='')
           //       {
           //          alert('Comments cannot be blank');
           //       }

           //     $("#CreateOrderModal").modal("hide");
           //      //location.reload();
           //    //  return false;
        
           //  });
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === '{!! route("customers.index") !!}',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary idupload')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });

        var maxfiles = 500 ;
        var filesCounter = 0 ;
        var uploadErrors = [];
        var counter = 0;
        var number_of_files = 0;
        // check file size
        $('#fileupload').on('change', function() {
                 //debugger;
                  var filename = this.value;
                  var lastIndex = filename.lastIndexOf("\\");
                  if (lastIndex >= 0) {
                      filename = filename.substring(lastIndex + 1);
                    }


                  if( $.trim($('#comments').val()).length  < 1)
                      {
                            window.alert ("Comments cant be left empty");
                                    return false;
                      }  
                    var fp = $("#fileupload");
    

    
                  var files = fp[0].files;
                  var totalSize = 0;

                  for (var i = 0; i < files.length; i++) {
                  // calculate total size of all files        
                  totalSize += files[i].size;
                    }
                //1x10^9 = 1 GB
                 var sizeInGb = totalSize / 1000000000;
                  // var sizeInGb = totalSize / 100;
                    if(sizeInGb > 3){
                          alert("You have exceeded the maximum file upload size.");
                            return false;
                    }
  

        });



        // check file size
       

        $('#fileupload').fileupload({
           
            dataType: 'json',
            add: function (e,  data) {
               

                     //alert(data.files[0].size);  size increase to 957 due to error
                 if( data.files[0].size > 957286400) {
                            uploadErrors.push('Filesize is too big');
                        }
                        // alert(index); not working
                        //alert(filesCounter);
                        filesCounter++ ;
                   if ((filesCounter  + 1) > maxfiles) {
                            

                            uploadErrors.push('Only 15 Files can be uploaded');
                        } 

                  if(uploadErrors.length > 0) {

                            alert(uploadErrors.join("\n"));
                            
                            
                    }        
              
               
                 if(uploadErrors.length > 0) {
                            alert("Please Refresh Page to Continue");
                            $(".create-submit").attr("disabled", true);
                            return false;
                            
                    } 
                else {
                      // alert('it is submitting');
                       $('#loading').text('Uploading...');
                         $(".create-submit").attr("disabled", true);
                        data.submit();
                 }
            },
             progressall: function(e, data) {        var progress = parseInt(data.loaded / data.total * 100, 10);            $(".progress2").css('width', progress + '%');
                             
                       },
            done: function (e, data) {  
               //alert('done upload');
                $.each(data.result.files, function (index, file) {
                    $('<p/>').html(file.name + ' (' + file.size + ' KB)').appendTo($('#files_list'));
                    if ($('#file_ids').val() != '') {
                        $('#file_ids').val($('#file_ids').val() + ',');

                    }
                      $('#file_ids').val($('#file_ids').val() + file.fileID);
                        $("div.progress3").html("Some Files are Uploaded Successfully").css( {'background': 'transparent','color':'red'});
                      $("div.progress2").delay(3000).fadeOut("slow");
                      $("div.progress3").delay(3000).fadeOut('slow');
                      
                      var table = $('#car-table').DataTable();
                              //  setInterval( function () {
                                            table.ajax.reload();
                                     //    }, 30000 );
                      
      
                });
                $('#loading').text('');
                $("div.progress").fadeOut("slow");
                
               
                $("button.idupload" ).each(function( index ) {
                    $(this).text('Uploaded');
                    //$("div.progress").fadeOut("slow");
                
                });
                // $("div.progress2").fadeOut("slow");

                
            }
            }).on('fileuploadprogressall', function (e, data) {
                  //alert('progress');
                  var progress = parseInt(data.loaded / data.total * 100, 10);
                   //alert('ok uploading');
                  $(".progress2").css({'display':'block'});
          $(".progress3").css({'display':'block'});
            $("div.progress3").html('Please be patient').css({ "color":"green" });

                  $("div.progress").css('width',  progress + '%' );
                // COPIED BASIC PLUS  FROM PLUGIN HERE
            }).bind('fileuploadadd', function (e, data) {

        data.context = $('<div/>').appendTo('#files');
          $(".progress2").css({'display':'block'});
          $(".progress3").css({'display':'block'});
            $("div.progress3").html('Please be patient').css({ "color":"green" });
        $.each(data.files, function (index, file) {     
              console.log('Added file in queue: ' + file.name);
                  toastr.info('Added file in queue: ' + file.name);
            number_of_files = number_of_files + 1;
            sessionStorage.setItem('number_of_files', number_of_files);

            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).bind('fileuploadprocessdone', function (e, data) {
        console.log(counter + " / " + number_of_files);
        toastr.info(counter + " / " + number_of_files);
         $("div.delmsg").html('counter files' + counter + '/' + number_of_files);

    }).on('fileuploaddone', function (e, data) {
            //  debugger;
            // alert("full upload done");
          //  $("#CreateOrderModal").modal("hide");  not required by  kulind sir
           // $("div.progress2").fadeOut("slow");
           
           
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
            counter = counter + 1;
            console.log(counter + " / " + number_of_files);
            toastr.info('File Uploaded' + counter + " / " + number_of_files);
         //$("div.delmsg").html('counter files' + counter + '/' + number_of_files);

               if (counter == number_of_files) {
                  $(".create-submit").attr("disabled", false);
               }
        });
        

    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');  


        //// END OF   FILEUPLOAD  CALLBACK
      
    });


$(document).ready(function() {
        

      
      
 });


// (function ($) {

//     var methods = {
//         _download: function (options) {
//             var triggerDelay = (options && options.delay) || 100;
//             var cleaningDelay = (options && options.cleaningDelay) || 1000;

//             this.each(function (index, item) {
//                 methods._createIFrame(item, index * triggerDelay, cleaningDelay);
//             });
//             return this;
//         },

//         _createIFrame: function (item, triggerDelay, cleaningDelay) {
//             setTimeout(function () {
//                 var frame = $('<iframe style="display: none;" class="multi-download-frame"></iframe>');
//                 frame.attr('src', $(item).attr('href') || $(item).attr('src'));
//                 $(item).after(frame);
//                 setTimeout(function () { frame.remove(); }, cleaningDelay);
//             }, triggerDelay);
//         }
//     };

//     $.fn.multiDownload = function(options) {
//         return methods._download.apply(this, arguments);
//     };

// })(jQuery);



</script>



<!-- new script added for file upload -->


@stop