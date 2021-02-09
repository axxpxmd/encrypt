<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = test::all();

        return response()->json([
            'success' => true,
            'message' => 'List data',
            'data'    => $data
        ]);
    }

    public function store(Request $request)
    {
        $footer = new test;
        $footer->test = $request->test;
        $footer->save();

        return response([
            'status' => 'ok',
            'message' => 'barang tersimpan',
            'data' => $footer
        ], 200);
    }
}
