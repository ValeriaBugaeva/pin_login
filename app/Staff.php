<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    public function usersmm()
    {
        return $this->hasMany('id', 'user_id', 'gender', 'placebirth', 'nationality', 'nin', 'qualification', 'hiring_date', 'contract_type', 'location_id', 'position', 'monthly_salary', 'hourly_salary', 'overtime_salary', 'weekly_working_time', 'daily_breaks_time', 'holidays_per_year', 'shift', 'status');
    }

    // User function

    public function users(){
        return $this->belongsTo(User::class,  'id', 'staff_id' );
    }


}

// class User extends Model implements UserInterface, RemindableInterface {

//     use UserTrait, RemindableTrait;

//     protected $table = 'users';

//     protected $hidden = array('password', 'remember_token');

//     public function something()
//     {
//         return $this->belongsTo('fullname', 'email','username','phone','birthday','address','country','provider','provider_id','avatar', 'stripe_id','status', 'last_login_at','last_login_ip', 'first_name', 'last_name', 'postcode', 'city', 'country', 'theme');
//     }
// }
