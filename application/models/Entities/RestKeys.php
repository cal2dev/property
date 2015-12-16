<?php

namespace Entities;

/**
 * RestKeys
 */
class RestKeys
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $keyName;

    /**
     * @var string
     */
    private $key;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var boolean
     */
    private $ignoreLimits = '0';

    /**
     * @var integer
     */
    private $dateCreated;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set keyName
     *
     * @param string $keyName
     *
     * @return RestKeys
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
    
        return $this;
    }

    /**
     * Get keyName
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return RestKeys
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return RestKeys
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set ignoreLimits
     *
     * @param boolean $ignoreLimits
     *
     * @return RestKeys
     */
    public function setIgnoreLimits($ignoreLimits)
    {
        $this->ignoreLimits = $ignoreLimits;
    
        return $this;
    }

    /**
     * Get ignoreLimits
     *
     * @return boolean
     */
    public function getIgnoreLimits()
    {
        return $this->ignoreLimits;
    }

    /**
     * Set dateCreated
     *
     * @param integer $dateCreated
     *
     * @return RestKeys
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}

