<?php

namespace Entities;

/**
 * LoginData
 */
class LoginData
{
    /**
     * @var integer
     */
    private $loginDataId;

    /**
     * @var integer
     */
    private $UserDataId;

    /**
     * @var string
     */
    private $UserHash;

    /**
     * @var string
     */
    private $cookieHash;

    /**
     * @var string
     */
    private $sessId;

    /**
     * @var \DateTime
     */
    private $cstamp;

    /**
     * @var \DateTime
     */
    private $ustamp;

    /**
     * @var string
     */
    private $remark;


	public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
	
    /**
     * Get loginDataId
     *
     * @return integer
     */
    public function getLoginDataId()
    {
        return $this->loginDataId;
    }

    /**
     * Set userDataId
     *
     * @param integer $userDataId
     *
     * @return LoginData
     */
    public function setUserDataId($userDataId)
    {
        $this->UserDataId = $userDataId;
    
        return $this;
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
     * @return LoginData
     */
    public function setUserHash($userHash)
    {
        $this->UserHash = $userHash;
    
        return $this;
    }

    /**
     * Get userHash
     *
     * @return string
     */
    public function getUserHash()
    {
        return $this->UserHash;
    }

    /**
     * Set cookieHash
     *
     * @param string $cookieHash
     *
     * @return LoginData
     */
    public function setCookieHash($cookieHash)
    {
        $this->cookieHash = $cookieHash;
    
        return $this;
    }

    /**
     * Get cookieHash
     *
     * @return string
     */
    public function getCookieHash()
    {
        return $this->cookieHash;
    }

    /**
     * Set sessId
     *
     * @param string $sessId
     *
     * @return LoginData
     */
    public function setSessId($sessId)
    {
        $this->sessId = $sessId;
    
        return $this;
    }

    /**
     * Get sessId
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sessId;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return LoginData
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
     * @return LoginData
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
     * Set remark
     *
     * @param string $remark
     *
     * @return LoginData
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    
        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }
}

