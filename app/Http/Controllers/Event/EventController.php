<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Service
use App\Services\Event\EventServices;

class EventController extends Controller
{
    private $eventServices;

    public function __construct(EventServices $eventServices){
        $this->services = $eventServices;
    }

    public function list(Request $request)
    {
        return $this->services->list($request);
    }

    public function getById($id)
    {
        return $this->services->getById($id);
    }

    public function create(Request $request)
    {
        return $this->services->create($request);
    }

    public function update(Request $request, $id)
    {
        return $this->services->update($request, $id);
    }

    public function delete($id)
    {
        return $this->services->delete($id);
    }
}
