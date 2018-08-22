{{Form::open()}}
{{Form::label('name','اسم الدورة')}}
{{Form::text('name',null,['required'=>'required'])}}
<br/>
{{Form::label('section','القسم')}}
{{Form::select('section',['1'=>'test'])}}
<br/>
{{Form::label('hours','الساعات')}}
{{Form::text('hours')}}
<br/>
{{Form::label('description','تفاصيل الدورة')}}
{{Form::text('description')}}
<br/>
{{Form::label('price','سعر الدورة')}}
{{Form::number('price',null,['min'=>'1.0'])}} جنيه
<br/>
{{Form::submit('حفظ')}}
{{Form::close()}}


<hr/>
@if(count($courses))
    <table>
        <tr>
            <th>الدورة</th>
            <th>الوصف</th>
            <th>عدد الساعات</th>
            <th>السعر</th>
        </tr>
        @foreach($courses as $course)
        <tr>
            <th>{{$course->name}}</th>
            <th>{{$course->descripton}}</th>
            <th>{{$course->hours}}</th>
            <th>{{$course->price}}</th>
        </tr>

        @endforeach
    </table>

@endif