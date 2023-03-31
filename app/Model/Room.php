<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'rooms';
    protected $fillable = [
        'id_room',
        'room_number',
        'id_division',
        'id_type'
    ];
}
