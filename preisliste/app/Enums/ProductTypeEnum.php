<?php

namespace App\Enums;

enum ProductTypeEnum: string
{
    case WhiteWine = 'Weiß Wein';
    case RedWine = 'Rot Wein';
    case RoseWine = 'Rosé';
    case SparklingWine = 'Sekt';
    case Softdrink = 'Alkoholfreie Getränke';
}
