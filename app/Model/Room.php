<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'rooms';
    protected $fillable = [
        'id',
        'room_number',
        'id_division',
        'id_type'
    ];

    public function numbers(): HasMany
    {
        return $this->HasMany(Number::class, 'id_room', 'id');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'id_division', 'id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'id_type', 'id');
    }
}
