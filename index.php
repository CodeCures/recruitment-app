<?php
require './Recruiter.php';
require './Developer.php';

$recruiter = new Recruiter;
$developer = new Developer("couragesblog@gmail.com");

$developer->learnAndUse('PHP')
    ->learnAndUse('Javascript')
    ->learnAndUse('React')
    ->learnAndUse('Laravel');

$recruiter->toBeInterviewed($developer)
    ->hasRequiredExperience()
    ->scheduleAnInterview();
