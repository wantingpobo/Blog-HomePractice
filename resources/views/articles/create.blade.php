
  <h1>1130-回家作業:表單建立頁面</h1>

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}

@include('articles._form')

{!! Form::close() !!}

@include('articles._error')


