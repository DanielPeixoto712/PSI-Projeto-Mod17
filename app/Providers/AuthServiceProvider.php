<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //musicas
        Gate::define('atualizar-musica', function($user, $musica){
            return $user->id==$musica->id_user;
        });

        Gate::define('admin', function($user){
            if ($user->tipo_user=='admin') {
                return true;
            }
            else{
                return false;
            }
        });


        //musicos
        Gate::define('atualizar-musico', function($user, $musico){
            return $user->id==$musico->id_user;
        });


         Gate::define('admin', function($user){
            if ($user->tipo_user=='admin') {
                return true;
            }
            else{
                return false;
            }
        });








    }
}
