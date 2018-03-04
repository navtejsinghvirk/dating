<?php


/**
 * The Member class represents a member account.
 * The Member class represents a member with a
 * name, age, gender and phone,email,state,seeking,bio
 * User can create account with this class.
 * @author Navtej Singh
 * @copyright 2018
 */
class Member
{
    protected $fname;
    protected $lname;
    protected $age;
    protected $gender;
    protected $phone;
    protected $email;
    protected $state;
    protected $seeking;
    protected $bio;


    /**
     * Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    function __construct($fname, $lname, $age,
                         $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;

    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $age ,check numeric and greater 18
     */
    public function setAge($age)
    {
        if (is_numeric($age) && $age > 18) {
            $this->age = $age;
        } else {
            $this->age = 0;
        }
    }

    /**
     * @param mixed $bio
     */
    public
    function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @param mixed $email
     */
    public
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $fname
     * check alphabet else null
     */
    public   function setFname($fname)
    {
        if (ctype_alpha($fname)) {
            $this->fname = $fname;
        } else {
            $this->fname = null;
        }
    }

    /**
     * @param mixed $gender
     */
    public
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $lname,check alphabet
     */
    public
    function setLname($lname)
    {
        if (ctype_alpha($lname)) {
            $this->fname = $lname;
        } else {
            $this->lname = null;
        }
    }

    /**
     * @param mixed $phone,check numeric
     */
    public
    function setPhone($phone)
    {
        if(is_numeric($phone)){
        $this->phone = $phone;
    }else{
        $this->phone=nulll;
        }
    }

    /**
     * @param mixed $seeking
     */
    public
    function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**
     * @param mixed $state
     */
    public
    function setState($state)
    {
        $this->state = $state;
    }

}
