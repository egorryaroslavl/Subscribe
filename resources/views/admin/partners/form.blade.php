@extends('layouts.admin.index')
@section('content')

	<div class="wrapper wrapper-content animated fadeIn">
		<form
			name="data-form"
			id="data-form"
			action="/admin/partners/{{$data->action}}"
			method="post">
			<div class="row">
				<div class="col-lg-12">
					<div class="tabs-container">
						{{-- TABS HEADER --}}
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#tab-1">
									Основные данные
								</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#tab-2">Данные партнёра</a>
							</li>
						</ul>
						{{--\ TABS HEADER --}}
						<div class="tab-content">
							<div id="tab-1" class="tab-pane active">
								<div class="ibox-content">
									@include('common.name_alias')
									<hr class="sep-5">

									<div class="row">
										<div class="col-xs-12">
											<label for="email">Email *</label>
											<input
												type="text"
												{{--type="email"--}}
												name="email"
												class="form-control"
												id="email"
												value="{{ $data->email or old('email') }}"
												style="font-size: 24px; "
												placeholder="Email">
										</div>
									</div>
									<hr class="sep-5">
									<div class="row">
										<div class="col-xs-12">

											@if(count($statuses = config('admin.settings.partners.status'))>0)                            {{Form::label('status','Статус')}}
											{{ Form::bcSelect(  'Статус', 'status', $statuses , isset($data->status) ? $data->status : null ,[] ) }}
											@endif
										</div>
									</div>
									<hr class="sep-5">
									<div class="row">
										<div class="col-xs-12">
											<label for="description">Комментарий *</label>
											<textarea
												name="description"
												class="form-control"
												id="description"
												placeholder="Комментарий">{{$data->description or old('description')}}</textarea>
										</div>
									</div>
									<hr class="sep-5">
									<div class="row">
										<div class="col-xs-12">
											@token()
											@if(isset($data->id) )
												<input type="hidden" name="id" value="{{$data->id or old('id')}}">
											@endif
											@if (count($errors) > 0)

												@foreach ( $errors->all() as $error )
													<div class="alert alert-danger">
														<ul>
															<li style="font-size: 20px">{{ $error }}</li>
														</ul>
													</div>
												@endforeach

											@endif
											@if (\Session::has('message'))
												<div class="alert alert-info">{!! \Session::get('message') !!}   </div>
											@endif
											<input
												type="submit"
												name="submitForm"
												class="btn btn-success btn-block"
												id="submitForm"
												value="ГОТОВО">
										</div>
									</div>
								</div>
							</div>
							<div id="tab-2" class="tab-pane">
								<div class="panel-body">
									<strong>Данные партнёра</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection