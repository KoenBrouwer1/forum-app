<?php

namespace App\Models;
// files die hij gebruikt
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  use HasFactory;
  // geeft aan welke velden ingevuld mogen worden
  protected $fillable = [
    'subject',
  ];
  // relatie met de posts die bij het topic horen
  public function topic()
  {
    return $this->belongsTo(Topic::class);
  }
}
