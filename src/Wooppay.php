<?php

namespace Alexboo\Wooppay;


use Alexboo\Wooppay\Exception\WooppayException;
use Alexboo\Wooppay\Request\CashConfirmOperationRequest;
use Alexboo\Wooppay\Request\CashCreateInvoiceRequest;
use Alexboo\Wooppay\Request\CashCreateOperationRequest;
use Alexboo\Wooppay\Request\CashDischargementRequest;
use Alexboo\Wooppay\Request\CashGetOperationDataRequest;
use Alexboo\Wooppay\Request\CashGetTransfersRequest;
use Alexboo\Wooppay\Request\CashTransferRequest;
use Alexboo\Wooppay\Request\CoreLoginRequest;
use Alexboo\Wooppay\Request\CoreLogoutRequest;
use Alexboo\Wooppay\Request\CoreSmthRequest;
use Alexboo\Wooppay\Response\BaseResponse;
use Alexboo\Wooppay\Response\CashConfirmOperationResponse;
use Alexboo\Wooppay\Response\CashCreateInvoiceResponse;
use Alexboo\Wooppay\Response\CashCreateOperationResponse;
use Alexboo\Wooppay\Response\CashDischargementResponse;
use Alexboo\Wooppay\Response\CashGetTransfersResponse;
use Alexboo\Wooppay\Response\CashTransferResponse;
use Alexboo\Wooppay\Response\CoreSmthResponse;
use SoapClient;

class Wooppay {

    const ERROR_UNABLE_CONNECTION_TO_SERVICE = 'Unable to connect to the service';
    const ERROR_WRONG_LOGIN_OR_PASSWORD = 'Wrong login or password';

    public function __construct(Options $options)
    {
        $url = Reference::URI_API;
        if ($options->isTest()) {
            $url = Reference::URI_API_TEST;
        }

        try {
            $this->soap = new SoapClient($url, [
                'login' => $options->getLogin(),
                'password' => $options->getPassword()
            ]);
        } catch (\Exception $e) {
            throw new WooppayException(self::ERROR_UNABLE_CONNECTION_TO_SERVICE);
        }

        $this->login($options->getLogin(), $options->getPassword());
    }

    /**
     * Login to service
     * @param $login
     * @param $password
     * @throws WooppayException
     */
    public function login($login, $password)
    {
        $request = new CoreLoginRequest();
        $request->username = $login;
        $request->password = $password;

        $data = $this->soap->core_login($request);

        if (!empty($data->response->session)) {
            $this->soap->__setCookie('session', $data->response->session);
        } else {
            throw new WooppayException(self::ERROR_WRONG_LOGIN_OR_PASSWORD);
        }
    }

    /**
     * Logout from service
     * @param CoreLogoutRequest $request
     * @return mixed
     */
    public function logout(CoreLogoutRequest $request)
    {
        return $this->core_logout($request);
    }

    /**
     * Create invoice
     * @param CashCreateInvoiceRequest $request
     * @return CashCreateInvoiceResponse
     */
    public function createInvoice(CashCreateInvoiceRequest $request)
    {
        return $this->soap->cash_createInvoice($request);
    }

    /**
     * Check that operation is paid
     * @param int $operationId
     * @return boolean
     */
    public function isPaid($operationId)
    {
        $request = new CashGetOperationDataRequest();
        $request->operationId = [$operationId];
        $data = $this->soap->cash_getOperationData($request);
        if ($data->response->records[0]->status == Reference::OPERATION_STATUS_DONE)
            return true;

        return false;
    }

    /**
     * @param $request
     * @return CoreSmthResponse
     */
    public function core_smth(CoreSmthRequest $request)
    {
        return $this->soap->core_smth($request);
    }

    /**
     * @param CashCreateOperationRequest $request
     * @return CashCreateOperationResponse
     */
    public function cash_createOperation(CashCreateOperationRequest $request)
    {
        return $this->soap->cash_createOperation($request);
    }

