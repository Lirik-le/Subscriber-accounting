<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'offices';
    protected $fillable = [
        'id',
        'name_office',
        'address',
        'director'
    ];
}
