<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<body>
  
  <div class="container">    
  <div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-info" >
  <div class="panel-heading">
  <div class="panel-title">Register</div>
  <br>  
  {!! Form::open(array('url' => 'register')) !!}
  <fieldset>
 
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
      <!-- retype-->
      <label class="control-label" for="retype">Verify Password</label>
      <div class="controls">
        {!! Form::password('retype', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) !!}
        <p class="help-block">Retype Password</p>
      </div>
    </div>
 
   
    <div class="control-group">
      <!-- Button -->
      <div class="controls">        
        {!! Form::submit('Join', array()) !!}
      </div>
    </div>
  </fieldset>

{!! Form::close() !!}
</div>
</div>
</div>
</div>
</body>
</html>

