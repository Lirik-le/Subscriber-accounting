<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'subscribers';
    protected $fillable = [
        'id_subs ',
        'lastname',
        'firstname',
        'patronymic',
        'date_of_birth',
        'id_number'
    ];
}
