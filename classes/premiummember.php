<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 2/10/2018
 * Time: 10:01 PM
 */

/**
 * The PremiumMember class represents a premium-member.
 * The PremiumMember class represents a premium-member with
 * indoor,outdoor interests.
 * User can create premium-account with this class.
 * @author Navtej Singh
 * @copyright 2018
 */

class PremiumMember extends Member
{
    private $_inDoorInterests;
    private $_outDoorInterests;


    /**
     * Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    public function __construct($fname, $lname, $age, $gender,
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