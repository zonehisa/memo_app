<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    // showページへ移動
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }
}
