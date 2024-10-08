<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesteController extends Controller
{
    public function teste()
    {
    
        return view('welcome');
        
    }

    
}
