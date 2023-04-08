<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Ok',
            "code" => 200,
            "data" => [
                "id" => 1,
                "title" => "Home"
            ]
        ]);
    }
}
