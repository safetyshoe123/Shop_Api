<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shop';
    protected $primaryKey = 'id';

    protected $fillable = [
        'shopId',
        'shopName',
        'address1',
        'address2',
        'notes',
        'remark',
    ];

    protected $cast = [
        'shopId' => 'array',
    ];

    // protected $hidden = [
    //     'created_at' => 'date'
    // ];
    public function branch(): HasMany {
        return $this->hasMany(Branch::class, 'id');
    }
}
