<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // One to many inverse relation
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function course() {
        return $this->belongsTo('App\Models\Course');
    }
}
