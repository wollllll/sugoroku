<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoomUser extends Pivot
{
    /**
     * IDの自動増加
     *
     * @var bool
     */
    public $incrementing = true;
}