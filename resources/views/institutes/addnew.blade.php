{{$errors}}
{{Form::open()}}
{{Form::label('name','اسم المركز')}}
{{Form::text('name')}}
<br/>
{{Form::label('institutetype2','نوع المركز')}}
{{Form::radio('institutetype','معهد')}}معهد &nbsp;&nbsp;&nbsp;
{{Form::radio('institutetype','كلية')}}كلية
<br/>
{{Form::label('accountnumber','رقم التصديق')}}
{{Form::text('accountnumber')}}
<br/>
{{Form::label('phone','رقم الهاتف ')}}
{{Form::text('phone')}}
بيانات الفرع الرئيسي
<br/>
{{Form::label('address','عنوان المركز')}}
{{Form::text('address')}}
<br/>
{{Form::label('city','المدينة')}}
{{Form::text('city')}}
<br/>
{{Form::label('neighborhood','الحي')}}
{{Form::text('neighborhood')}}

<br/>

{{Form::label('phone1','رقم الهاتف 1')}}
{{Form::text('phone1')}}
{{Form::label('phone2','رقم الهاتف 2')}}
{{Form::text('phone2')}}
<br/>
{{Form::label('intitutelink','رابط الصفحة')}}
saanclass.com/{{Form::text('intitutelink')}}
<br/>


{{Form::label('email','البريد الالكتروني')}}
{{Form::text('email')}}
<div class="form-group">
{{Form::label('password','كلمة المرور')}}
{{Form::password('password')}}
</div>

<div class="form-group">
{{Form::label('password','تأكيد كلمة المرور')}}
{{Form::password('password_confirmation')}}
</div>
<br/>
{{Form::submit('تسجيل')}}
{{Form::close()}}