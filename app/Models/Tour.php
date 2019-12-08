<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;


    protected $guarded = [''];

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'label-danger'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'label-default'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status,$this->pro_active,'[N\A]');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'t_categories');
    }
}
