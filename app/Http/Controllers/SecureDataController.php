<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecureDataController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'You have access to secure data!',
            'data' => ['item1', 'item2', 'item3'],
        ]);
    }
}
