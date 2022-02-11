<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Admin
 * @package App\Models\Admin
 *
 * @property int    $id
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * @property Carbon $created_at
 */
class Admin extends Model
{
    protected $table = 'admins';

    // Actions

    // Getters
    /**
     * @return int
     */
    public function id(): int{
        return $this->id;
    }

    /**
     * @return string
     */
    public function username(): string{
        return $this->username;
    }

    /**
     * @return string
     */
    public function password(): string{
        return $this->password;
    }

    /**
     * @return string
     */
    public function role(): string{
        return $this->role;
    }

    /**
     * @return Carbon
     */
    public function created_at(): Carbon{
        return $this->created_at;
    }
}
