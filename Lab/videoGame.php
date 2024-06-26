<?php

class videoGame
{
    private $genre, $title, $developer;
    
    private function __construct($genre, $title, $developer)
    {
        set_genre($genre);
        set_title($title);
        set_developer($developer);
        
    }
    
    public function set_genre($genre)
    {
        $this->genre = $genre;
    }
    
    public function set_title($title)
    {
        $this->title = $title;
    }
    
    public function set_developer($developer)
    {
        $this->developer = $developer;
    }
    
    
    public function get_genre()
    {
        return $this->genre;
    }
    
    public function get_title()
    {
        return $this->title;
    }
    
    public function get_developer()
    {
        return $this->developer;
    }
    
    
}


