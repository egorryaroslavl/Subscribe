<?php

	namespace App\Jobs;

	use App\Mail\Reminder;
	use App\Model\Partner;
	use Illuminate\Bus\Queueable;
	use Illuminate\Http\Request;
	use Illuminate\Contracts\Mail\Mailer;
	use Illuminate\Queue\SerializesModels;
	use Illuminate\Queue\InteractsWithQueue;
	use Illuminate\Contracts\Queue\ShouldQueue;
	use Illuminate\Foundation\Bus\Dispatchable;
	use Illuminate\Support\Facades\Mail;

	class SendReminderEmail implements ShouldQueue
	{
		use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

		/**
		 * Create a new job instance.
		 *
		 * @return void
		 */
		public function __construct( Request $request )
		{
			$this->request = $request;
		}

		/**
		 * Execute the job.
		 *
		 * @return void
		 */
		public function handle( Request $request )
		{

			$subscribeList = Partner::whereIn( 'id', $request->partners )->get();


			foreach( $subscribeList as $user ){
				$data                = $request->all();

				$data[ 'recipient' ] = $user;


				Mail::to( $user->email )
					->queue( new Reminder( $data ) );
				sleep( 1 );


			}
			return back();

			/*		Mail::to( 'yaroslavl.city@gmail.com' )
						->queue( new Reminder( $request->all() ) );*/


		}
	}
