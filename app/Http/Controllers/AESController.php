<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AESController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function enkripsi(Request $request)
    {
        $keywordEnkrip = $request->keyword;
        $enkrip  = Crypt::encrypt($keywordEnkrip);

        return view('index', compact('enkrip', 'keywordEnkrip'));
    }

    public function dekripsi(Request $request)
    {
        $keywordDekrip = $request->keyword;
        $dekrip  = Crypt::decrypt($keywordDekrip);

        return view('index', compact('dekrip', 'keywordDekrip'));
    }
}
