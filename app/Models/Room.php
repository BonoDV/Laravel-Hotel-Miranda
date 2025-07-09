<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_number',
        'room_type',
        'bed_type',
        'room_floor',
        'photos',
        'description',
        'offer',
        'price',
        'discount',
        'cancellation',
        'amenities',
    ];

    protected $casts = [
        'photos'    => 'array',
        'amenities' => 'array',
        'price'     => 'decimal:2',
        'discount'  => 'decimal:2',
    ];

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'room_number', 'room_number');
    }
}