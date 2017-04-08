@extends('layouts.admin.index')
@section('content')
	<div class="wrapper wrapper-content animated fadeIn">
		<form
			name="data-form"
			id="data-form"
			{{--action="/admin/messages/{{$data->action}}"--}}
			action="/sendMail"
			method="POST">
			<div class="row">
				<div class="col-lg-12">
					<div id="tab-1" class="tab-pane active">
						<div class="ibox-content">
							<div class="row">

								<div class="col-md-12">
									<div class="row">
										<div class="col-md-2">
											{{Form::label('message_type', 'Тип')}}
											{{Form::select('message_type',config('admin.settings.message_type' ),null, ['placeholder' => 'Выбрать...','class'=>'form-control'])}}

										</div>
										<div class="col-md-10">
											<div class="row">
												<div class="col-md-12">
													<label for="name">Название сообщения *
														<small style="color: #9c9c9c;font-weight: normal">(для
														                                                  внутреннего
														                                                  пользования)
														</small>
													</label>
													<input
														type="text"
														name="name"
														class="form-control"
														id="name"
														value="{{$data->name or ''}}"
														placeholder="Название сообщения">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<label for="subject">Тема сообщения *</label>
													<input
														type="subject"
														name="subject"
														class="form-control"
														id="subject"
														value="{{$data->subject or ''}}"
														placeholder="Тема сообщения">
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<label for="subject">Url на сайте</label>
													<input
														type="url"
														name="url"
														class="form-control"
														id="url"
														value="{{$data->url or ''}}"
														placeholder="Url на сайте">
												</div>
											</div>


										</div>
									</div>
								</div>

							</div>
							<hr class="sep-5">


							<hr class="sep-5">
							<div class="row">
								<div class="col-xs-12">
									<label for="message">Текст сообщения *</label>
									<textarea
										name="message"
										class="form-control"
										id="message"
										placeholder="Текст сообщения">{{$data->message or ''}}</textarea>
								</div>
							</div>
							<hr class="sep-5">


							<div class="row">
								<div class="col-xs-12">
									<label for="message">Подпись</label>
									<input
										type="text"
										name="signature"
										class="form-control"
										id="signature"/>

							</div>
							<hr class="sep-5">
							<div class="ibox-content">
								<p>
									Выберите адресатов из левого списка кликая по ним.<br>
									Фильтр над списками поможет вам найти нужное.
								</p>
								{{ Widget::PartnersSelect() }}
							</div>
							<div class="row">
								<div class="col-xs-12">
									@token()
									@if(isset($data->id) )
										<input type="hidden" name="id" value="{{$data->id}}">
									@endif
									@if (count($errors) > 0)
										<div class="alert alert-danger">
											<ul>
												@foreach ( $errors->all() as $error )
													<li style="font-size: 20px">{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if (\Session::has('message'))
										<div class="alert alert-info">{!! \Session::get('message') !!}   </div>
									@endif

									<div id="result"></div>
									<input
										{{--type="button"--}}
										type="submit"
										name="submitForm"
										class="btn btn-success btn-block"
										id="submitForm_"
										value="ГОТОВО">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</form>
	</div>
@endsection