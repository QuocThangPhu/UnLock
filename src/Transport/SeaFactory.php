<?php

namespace Thangphu\UnLock\Transport;

class SeaFactory implements TransportInterface
{
    /**
     * @return VehicleIntreface
     */
    public function deliver(): VehicleIntreface
    {
        $randomNumber = rand(1,3);
        switch ($randomNumber){
            case 1:
                return new Ship();
            case 2:
                return new CargoShip();
            case 3:
                return new Yacht();
            default:
                return new NotFoundVehicle();
        }
    }
}
