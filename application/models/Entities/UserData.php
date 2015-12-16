<?php

namespace Entities;

/**
 * UserData
 */
class UserData
{
    /**
     * @var integer
     */
    private $UserDataId;

    /**
     * @var string
     */
    private $userHash;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $emailId;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $dob;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var \DateTime
     */
    private $cstamp;

    /**
     * @var \DateTime
     */
    private $ustamp;

    /**
     * @var \Entities\UserRegister
     */
    private $register;


	public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
	
    /**
     * Get userDataId
     *
     * @return integer
     */
    public function getUserDataId()
    {
        return $this->UserDataId;
    }

    /**
     * Set userHash
     *
     * @param string $userHash
     *
     * @return UserData
     */
    public function setUserHash($userHash)
    {
        $this->userHash = $userHash;
    
        return $this;
    }

    /**
     * Get userHash
     *
     * @return string
     */
    public function getUserHash()
    {
        return $this->userHash;
    }

    /**
     * Set uniqueId
     *
     * @param string $uniqueId
     *
     * @return UserData
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
    
        return $this;
    }

    /**
     * Get uniqueId
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return UserData
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set emailId
     *
     * @param string $emailId
     *
     * @return UserData
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    
        return $this;
    }

    /**
     * Get emailId
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return UserData
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return UserData
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return UserData
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return UserData
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dob
     *
     * @param string $dob
     *
     * @return UserData
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return UserData
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return UserData
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return UserData
     */
    public function setCstamp($cstamp)
    {
        $this->cstamp = $cstamp;
    
        return $this;
    }

    /**
     * Get cstamp
     *
     * @return \DateTime
     */
    public function getCstamp()
    {
        return $this->cstamp;
    }

    /**
     * Set ustamp
     *
     * @param \DateTime $ustamp
     *
     * @return UserData
     */
    public function setUstamp($ustamp)
    {
        $this->ustamp = $ustamp;
    
        return $this;
    }

    /**
     * Get ustamp
     *
     * @return \DateTime
     */
    public function getUstamp()
    {
        return $this->ustamp;
    }

    /**
     * Set register
     *
     * @param \Entities\UserRegister $register
     *
     * @return UserData
     */
    public function setRegister(\Entities\UserRegister $register = null)
    {
        $this->register = $register;
    
        return $this;
    }

    /**
     * Get register
     *
     * @return \Entities\UserRegister
     */
    public function getRegister()
    {
        return $this->register;
    }
}

