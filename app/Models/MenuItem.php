<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','menu_id','parent_id'];

    public function template(): BelongsTo
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class,'parent_id');
    }
}
