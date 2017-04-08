<?php

	namespace App\Mail;

	use Illuminate\Bus\Queueable;
	use Illuminate\Mail\Mailable;
	use Illuminate\Queue\SerializesModels;
	use Illuminate\Contracts\Queue\ShouldQueue;

	class MailSubscribe extends Mailable implements ShouldQueue
	{
		use Queueable, SerializesModels;

		public $data;

		public function __construct( $data )
		{
			$this->data = $data;
		}


		public function build()
		{
			return $this->view( 'email.notifications.default' )
				->with( $this->data );
		}
	}
