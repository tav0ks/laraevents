<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'speaker_name',
        'start_date',
        'end_date',
        'target_audience',
        'participants_limit'
    ];

    //mutators
    public function setStartDateAtribute($value)
    {
        $this->attributes['start_date'] = Carbon::createFromFormat('d/m/Y H:i', $value)
            ->format('Y-m-d H:i:s');
    }

    public function setEndDateAtribute($value)
    {
        $this->attributes['end_date'] = Carbon::createFromFormat('d/m/Y H:i', $value)
            ->format('Y-m-d H:i:s');
    }
}
