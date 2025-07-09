<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $incrementing  = false;                    // No autoincrementa
    protected $primaryKey = ['user_id', 'date_time']; // Clave primaria compuesta
    protected $keyType    = 'string';                 // O 'array'

    protected $fillable = [
        'type',
        'user_id',
        'date_time',
        'paid',
        'notes',
        'satisfaction',
    ];

    // Sobrescribe el método para clave primaria compuesta
    public function setKeysForSaveQuery($query)
    {
        $query->where('user_id', $this->getAttribute('user_id'))
            ->where('date_time', $this->getAttribute('date_time'));
        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}