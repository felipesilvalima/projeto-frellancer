<?php declare(strict_types=1);

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TesteController::class,'teste']);

