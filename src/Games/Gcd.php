<?php

namespace Hexlet\Code\Games;

/** @phpstan-ignore-next-line */
class Gcd implements IGame
{
    private string $description = 'Find the greatest common divisor of given numbers.';

    /** @phpstan-ignore-next-line */
    private $correctAnswer;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuestion(): string
    {
        $randomNumber1 = rand(1, 100);
        $randomNumber2 = rand(1, 100);
        $n = $randomNumber1;
        $m = $randomNumber2;

        while (true) {
            if ($n === $m) {
                $this->correctAnswer = $m;
                break;
            }

            if ($n > $m) {
                $n -= $m;
            } else {
                $m -= $n;
            }
        }

        return sprintf('Question: %d %d', $randomNumber1, $randomNumber2);
    }

    public function isCorrectAnswer(string $answer): bool
    {
        return (int) $answer === $this->correctAnswer;
    }

    public function getCorrectAnswer(): string
    {
        return (string) $this->correctAnswer;
    }
}
