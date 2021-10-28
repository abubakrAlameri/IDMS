<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfectionDisease extends Model
{
    use HasFactory;

    public function reports(Type $var = null)
    {
        return $this->hasOne(Report::class ,'infec_id' , 'infec_id');
    }
}
