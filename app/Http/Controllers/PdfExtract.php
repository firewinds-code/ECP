<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Response;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Dompdf\Dompdf;
use Dompdf\Options;
use mikehaertl\pdftk\Pdf;






class PdfExtract extends Controller
{
    // public function extract()
    // {
    //     ini_set('memory_limit', '256M'); // Set memory limit to 256 MB

    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);

    //     $dompdf = new Dompdf($options);
    //     $dompdf->loadHtml(file_get_contents(public_path('format.pdf')));
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();

    //     $htmlContent = $dompdf->output();
    //     $text = $this->pdfToTextConversion($htmlContent);
    //     dd($text);
    //     return response()->json(['text' => $text]);
    // }

    // protected function pdfToTextConversion($htmlContent)
    // {
    //     // Extract text from HTML content (you can use more advanced parsing libraries)
    //     $text = strip_tags($htmlContent); // This is a simple example

    //     return $text;
    // }

    public function extract()
    {
        ini_set('memory_limit', '256M');

        $parser = new Parser();
        $pdf = $parser->parseFile(public_path('format.pdf'));

        $text = $pdf->getText();
        // dd($text);
        return response()->json(['text' => $text]);
    }

}