<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Lumen\Auth\Authorizable;

class Leaderboard extends Model
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'leaderboard';
    protected $primaryKey = 'leaderboard_id';

    public function accounts(): BelongsTo
    {
        return $this->belongsTo(Accounts::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'leaderboard_id',
        'score',
        'account_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];
}
