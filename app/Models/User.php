<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function trades()
    {
        return $this->hasMany(Trade::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);

    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function accountBalance($type = 'main')
    {
        $account = $this->accounts()->where('type', $type)->first();
        return (float) $account?->account ?? 0;
    }

    public function generateAccounts()
    {
        $this->accounts()->createMany([
            [
                'account' => 0,
                'type' => 'main',
            ],
            [
                'account' => 0,
                'type' => 'invested',
            ],
            [
                'account' => 0,
                'type' => 'referral',
            ],
        ]);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function bots()
    {
        return $this->belongsToMany(Bot::class)->withPivot(['status', 'id']);
    }

    public function withdrawalTokens()
    {
        return $this->hasMany(WithdrawalToken::class);
    }

    public function autoTrade(Bot $bot)
    {
        return 'lol';
    }

}
