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
    
    public function store(){
        $validate= request()->validate([
            'journal-name' => 'required|string|max:12'
        ]);

        $journalName = $validate['journal-name'];
        $user_id = $this->user_id;

        $data = [
            'journal_name' => $journalName,
            'user_id' => $user_id
        ];

        Journal::create($data);

        return redirect()->route('dashboard');
    }
}
