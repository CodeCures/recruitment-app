<?php

class Developer
{
    private $experience = [];

    public function __construct(private $email)
    {
    }

    public function learnAndUse($skill): Developer
    {
        $this->experience[] = $skill;

        return $this;
    }

    public function experience(): array
    {
        return $this->experience;
    }

    function email(): string
    {
        return $this->email;
    }
}
