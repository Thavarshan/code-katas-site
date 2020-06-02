<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HasKata;

class KatasCalculationController extends Controller
{
    use HasKata;

    /**
     * Calculate prime factor of given number.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $result = $this->makeKata($request->kata)->execute($request->arguments);

        return response(['result' => $result], 200);
    }
}
