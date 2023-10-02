<?php

function throw_if($isInvalid = false, $message = '')
{
    if ($isInvalid) {
        echo "<pre>$message</pre>";
        die();
    }
}
