{{$errors}}
{{Form::open()}}
{{Form::label('course','الدورة')}}
{{Form::select('course',$coursesForSelect)}}
<br/>
{{Form::label('section','القسم')}}
{{Form::text('section',null,['disabled'=>'disabled'])}}
<br/>
{{Form::label('description','الوصف')}}
{{Form::text('description',null,['disabled'=>'disabled'])}}
<br/>
{{Form::label('price','السعر')}}
{{Form::text('price',null,['disabled'=>'disabled'])}}
<br/>
{{Form::label('trainer','المدرب')}}
{{Form::text('trainer')}}
<br/>
{{Form::label('trainerdescription','تفاصيل المدرب')}}
{{Form::textarea('trainerdescription')}}
<br/>
{{Form::label('location_id','المكان')}}
{{Form::select('location_id',$locationsForSelect)}}

{{Form::label('location','المكان')}}
{{Form::text('location')}}
{{Form::label('address','العنوان')}}
{{Form::text('address')}}
{{Form::label('city','المدينة')}}
{{Form::text('city')}}
{{Form::label('neighborhood','الحي')}}
{{Form::text('neighborhood')}}
<br/>
{{Form::label('coursedate','بتاريخ')}}
{{Form::text('coursedate')}}
<br/>
{{Form::label('fromtime','من الساعة')}}
{{Form::time('fromtime')}}
{{Form::label('totime','إلى')}}
{{Form::time('totime')}}
<br/>
{{Form::label('days','عدد الايام')}}
{{Form::number('days')}}

<br/>
{{Form::label('poster','صورة الإعلان')}}
{{Form::file('poster')}}
<br/>
{{Form::label('offer','العرض')}}
{{Form::textarea('offer')}}
<br/>
{{Form::label('tags','كلمات دلالية')}}
{{Form::text('tags',null,['placeholder'=>'ضع فراغ بين كل كلمة مثال : برمجة شبكات تقنية_معلومات ..','style'=>'width:300px;'])}}
<br/>
{{Form::submit('حفظ')}}
{{Form::close()}}