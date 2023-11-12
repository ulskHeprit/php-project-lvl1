<?php

namespace Hexlet\Code\Games;

class Even implements IGame
{
    private string $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    private $correctAnswer;

    public function getDescription(): string {
        return $this->description;
    }

    public function getQuestion(): string {
        $randomNumber = rand();
        $this->correctAnswer = $randomNumber % 2 === 0;

        return sprintf('Question: %d', $randomNumber);
    }

    public function isCorrectAnswer(string $answer): bool {
        return $answer === 'yes' && $this->correctAnswer
            || $answer === 'no' && !$this->correctAnswer;
    }

    public function getCorrectAnswer(): string {
        return $this->correctAnswer ? 'yes' : 'no';
    }
}
