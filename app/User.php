<?php

namespace edy;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public function roles()
    {
        return $this->belongsToMany('edy\Role');
    }
    public function authorizeRoles($roles)
    { /*se valida el rol y en caso de no posser ningun rol
    se envia una excepcion http 401 */
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(401, 'Esta acción no esta autorizada');
    }


    public function hasAnyRole($roles)
    { /*en el caso que llegue un array de roles iterar sobre cada uno
      y retornar verdadero*/
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      }else{
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }/* si no hay un rol para el usuario retornar falso*/




    public function hasRole($role)
    { /* si el usuario en tiene asociado ese rol enviar el primero que encuentre*/
        if ($this->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
