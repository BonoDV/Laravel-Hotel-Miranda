<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookings extends Model
{
    use HasFactory;
    protected $keyType   = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'image',
        'order_date',
        'check_in',
        'check_out',
        'special_request_status',
        'special_request_text',
        'room_type',
        'status',
        'phone',
        'email',
        'room_number',
    ];

    public function rooms(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_number', 'room_number');
    }
}