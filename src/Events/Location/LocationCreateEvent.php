<?php

namespace Yorkii\Shopify\Events\Location;

use Yorkii\Shopify\Events\Base;
use \Carbon\Carbon;

/**
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $id
 * @property string $name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $zip
 * @property string $province
 * @property string $country
 * @property string $phone
 * @property string $country_code
 * @property string $country_name
 * @property string $province_code
 * @property bool $legacy
 *
 * @method Carbon getCreatedAt()
 * @method Carbon getUpdatedAt()
 * @method int getId()
 * @method string getName()
 * @method string getAddress1()
 * @method string getAddress2()
 * @method string getCity()
 * @method string getZip()
 * @method string getProvince()
 * @method string getCountry()
 * @method string getPhone()
 * @method string getCountryCode()
 * @method string getCountryName()
 * @method string getProvinceCode()
 * @method bool getLegacy()
 */
class LocationCreateEvent extends Base
{
    const EVENT_TOPIC = 'locations/create';

    /**
     * @var array
     */
    protected $casts = [
        'legacy' => 'bool',
    ];
}