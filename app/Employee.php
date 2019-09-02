<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function user (){
        return $this->BelongsTo(User::class);
    }
    public function position (){
        return $this->BelongsTo(Position::class);
    }
}
