<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PoliticalParty;

class Candidate extends Model
{
    use HasFactory;
    public function politicalParty()
    {
        return $this->belongsTo(\App\Models\PoliticalParty::class);
    }
}
