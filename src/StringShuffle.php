<?php

declare(strict_types=1);

namespace Numb666\OtusComposerPackage;

class StringShuffle
{
    public function shuffle(string $str): string
    {
        return str_shuffle($str);
    }
}
