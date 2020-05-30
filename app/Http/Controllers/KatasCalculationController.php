<?php

namespace App\Http\Controllers;

use Katas\PrimeFactors;
use Illuminate\Http\Request;

class KatasCalculationController extends Controller
{
    /**
     * Calculate prime factor of given number.
     *
     * @param  \Katas\PrimeFactors $generator
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function primeFactors(PrimeFactors $generator, Request $request)
    {
        return response([
            'result' => $generator->generate($request->number),
        ], 200);
    }
}
