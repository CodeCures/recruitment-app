<?php

require './helpers.php';

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
