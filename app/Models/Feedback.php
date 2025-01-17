<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','subject','description'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
