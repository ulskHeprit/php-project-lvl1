<?php

namespace Hexlet\Code\Games;

class Progression implements IGame
{
    private string $description = 'What number is missing in the progression?';

    private $correctAnswer;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuestion(): string
    {
        $progressionLength = rand(5, 15);
        $index = rand(1, $progressionLength - 2);
        $randomNumber = rand(0, 100);
        $step = rand(-10, 10);
        $progression = [];

        for ($i = 0; $i < $progressionLength; $i++, $randomNumber += $step) {
            $progression[] = $randomNumber;
        }

        $this->correctAnswer = $progression[$index];
        $progression[$index] = '..';

        return sprintf('Question: %s', implode(' ', $progression));
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
