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
        'photo',
        'id_number',
    ];

    public function number(): BelongsTo
    {
        return $this->belongsTo(Number::class, 'id_number', 'id');
    }

    public function photo($img)
    {
        $photo = time() . $img['name'] ;
        $this->photo = $photo;
        move_uploaded_file($img['tmp_name'], __DIR__ . '/../../public/Images/' . $photo);
    }
}
