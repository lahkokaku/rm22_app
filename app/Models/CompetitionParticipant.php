<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionParticipant extends Model
{
    use HasFactory;
    protected $table = 'competition_participants';
    protected $primarykey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function competitionPayment(){
        return $this->hasOne(CompetitionPayment::class,'id','competition_participant_id');
    }

    public function competition(){
        return $this->belongsTo(Competition::class);
    }

}
