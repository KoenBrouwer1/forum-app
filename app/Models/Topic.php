<?php

namespace App\Models;
// files die hij gebruikt
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  use HasFactory;
  // geeft aan welke velden ingevuld mogen worden
  protected $fillable = [
    'user_id',
    'subject_id',
    'title',
    'content',
    'topic',
  ];
  // kijkt welke user bij de topic hoort
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  // relatie met de posts die bij het topic horen
  public function topic()
  {
    return $this->belongsTo(Topic::class);
  }
  // relatie met het subject dat bij de topic hoort
  public function subject()
  {
    return $this->belongsTo(Subject::class);
  }
}
