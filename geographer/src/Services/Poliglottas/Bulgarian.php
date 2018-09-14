<?php

namespace MenaraSolutions\Geographer\Services\Poliglottas;

/**
 * Class Ukrainian
 * @package MenaraSolutions\FluentGeonames\Services\Poliglottas
 */
class Bulgarian extends Base
{
    /**
     * @var string
     */
    protected $code = 'bg';

    /**
     * @var array
     */
    protected $defaultPrepositions = [
        'from' => 'Öå',
        'in' => 'ë'
    ];
}
