<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_item_id',
        'name'

    ];

    public function parentItem()
    {
        return $this->belongsTo(parentItem::class);
    }
}
