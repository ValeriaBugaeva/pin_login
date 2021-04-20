<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\CompaniesResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Companies as Authenticatable;


class Companies extends Model
{
    use Notifiable;

    protected $table = 'companies';
    protected $fillable = [
        'id', 'username', 'name', 'industry', 'first_name', 'last_name', 'email', 'phone', 'logo', 'address', 'password', 'remember_token', 'created_at', 'updated_at', 'status', 'current_plan', 'role', 'theme'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CompaniesResetPassword($token));
    }
}
