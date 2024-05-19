<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * @var bool|\Illuminate\Support\HigherOrderCollectionProxy|int|mixed
     */
    protected $fillable = [
        'name',
        'email',
        'title',
        'body',
        'isReader'
    ];
}
