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
  // hoeveel topics bij dit subject horen
  public function topics()
  {
    return $this->hasMany(Topic::class);
  }
  public function topic()
  {
    return $this->belongsTo(Topic::class);
  }

}
