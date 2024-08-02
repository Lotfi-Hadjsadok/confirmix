<?php


namespace App\Enums;

enum DateFilter: string
{
    case TODAY = "today";
    case YESTERDAY = "yesterday";
    case SEVEN_TOTAL_DAYS = "seven_total_days";
    case THIS_MONTH = "this_month";
    case LAST_MONTH = "last_month";
    case MAXIMUM = "maximum";

    public function getName(): string
    {
        return match ($this) {
          self::TODAY => 'Today',
          self::YESTERDAY => 'Yesterday',
          self::SEVEN_TOTAL_DAYS => '7 Days',
          self::THIS_MONTH => 'This Month',
          self::LAST_MONTH => 'Last Month',
          self::MAXIMUM => 'Maximum',
        };
    }


    public function getWhereClause(): string
    {
        return match ($this) {
            self::TODAY => 'today',
            self::YESTERDAY => 'yesterday',
            self::SEVEN_TOTAL_DAYS => 'seven_total_days',
            self::THIS_MONTH => 'this_month',
            self::LAST_MONTH => 'last_month',
            self::MAXIMUM => 'maximum',
        };
    }

}
