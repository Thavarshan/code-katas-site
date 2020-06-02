<?php

namespace App\Http\Controllers\Traits;

use Katas\FizzBuzz;
use RuntimeException;
use Katas\BowlingGame;
use Katas\Tennis\Game;
use Katas\PrimeFactors;
use Katas\RomanNumerals;
use Katas\StringCalculator;
use Katas\Contracts\Executable;
use App\Exceptions\KataNotFoundException;

trait HasKata
{
    /**
     * All code kata classes.
     *
     * @var array
     */
    protected array $katas = [
        'prime-factors' => PrimeFactors::class,
        'roman-numerals' => RomanNumerals::class,
        'bowling-game' => BowlingGame::class,
        'string-calculator' => StringCalculator::class,
        'tennis-game' => Game::class,
        'fizz-buzz' => FizzBuzz::class,
    ];

    /**
     * Determine if the code kata class exists for the given kata.
     *
     * @param  string $kata
     * @return \Katas\Contracts\Executable
     *
     * @throws \App\Exceptions\KataNotFoundException
     */
    protected function makeKata(string $kata)
    {
        if (array_key_exists($kata, $this->katas)) {
            return $this->resolveKata($this->katas[$kata]);
        }

        throw new KataNotFoundException();
    }

    /**
     * Resolve given kata class and determine if kata is runtime execution compatible.
     *
     * @param  string $kata
     * @return \Katas\Contracts\Executable
     *
     * @throws \RuntimeException
     */
    protected function resolveKata(string $kata)
    {
        $kata = new $kata();

        if ($kata instanceof Executable) {
            return $kata;
        }

        throw new RuntimeException();
    }
}
