<?php

class T
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';

    public function __construct()
    {
        echo "constructor"; 
    }

    public const ALL_STATUSES = [
        self::STATUS_PAID=>'paid',
        self::STATUS_PENDING=>'pending'
    ];

}