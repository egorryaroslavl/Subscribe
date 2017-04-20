@extends('layouts.admin.index')
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
{{--{{dd($data->report['ids'])}}--}}
			<h3><span style="font-size: 22px;color: #4c60dd">Дата рассылки: </span> <span style="font-family: 'Raleway', sans-serif;font-style: italic;font-size: 28px;color: darkgreen">{{ Carbon\Carbon::parse($data->created_at)->format('d.m.Y H:i') }}</span></h3>
			<h3><span style="font-size: 22px;color: #4c60dd">Тема рассылки: </span>{{$data->subject}}</h3>
			<h3><span style="font-size: 22px;color: #4c60dd">Имя рассылки: </span>{{$data->name}}</h3>
		</div>
		<div class="col-lg-2">

		</div>
	</div>

	<div class="fh-breadcrumb">
		<div class="fh-column">
			<div class="full-height-scroll">
			 
				@if(  count(   $data->subscribeList )> 0)
					<ul class="list-group elements-list" style="max-height:600px;overflow: scroll;overflow-x: hidden">
						<li class="list-group-item"><h3> Получатели ( {{count( $data->report['ids'] )}} )</h3>
							<a href="/admin/messages/copy/from/{{ $data->id}}"> <button class="btn btn-primary" type="button">Создать новую рассылку<br>для этих получателей</button></a></li>
						@foreach( $data->subscribeList as $partner)
							<li class="list-group-item">

									<small class="pull-right text-muted"> {{ $partner->status}}</small>
									<strong>{{ $partner->name}}</strong>
									<div class="small m-t-xs">
										<p class="m-b-none">
											<i class="fa fa-envelope-square"></i> {{ $partner->email }}
										</p>

										<p class="m-b-none">
											<i class="fa fa-user"></i> {{ $partner->person  }}
										</p>

									</div>

							</li>
						@endforeach
					</ul>
				@endif
			</div>
		</div>

		<div class="full-height">
			<div class="full-height-scroll white-bg border-left">

				<div class="element-detail-box">

					<div class="tab-content">

						<div id="tab-1" class="tab-pane active">
							<div class="pull-right">
								<div class="">
									<a href="/admin/messages/delete/{{$data->id}}"><button
										class="btn btn-white btn-xs"
										data-id="{{$data->id}}"
										data-toggle="tooltip"
										data-placement="top"
									    title="Удалить"
										data-original-title="Удалить"><i class="fa fa-trash-o"></i>
									</button></a>

								</div>
							</div>
							<div class="text-muted">
								<i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($data->created_at)->format('d.m.Y H:i') }}
							</div>

							<h2>
								{{$data->name}}
							</h2>

							{!! $data->message !!}

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
@endsection