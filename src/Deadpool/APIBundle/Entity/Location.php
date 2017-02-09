<?php
/**
 * Created by PhpStorm.
 * User: OP-User
 * Date: 2/9/2017
 * Time: 3:33 PM
 */

namespace Deadpool\APIBundle\Entity;


class Location
{
    private $lat;

    private $lng;

    public function __construct($lat, $lng)
    {
        $this->latitude  = $lat;
        $this->longitude = $lng;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param mixed $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    
}