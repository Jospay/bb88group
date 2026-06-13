<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // Ensure the category lookup stays inside the news database connection
    protected $connection = 'news';

    protected $table = 'tblcategory';

    public $timestamps = false;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'CategoryId');
    }
}