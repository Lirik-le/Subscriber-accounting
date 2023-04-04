<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'divisions';
    protected $fillable = [
        'id',
        'name_division',
        'type_of_division',
        'id_office'
    ];

    public function rooms(): HasMany
    {
        return $this->HasMany(Room::class, 'id_division', 'id');
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'id_office', 'id');
    }
}
