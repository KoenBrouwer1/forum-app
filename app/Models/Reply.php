<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;
    // geeft aan welke velden ingevuld mogen worden
    protected $fillable = [
        'user_id',
        'topic_id',
        'reply',
    ];
    // alle topics bij dit subject horen
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
