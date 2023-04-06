<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'types_of_rooms';
    protected $fillable = [
        'id',
        'type_of_room',
    ];
}
