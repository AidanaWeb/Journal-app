<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{

    public function index(Journal $journal){
        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        
        $journals = $user->journals;
        $entries = $journal->entries;

        return view('dashboard', compact('journals', 'entries'));
    }

    public function show(Journal $journal, Entry $entry){

        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        
        $journals = $user->journals;
        $entries = $journal->entries;

        return view('dashboard', compact('journals', 'entries', 'entry'));
    }
}
