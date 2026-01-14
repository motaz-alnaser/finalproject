<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'location', 'price', 
        'max_participants', 'category_id', 'host_id', 'status'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

   
    public function host()
    {
        return $this->belongsTo(User::class, 'host_id');
    }

    // علاقة: نشاط واحد → فئة
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // علاقة: نشاط واحد → صور كثيرة
    public function images()
    {
        return $this->hasMany(ActivityImage::class);
    }

    // علاقة: نشاط واحد → حجوزات كثيرة
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // علاقة: نشاط واحد → تقييمات كثيرة
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}