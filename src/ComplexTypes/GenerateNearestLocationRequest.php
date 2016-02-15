<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateNearestLocationRequest extends BaseType
{

    /**
     * @var null
     */
    protected $Message = null;

    /**
     * @var null
     */
    protected $Location = null;

    /**
     * @var null
     */
    protected $Countrycode = null;

    /**
     * @param Message $Message
     * @param Location $Location
     * @param String $CountryCode
     */
    public function __construct(Message $Message, Location $Location, $CountryCode)
    {
        $this->setMessage($Message);
        $this->setLocation($Location);
        $this->setCountryCode($CountryCode);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param \DivideBV\Postnl\ComplexTypes\Message $Message
     * @return $this
     */
    public function setMessage(Message $Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \DivideBV\Postnl\ComplexTypes\Location $Location
     *
     * @return $this
     */
    public function setLocation(Location $Location)
    {
        $this->Location = $Location;
        return $this;
    }


    public function getCountryCode()
    {
        return $this->CountryCode;
    }


    public function setCountryCode($CountryCode)
    {
        $this->Countrycode = $CountryCode;
        return $this;
    }
}
