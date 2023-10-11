<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

use Ensi\DaDataClient\Dto\BaseBodyDto;

/**
 * @property string|null $postal_code Индекс
 * @property string|null $country Страна
 * @property string|null $country_iso_code ISO-код страны (двухсимвольный)
 * @property string|null $federal_district Федеральный округ
 * @property string|null $region_fias_id ФИАС-код региона
 * @property string|null $region_kladr_id КЛАДР-код региона
 * @property string|null $region_iso_code ISO-код региона
 * @property string|null $region_with_type Регион с типом
 * @property string|null $region_type Тип региона (сокращенный)
 * @property string|null $region_type_full Тип региона
 * @property string|null $region Регион
 * @property string|null $area_fias_id ФИАС-код района в регионе
 * @property string|null $area_kladr_id КЛАДР-код района в регионе
 * @property string|null $area_with_type Район в регионе с типом
 * @property string|null $area_type Тип района в регионе (сокращенный)
 * @property string|null $area_type_full Тип района в регионе
 * @property string|null $area Район в регионе
 * @property string|null $sub_area_fias_id ФИАС-код мун. поселения
 * @property string|null $sub_area_kladr_id КЛАДР-код мун. поселения
 * @property string|null $sub_area_with_type Мун. поселение с типом
 * @property string|null $sub_area_type Тип мун. поселения (сокращенный)
 * @property string|null $sub_area_type_full Тип мун. поселения
 * @property string|null $sub_area Мун. поселение
 * @property string|null $city_fias_id ФИАС-код города
 * @property string|null $city_kladr_id КЛАДР-код города
 * @property string|null $city_with_type Город с типом
 * @property string|null $city_type Тип города (сокращенный)
 * @property string|null $city_type_full Тип города
 * @property string|null $city Город
 * @property string|null $city_district_fias_id ФИАС-код адм. района города
 * @property string|null $city_district_with_type Адм. район города с типом
 * @property string|null $city_district_type Тип адм. района города (сокращенный)
 * @property string|null $city_district_type_full Тип адм. района города
 * @property string|null $city_district Адм. район города
 * @property string|null $settlement_fias_id ФИАС-код нас. пункта
 * @property string|null $settlement_kladr_id КЛАДР-код нас. пункта
 * @property string|null $settlement_with_type Населенный пункт с типом
 * @property string|null $settlement_type Тип населенного пункта (сокращенный)
 * @property string|null $settlement_type_full Тип населенного пункта
 * @property string|null $settlement Населенный пункт
 * @property string|null $street_fias_id ФИАС-код улицы
 * @property string|null $street_kladr_id КЛАДР-код улицы
 * @property string|null $street_with_type Улица с типом
 * @property string|null $street_type Тип улицы (сокращенный)
 * @property string|null $street_type_full Тип улицы
 * @property string|null $street Улица
 * @property string|null $stead_fias_id ФИАС-код земельного участка
 * @property string|null $stead_kladr_id КЛАДР-код земельного участка
 * @property string|null $stead_type = «уч»
 * @property string|null $stead_type_full = «участок»
 * @property string|null $stead номер земельного участка
 * @property string|null $house_fias_id ФИАС-код дома
 * @property string|null $house_kladr_id КЛАДР-код дома
 * @property string|null $house_type Тип дома (сокращенный)
 * @property string|null $house_type_full Тип дома
 * @property string|null $house Дом
 * @property string|null $block_type Тип корпуса/строения (сокращенный)
 * @property string|null $block_type_full Тип корпуса/строения
 * @property string|null $block Корпус/строение
 * @property string|null $flat_fias_id ФИАС-код квартиры
 * @property string|null $flat_type Тип квартиры (сокращенный)
 * @property string|null $flat_type_full Тип квартиры
 * @property string|null $flat Квартира
 * @property string|null $room_fias_id ФИАС-код комнаты
 * @property string|null $room_type Тип комнаты (сокращенный)
 * @property string|null $room_type_full Тип комнаты
 * @property string|null $room Комната
 * @property string|null $postal_box Абонентский ящик
 * @property string|null $fias_id ФИАС-код (он же код ГАР) адреса для России. Идентификатор OpenStreetMap для Белоруссии, Казахстана и Узбекистана.
 * @property string|null $fias_level Уровень детализации, до которого адрес найден в ФИАС (ГАР) (see: FiasLevelEnum)
 * @property string|null $kladr_id КЛАДР-код
 * @property string|null $geoname_id Идентификатор объекта в базе GeoNames. Для российских адресов не заполняется.
 * @property string|null $capital_marker Признак центра района или региона (see: CapitalMarkerEnum)
 * @property string|null $okato Код ОКАТО
 * @property string|null $oktmo Код ОКТМО
 * @property string|null $tax_office Код ИФНС для физических лиц
 * @property string|null $tax_office_legal Код ИФНС для организаций
 * @property string[]|null $history_values Список исторических названий объекта нижнего уровня
 *
 * Дополнительные поля, заполняются в зависимости от тарифа.
 * Заполняются при выборе конкретной подсказки. До этого они пустые.
 * ---- Все тарифы ----
 * @property float|null $geo_lat Координаты: широта
 * @property float|null $geo_lon Координаты: долгота
 * @property string|null $qc_geo Код точности координат (see: QCGeoEnum)
 * @property string|null $fias_actuality_state Признак актуальности адреса в ФИАС
 * @property string|null $city_area Административный округ (только для Москвы)
 * ---- «Расширенный» и «Максимальный» ----
 * @property string|null $beltway_hit Внутри кольцевой?
 * @property string|null $beltway_distance Расстояние от кольцевой в километрах
 * ---- Только «Максимальный» ----
 * @property string|null $stead_cadnum Кадастровый номер земельного участка
 * @property string|null $house_cadnum Кадастровый номер дома
 * @property string|null $flat_cadnum Кадастровый номер квартиры
 * @property string|null $flat_area Площадь квартиры
 * @property string|null $square_meter_price Рыночная стоимость м²
 * @property string|null $flat_price Рыночная стоимость квартиры
 * @property string|null $timezone Часовой пояс
 * @property MetroDto[]|null $metro Список ближайших станций метро (до трёх штук)
 */
class SuggestionAddressData extends BaseBodyDto
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mapAttributeToArray('metro', MetroDto::class, null);
    }
}
