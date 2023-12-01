<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branch';
    protected $primaryKey = 'id';
    protected $foreignKey = 'fshop_id';

    protected $fillable = [
        'fshop_id',
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

    public function shop(): BelongsTo{
        return $this->belongsTo(Shop::class, 'fshop_id');
    }
}