<?php
namespace jstech\tx;

class tx
{
    protected $data;

    public function __construct()
    {
        $this->data = 'ok';
    }

    public function get()
    {
        return $this->data;
    }
}