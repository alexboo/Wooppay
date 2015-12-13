<?php

namespace Alexboo\Wooppay;


use Alexboo\Wooppay\Exception\WooppayException;
use Alexboo\Wooppay\Request\CashCreateInvoiceRequest;
use Alexboo\Wooppay\Request\CashGetOperationDataRequest;
use Alexboo\Wooppay\Request\CoreLoginRequest;
use Alexboo\Wooppay\Response\BaseResponse;
use Alexboo\Wooppay\Response\CashCreateInvoiceResponse;
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
     * Create invoice
     * @param CashCreateInvoiceRequest $request
     * @return CashCreateInvoiceResponse
     */
    public function createInvoice(CashCreateInvoiceRequest $request)
    {
        return $this->cash_createInvoice($request);
    }

    /**
     * Get operation data
     * @param int $operationId
     * @return boolean
     */
    public function isPaid($operationId)
    {
        $request = new CashGetOperationDataRequest();
        $request->operationId = [$operationId];
        $data = $this->cash_getOperationData($request);
        if ($data->response->records[0]->status == self::OPERATION_STATUS_DONE)
            return true;

        return false;
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