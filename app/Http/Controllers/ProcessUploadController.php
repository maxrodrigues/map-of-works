<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcessUploadRequest;
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
                dd($row);
            });
    }
}
