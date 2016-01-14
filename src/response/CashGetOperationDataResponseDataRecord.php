<?php

namespace Alexboo\Wooppay\Response;


class CashGetOperationDataResponseDataRecord {
    /**
     * id operation
     * @var int $id
     * @soap
     */
    public $id;
    /**
     * Type of operation, the possible values
     * @var int $type
     * @soap
     */
    public $type;
    /**
     * Id lots, if the operation is related to the acquisition of the lot; otherwise a value of 0
     * @var int $lotId
     * @soap
     */
    public $lotId;
    /**
     * Amount of the transaction
     * @var int $sum
     * @soap
     */
    public $sum;
    /**
     * Data creation time operation (yyyy-mm-dd hh: mm: ss);
     * @var string $date
     * @soap
     */
    public $date;
    /**
     * Status, possible values:
     * @var int $status
     * @soap
     */
    public $status;
    /**
     * Comment
     * @var string $comment
     * @soap
     */
    public $comment;
    /**
     * Login sender
     * @var string $fromSubject
     * @soap
     */
    public $fromSubject;
    /**
     * The recipient's name
     * @var string $toSubject
     * @soap
     */
    public $toSubject;
    /**
     * Name, surname of the sender
     * @var string $fromFullName
     * @soap
     */
    public $fromFullName;
    /**
     * Name, surname of the receiver
     * @var string $toFullName
     * @soap
     */
    public $toFullName;
}