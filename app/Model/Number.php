<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Number extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'numbers';
    protected $fillable = [
        'id',
        'number',
        'id_room',
    ];

    public function subscriber(): HasOne
    {
        return $this->HasOne(Subscriber::class, 'id_number', 'id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'id_room', 'id');
    }
}
