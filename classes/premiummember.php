<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 2/10/2018
 * Time: 10:01 PM
 */

class PremiumMember extends Member
{
    private $_inDoorInterests;
    private $_outDoorInterests;


    public function __construct($fname,$lname,$age,$gender,
                                $phone)
    {
        parent::__construct($fname,$lname,$age,$gender,
            $phone);

    }

    /**
     * @return mixed
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * @return mixed
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /**
     * @param mixed $inDoorInterests
     */
    public function setInDoorInterests($inDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * @param mixed $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        $this->_outDoorInterests = $outDoorInterests;
    }
}