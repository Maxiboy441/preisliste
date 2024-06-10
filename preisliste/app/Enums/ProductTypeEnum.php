<?php

namespace App\Enums;

enum ProductTypeEnum: string
{
    case WhiteWine = 'Weißwein';
    case RedWine = 'Rotwein';
    case RoseWine = 'Rosé';
    case SparklingWine = 'Sekt';
    case Softdrink = 'Alkoholfreie Getränke';
}
