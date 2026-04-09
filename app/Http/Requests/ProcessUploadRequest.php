<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'file' => 'required|file|extensions:csv|mimetypes:text/csv,text/plain,application/csv,text/x-csv,application/x-csv,application/vnd.ms-excel',
        ];
    }

    public function messages(): array
    {
        return [
            'file.required' => 'O arquivo é obrigatório.',
            'file.file' => 'O arquivo deve ser um arquivo.',
            'file.extensions' => 'O arquivo deve ter extensão .csv.',
            'file.mimetypes' => 'O arquivo deve ser um CSV válido.',
        ];
    }
}
