<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    protected $user;
    protected $user_id;
    public $journals;
    public $all_entries;

    public function __construct(){
        $this->user = Auth::user();
        $this->user_id = $this->user->id;
        $this->journals = $this->user->journals;
        $this->all_entries = $this->user->entries;
    }
    
    public function index(){
        // $user_id = Auth::user()->id;
        // $user = User::find($user_id);

        $journals = $this->journals;
        $entries = $this->all_entries;
        
        return view('dashboard', compact('journals', 'entries'));
    }
}
