<?php

class car
{
    protected static $data_file;
    protected $inventory = [];

    public function __construct()
    {
        self::$data_file = DATA . 'cars.json';
    }

    private function load()
    {
        if (file_exists(self::$data_file)) {
            $this->inventory = json_decode(file_get_contents(self::$data_file), true);
        }
    }

    public function getCars()
    {
        $this->load();
        return $this->inventory;
    }
}
