<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const TABLE = 'todos';
    protected $table = self::TABLE;
    protected $fillable = ['name', 'completed'];

}
