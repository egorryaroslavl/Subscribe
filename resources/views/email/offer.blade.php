@component('mail::table')
	
	|   ![tcyar.ru](http://www.travel-club.tcyar.ru/images/tcyar.jpeg)|
	|:---------------------------------------------------------------------------------------------: |
	|     **ООО "Клуб путешественников - Ярославль" **         |
	|   <span style="color:#777;font-size:14px;line-height:1.2"> г. Ярославль ул. Свободы, 41, офис 20 (2-й этаж)<br>   (4852) 74-55-59 (отдел продаж), (4852) 73-92-03 (отдел продаж), (4852) 32-01-34	(отдел продаж) </span> |
@endcomponent
<div style="font-size: 28px;color:#ff6d00;text-align: center">Новое предложение!</div>
@component( 'mail::message' )
## Добрый день, {{$data['recipient']->name or 'коллеги'}}!
### {!! $data['subject'] !!}
		
{!! $data['message'] !!}
@if( !empty($data['url']) )
@component( 'mail::button', ['url' => $data['url'] ] )
Перейти
@endcomponent
-------------
@endif
{{  $data['signature'] or config('admin.settings.company_name')   }}
@endcomponent