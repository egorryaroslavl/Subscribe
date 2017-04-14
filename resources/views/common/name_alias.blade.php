<div class="row">
	<div class="col-xs-6">
		<label for="name">Имя/Название *</label>
		<input
			type="text"
			name="name"
			class="form-control"
			id="name"
			value="{{$data->name or old('name') }}"
			placeholder="Имя/Название">
	</div>
	<div class="col-xs-6">
		<label for="alias">Обращение *</label>
		<input
			type="text"
			name="person"
			class="form-control"
			id="person"
			value="{{$data->person or old('person') }}"
			placeholder="Обращение">
	</div>

</div>