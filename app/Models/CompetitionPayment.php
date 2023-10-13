<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionPayment extends Model
{
    use HasFactory;
    protected $table = 'competition_payments';
    protected $primarykey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function participant(){
        return $this->belongsTo(CompetitionParticipant::class);
    }
}
