<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PoliticalParty;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_no',
        'email',
        'displayPicture',
        'dob',
        'gender',
        'occupation',
        'school',
        'religion',
        'current_region',
        'current_province',
        'current_district',
        'current_LLG',
        'current_ward',
        'political_party_id',
    ];
    public function politicalParty()
    {
        return $this->belongsTo(\App\Models\PoliticalParty::class);
    }
}
