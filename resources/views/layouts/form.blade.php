@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{  html()->label('Имя', 'name') }}
<div> {{  html()->input('text', 'name') }} </div>
{{  html()->label('Содержание', 'body') }}
<div>{{  html()->textarea('body') }}</div>
