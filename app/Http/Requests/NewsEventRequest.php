<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules= [
            
                'title' => 'required',
                'slug' => 'required|unique:news_events',
                'body' => 'required',
                // 'published_at' => 'date_format:Y-m-d H:i:s',
             
        ];

        switch($this->method()){
            case 'PUT':
            case 'PATCH':
                $rules['slug'] = 'required|unique:news_events,slug,' . $this->route('blog');
                break; 
        }

        return $rules;
    }
}
