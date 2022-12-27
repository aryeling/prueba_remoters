<?php
namespace App\Repositories;

interface ActivityBookingInterface
{
    public function all();
    public function get($id);
    public function store($data, $id);
}
