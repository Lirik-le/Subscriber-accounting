<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Division extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'divisions';
    protected $fillable = [
        'id_division',
        'name_division',
        'type_of_division',
        'id_office'
    ];
    public function office(): HasOne
    {
        return $this->hasOne(Office::class, 'id', 'id_office');
    }
}
