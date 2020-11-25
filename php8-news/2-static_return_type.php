<?php

abstract class Step {
    public static function create(): static {
        return new static();
    }
}

final class VideoStep extends Step {
}
final class QuizStep extends Step {
}

var_dump(VideoStep::create());
var_dump(QuizStep::create());
