<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Bkash extends Model
{
    use HasFactory;
    protected $table = 'bkashes';

    protected $guarded = ['id'];
    
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
    public function employeer(): BelongsTo
    {
        return $this->belongsTo(Employeer::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
