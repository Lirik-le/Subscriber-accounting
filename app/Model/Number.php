<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'numbers';
    protected $fillable = [
        'id_number',
        'number',
        'id_room',
    ];
}
