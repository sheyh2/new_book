<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App\Models\User
 *
 * @property int    $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $token
 *
 * @property Carbon $email_verified_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Getters
    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string{
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string{
        return $this->password;
    }

    /**
     * @return string
     */
    public function getToken(): string{
        return $this->token;
    }

    /**
     * @return Carbon
     */
    public function getEmail_verified_at(): Carbon{
        return $this->email_verified_at;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon{
        return $this->created_at;
    }
}
