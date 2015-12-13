<?php

namespace Alexboo\Wooppay\Response;


class CashGetOperationDataResponseDataRecord {
    /**
     * @var int $id
     * @soap
     */
    public $id;
    /**
     * @var int $type
     * @soap
     */
    public $type;
    /**
     * @var int $lotId
     * @soap
     */
    public $lotId;
    /**
     * @var int $sum
     * @soap
     */
    public $sum;
    /**
     * @var string $date
     * @soap
     */
    public $date;
    /**
     * @var int $status
     * @soap
     */
    public $status;
    /**
     * @var string $comment
     * @soap
     */
    public $comment;
    /**
     * @var string $fromSubject
     * @soap
     */
    public $fromSubject;
    /**
     * @var string $toSubject
     * @soap
     */
    public $toSubject;
    /**
     * @var string $fromFullName
     * @soap
     */
    public $fromFullName;
    /**
     * @var string $toFullName
     * @soap
     */
    public $toFullName;
}