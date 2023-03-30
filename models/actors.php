<?php

class Actors {

    public string $actorName;
    public string $actorSurname;
    public int $actorAge;


    function __construct($_actorName, $_actorSurname, $_actorAge) {

        $this->actorName = $_actorName;
        $this->actorSurname = $_actorSurname;
        $this->actorAge = $_actorAge;
    }

    function getFullName() {
        return $this->actorName . " " . $this->actorSurname;
    }
}

?>