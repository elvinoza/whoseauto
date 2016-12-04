<?php
namespace App\Services;

use App\Models\Auto;

interface IAutoService
{
    function getAutoByNumber($number);
}

class AutoService implements IAutoService
{
    protected $auto;

    public function __construct(Auto $auto)
    {
        $this->auto = $auto;
    }

    function getAutoByNumber($number)
    {
        $auto = $this->auto->where('number', $number)->first();

        if ($auto != null) {
            return $auto;
        }

        // create auto
    }
}