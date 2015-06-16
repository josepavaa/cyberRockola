@extends('home.index')
@section('content')
<div class="container">    
  <div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-info" >
  <div class="panel-heading">
  <div class="panel-title">Add Song</div>
  <br>  
  {!! Form::open(array('url' => 'songs','files' => true)) !!}
  
  <fieldset>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="name">Song's Name</label>
      <div class="controls">
        {!! Form::text('name', Input::old('name'), array('placeholder' => '', 'class' => 'form-control', 'required' => 'true')) !!}
        <p class="help-block">Please provide the artist name</p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="artist_id">Select Artist</label>
      <div class="controls">
        {!! Form::select('artist_id', $artists, null, array('class' => 'form-control')) !!} 
        <p class="help-block">Select artist from the list</p>
      </div>
    </div>   

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="name">Url Source</label>
      <div class="controls">
        {!! Form::file('url_source', '', array('class' => 'form-control input-sm')) !!}
        <p class="help-block">Browse file source</p>
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