<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscriber extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'subscribers';
    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'patronymic',
        'date_of_birth',
        'id_number'
    ];

    public function number(): BelongsTo
    {
        return $this->belongsTo(Number::class, 'id_number', 'id');
    }
}
