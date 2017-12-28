<?php

namespace App\Model\Tracking\Entities;

use App\Model\Core\Entities\Customer;
use App\Model\RootModel;

class Sale extends RootModel
{
    protected $table = 'sales';

    protected $fillable = ['billing_amount', 'is_recurring', 'recurring_interval'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function conversionOpportunity(){
        return $this->belongsTo(ConversionOpportunity::class, 'conversion_opportunity_id', 'id');
    }
}
