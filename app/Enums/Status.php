<?php


namespace App\Enums;

enum Status: string
{
    case CONFIRMED = "confirmed";
    case PENDING = "pending";
    case TO_RECALL = "to_recall";
    case CANCELLED = "cancelled";
    case NOT_DELIVERED = "not_delivered";

    public function getName(): string
    {
        return match ($this) {
            self::CONFIRMED => 'Confirmed',
            self::PENDING => 'Pending',
            self::CANCELLED => 'Cancelled',
            self::NOT_DELIVERED => 'Not Delivered',
            self::TO_RECALL => 'To Recall',
        };
    }


    public function getBgColor(): string
    {
        return match ($this) {
            self::CONFIRMED => 'dark:bg-success/10 text-success',
            self::PENDING => 'dark:bg-info/10 text-info',
            self::TO_RECALL => 'dark:bg-warning/10 text-warning',
            self::CANCELLED => 'dark:bg-error/10 text-error' ,
            self::NOT_DELIVERED => 'dark:bg-error/10 text-error'
        };
    }
}
