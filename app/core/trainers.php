<?php

class Trainer extends Database
{
    protected $table = "trainers";

    public function getAllTrainers()
    {
        $query = "SELECT * FROM " . $this->table;
        return $this->query($query);
    }
}
