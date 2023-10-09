<?php

namespace Ensi\DaDataClient\Dto\Suggestions\Data;

use Ensi\DaDataClient\Dto\BaseBodyDto;

/**
 * @property string $postal_code Индекс
 * @property string $country Страна
 * @property string $country_iso_code ISO-код страны (двухсимвольный)
 * @property string $federal_district Федеральный округ
 * @property string $region_fias_id ФИАС-код региона
 * @property string $region_kladr_id КЛАДР-код региона
 * @property string $region_iso_code ISO-код региона
 * @property string $region_with_type Регион с типом
 * @property string $region_type Тип региона (сокращенный)
 * @property string $region_type_full Тип региона
 * @property string $region Регион
 * @property string $area_fias_id ФИАС-код района в регионе
 * @property string $area_kladr_id КЛАДР-код района в регионе
 * @property string $area_with_type Район в регионе с типом
 * @property string $area_type Тип района в регионе (сокращенный)
 * @property string $area_type_full Тип района в регионе
 * @property string $area Район в регионе
 * @property string $sub_area_fias_id ФИАС-код мун. поселения
 * @property string $sub_area_kladr_id КЛАДР-код мун. поселения
 * @property string $sub_area_with_type Мун. поселение с типом
 * @property string $sub_area_type Тип мун. поселения (сокращенный)
 * @property string $sub_area_type_full Тип мун. поселения
 * @property string $sub_area Мун. поселение
 * @property string $city_fias_id ФИАС-код города
 * @property string $city_kladr_id КЛАДР-код города
 * @property string $city_with_type Город с типом
 * @property string $city_type Тип города (сокращенный)
 * @property string $city_type_full Тип города
 * @property string $city Город
 * @property string $city_district_fias_id ФИАС-код адм. района города
 * @property string $city_district_kladr_id не заполняется
 * @property string $city_district_with_type Адм. район города с типом
 * @property string $city_district_type Тип адм. района города (сокращенный)
 * @property string $city_district_type_full Тип адм. района города
 * @property string $city_district Адм. район города
 * @property string $settlement_fias_id ФИАС-код нас. пункта
 * @property string $settlement_kladr_id КЛАДР-код нас. пункта
 * @property string $settlement_with_type Населенный пункт с типом
 * @property string $settlement_type Тип населенного пункта (сокращенный)
 * @property string $settlement_type_full Тип населенного пункта
 * @property string $settlement Населенный пункт
 * @property string $street_fias_id ФИАС-код улицы
 * @property string $street_kladr_id КЛАДР-код улицы
 * @property string $street_with_type Улица с типом
 * @property string $street_type Тип улицы (сокращенный)
 * @property string $street_type_full Тип улицы
 * @property string $street Улица
 * @property string $stead_fias_id ФИАС-код земельного участка
 * @property string $stead_kladr_id КЛАДР-код земельного участка
 * @property string $stead_type = «уч»
 * @property string $stead_type_full = «участок»
 * @property string $stead номер земельного участка
 * @property string $house_fias_id ФИАС-код дома
 * @property string $house_kladr_id КЛАДР-код дома
 * @property string $house_type Тип дома (сокращенный)
 * @property string $house_type_full Тип дома
 * @property string $house Дом
 * @property string $block_type Тип корпуса/строения (сокращенный)
 * @property string $block_type_full Тип корпуса/строения
 * @property string $block Корпус/строение
 * @property string $entrance не заполняется
 * @property string $floor не заполняется
 * @property string $flat_fias_id ФИАС-код квартиры
 * @property string $flat_type Тип квартиры (сокращенный)
 * @property string $flat_type_full Тип квартиры
 * @property string $flat Квартира
 * @property string $room_fias_id ФИАС-код комнаты
 * @property string $room_type Тип комнаты (сокращенный)
 * @property string $room_type_full Тип комнаты
 * @property string $room Комната
 * @property string $postal_box Абонентский ящик
 * @property string $fias_id ФИАС-код (он же код ГАР) адреса для России. Идентификатор OpenStreetMap для Белоруссии, Казахстана и Узбекистана.
 * @property string $fias_level Уровень детализации, до которого адрес найден в ФИАС (ГАР)
 * @property string $kladr_id КЛАДР-код
 * @property string $geoname_id Идентификатор объекта в базе GeoNames. Для российских адресов не заполняется.
 * @property string $capital_marker Признак центра района или региона
 * @property string $okato Код ОКАТО
 * @property string $oktmo Код ОКТМО
 * @property string $tax_office Код ИФНС для физических лиц
 * @property string $tax_office_legal Код ИФНС для организаций
 * @property array $history_values Список исторических названий объекта нижнего уровня
 *
 * Дополнительные поля, заполняются в зависимости от тарифа.
 * Заполняются при выборе конкретной подсказки. До этого они пустые.
 * ---- Все тарифы ----
 * @property float $geo_lat Координаты: широта
 * @property float $geo_lon Координаты: долгота
 * @property int $qc_geo Код точности координат
 * @property string $fias_actuality_state Признак актуальности адреса в ФИАС
 * @property string $city_area Административный округ (только для Москвы)
 * ---- «Расширенный» и «Максимальный» ----
 * @property bool $beltway_hit Внутри кольцевой?
 * @property int $beltway_distance Расстояние от кольцевой в километрах
 * ---- Только «Максимальный» ----
 * @property string $stead_cadnum Кадастровый номер земельного участка
 * @property string $house_cadnum Кадастровый номер дома
 * @property string $flat_cadnum Кадастровый номер квартиры
 * @property string $flat_area Площадь квартиры
 * @property string $square_meter_price Рыночная стоимость м²
 * @property string $flat_price Рыночная стоимость квартиры
 * @property string $timezone Часовой пояс
 * @property array $metro Список ближайших станций метро (до трёх штук)
 */
class SuggestionAddressData extends BaseBodyDto
{
}