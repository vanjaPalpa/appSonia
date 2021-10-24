<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $data = [
            'title' => 'ACTE de Naissance',
            'date' => date('m/d/Y'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'bithday' => $request->input('bithday'),
            'city' => $request->input('city'),
        ];

        $pdf = PDF::loadView('myPDF', $data);
        $response = Http::attach('file',$pdf,'acte.pdf')->post('http://localhost:8080/upload');

        return response([
            'message' => $response->data
        ]);
    }
}
