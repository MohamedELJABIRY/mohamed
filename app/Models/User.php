<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ville',
        'tel',
        'email',
        'type',
        'password',
    ];

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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function iscompagne(){
        $type=$this->type;
        if($type){
            return true;
        }
        return  false;
    }

    public function company(){
        return $this->hasMany(company::class,'user_id');
    }
    
    public function condidat(){
        return $this->hasMany(Condidat::class);
    }

    public function isSuiver($post){
        $s=DB::table('offre_condidats')->where('user_id',$this->id)->where('company_id',$post)->exists();
        if($s){
            return true;
        }else{
            return false;
        }
    }
}

