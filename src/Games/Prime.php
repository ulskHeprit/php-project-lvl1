<?php

namespace Hexlet\Code\Games;

/** @phpstan-ignore-next-line */
class Prime implements IGame
{
    private string $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    /** @phpstan-ignore-next-line */
    private $correctAnswer;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuestion(): string
    {
        $randomNumber = rand(0, 100);
        $this->correctAnswer = 'yes';

        for ($i = 2; $i <= ($randomNumber / 2); $i++) {
            if ($randomNumber % $i === 0) {
                $this->correctAnswer = 'no';
                break;
            }
        }

        return sprintf('Question: %d', $randomNumber);
    }

    public function isCorrectAnswer(string $answer): bool
    {
        return $answer === $this->correctAnswer;
    }

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswer;
    }
}
