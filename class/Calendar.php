<?php

class Calendar
{
    private $plantList;
    private $currentMonth;
    private $currentYear;

    public const MONTHS =
    [
        1 => "Janvier",
        2 => "Février",
        3 => "Mars",
        4 => "Avril",
        5 => "Mai",
        6 => "Juin",
        7 => "Juillet",
        8 => "Août",
        9 => "Septembre",
        10 => "Octobre",
        11 => "Novembre",
        12 => "Décembre"
    ];

    public static function getMonth(int $month): string
    {
        if ($month == -1) return "Non renseigné";
        return self::MONTHS[$month];
    }
}
