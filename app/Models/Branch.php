<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branch';
    protected $primaryKey = 'id';

    protected $fillable = [
        'shopId',
        'branchId',
        'branchName',
        'address1',
        'address2',
        'dateOpened',
        'type',
        'notes',
        'remark',
    ];

    protected $casts = [
        // 'shopId' => 'array',
        // 'branchId' => 'array',
        'dateOpened' => 'date:Y-m-d',
    ];

    // public function shop(): BelongsTo{
    //     return $this->belongsTo(Shop::class);
    // }

    // public function employee(): HasMany {
    //     return $this->hasMany(User::class);
    // }
}