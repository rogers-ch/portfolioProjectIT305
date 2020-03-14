<?php

/* Define functions for server-side validation for guestbook form */

function validName($name) {
    return !empty(trim($name));
}

function validEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validLinkedIn($linkedIn) {
    if ($linkedIn !== "") {
        $hasHTTP = false;
        $hasCOM = false;
        if (strlen($linkedIn) >= 4) {
            $front = substr($linkedIn, 0, 4);
            $back = substr($linkedIn, strlen($linkedIn) - 4, strlen($linkedIn));
            if ($front === "http") {
                $hasHTTP = true;
            }
            if ($back === ".com") {
                $hasCOM = true;
            }
        }

        if ($hasHTTP === false || $hasCOM === false) {
            return false;
        }
        return true;
        }
    return true;
}

function validHowMet($howMet) {
    return $howMet == "Meetup Group" || $howMet == "Job Fair" ||
        $howMet == "School" || $howMet == "Work" || $howMet == "We haven't met yet" ||
        $howMet == "Other";

}


?>