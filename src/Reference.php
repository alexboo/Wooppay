<?php
/**
 * Created by PhpStorm.
 * User: alexboo
 * Date: 12/13/15
 * Time: 1:09 PM
 */

namespace Alexboo\Wooppay;


class Reference {

    const URI_API = "https://www.wooppay.com/api/xml";
    const URI_API_TEST = 'https://www-test.wooppay.com/api/xml';

    // New operation
    const OPERATION_STATUS_NEW = 1;
    // In consider
    const OPERATION_STATUS_CONSIDER = 2;
    // Operation is rejected
    const OPERATION_STATUS_REJECTED = 3;
    // Operation is done
    const OPERATION_STATUS_DONE = 4;
    // Operation is canceled
    const OPERATION_STATUS_CANCELED = 5;
    // Operation is canceling
    const OPERATION_STATUS_CANCELING = 6;
    // Operation is deleted
    const OPERATION_STATUS_DELETED = 7;
    // Operation in kvitovanie
    const OPERATION_STATUS_KVITOVANIE = 8;
    // Pending approval or rejection merchant
    const OPERATION_STATUS_WAITING = 9;

    // Not have some errors
    const ERROR_NO_ERRORS = 0;
}