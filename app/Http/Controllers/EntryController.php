<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
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

    public function index(Journal $journal){
        
        // $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        
        $journals = $this->journals;
        $entries = $journal->entries;

        $journal_id = $journal->id;
        return view('dashboard', compact('journals', 'entries', 'journal_id'));
    }

    public function show(Journal $journal, Entry $entry){

        // $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        
        $journals = $this->journals;
        $entries = $journal->entries;

        $journal_id = $journal->id;
        return view('dashboard', compact('journals', 'entries', 'entry', 'journal_id'));
    }

    public function store(Journal $journal){

        $journal_id = $journal->id;

        $validate = request()->validate([
            'entry-title' => 'required|max:100',
            'entry-body' => 'required'
        ]);
        
        $data = [
            'entry_title' => $validate['entry-title'],
            'entry_body' => $validate['entry-body'],
            'journal_id' => $journal_id,
            'user_id' => $this->user_id
        ];

        $entry = Entry::create($data);

        if($entry){
            return redirect()->route('entry.show', compact('journal', 'entry'));
        }
        else{
            return redirect()->route('dashboard')->withErrors('error', 'не удалось создать запись');
        }
    }
}
