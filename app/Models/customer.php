<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customers';
    protected $dates = ['deleted_at'];
    protected $fillable=
    [ 'user_name',
        'first_name',
        'Last_name',
        'email',
        'Salary',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}