# Скрипт для приема оплаты через платежную систему wooppay

В нем реализован все функции доступные в SOAP API платежной системы Wooppay.com

### Установка

Установить скрипт можно при помощи composer

```
composer require alexboo/wooppay
```

### Пример использовния

```
// Авторизация в платежной системе
$wooppay =  new Wooppay();
$options = new Options($login, $password, $basicAccessLogin, $basicAccesPassword, $isTest);
$wooppay->connect($options);

// Выставление счета;

 $request = new CashCreateInvoiceRequest([
    'amount' => $amount,
    'deathDate' => $amount,
    'description' => $description,
    'referenceId' => $referenceId,
    'backUrl' => $backUrl,
    'requestUrl' => $requestUrl,
 ]);
 
$data = $wooppay->cash_createInvoice($request);

if ($data->error_code == Reference::ERROR_NO_ERRORS) {
    $operationId = $data->response->operationId;
}

// Проверка оплаты счета

if ($wooppay->isPaid($perationId())) {
    // do something
    
    // Ответ сервер wooppay
    Wooppay::response(true);
} else {
    // Ответ сервер wooppay
    Wooppay::response(false);
}

```