<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessUploadRequest;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Spatie\SimpleExcel\SimpleExcelReader;

class ProcessUploadController extends Controller
{
    public function __invoke(ProcessUploadRequest $request)
    {
        $file = $request->file('file');
        $storedPath = $file->store('private/temp');
        $fullPath = Storage::path($storedPath);

        SimpleExcelReader::create($fullPath, 'csv')
            ->useDelimiter(';')
            ->getRows()
            ->each(function (array $row) {
                Work::create([
                    'number' => $row['IDOBRA'],
                    'description' => $row['OBRA'],
                    'location' => $row['ENDERECO'],
                    'municipality' => $row['MUNICIPIO'],
                    'ibge_code' => $row['IBGE'],
                    'latitude' => $row['LATITUDE'],
                    'longitude' => $row['LONGITUDE'],
                ]);
            });

        return redirect()->route('upload')->with('success', 'Arquivo processado com sucesso');
    }
}
