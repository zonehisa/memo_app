<?php

use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MemoController::class, 'index']);

Route::resource('memos', MemoController::class);
// リソースを使用しない場合
// Route::get('/memos', [MemoController::class, 'index']);
// Route::get('/memos/create', [MemoController::class, 'create']);
// Route::post('/memos', [MemoController::class, 'store']);
// Route::get('/memos/{memo}', [MemoController::class, 'show']);
// Route::get('/memos/{memo}/edit', [MemoController::class, 'edit']);
// Route::patch('/memos/{memo}', [MemoController::class, 'update']);
// Route::delete('/memos/{memo}', [MemoController::class, 'destroy']);
