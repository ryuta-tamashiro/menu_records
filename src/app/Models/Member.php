<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'birth',
        'operation_user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // ユーザー
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
