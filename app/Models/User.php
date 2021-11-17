<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /** Os atributos que podem ser atribuídos em massa
     * @var string[] */
     
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /** Os atributos que devem ser ocultados para serialização.
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** Os atributos que devem ser lançados.
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


//O Model é onde é executada a regra de negócios (como acesso ao BD) e retorna o resultado para o Controller.