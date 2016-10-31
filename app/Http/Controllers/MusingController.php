<?php

namespace App\Http\Controllers;

use App\Musing;
use Illuminate\Http\Request;

class MusingController extends Controller
{
    public function index()
    {
        return Musing::all();
    }

    public function show($id)
    {
        $musing = Musing::find($id);

        return $musing ?
            $musing :
            response()->json('Not Found', 404);
    }
}
