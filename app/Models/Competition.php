<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $table = 'competitions';
    protected $primarykey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
    public function competitionParticipant(){
        return $this->hasMany(CompetitionParticipant::class, 'id', 'competition_id');
    }
}
