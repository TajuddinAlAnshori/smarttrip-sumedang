<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingList extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package_id',
        'user_id',
        'date',
        'start_time',
        'end_time',
        'purpose',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function package(){
        return $this->hasOne(Package::class, 'id', 'package_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
