<?php

namespace Hexlet\Code;

use Hexlet\Code\Games\IGame;
use function cli\line;
use function cli\prompt;

class Engine
{
    const CORRECT_ANSWERS_TO_WIN = 3;

    private string $playerName;

    public function run(IGame $game):void {
        $this->askPlayerName();
        $this->greetThePlayer();

        line($game->getDescription());

        $correctAnswersCount = 0;

        while (true) {
            line($game->getQuestion());

            $playerAnswer = trim(prompt('Your answer'));

            if ($game->isCorrectAnswer($playerAnswer)) {
                line('Correct!');
                $correctAnswersCount++;
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $game->getCorrectAnswer());
                line("Let's try again, %s!", $this->playerName);
                break;
            }

            if ($correctAnswersCount >= $this::CORRECT_ANSWERS_TO_WIN) {
                line('Congratulations, %s!', $this->playerName);
                break;
            }
        }
    }

    private function askPlayerName(): void {
        $this->playerName = prompt('May I have your name?');
    }

    private function greetThePlayer(): void {
        line('Welcome to the Brain Games!');
        line('Hello, %s!', $this->playerName);
    }
}
