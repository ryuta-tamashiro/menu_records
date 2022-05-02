<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'menu_type',
        'description',
        'url',
        'is_default',
        'sort_no',
        'operation_user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // 会員
    public function members()
    {
        return $this->belongsToMany(Member::class, 'members_and_menus')
            ->withPivot(
                'date',
                'time_type',
                'memo'
                )
            ;
    }
}
