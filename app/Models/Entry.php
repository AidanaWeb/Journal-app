<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;


    public $fillable = [
        'entry_title', 
        'entry_body',
        'journal_id',
        'user_id'
    ];
}
