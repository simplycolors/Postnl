<?php namespace DivideBV\Postnl\ComplexTypes;

class Location extends BaseType
{
    /**
     * The coordinates of the location. Mandatory when postal code is empty.
     * @var string $Coordinates  [Optional / Mandatory]
     */
    protected $Coordinates = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $Postalcode
     */
    protected $Postalcode = null;

    /**
     * Date when the shipment will be delivered by PostNL. Format: dd-mm-yyyy. This field will be used to exclude the
     * inactive locations (for example closed due to renovation).
     * @var string $DeliveryDate [Mandatory]
     */
    protected $DeliveryDate = null;

    /**
     * @var date $OpeningTime
     * Time of opening. Format: hh:mm:ss. This field will be used to filter the locations on opening hours.
     */
    protected $OpeningTime = null;

    /**
     * @var array $DeliveryOptions
     * One or more delivery options. (PG/PGE)
     */
    protected $DeliveryOptions = null;

    /**
     * @param \DivideBV\Postnl\ComplexTypes\Location $location
     */
    public function __construct( $location = null ) {

        if(!is_array($location)){
            $location = array();
        }

        list($Coordinates, $PostalCode, $City, $Street, $HouseNr, $HouseNrExt, $DeliveryDate, $OpeningTime, $DeliveryOptions) = $location;

        $this->setCoordinates($Coordinates);
        $this->setPostalcode($PostalCode);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDeliveryOptions($DeliveryOptions);
        // Optional parameters.
        $this->setCity($City);
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);

        $this->setOpeningTime($OpeningTime);
    }


    /**
     * @return string
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }

    /**
     * @param string $Coordinates
     * @return Location
     */
    public function setCoordinates($Coordinates)
    {
        $this->Coordinates = $Coordinates;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Location
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr()
    {
        return $this->HouseNr;
    }

    /**
     * @param string $HouseNr
     *
     * @return Location
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNrExt()
    {
        return $this->HouseNrExt;
    }

    /**
     * @param string $HouseNrExt
     *
     * @return Location
    */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
        return $this->Postalcode;
    }

    /**
     * @param string $PostalCode
     * @return Location
     */
    public function setPostalcode($PostalCode)
    {
        $this->Postalcode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Location
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param array $DeliveryOptions
     * @return Location
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = array($DeliveryOptions);
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param $DeliveryDate
     * @return Location
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return date
     */
    public function getOpeningTime()
    {
        return $this->OpeningTime;
    }

    /**
     * @param string $OpeningTime
     * @return Location
     */
    public function setOpeningTime($OpeningTime)
    {
        $this->OpeningTime = $OpeningTime;
        return $this;
    }


}
