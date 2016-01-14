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

Еще можно так
$wooppay =  new Wooppay(new Options($login, $password, $basicAccessLogin, $basicAccesPassword, $isTest));

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

if ($wooppay->isPaid($operationId)) {
    // do something
    
    // Ответ для сервер wooppay об успешном проведении операции
    Wooppay::response(true);
} else {
    // Ответ для сервер wooppay если произошла ошибка
    Wooppay::response(false);
}

```