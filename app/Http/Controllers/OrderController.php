<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        return redirect()->back()->with('success', 'Сообщение отправлено');
    }
}
