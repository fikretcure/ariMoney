<?php

namespace App\Http\Enums;

enum AccountActivityEnum: int
{
    case PENDING = 1;
    case CANCEL = 2;
    case SUCCESS = 3;
}
