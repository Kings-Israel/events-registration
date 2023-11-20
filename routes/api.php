<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VisitorController;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

Route::get('/sessions', [SessionController::class, 'index']);
Route::get('/visitor/{id}', [VisitorController::class, 'show']);
Route::post('/register/session', [VisitorController::class, 'registerToSession']);

Route::post('/session/store', [SessionController::class, 'store']);
Route::post('/visitor/store', [VisitorController::class, 'store']);
Route::post('/visitor/session/store', [VisitorController::class, 'registerToSession']);

Route::get('/sessions/attendance/update', function () {
    $visitors = Visitor::whereDate('created_at', '2023-11-17')->get();

    foreach ($visitors as $visitor) {
        $attendance = DB::table('visitor_session')->get()->pluck('visitor_id');

        if (!collect($attendance)->contains($visitor->id)) {
            DB::table('visitor_session')->create([
                'session_id' => 1,
                'visitor_id' => $visitor->id
            ]);
        }
    }
});
