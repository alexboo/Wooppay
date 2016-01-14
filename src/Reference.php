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

    // authenticated user
    const USER_ROLES_AUTHENTICATED_USER = 4000;
    // unidentified user.
    const USER_ROLES_UNIDETIFIED_USER = 5000;

    // transfer
    const OPERATION_TYPE_TRANSFER = 1;
    //  payment
    const OPERATION_TYPE_PAYMENT = 2;
    // request of transfer
    const OPERATION_TYPE_REQUEST_OF_TRANSFER = 3;
    // request of payment
    const OPERATION_TYPE_REQUEST_OF_PAYMENT = 4;

    // new
    const OPERATIONS_STATUS_NEW = 1;
    // under consideration
    const OPERATIONS_STATUS_UNDER_CONSIDERATION = 2;
    // rejected
    const OPERATIONS_STATUS_REJECTED = 3;
    // held
    const OPERATIONS_STATUS_HELD = 4;
    // reversed
    const OPERATIONS_STATUS_REVERSED = 5;
    //reverse
    const OPERATIONS_STATUS_REVERSE = 6;

    // Not have some errors
    const ERROR_NO_ERRORS = 0;
}