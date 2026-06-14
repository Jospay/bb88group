<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Post extends Model
{
    // 1. Explicitly direct queries to the news database connection configured in your .env
    protected $connection = 'news';

    // 2. Map to your legacy table name
    protected $table = 'tblposts';

    // 3. Disable standard Laravel timestamp tracking since legacy tables use 'postingdate'
    public $timestamps = false;

    protected $casts = [
        'postingdate' => 'datetime',
    ];

    protected $appends = ['time_ago'];

    // Accessor computing relative string intervals optimized for the Manila timezone
    public function getTimeAgoAttribute(): string
    {
        if (!$this->postingdate) return '';
        
        $postingDate = $this->postingdate->setTimezone('Asia/Manila');
        $now = Carbon::now('Asia/Manila');

        if ($postingDate->isSameDay($now)) {
            return $postingDate->diffForHumans($now, true) . ' ago';
        }

        return $postingDate->format('F j, Y');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'CategoryId');
    }
}