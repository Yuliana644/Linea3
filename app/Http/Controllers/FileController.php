<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Files;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save (Request $request) {
        $image = $request->file('imagen');
        Files::create([
            'imagen' => $image->store('images', 'public'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/');
    }
}
