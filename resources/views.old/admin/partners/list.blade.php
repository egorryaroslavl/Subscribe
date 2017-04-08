@extends('layouts.admin.index')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Партнёры</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Главная</a>
                </li>
                <li class="active">
                    <strong><a href="/admin/{{$data->table}}">Партнёры</a></strong>
                </li>
            </ol>
        </div>
    </div>

    {{--  page header  --}}
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <h4>Партнёры</h4>
                    <a href="/admin/{{$data->table}}/create" class="btn btn-primary"><i
                                class="fa fa-plus"></i> Добавить запись</a><br><br>
                    <div class="ibox-content">
                        {{$data->render()}}

                        <table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded"
                               data-page-size="15">
                            <thead>
                            <tr>
                                <th style="width: 20px"><i class="fa fa-random"></i></th>
                                <th>Имя</th>
                                <th>Статус</th>
                                <th class="text-right" data-sort-ignore="true">Действия</th>

                            </tr>
                            </thead>
                            <tbody id="sortable"
                                   data-table="<?php if( isset( $data->table ) && !empty( $data->table ) ) echo $data->table ?>">

                            @if( count( $data ) > 0)

                                @foreach( $data as $item )
                                   <?php $item->table = $data->table ?>
                                    <tr class="ui-state-default" id="id_{{$item->id}}">
                                        <td class="reorder"><i class="fa fa-ellipsis-v"></i> <i
                                                    class="fa fa-ellipsis-v"></i>
                                        </td>
                                        <td class="<?php if( $item->public == 0 ) echo 'shadow' ?>"
                                            id="name_public_<?php echo $item->id ?>"
                                            style="max-width:30.0rem;overflow: hidden">
                                            <a href="/admin/{{$data->table}}/{{$item->id }}/edit">
                                                {{$item->name }}
                                            </a>
                                        </td>

                                        <td style="min-width:10.0rem">
                                            {!! \App\Http\Controllers\AdminController::status_buttons_set($item) !!}
                                        </td>
                                        <td class="text-right" style="min-width:10.0rem">
                                            <div class="btn-group">
                                                <a href="/admin/{{$data->table}}/{{$item->id }}/edit"
                                                   class="btn-info btn btn-xs"
                                                   title="Редактировать"
                                                   style="color: #fff"><i class="fa fa-edit"></i></a>

                                                <a href="#"
                                                   class="btn-danger btn btn-xs del"
                                                   data-id="{{$item->id}}"
                                                   data-table="{{$data->table}}"
                                                   title="Удалить"
                                                   onclick="return false"
                                                   style="color: #fff"><i class="fa fa-trash"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{$data->render()}}
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="placeModal"></div>
@endsection