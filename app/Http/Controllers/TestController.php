<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use App\Permission;
use App\Charts\Charts;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;
use App\Subscriptions;
use App\Stripe\StripeCustomer;
use \Stripe\Exception\AuthenticationException;
use \Stripe\Exception\ApiConnectionException;
use \Stripe\Exception\ApiErrorException;
use \Stripe\Exception\RateLimitException;
use \Stripe\Exception\InvalidRequestException;

class TestController extends Controller
{
    private $user;
    private $chart;
    private $subscriptions;
    private $stripeCustomer;


  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($this->isAdmin()) {
            return $this->adminDashboard();
        }

        if ($this->isStaff()) {
          return $this->staffDashboard();
      }

        return $this->defaultDashboard();
    }

  /**
   * return admin users to admin dashboard
   * @return [type] [description]
   */
  private function adminDashboard()
  {
      $users = User::count();
      $roles = Role::count();


      return view('admin.dashboard');
  }

  /**
   * return admin users to staff dashboard
   * @return [type] [description]
   */
  private function staffDashboard()
  {
      $users = User::count();
      $roles = Role::count();


      return view('staff.dashboard');
  }

  /**
     * Function directs users to default dashboard
     * @return view default user dashboard
     */
    private function defaultDashboard()
    {
        return view('dashboard.user');
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isAdmin()
    {
        return (auth()->user()->roles->first()['name'] == 'admin')? true : false;
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isStaff()
    {
        return (auth()->user()->roles->first()['name'] == 'staff')? true : false;
    }

}
