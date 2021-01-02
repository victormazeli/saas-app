<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use App\Models\User;

class Store extends BaseTenant implements TenantWithDatabase
{
    use HasFactory, HasDatabase, HasDomains;

    protected $fillable = [
        'name',
        'logo',
        'description',
        'user_id'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'logo',
            'description',
            'user_id',
        ];
    }


}
