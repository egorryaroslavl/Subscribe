@extends('layouts.admin.form')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{!! Session::get('message') !!}   </div>

    @endif
    {{ Form::open( [ 'action' =>'PartnersController@'. $data->act,'enctype'=>'multipart/form-data' ] ) }}
    @if(isset( $data->id ) ) {{ Form::hidden('id',$data->id ) }} @endif
    @if(isset( $data->icon ) )  <input type="hidden" name="icon" id="icon" value="{{$data->icon,''}}"/> @endif


    <div class="hr-line-dashed"></div>
    <div class="row">
        <div class="col-xs-6">
            {!! Form::submit('Готово!',['class'=>'btn btn-primary','style'=>'padding:3px  50px;font-size:1.5rem']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('ibox_title')
    <a href="/admin/services">Услуги</a>  /  Новая запись
@endsection
@section('title')
    <h2><a href="/admin/services">Услуги</a>/ Новая запись</h2>
@endsection
@section('breadcrumb')
    @if(isset($data->id))
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Главная</a>
            </li>
            <li>
                <strong> <a href="/admin/services">Услуги</a></strong>
            </li>
        </ol>
    @endif
    <style>
        label {
            margin-top: 15px;
            }

        .nav-tabs li a {
            /* font-size: 18px !important;*/
            font-weight: bold !important;
            color:       rgba(64, 80, 187, 0.7) !important;
            }
    </style>
@endsection

