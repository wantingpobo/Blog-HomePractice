@if ($errors->has('size'))
    <div style="color:red">{{ $errors->first('size')}}</div>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
