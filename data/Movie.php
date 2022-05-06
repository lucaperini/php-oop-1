<?php

class Movie{
    public $title;
    public $director;
    public $genre;
    public $year;
    public $mainActor;
    

    function __construct($title, $director, $genre, $year, $mainActor)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
        $this->mainActor = $mainActor; 
    
    }

    public function getTitle(){
        return $this->title;
    }


}

?>