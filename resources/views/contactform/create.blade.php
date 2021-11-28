@extends('layouts.welcome1')

<style type="text/css">
    

#pic1 {
  opacity: 0;
  height: 1px;
  width: 1px;
} 

#pic2 {
  opacity: 0;
  height: 1px;
  width: 1px;
} 

.panel-heading {
  width: 100%;
  padding: 0px;
}

.block {
   padding: 10px !important;
   margin: 5px  !important;

}


.panel {
    border: 0px !important;
    border-color: transparent !important;

}
</style>

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<section>

<div class="container ">

  <h2> Contact Form </h2>


{!! Form::open(['route'=>'contactform.store', 'id'=>'tiago',  'enctype'=> 'multipart/form-data' ]) !!}
@csrf
<div class="row">
  
  <div class = "col-md-5 panel block panel-primary">
        <div class = "panel-heading">
             <h3 class = "panel-title">Contact Form</h3>
        </div>
    
        <div class = "panel-body">
             <div class="col">
                <div class="form-group">
                  {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                  {!! Form::text('name', null, ['class' => 'form-control' , 'required'=>'required', 'placeholder'=>'name' ]) !!}
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                  {!! Form::email('email', null, ['class' => 'form-control' , 'required'=>'required', 'placeholder'=>'abc@gmail.com' ]) !!}
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
                  {!! Form::text('subject', null, ['class' => 'form-control' ]) !!}
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
                  {!! Form::textarea('message', null, ['class' => 'form-control', 'required'=>'required', 'placeholder'=>'Enter Message' ]) !!}
                </div>
              </div>

              <div  class="row">
                  <div class="col-md-3">
                <div class="form-group">
                  {!! Form::label('entry_date', 'Date', ['class' => 'control-label']) !!}
                  {!! Form::text('entry_date', $todaydate, ['class' => 'form-control', 'required'=>'required' ]) !!}
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  {!! Form::label('hour', 'Hour', ['class' => 'control-label']) !!}
                  {!! Form::select('hour', $hr, 1, ['class' => 'form-control', 'required'=>'required' ]) !!}
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  {!! Form::label('minute', 'Minute', ['class' => 'control-label']) !!}
                  {!! Form::select('minute', $minute, 01, ['class' => 'form-control', 'required'=>'required' ]) !!}
                </div>
              </div>
               <div class="col-md-1">
                <div class="form-group">
                  {!! Form::label('ampm', 'ampm', ['class' => 'control-label']) !!}
                  {!! Form::select('ampm', ['am'=>'AM', 'pm'=>'PM'], ['class' => 'form-control', 'required'=>'required' ]) !!}
                </div>
              </div>
              </div>
              

               <div class="col">
                      <div class="form-group">
                    {!! Form::label('pic1', 'Picture1:', ['class' => 'control-label']) !!}  <button type="button" class="btn btn-default btn-lg btn-file"> 
                  <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
              </button>
                    <input type="file" id="pic1" class="form-control pic1" name="pic1" >
                    </div>
                </div>      
                    <div class="col-md-5" id="dvPreview"></div>
              </div>
        </div>
           
  </div>

  

 

</div>



        <div class="row col-md-4 col-md-offset-2">
    	
              {!! Form::submit('Submit',['class' => 'btn btn-lg btn-primary create-submit']) !!}
        </div>


{!! Form::close() !!}



</div>

</section>


@endsection

@section('script')

<script type="text/javascript">
    

$("#entry_date").datepicker( {dateFormat: 'yy-mm-dd'});

$(document).ready(function ($) {


    $(".btn-file").click(function(){
         $("#pic1").click();
    });

     $(".btn-file1").click(function(){
         $("#pic2").click();
    });

    $("#pic1").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:200px;width: 200px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });


    $("#pic2").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview1");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:200px;width: 200px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });

    /// added below code
     $("#pic2").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#dvPreview1");
            dvPreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "height:200px;width: 200px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + " is not a valid image file.");
                    dvPreview.html("");
                    return false;
                }
            });
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    });


    });


</script>



@stop
