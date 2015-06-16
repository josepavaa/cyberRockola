@extends('home.index')
@section('content')
<div class="container">    
  <div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-info" >
  <div class="panel-heading">
  <div class="panel-title">Edit Artist</div>
  <br>  
  {!!Form::open(array('url' => "/artists/$artist->id", 'method' => 'PUT'))!!}
  <fieldset>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="name">Artist's Name</label>
      <div class="controls">
        
      <input class="form-control" name="name" value="{{{$artist->name}}}">      
        <p class="help-block">You can to edit the artist name</p>
      </div>
    </div>
   
    <div class="control-group">
      <!-- Button -->
      <div class="controls">        
        {!! Form::submit('Save', array()) !!}
      </div>
    </div>
  </fieldset>

{!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection