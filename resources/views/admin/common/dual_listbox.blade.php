<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="row">
	<div class="col-md-12">
		<div class="row dualbox">
			<div class="col-md-5 ">
				<h5>
					Выберите адресатов из этого списка кликая двойным кликом по ним.<br>
					Либо выделите нужные пункты нажав клавишу Ctrl и воспользуйтесь кнопками.<br>
					Кнопка Все Туда сработает без выделения.
				</h5>
				<ul id="first" name="first" class="list-unstyled list-group" title="">
					@if(isset($first) && count($first)>0)
						@foreach($first as $firstItem)
							<li id="item{{$firstItem->id}}" class="list-group-item"
							    data-id="{{$firstItem->id}}">{{$firstItem->name}} - {{$firstItem->email}}</li>
						@endforeach
					@endif
				</ul>
			</div>
			<div class="col-md-2">
				<h5 style="text-align: center">
			Кнопки Туда и Сюда работают с выделенными пунктами.<br>
					Для работы с кнопками Все Туда и Все Сюда ничего выделять не нужно
				</h5>
				<div class="btn-group  btn-group-vertical center-block">
					<button
						class="btn btn-default right allToSecond"
						id="allToSecond"
						type="button">
						Все Туда <i class="fa fa-forward"></i>
					</button>
					<button
						class="btn btn-default firstToSecond"
						id="firstToSecond"
						type="button">
						Туда <i class="fa fa-play"></i>
					</button>
					
						<button
						class="btn btn-default"
						id="n"
						onclick="alert('Позиции списка никуда не были перемещены!')"
						type="button"><i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i>
						Никуда <i class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i>
					</button>
					<button
						class="btn btn-default secondToFirst"
						id="secondToFirst"
						type="button">
						<i class="fa fa-play  fa-flip-horizontal"></i> Сюда
					</button>
					<button
						class="btn btn-default allToFirst"
						id="allToFirst"
						type="button">
						<i class="fa fa-backward"></i> Все Сюда
					</button>

				</div>
			</div>
			<div class="col-md-5">
				<h5>
					Удалите адресатов из этого списка рассылки, кликая двойным кликом по ним.<br>
					Либо выделите нужные пункты нажав клавишу Ctrl и воспользуйтесь кнопками.<br>
					Кнопка Все Сюда сработает без выделения.
				</h5>
				<ul id="second" name="second" class="list-unstyled list-group" title="">
					@if(isset($second) && count($second)>0)
						@foreach($second as $secondItem)
							<li id="item{{$firstItem->id}}" class="list-group-item"
							    data-id="{{$secondItem->id}}">{{$secondItem->name}} - {{$secondItem->email}}<input
									type="hidden" value="{{$firstItem->id}}" name="partners[]"/></li>

						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
</div>