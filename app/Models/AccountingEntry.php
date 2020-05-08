<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AccountingEntry
 *
 * @property int $id
 * @property int $from
 * @property int $to
 * @property float $amount
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $from_id
 * @property int $to_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountingEntry whereToId($value)
 */
class AccountingEntry extends Model
{
    public function from() {
        return $this->belongsTo(Account::class);
    }

    public function to() {
        return $this->belongsTo(Account::class);
    }
}
