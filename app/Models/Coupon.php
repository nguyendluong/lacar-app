<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'value',
        'expires_at',
        'status',
    ];

    public function isValid()
    {
        if (!$this->status) {
            return false;
        }

        if ($this->expires_at && $this->expires_at < now()->startOfDay()) {
            return false;
        }

        return true;
    }
}
