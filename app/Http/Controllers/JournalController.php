<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    
    public function index(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $journals = $user->journals;
        $entries = $user->entries;
        
        return view('dashboard', compact('journals', 'entries'));
    }
}
