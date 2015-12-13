<?php

namespace Alexboo\Wooppay\Request;


class CashGetTransfersRequest {
    /**
     * @var int page
     */
    public $page;

    /**
     * @var int perPage
     */
    public $perPage;

    /**
     * @var int[] statuses
     */
    public $statuses;

    /**
     * @var int[] types
     */
    public $types;

    /**
     * @var int direction
     */
    public $direction;

    /**
     * @var boolean reverse
     */
    public $reverse;

    /**
     * @var string secondSubject
     */
    public $secondSubject;

    /**
     * @var string dateFrom
     */
    public $dateFrom;

    /**
     * @var string dateTo
     */
    public $dateTo;

    /**
     * @var int lastChanged
     */
    public $lastChanged;
}