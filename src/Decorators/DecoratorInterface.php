<?php

namespace McCool\LaravelAutoPresenter\Decorators;

interface DecoratorInterface
{
    /**
     * Can the subject be decorated?
     *
     * @param mixed $subject
     *
     * @return bool
     */
    public function canDecorate($subject);

    /**
     * Decorate a given subject.
     *
     * @param object $subject
     *
     * @return object
     */
    public function decorate($subject);
}
