<?php

namespace App\Models;

use App\Filters\UserFilters;
use Essa\APIToolKit\Filters\Filterable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Filterable, HasFactory, Notifiable;

    protected string $default_filters = UserFilters::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    ];
}
