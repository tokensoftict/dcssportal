<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordViaApi;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\VerifyEmailViaApi;

/**
 * Class User
 *
 * @property int $id
 * @property string $firstname
 * @property string $othernames
 * @property bool $is_admin
 * @property string|null $phone
 * @property string $password
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname' ,
        'othernames',
        'email',
        'is_admin',
        'phone',
        'password'
    ];


    protected $with = ['applications'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    public function isAdmin(){
        return $this->is_admin === 1;
    }

    public function isDcssAdmin(){
        return $this->is_admin === 2;
    }

    public function isUpperlinkAdmin(){
        return $this->is_admin === 3;
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function sendEmailVerificationNotification()
    {
        $notification = new VerifyEmailViaApi();
        $notification->toApi($this);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordViaApi($token));
    }
}
