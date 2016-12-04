<?php
namespace App\Http\Controllers;

use App\Services\AutoService;
use App\Http\Requests\SearchAutoRequest;

class AutoController extends Controller
{
    private $autoService;

    public function __construct(AutoService $autoService)
    {
        $this->autoService = $autoService;
    }

    public function getAuto($number)
    {
        $model = $this->autoService->getAutoByNumber($number);
        return view('auto', ['auto' => $model]);
    }
}