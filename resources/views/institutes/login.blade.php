{{Form::open()}}
{{Form::label('email','Email')}}
{{Form::text('email')}}
<br/>
{{Form::label('password','Password')}}
{{Form::password('password')}}
<br/>
{{Form::submit('Login')}}

{{Form::close()}}