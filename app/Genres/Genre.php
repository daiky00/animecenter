<?php

namespace App\Genres;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Genres\Genre
 *
 * @property integer $id
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Anime\Anime[] $animes
 * @method static Builder|Genre whereId($value)
 * @method static Builder|Genre whereValue($value)
 */
class Genre extends Model
{
    protected $table = 'genres';

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    protected $visible = ['name'];

    public function animes()
    {
        return $this->belongsToMany('App\Animes\Anime', 'anime_genre', 'anime_id', 'genre_id');
    }
}
