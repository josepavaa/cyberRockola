<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<body>
  {!! Form::open(array('url' => 'register')) !!}
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        {!! Form::email('email', Input::old('email'), array('placeholder' => '', 'class' => 'form-control', 'required' => 'true')) !!}
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        {!! Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) !!}
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
   
    <div class="control-group">
      <!-- Button -->
      <div class="controls">        
        {!! Form::submit('Join', array())!!}
      </div>
    </div>
  </fieldset>

{!! Form::close() !!}
</body>
</html>

