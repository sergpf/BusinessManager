<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Account
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $type
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Account whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Account[] $children
 * @property-read int|null $children_count
 * @property-read \App\Models\Account|null $parent
 */
class Account extends Model
{
    public function parent() {
        return $this->belongsTo(self::class);
    }

    public function children() {
        return $this->hasMany(self::class);
    }
}
