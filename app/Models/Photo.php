<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Photo extends Model
{
    //
    protected $fillable = [
        'name',
        'product_id'
    ];
    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
