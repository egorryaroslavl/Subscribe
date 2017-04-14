<div style="height: 30px!important;clear: both;width: 100%"></div>
<table class="items-table table table-stripped toggle-arrow-tiny  animated fadeIn" data-page-size="15"
       id="partner_searched_table" style="-webkit-box-shadow: 0px 0px 30px 0px rgba(204,204,204,1);
-moz-box-shadow: 0px 0px 30px 0px rgba(204,204,204,1);
box-shadow: 0px 0px 30px 0px rgba(204,204,204,1);">
	<thead>
	<tr>
		<th colspan="5" style="background: #f9f9f9">
			<h3><i class="fa fa-search" aria-hidden="true"></i> Результат поиска [<span
					style="background: #ffed00;padding: 0 10px;font-style: italic;color:#000">{{ $data->request }}</span>]
			</h3>
		</th>
		<th colspan="1" style="background: #f9f9f9"><i class="fa fa-close close-table"
		                                               style="float: right;cursor: pointer"
		                                               onclick="$('#partnerSearchResult').empty()"></i></th>
	</tr>
	<tr>

		<th data-toggle="true">
			<input
				id="checkAll"
				name="checkall"
				class="checkall"
				type="checkbox"
			>
		</th>
		<th data-hide="name">Название</th>
		<th data-hide="email">E-mail</th>
		<th data-hide="phone">Статус</th>
		<th class="text-left" data-sort-ignore="true">Action</th>
	</tr>

	</thead>
	<tbody>
	@if( isset( $data ) && count( $data ) > 0 )
		@foreach($data as $item)
			<tr>
				<td>
					<input
						type="checkbox"
						name="partner[]"
						class="del-partner-checkbox"
						data-id="{{$item->id}}"
						value="{{$item->id}}">
				</td>

				<td>
					<a href="/admin/partners/edit/{{$item->id}}">{{$item->name}}</a>
				</td>
				<td>
					{{$item->email}}
				</td>

				<td>
					{{$item->status}}

				</td>
				<td>
					<div class="btn-group">
						<a href="/admin/partners/edit/{{$item->id}}">
							<button class="btn-info btn btn-xs"><i
									class="fa fa-pencil-square-o"></i></button>
						</a>
						<a href="/admin/partners/delete/{{$item->id}}">
							<button class="btn-danger btn btn-xs"><i
									class="fa fa-trash"></i></button>
						</a>
					</div>
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="5" style="background: #ededed">
				С отмеченными <input type="button" name="partners-del"
				                     class="btn btn-danger btn-xs partners-del" value="удалить">
			</td>
		</tr>
	@else
		<td colspan="5">Пусто...</td>
	@endif
	</tbody>
	<tfoot>

	</tfoot>
</table>