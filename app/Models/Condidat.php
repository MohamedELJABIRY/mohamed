<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'cv',
        'specialite',
        'competence',
        'logo',
        'domaine',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
