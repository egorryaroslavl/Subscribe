<?php

	namespace App\Http\Controllers;

	use Redis;
	use App\Model\Partner;
	use Illuminate\Support\Facades\Auth;
	use Validator;
	use Illuminate\Validation\Rule;
	use Illuminate\Http\Request;

	class PartnersController extends Controller
	{

		public function index()
		{


			$data = Partner::orderBy( 'email' )->paginate( 30 );


			$breadcrumbs = '
<h2>Партнёры</h2>
	<ol class="breadcrumb">
						<li>
							<a href="/admin">Главная</a>
						</li>
						<li>
							Партнёры
						</li>
					</ol>';
			\View::share( 'breadcrumbs', $breadcrumbs );


			$data->table = 'partners';
			return view( 'admin.partners.index', [ 'data' => $data ] );
		}


		public function create()
		{
			$partners         = Partner::paginate( 30 );
			$user             = Auth();
			$partners->action = 'create';
			$breadcrumbs = '
<h2>Партнёры</h2>
	<ol class="breadcrumb">
						<li>
							<a href="/admin">Главная</a>
						</li>
						<li>
							<a href="/admin/partners">Партнёры</a>
						</li>
					<li>Добавление новой записи</li>	
						
					</ol>';
			\View::share( 'breadcrumbs', $breadcrumbs );;

			return view( 'admin.partners.form', [ 'data' => $partners, 'user' => $user ] );

		}


		public function store( Request $request )
		{

			$v = Validator::make( $request->all(), [
				'name'        => 'required|unique:partners|max:255',
				'email'       => 'required|email|unique:partners|max:255',
				'status'      => 'required',
				'description' => 'max:800',

			] );


			if( $v->fails() ){


				return redirect( '/admin/partners/create' )
					->withErrors( $v->errors() )
					->withInput();

			}


			$input = $request->all();

			$input = array_except( $input, '_token' );
			$id    = Partner::create( $input )->id;


			return redirect( '/admin/partners/edit/' . $id )->with( 'message', 'Запись добавлена! ID-' . $id );
		}


		public function edit( $id )
		{
			$partner = Partner::find( $id );
			if( $partner->status == '' ){
				$partner->status = 'common';
			}
			$partner->action = 'update';

			$breadcrumbs = '
<h2>Партнёры</h2>
	<ol class="breadcrumb">
						<li>
							<a href="/admin">Главная</a>
						</li>
						<li>
							<a href="/admin/partners">Партнёры</a>
						</li>
					<li>
							 ' . $partner->name . ' 
						</li>	
						
					</ol>';
			\View::share( 'breadcrumbs', $breadcrumbs );


			return view( 'admin.partners.form', [ 'data' => $partner ] );
		}


		public function update( Request $request )
		{
			$v = Validator::make( $request->all(), [
				'name'        => [
					'required',
					'max:800',
					Rule::unique( 'partners' )->ignore( $request->id ),
				],
				'email'       => [
					'required',
					Rule::unique( 'partners' )->ignore( $request->id ),
				],
				'status'      => 'required',
				'description' => 'max:800',


			] );


			if( $v->fails() ){


				return redirect( '/admin/partners/edit/' . $request->id )
					->withErrors( $v->errors() )
					->withInput();

			}


			$partner              = Partner::find( $request->id );
			$partner->name        = $request->name;
			$partner->person      = $request->person;
			$partner->email       = $request->email;
			$partner->description = $request->description;
			$partner->save();


			return redirect( '/admin/partners/edit/' . $request->id )->with( 'message', 'Запись обновлена!' );
		}


		public function destroy( Request $request = null, $id = null )
		{
			if( !is_null( $request ) ){


				if( $request->isMethod( 'get' ) ){
					Partner::find( $id )->delete();

					return redirect()->back();
					/*die( json_encode( [ 'error' => 'ok' ] ) );*/
				}


				$ids = json_decode( $request->ids );

				if( count( $ids ) > 0 ){

					foreach( $ids as $id ){
						$partner = Partner::findOrFail( $id );
						$partner->delete();
					}
				}

				die( json_encode( [ 'error' => 'ok' ] ) );

			}

			if( !is_null( $id ) ){

				Partner::find( $id )->delete();

				//	return redirect()->back();
				die( json_encode( [ 'error' => 'ok' ] ) );
			}

		}
	}
