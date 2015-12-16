<?php

namespace Entities;

/**
 * UserRegister
 */
class UserRegister
{
    /**
     * @var integer
     */
    private $registerId;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $userHash;

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
     * @var boolean
     */
    private $regActive = '0';

    /**
     * @var integer
     */
    private $regStatus = '0';

    /**
     * @var string
     */
    private $regNow;

    /**
     * @var \DateTime
     */
    private $cstamp;

    /**
     * @var \DateTime
     */
    private $ustamp;


	public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
	
    /**
     * Get registerId
     *
     * @return integer
     */
    public function getRegisterId()
    {
        return $this->registerId;
    }

    /**
     * Set uniqueId
     *
     * @param string $uniqueId
     *
     * @return UserRegister
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
     * Set userHash
     *
     * @param string $userHash
     *
     * @return UserRegister
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
     * Set userName
     *
     * @param string $userName
     *
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * Set regActive
     *
     * @param boolean $regActive
     *
     * @return UserRegister
     */
    public function setRegActive($regActive)
    {
        $this->regActive = $regActive;
    
        return $this;
    }

    /**
     * Get regActive
     *
     * @return boolean
     */
    public function getRegActive()
    {
        return $this->regActive;
    }

    /**
     * Set regStatus
     *
     * @param integer $regStatus
     *
     * @return UserRegister
     */
    public function setRegStatus($regStatus)
    {
        $this->regStatus = $regStatus;
    
        return $this;
    }

    /**
     * Get regStatus
     *
     * @return integer
     */
    public function getRegStatus()
    {
        return $this->regStatus;
    }

    /**
     * Set regNow
     *
     * @param string $regNow
     *
     * @return UserRegister
     */
    public function setRegNow($regNow)
    {
        $this->regNow = $regNow;
    
        return $this;
    }

    /**
     * Get regNow
     *
     * @return string
     */
    public function getRegNow()
    {
        return $this->regNow;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return UserRegister
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
     * @return UserRegister
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
	
	 /***************************
     Manual code for mapping
     /**************************/
    
    public function addUserData(Userdata $userData)
    {
    	$userData->setRegister($this); // synchronously updating inverse side
    }
}

