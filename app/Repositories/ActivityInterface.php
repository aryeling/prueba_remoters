<?php
namespace App\Repositories;

interface ActivityInterface
{
    public function all();
    public function get($id);
    public function incrementPopularity($id);
    public function getByDateAndQtyPeople($date, $qty_people);
}
