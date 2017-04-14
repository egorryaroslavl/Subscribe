<?php

	namespace App\Http\Controllers;

	use App\Jobs\SendReminderEmail;
	use App\Model\History;
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
		public function testMail( Request $request )
		{


			$subscribeList = [
				[ 'email' => 'yaroslavl.city@gmail.com' ],
				//[ 'email' => 'denis@tcyar.ru' ]
			];


			foreach( $subscribeList as $user ){


				$data = $request->all();


				Mail::to( $user[ 'email' ] )
					->send( new Reminder( $data ) );


				sleep( 1 );

			}

			echo json_encode( [ 'error' => 'ok' ] );


		}


		/**
		 * @param \Illuminate\Http\Request $request
		 */
		public function sendMail( Request $request )
		{

			$ok            = [];
			$error         = [];
			$mailRes       = [];
			$subscribeList = Partner::whereIn( 'id', $request->partners )->get();


			foreach( $subscribeList as $user ){


				$data                = $request->all();
				$data[ 'recipient' ] = $user;

				$mailRes[] = Mail::to( $user->email )
					->send( new Reminder( $data ) );

				if( count( Mail::failures() ) > 0 ){

					foreach( Mail::failures as $email_address ){

						$error[] = $email_address;
					}

				} else{
					$ok[] = $user->email;
				}
				sleep( 1 );

			}

			$message          = new Message();
			$message->name    = empty( $data[ 'name' ] ) ? $data[ 'subject' ] : $data[ 'name' ];
			$message->subject = $data[ 'subject' ];
			 $message->message      = $data[ 'message' ];
			$message->message_type = $data[ 'message_type' ];

			/*$message->history_id = $data[ 'history_id' ];*/

			$message->report = [
				'mailRes' => $mailRes,
				'send'    => $ok,
				'ids'     => $request->partners,
				'error'   => $error,
				/*'data'    => $data*/
			];
			$message->save();
		}


		public function show( $id )
		{

			$data = Message::find( $id );

			$breadcrumbs = '
<h2>Сообщения</h2>
	<ol class="breadcrumb">
						<li>
							<a href="/admin">Главная</a>
						</li>
						<li>
							<a href="/admin/messages">Сообщения</a>
						</li>
					<li>
							 ' .  $data->name . ' 
						</li>	
						
					</ol>';
			\View::share( 'breadcrumbs', $breadcrumbs );

			return view( 'admin.messages.show' )->with( 'data', $data );

		}


	}
