<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'staff';
    protected $fillable = [
        'id',
        'username',
        'password',
        'role'
    ];
}
