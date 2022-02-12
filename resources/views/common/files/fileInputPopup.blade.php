{!! Form::open(
    array(
        'route' => 'common.files.upload',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'files' => true)) !!}


{!! Form::file('upload',null,[]) !!}
{!! Form::submit('Save',[]) !!}

{!! Form::close() !!}
{{--*/
$fileInputSelector=preg_match('/^[|]/i',$fileInputSelector)? str_replace('|','#',$fileInputSelector):'input[name='.$fileInputSelector.']';

/*--}}

@foreach($files as $file)
    <img onclick="window.opener.document.querySelector('{{$fileInputSelector}}').value= '/{{ $asset_folder.'files/'.basename($file) }}';window.close();"
         width="200" height="200" src="{{ asset($asset_folder.'files/'.basename($file)) }}">
@endforeach