    /**
     * @param CashConfirmOperationRequest $request
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperation(CashConfirmOperationRequest $request)
    {
        return $this->soap->cash_confirmOperation($request);
    }

    /**
     * @param CashDischargementRequest $request
     * @return CashDischargementResponse
     */
    public function cash_dischargement(CashDischargementRequest $request)
    {
        return $this->soap->cash_dischargement($request);
    }

    /**
     * @param CashTransferRequest $request
     * @return CashTransferResponse
     */
    public function cash_transfer(CashTransferRequest $request)
    {
        return $this->soap->cash_transfer($request);
    }

    /**
     * @param CashGetTransfersRequest $request
     * @return CashGetTransfersResponse
     */
    public function cash_getTransfers(CashGetTransfersRequest $request)
    {
        return $this->soap->cash_getTransfers($request);
    }

    public function cash_getCommission($request)
    {
        return $this->soap->cash_getCommission($request);
    }

    public function cash_getServiceIDByName($request)
    {
        return $this->soap->core_getServiceIDByName($request);
    }

    public function cash_getBalance($request)
    {
        return $this->soap->cash_getBalance($request);
    }

    public function cash_service_getCategories($request)
    {
        return $this->soap->cash_service_getCategories($request);
    }

    public function cash_decline($request)
    {
        return $this->soap->cash_decline($request);
    }

    public function cash_setOperationsStatus($request)
    {
        return $this->soap->cash_setOperationsStatus($request);
    }

    public function cash_getOperationsStatus($request)
    {
        return $this->soap->cash_getOperationsStatus($request);
    }

    public function cash_cashOut($request)
    {
        return $this->soap->cash_cashOut($request);
    }

    public function cash_cashOutComplete($request)
    {
        return $this->soap->cash_cashOutComplete($request);
    }

    public function cash_paymentReturn($request)
    {
        return $this->soap->cash_paymentReturn($request);
    }

    public function core_userSearch($request)
    {
        return $this->soap->core_userSearch($request);
    }

    public function system_getConfig($request)
    {
        return $this->soap->system_getConfig($request);
    }

    public function cash_requestTransfer($request)
    {
        return $this->soap->cash_requestTransfer($request);
    }

    public function cash_invoicing($request)
    {
        return $this->soap->cash_invoicing($request);
    }

    public function cash_getServiceFields($request)
    {
        return $this->soap->cash_getServiceFields($request);
    }

    public function cash_checkServiceFields($request)
    {
        return $this->soap->cash_checkServiceFields($request);
    }

    public function cash_getOperationReceipt($request)
    {
        return $this->soap->cash_getOperationReceipt($request);
    }

    public function cash_getOperationData($request)
    {
        return $this->soap->cash_getOperationData($request);
    }

    public function core_userExists($request)
    {
        return $this->soap->core_userExists($request);
    }

    public function cash_createInvoice($request)
    {
        return $this->soap->cash_createInvoice($request);
    }

    public function cash_createInvoiceExtended($request)
    {
        return $this->soap->cash_createInvoiceExtended($request);
    }

    public function cash_createInvoice2Extended($request)
    {
        return $this->soap->cash_createInvoice2Extended($request);
    }

    public function cash_prepaidCardPerform($request)
    {
        return $this->soap->cash_prepaidCardPerform($request);
    }

    public function cash_prepaidCard($request)
    {
        return $this->soap->cash_prepaidCard($request);
    }

    public function cash_prepaidCardCommission($request)
    {
        return $this->soap->cash_prepaidCardCommission($request);
    }

    public function createOperation($request)
    {
        return $this->soap->createOperation($request);
    }

    public function createOperationFake($request)
    {
        return $this->soap->createOperationFake($request);
    }

    public function payConfirm($request)
    {
        return $this->soap->payConfirm($request);
    }

    public function payTransferConfirm($request)
    {
        return $this->soap->payTransferConfirm($request);
    }

    /**
     * Call method from SOAP
     * @param $name
     * @param $arguments
     * @return BaseResponse
     */
    public function __call($name, $arguments)
    {
        return $this->soap->{$name}($arguments);
    }

    private $soap;
}