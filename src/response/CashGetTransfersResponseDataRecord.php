<?php

namespace Alexboo\Wooppay\Response;


class CashGetTransfersResponseDataRecord
{
    /**
     * @var int $id
     */
    public $id;

    /**
     * @var string $fromSubject
     */
    public $fromSubject;

    /***
     * @var string $toSubject
     */
    public $toSubject;

    /**
     * @var string $fromFullName
     */
    public $fromFullName;

    /**
     * @var string $toFullName
     */
    public $toFullName;

    /**
     * @var int $direction
     */
    public $direction;

    /**
     * @var string $date
     */
    public $date;

    /**
     * @var float $sum
     */
    public $sum;

    /**
     * @var int $type
     */
    public $type;

    /**
     * @var int $status
     */
    public $status;

    /**
     * @var string $comment
     */
    public $comment;

    /**
     * @var int $lotId
     */
    public $lotId;

    /**
     * @var CashGetTransfersResponseDataRecordService $service
     */
    public $service;

    /**
     * @var string $avatarName
     */
    public $avatarName;

    /**
     * @var string $imageLotName
     */
    public $imageLotName;
}