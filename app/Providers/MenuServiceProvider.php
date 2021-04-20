<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // get all data from menu.json file
        $verticalMenuJson = file_get_contents(base_path('resources/data/menu-data/verticalMenu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);
        $horizontalMenuJson = file_get_contents(base_path('resources/data/menu-data/horizontalMenu.json'));
        $horizontalMenuData = json_decode($horizontalMenuJson);

        // get all data from Admin menu.json file
        $verticalMenuJsonAdmin = file_get_contents(base_path('resources/data/menu-data/verticalMenuAdmin.json'));
        $verticalMenuDataAdmin = json_decode($verticalMenuJsonAdmin);
        $horizontalMenuJsonAdmin = file_get_contents(base_path('resources/data/menu-data/horizontalMenuAdmin.json'));
        $horizontalMenuDataAdmin = json_decode($horizontalMenuJsonAdmin);
        
        // get all data from Staff menu.json file
        $verticalMenuJsonStaff = file_get_contents(base_path('resources/data/menu-data/verticalMenuStaff.json'));
        $verticalMenuDataStaff = json_decode($verticalMenuJsonStaff);
        $horizontalMenuJsonStaff = file_get_contents(base_path('resources/data/menu-data/horizontalMenuStaff.json'));
        $horizontalMenuDataStaff = json_decode($horizontalMenuJsonStaff);        

        // Share all menuData to all the views
        \View::share('menuData',[$verticalMenuData, $horizontalMenuData]);
 
        // Share all menuDataAdmin to all the views
        \View::share('menuDataAdmin',[$verticalMenuDataAdmin, $horizontalMenuDataAdmin]);  
        
        // Share all menuDataStaff to all the views
        \View::share('menuDataStaff',[$verticalMenuDataStaff, $horizontalMenuDataStaff]);          
    }
}
