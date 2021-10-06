<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\AdmCargo;
use App\Models\AdmDepartamento;
use App\Models\AdmEstablecimiento;
use App\Models\RrhhBrigada;
use App\Models\WebArticulo;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

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
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function establecimiento(){
        return $this->hasOne(AdmEstablecimiento::class,'id','adm_establecimiento_id');
    }

    public function departamento(){
        return $this->hasOne(AdmDepartamento::class,'id','adm_departamento_id');
    }

    //Relacion uno a muchos
    public function cargos(){
        return $this->hasMany(AdmCargo::class);
    }
    
    public function brigadas(){
        return $this->hasMany(RrhhBrigada::class);
    }

    public function articulos(){
        return $this->hasMany(WebArticulo::class);
    }

    
}
