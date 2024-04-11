<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;

class PdfController extends Controller
{
    public function __invoke()
    {
        return pdf('pdf.invoice', [
            'invoiceNumber' => '1234',
            'customerName' => 'Grumpy Cat',
        ]);
    }
}
