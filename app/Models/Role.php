<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Указываем все поля из таблицы , кроме id, created_at/updated_at
    protected $fillable = [
      'name',
      'code',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }

}
