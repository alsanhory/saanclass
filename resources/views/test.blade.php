<form action="{{URL::to('testing')}}" method="post">
<input type="text" name="myname"/>
<input type="submit"/>
{{ csrf_field() }}
</form>

{{Form::open()}}
    {{Form::text('test')}}
    {{Form::submit('test')}}
{{Form::close()}}