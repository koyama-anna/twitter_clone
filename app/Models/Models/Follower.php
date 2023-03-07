<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    //主キーをid以外(following_id,foolowed_id)に設定する
    protected $primaryKey = [
        'following_id',
        'followed_id'
    ];
    protected $fillable = [
        'following_id',
        'followed_id'
    ];
    public $timestamps = false;

    //主キーは自動で増加設定されてしまうため、その設定を外す
    public $incrementing = false;
}
