<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class auth extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    use HasFactory;
}
