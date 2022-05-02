<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberAndMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'member_id',
        'm_menu_id',
        'date',
        'time_type',
        'memo',
        'operation_user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
