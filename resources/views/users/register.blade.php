{{$errors}}
{{Form::open()}}

<div class="form-group">
{{Form::label('fullname','الإسم')}}
{{Form::text('fullname')}}
</div>

<div class="form-group">
{{Form::label('email','البريد الالكتروني')}}
{{Form::email('email')}}
</div>

<div class="form-group">
{{Form::label('password','كلمة المرور')}}
{{Form::password('password')}}
</div>

<div class="form-group">
{{Form::label('password','تأكيد كلمة المرور')}}
{{Form::password('password_confirmation')}}
</div>
{{Form::submit('تسجيل')}}
{{Form::close()}}