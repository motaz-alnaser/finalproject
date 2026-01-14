<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // في نهاية ملف User.php

// علاقة: مستخدم → أنشطة (كمضيف)
public function hostedActivities()
{
    return $this->hasMany(Activity::class, 'host_id');
}

// علاقة: مستخدم → حجوزات
public function bookings()
{
    return $this->hasMany(Booking::class);
}

// علاقة: مستخدم → تقييمات
public function reviews()
{
    return $this->hasMany(Review::class);
}

// علاقة: مستخدم → إشعارات
public function notifications()
{
    return $this->hasMany(Notification::class);
}
// App\Models\User.php

protected $fillable = [
    'name',
    'email',
    'password',
    'phone',
    'role',
    'is_active',
    'avatar_url',
    'bio',
];
}
