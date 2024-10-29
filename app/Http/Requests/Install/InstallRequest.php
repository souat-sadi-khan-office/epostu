<?php

namespace App\Http\Requests\Install;

use Illuminate\Foundation\Http\FormRequest;

class InstallRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];
		if ($this->step_0) {
			$rules = [
				'terms' => 'required',
			];
		} elseif ($this->step_2) {
			$rules = [
				'db_host' => 'required',
				'db_username' => 'required',
				'db_database' => 'required',
			];
		} else if ($this->step_3) {
			$rules = [
				'first_name' => 'required',
				'last_name' => 'required',
				'contact_number' => 'required',
				'email' => 'required',
				'username' => 'required',
				'password' => 'required',
			];
		} else if ($this->step_4) {
			$rules = [
				'company_name' => 'required',
				'site_title' => 'required',
				'phone' => 'required',
				'email' => 'required',
			];
		}

		return $rules;
    }

    public function messages() 
    {
		return [
			'terms.required' => 'You Need To Agree With Our Terms',
		];
	}
}
