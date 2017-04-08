@component( 'mail::message' )
Добрый день, {{$data['recipient']->name}}!
{!! $data['subject'] !!}

{!! $data['message'] !!}
@if( !empty($data['url']) )
	@component( 'mail::button', ['url' =>   $data['url']  ] )
	Перейти
	@endcomponent
@endif
{{  $data['signature'] or config('admin.settings.company_name')   }}
@endcomponent
