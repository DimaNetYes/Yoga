<?php

namespace App\Http\Middleware;



use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        
        
        if (!app()->runningInConsole() && $user) {
            
           /* $roles            = Role::with('permissions')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }*/

           /* foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (\App\User $user) use ($roles) {
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }*/
                
            Gate::define('event_edit', function (\App\Models\User $user) {
                return $user->role === 1;
            });
            Gate::define('event_delete', function (\App\Models\User $user) {
                return $user->role === 1;
            });
        }

        return $next($request);
    }
}
