<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;


    protected $table = 'register';

protected $fillable = [

    'nameOrganization', 'legalAdress', 'postcode', 'number', 'email', 'bankName', 'bin', 'bik', 'iik',
    'responsPerson','responsnumber','responsemail','name','domain','file',



];
}



