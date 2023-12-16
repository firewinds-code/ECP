<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Thiagoalessio\TesseractOCR\TesseractOCR;

class ImageTranslationController extends Controller
{
    public function translate(Request $request, Excel $excel)
    {
        // Handle image upload and save it to a temporary location.
        $image = $request->file('image');
        $imagePath = $image->store('temp');

        // Perform OCR on the uploaded image to extract Hindi text.
        $hindiText = (new TesseractOCR(storage_path('app/' . $imagePath)))->run();

        // Translate Hindi text to English (you can use Google Translate API or other translation services).
        $englishText = translateHindiToEnglish($hindiText);

        // Create an Excel file with the translated text.
        $excel->create('translated_data.xlsx', function ($excel) use ($englishText) {
            $excel->sheet('Sheet 1', function ($sheet) use ($englishText) {
                $sheet->fromArray([
                    [$englishText],
                ]);
            });
        })->store('xlsx', storage_path('app/'));

        // Provide a download link for the Excel file.
        return response()->download(storage_path('app/translated_data.xlsx'))->deleteFileAfterSend(true);
    }
}
