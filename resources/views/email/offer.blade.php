@component('mail::table')
|    ООО "Клуб путешественников - Ярославль"     |
|:-------------:|
|    ![alt text](http://www.travel-club.tcyar.ru/images/logo.png "Logo Title Text 1")      |
| г. Ярославль ул. Свободы, 41, офис 20 (2-й этаж) (4852) 74-55-59 (отдел продаж), (4852) 73-92-03 (отдел продаж), (4852) 32-01-34 (отдел продаж) <br> График работы в праздники: только 4 января с 10:00 - 15:00;<br> График работы с 1 января по 1 апреля: пн-пт с 10:00 - 18:00, суб. с 10:00 - 15:00    |   |
-------------
@endcomponent

@component( 'mail::message' )
##Добрый день, {{$data['recipient']->name}}!
###{!! $data['subject'] !!}

{!! $data['message'] !!}
@if( !empty($data['url']) )
@component( 'mail::button', ['url' =>   $data['url']  ] )
	Перейти
@endcomponent
-------------
@endif
{{  $data['signature'] or config('admin.settings.company_name')   }}
@endcomponent