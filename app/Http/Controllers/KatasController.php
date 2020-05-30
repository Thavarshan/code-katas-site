<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets as Katas;

class KatasController extends Controller
{
    /**
     * Show requested kata documentation.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\View
     */
    public function __invoke(Katas $katas, string $kata)
    {
        return view('challenges.' . $kata, [
            'kata' => $katas->get($kata),
        ]);
    }
}
