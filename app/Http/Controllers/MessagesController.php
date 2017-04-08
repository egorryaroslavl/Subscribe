<?php

	namespace App\Http\Controllers;

	use App\Jobs\SendReminderEmail;
	use App\Model\Message;
	use App\Model\Partner;
	use Mail;
	use DB;
	use App\Mail\MailSubscribe;
	use App\Mail\NotificationMail;
	use App\Mail\Reminder;
	use Illuminate\Http\Request;
	use Carbon;
	use Symfony\Component\VarDumper\Caster\PdoCaster;

	class MessagesController extends Controller
	{

		public function index()
		{
			$data = Message::orderBy( 'departure_date' )->paginate( 30 );

			return view( 'admin.messages.index', [ 'data' => $data ] );
		}


		public function create()
		{
			$messages = new Message();

			$messages->action = 'create';


			return view( 'admin.messages.form', [ 'data' => $messages ] );
		}


		public function store( Request $request )
		{


			$this->dispatch( new SendReminderEmail( $request ) );

		}

		/**
		 * @param $ids
		 *
		 * @return array
		 */
		public function subscribeLis( $ids )
		{

			$subscribeLis = [];

			if( isset( $ids ) && count( $ids ) > 0 ){

				$partners = Partner::class;

				$subscribeLis = [];

				foreach( $ids as $key => $id ){


					$partner                         = $partners::find( $id );
					$subscribeLis[ $key ][ 'name' ]  = $partner->name;
					$subscribeLis[ $key ][ 'email' ] = $partner->email;
				}


			}

			return $subscribeLis;


		}

		/**
		 * @param \Illuminate\Http\Request $request
		 */
		public function sendMail( Request $request )
		{

			$subscribeList = Partner::whereIn( 'id', $request->partners )->get();


			foreach( $subscribeList as $user ){


				$data                = $request->all();
				$data[ 'recipient' ] = $user;

				Mail::to( $user->email )
					->send( new Reminder( $data ) );

				sleep( 3 );

			}
		}


	}
