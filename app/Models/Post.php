<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = ['views'];

    public function getViewsAttribute()
    {
        return $this->views()->count();
    }
    
    public function views()
    {
        return $this->hasMany(PostView::class);
    }
    

}
