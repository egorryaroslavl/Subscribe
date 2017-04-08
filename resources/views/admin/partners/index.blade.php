@extends('layouts.admin.index')
@section('content')

	<div class="wrapper wrapper-content animated fadeInRight ecommerce">
		<div class="ibox-content m-b-sm border-bottom">
<a href="/admin/partners/create"><button type="button" href="/admin/partners/create" class="btn btn-info" id="partner-create"><i class="fa fa-plus"></i> Добавть</button></a>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-content">
						<table class="items-table table table-stripped toggle-arrow-tiny" data-page-size="15">
							<thead>
							<tr>
								<td colspan="6">
										{{ $data->links() }}
								</td>
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
								<th data-hide="name">Имя</th>
								<th data-hide="email">E-mail</th>
								<th data-hide="phone">Статус</th>
								<th class="text-left" data-sort-ignore="true">Action</th>
							</tr>

							</thead>
							<tbody>
							<tr>
								<td colspan="5" style="background: #ededed">
С отмеченными  <input type="button" name="partners-del" class="btn btn-danger btn-xs partners-del" value="удалить">
								</td>
							</tr>
							@if(isset($data) && count($data)>0)
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
										С отмеченными  <input type="button" name="partners-del" class="btn btn-danger btn-xs partners-del" value="удалить">
									</td>
								</tr>
								@else
								<td colspan="5">Пусто...</td>
							@endif
							</tbody>
							<tfoot>
							<tr>
								<td colspan="6">
										{{ $data->links() }}
								</td>
							</tr>
							</tfoot>
						</table>
							@token()
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection