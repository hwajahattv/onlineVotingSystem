<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;

class PoliticalParty extends Model
{
    use HasFactory;
    public function candidates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('Candidate');
    }
}
