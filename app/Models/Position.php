<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
   // protected $table = 'profiles';
    protected $fillable = [
        'Position',
        'position_id',
        'created_at',
        'updated_at',
        'admin_created_id',
        'admin_updated_id'
    ];

    public function emploee()
    {
        return $this->belongsTo(Employee::class);
    }
    protected $tables = 'positions';
}
