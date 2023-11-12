<?php

namespace Hexlet\Code\Games;

/** @phpstan-ignore-next-line */
class Calculator implements IGame
{
    private string $description = 'What is the result of the expression?';

    private array $operationsList = ['+', '-', '*'];

    /** @phpstan-ignore-next-line */
    private $correctAnswer;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getQuestion(): string
    {
        $leftOperand = rand(0, 100);
        $rightOperand = rand(0, 100);
        $operation = (string) $this->operationsList[array_rand($this->operationsList)];

        switch ($operation) {
            case '+':
                $this->correctAnswer = $leftOperand + $rightOperand;
                break;
            case '-':
                $this->correctAnswer = $leftOperand - $rightOperand;
                break;
            case '*':
                $this->correctAnswer = $leftOperand * $rightOperand;
                break;
        }

        return sprintf('Question: %d %s %d', $leftOperand, $operation, $rightOperand);
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
