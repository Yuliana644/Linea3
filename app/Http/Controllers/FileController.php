<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;

class FileController extends Controller
{
    public function save (Request $request) {
        $image = $request->file('imagen');
        Files::create([
            'imagen' => $image->store('images', 'public')
        ]);

        return redirect('/');
    }
}
