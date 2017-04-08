<?php

	namespace App\Widgets;

	use App\Model\Partner;
	use Arrilot\Widgets\AbstractWidget;


	class PartnersSelect extends AbstractWidget
	{
		/**
		 * The configuration array.
		 *
		 * @var array
		 */
		protected $config = [];

		/**
		 * Treat this method as a controller action.
		 * Return view() or other content to display.
		 */
		public function run()
		{

			$partners = Partner::orderBy( 'name', 'ASC' )->get();
			$select   = "<select name='partners[]' class=\"form-control dual_select\" multiple=\"\" style=\"display: none;\">";

			foreach( $partners as $partner ){

				$select .= "<option value=\"$partner->id\">$partner->name - $partner->email</option>";

			}
			$select .= "</select>";

			return $select;
		}
	}