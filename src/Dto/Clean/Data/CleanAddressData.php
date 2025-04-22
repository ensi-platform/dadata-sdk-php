<?php

namespace Ensi\DaDataClient\Dto\Clean\Data;

use Ensi\DaDataClient\Dto\BaseDto;
use Ensi\DaDataClient\Dto\Suggestions\Data\MetroDto;

/**
 * @property string|null $source Source address in one line
 * @property string|null $result Standardized address in one line
 * @property string|null $postal_code Index
 * @property string|null $country Country
 * @property string|null $country_iso_code ISO country code (two-character)
 * @property string|null $federal_district Federal District
 * @property string|null $region_fias_id FIAS-region code
 * @property string|null $region_kladr_id KLADR-region code
 * @property string|null $region_iso_code ISO region code
 * @property string|null $region_with_type Region with type
 * @property string|null $region_type Region type (abbreviated)
 * @property string|null $region_type_full Region type
 * @property string|null $region Region
 * @property string|null $area_fias_id FIAS-area code in the region
 * @property string|null $area_kladr_id KLADR-area code in the region
 * @property string|null $area_with_type A district in a region with the type
 * @property string|null $area_type Type of area in the region (abbreviated)
 * @property string|null $area_type_full Type of area in the region
 * @property string|null $area The area in the region
 * @property string|null $city_fias_id FIAS-area code
 * @property string|null $city_kladr_id KLADR-area code
 * @property string|null $city_with_type City with type
 * @property string|null $city_type City type (abbreviated)
 * @property string|null $city_type_full City type
 * @property string|null $city City
 * @property string|null $city_area Administrative District (for Moscow only)
 * @property string|null $city_district_fias_id FIAS code of the administrator. city district
 * @property string|null $city_district_with_type Administrative district of the city with the type
 * @property string|null $city_district_type adm type. city district (abbreviated)
 * @property string|null $city_district_type_full adm type. city district
 * @property string|null $city_district Administrative district of the city
 * @property string|null $settlement_fias_id FIAS code of our point
 * @property string|null $settlement_kladr_id is the KLADR code of our point
 * @property string|null $settlement_with_type Locality with type
 * @property string|null $settlement_type Type of locality (abbreviated)
 * @property string|null $settlement_type_full Type of locality
 * @property string|null $settlement Locality
 * @property string|null $street_fias_id FIAS street code
 * @property string|null $street_kladr_id Street code
 * @property string|null $street_with_type Street with type
 * @property string|null $street_type Street type (abbreviated)
 * @property string|null $street_type_full Street type
 * @property string|null $street Street
 * @property string|null $stead_fias_id FIAS-code of the land plot
 * @property string|null $stead_kladr_id is the KLADR code of the land plot
 * @property string|null $stead_cadnum Cadastral number of the land plot
 * @property string|null $stead_type = "plot"
 * @property string|null $stead_type_full = "plot"
 * @property string|null $stead land plot number
 * @property string|null $house_fias_id FIAS code of the house
 * @property string|null $house_kladr_id KLADR-code of the house
 * @property string|null $house_cadnum Cadastral number of the house
 * @property string|null $house_type House type (abbreviated)
 * @property string|null $house_type_full House type
 * @property string|null $house House
 * @property string|null $house_flat_count Number of apartments in the house
 * @property string|null $block_type Type of building/building (abbreviated)
 * @property string|null $block_type_full Type of building/building
 * @property string|null $block Building/building
 * @property string|null $entrance Entrance
 * @property string|null $floor Floor
 * @property string|null $flat_fias_id FIAS apartment code
 * @property string|null $flat_cadnum Cadastral number of the apartment
 * @property string|null $flat_type Apartment type (abbreviated)
 * @property string|null $flat_type_full Apartment type
 * @property string|null $flat Apartment
 * @property string|null $flat_area Apartment area
 * @property string|null $square_meter_price Market value m2
 * @property string|null $flat_price The market value of the apartment
 * @property string|null $postal_box Subscriber's mailbox
 * @property string|null $room_type Room type (abbreviated)
 * @property string|null $room_type_full Room type
 * @property string|null $room Room
 * @property string|null $fias_id is the FIAS code (also known as the GAR code) of the address for Russia. The OpenStreetMap identifier for Belarus, Kazakhstan, and Uzbekistan.
 * @property string|null $fias_level The level of detail to which the address is found in FIAS (GAR) (see: FiasLevelEnum)
 * @property string|null $fias_actuality_state Indicates that the address is up to date in FIAS
 * @property string|null $kladr_id KLADR code
 * @property string|null $geoname_id Object ID in the GeoNames database. It is not filled in for Russian addresses.
 * @property string|null $capital_marker Indicates the center of the district or region (see: CapitalMarkerEnum)
 * @property string|null $okato OKATO code
 * @property string|null $oktmo OKTMO code
 * @property string|null $tax_office Federal Tax Service code for individuals
 * @property string|null $tax_office_legal Federal Tax Service code for organizations
 * @property string|null $timezone Time zone
 * @property string|null $geo_lat Coordinates: latitude
 * @property string|null $geo_lon Coordinates: longitude
 * @property string|null $beltway_hit Inside the ring road?
 * @property string|null $beltway_distance Distance from the ring road in kilometers
 * @property int|null $qc_geo Coordinate accuracy code (see: QCGeoEnum)
 * @property int|null $qc_complete Mailing Suitability code (see: QCCompleteEnum)
 * @property int|null $qc_house Indicates the presence of a house in FIAS (see: QCHouseEnum)
 * @property int|null $qc Code address checks (see:QCEnum)
 * @property string|null $uneqused_parts The unrecognized part of the address. For the address "Moscow, Mitinskaya street, 40, entrance from the end" will return "ENTRANCE, FROM the END"
 * @property MetroDto[]|null $metro List of the nearest metro stations (up to three)
 * @property DivisionData|null $divisions Address components in the administrative division
 */
class CleanAddressData extends BaseDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttributeToArray('metro', MetroDto::class, null);
        $this->mapAttribute('divisions', DivisionData::class);
    }
}
