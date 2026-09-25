<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'author' => ['required', 'string', 'max:100'],
            'genre_id' => ['required', 'exists:genres,id'],
            'cover' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'published_year' => ['required', 'integer'],
            'resume' => ['nullable', 'string', 'max:191'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Título é obrigatório!',
            'author.required' => 'Autor é obrigatório!',
            'genre_id.required' => 'Gênero é obrigatório!',
            'genre_id.exists' => 'Gênero selecionado não existe!',
            'cover.image' => 'Capa deve ser uma imagem',
            'cover.mimes' => 'Capa deve estar nos formatos: JPG, PNG ou JPEG',
            'published_year.required' => 'Ano de publicação é obrigatório!',
            'resume.max' => 'Detalhes não pode ultrapassar 191 caracteres!',
        ];
    }
}
