<?php

namespace TomatoPHP\TomatoLocations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property string $name
 * @property integer $city_id
 * @property string $lat
 * @property string $lang
 * @property string $created_at
 * @property string $updated_at
 */
class Area extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'city_id', 'lat', 'lang', 'created_at', 'updated_at'];

    /**
     * @return BelongsTo
     */
    public  function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
