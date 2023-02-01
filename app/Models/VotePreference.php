<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotePreference extends Model
{
    use HasFactory;
    protected $fillable = ['vote_id', 'first_candidate_id', 'second_candidate_id', 'third_candidate_id'];
}
