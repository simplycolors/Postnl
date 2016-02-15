<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's barcode service.
 *
 * I'm sorry, but what moron concocted this service? Basically all it does is
 * generate a random number and concatenate `type`, `range` and the generated
 * number. And what use is it to ask for the same parameter twice?
 */
class NearestLocationsClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/LocationWebService/1_1/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/LocationWebService/1_1/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = array();

    /**
     * @param \DivideBV\Postnl\ComplexTypes\GenerateNearestLocationRequest $NearestLocation     *
     * @return ComplexTypes\ResponseShipment
     */
    public function generateNearestLocations(ComplexTypes\GenerateNearestLocationRequest $NearestLocation)
    {
        return $this->__soapCall('GetNearestLocations', array($NearestLocation) );
    }
}
