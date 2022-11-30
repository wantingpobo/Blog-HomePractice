{!! Form::label('subject', '標題') !!}
{!! Form::text('subject', null) !!}<br><br>

{!! Form::label('category', '分類') !!}
{!! Form::select('category', $category, null, ['placeholder' => '請選擇']) !!}<br><br>

{!! Form::label('desc', '內文') !!}
{!! Form::textarea('desc', null, ['cols' =>50 , 'rows'=>10]) !!}<br><br>


{!! Form::label('status', '狀態', []) !!}
有{!! Form::radio('status', 1, true, []) !!}
無{!! Form::radio('status', 0, false, []) !!}<br><br>

{!! Form::label('sort', '排序', []) !!}
{!! Form::number('sort', 0, ['min'=>0 , 'max'=>100]) !!}<br><br>

{!! Form::label('enable_at', '日期', []) !!}
{!! Form::date('enable_at',null, []) !!}<br><br>

{!! Form::label('tags[]', 'news', []) !!}
{!! Form::checkbox('tags[]', 'news', false) !!}
{!! Form::label('tags[]', 'skill', []) !!}
{!! Form::checkbox('tags[]', 'skill', false) !!}
{!! Form::label('tags[]', 'like', []) !!}
{!! Form::checkbox('tags[]', 'like', false) !!}

{!! Form::label('pic', '圖片上傳', []) !!}
{!! Form::file('pic') !!}<br><br>

{!! Form::submit('送出', []) !!}
{!! Form::reset('重新填寫', []) !!}
