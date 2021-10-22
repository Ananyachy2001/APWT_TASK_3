<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

        //using belongsto verb one to one
        public function user(){
            return $this->belongsTo(User::class, 'userId','id');
        }
        //using eloquent
        public function assignedUser(){
            return User::where('id', $this->userId)->first();
        }
}
