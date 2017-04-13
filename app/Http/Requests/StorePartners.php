<?php

	namespace App\Http\Requests;

	use Illuminate\Foundation\Http\FormRequest;

	class StorePartners extends FormRequest
	{

		public function authorize()
		{
			return true;
		}


		public function rules()
		{
			return [
				'name'        => 'required|unique:partners|max:255',
				'person'      => 'required|max:255',
				'email'       => 'required|email|unique:partners|max:255',
				'status'      => 'required',
				'description' => 'max:800',
			];
		}


		public function messages()
		{
			return [
				'name.required' => 'Поле "Имя/Название" обязательно для заполнения!',
				'person.required'  => 'Поле "Обращение" обязательно для заполнения!',
				'email.required'  => 'Поле "Email" обязательно для заполнения!',
				'status.required'  => 'Статус обязательно должен быть определён!',
			];
		}

	}
