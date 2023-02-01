<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VotePreference;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = ['voter_id','election_id'];
    public function preference()
    {
        return $this->hasOne(VotePreference::class);
    }
}
