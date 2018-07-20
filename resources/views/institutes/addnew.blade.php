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
بيانات الفرع الرئيسي
<br/>
{{Form::label('address','عنوان المركز')}}
{{Form::text('accountnumber')}}
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
{{Form::label('phone3','رقم الهاتف 3')}}
{{Form::text('phone3')}}
<br/>
{{Form::label('intitutelink','رابط الصفحة')}}
saanclass.com/{{Form::text('intitutelink')}}
<br/>
{{Form::submit('تسجيل')}}
{{Form::close()}}