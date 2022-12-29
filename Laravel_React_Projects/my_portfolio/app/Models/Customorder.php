<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customorder extends Model
{
    use HasFactory;


    public $fillable = [
        'name', 'email', 'msg1', 'msg2', 'msg3', 'msg4', 'msg5', 'msg6', 'msg7', 'msg8', 'msg9', 'msg10', 'msg11', 'msg12', 'msg13'
    ];
}
