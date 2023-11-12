<?php

namespace Hexlet\Code\Games;

class Calculator implements IGame
{
    private string $description = 'What is the result of the expression?';

    private array $operationsList = ['+', '-', '*'];

    private $correctAnswer;

    public function getDescription(): string {
        return $this->description;
    }

    public function getQuestion(): string {
        $leftOperand = rand(0, 100);
        $rightOperand = rand(0, 100);
        $operation = $this->operationsList[array_rand($this->operationsList)];

        $this->correctAnswer = match ($operation) {
            '+' => $leftOperand + $rightOperand,
            '-' => $leftOperand - $rightOperand,
            '*' => $leftOperand * $rightOperand,
        };

        return sprintf('Question: %d %s %d', $leftOperand, $operation, $rightOperand);
    }

    public function isCorrectAnswer(string $answer): bool {
        return (int) $answer === $this->correctAnswer;
    }

    public function getCorrectAnswer(): string {
        return (string) $this->correctAnswer;
    }
}
