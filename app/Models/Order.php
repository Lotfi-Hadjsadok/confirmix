<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product',
        'quantity',
        'shipping_method',
        'shipping_price',
        'total',
        'currency',
        'status',
        'client_id',
        'employee_id',
        'employer_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'employee_id' => 'integer',
        'employer_id' => 'integer',
    ];


    public static function date_filter($query,$filter_by){
        return match($filter_by) {
            'today' => $query->whereDate('created_at', now()->toDateString()),
            'seven_last_days' => $query->whereBetween('created_at', [now()->subDays(7)->startOfDay(), now()->endOfDay()]),
            'thirty_last_days' => $query->whereBetween('created_at', [now()->subDays(30)->startOfDay(), now()->endOfDay()]),
            default => $query
        };
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
