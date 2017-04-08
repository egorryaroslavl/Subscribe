<?php

	$data =  \App\Model\YamzCategory::getOptions();

?>
<select name="yamz_categories" class="form-control col-md-2 chosen-select" id="yamz_categories">
	<option value="0"> -= Выбрать =- </option>
	@if(count($data)>0)
		@foreach( $data as $key => $item )
			<option value="{{$key}}">{{$item}}</option>
		@endforeach
	@endif
</select><form name="sr" id="sr" method="post" action enctype="multipart/form-data"></form>