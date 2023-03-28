<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomCompany',
        'adresse',
        'domaine',
        'nbrPoste',    
        'nomPoste',  
        'description',
        'logo' ,
        'user_id',
        'ville',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
