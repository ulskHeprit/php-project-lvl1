<?php

namespace Hexlet\Code\Games;

interface IGame
{
    public function getDescription(): string;

    public function getQuestion(): string;

    public function isCorrectAnswer(string $answer): bool;

    public function getCorrectAnswer(): string;
}
