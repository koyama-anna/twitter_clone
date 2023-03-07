<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    use HasFactory;

    //デフォルトで設定されるtimestampを無効にする。
    public $timestamps = false;
}
