<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Journal extends Model
{
    use HasFactory;

    public $fillable = [
        'journal_name',
        'user_id',
    ];

    public $timestamps = true;

    public function entries() : HasMany{
        return $this->hasMany(Entry::class, 'journal_id');
    }
}
