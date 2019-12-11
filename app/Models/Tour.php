<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const HOT_DEFAULT = 0;
    const HOT_SUCCESS = 1;
    protected $guarded = [''];
    protected $status = [
        self::STATUS_PUBLIC => [
            'name' => 'Public',
            'class' => 'label label-default'
        ],
        self::STATUS_PRIVATE => [
            'name' => 'Private',
            'class' => 'label label-danger'
        ]
    ];


    protected $hot = [
        self::HOT_DEFAULT => [
            'class' => 'label label-default',
            'name'  => 'Default'
        ],
        self::HOT_SUCCESS => [
            'class' => 'label label-success',
            'name'  => 'Hot'
        ]
    ];

    public function getHot()
    {
        return array_get($this->hot, $this->t_hot,'[N\A]');
    }

    public function getStatus()
    {
        return array_get($this->status,$this->t_status,'[N\A]');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'t_category_id');
    }
    public function singerBand()
    {
        return $this->belongsTo(SingerBand::class,'t_singer_band_id');
    }
}
