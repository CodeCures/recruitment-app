<?php

function throw_if($isInvalid = false, $message = '')
{
    if ($isInvalid) {
        echo "<pre>$message</pre>";
        die();
    }
}

class Recruiter
{
    private $requiredStack = ['PHP', 'Javascript', 'React', 'Laravel'];
    private Developer $developer;

    public function toBeInterviewed(Developer $applicant): Recruiter
    {
        $this->developer = $applicant;

        return $this;
    }

    public function hasRequiredExperience(): Recruiter
    {
        $missingSkills = array_diff($this->requiredStack, $this->developer->experience());

        throw_if(!empty($missingSkills), "Developer is missing required skills: " . implode(', ', $missingSkills));

        return $this;
    }

    function scheduleAnInterview(): void
    {
        echo "An interview link has been sent to " . $this->developer->email();
    }
}

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



$recruiter = new Recruiter;
$developer = new Developer("couragesblog@gmail.com");

$developer->learnAndUse('PHP')
    ->learnAndUse('Javascript')
    ->learnAndUse('React')
    ->learnAndUse('Laravel');

$recruiter->toBeInterviewed($developer)
    ->hasRequiredExperience()
    ->scheduleAnInterview();
