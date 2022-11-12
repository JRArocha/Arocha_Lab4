<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useraccount extends Model
{
    use HasFactory;
    protected $table = 'useraccounts';

    protected $fillable =
    [
        'firstName',
        'lastName',
        'contact',
        'email',
        'username',
        'password',
        'confirmPassword'
    ];
}
