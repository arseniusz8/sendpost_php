# sendpost\EmailApi

All URIs are relative to https://api.sendpost.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](EmailApi.md#sendEmail) | **POST** /subaccount/email/ |  |
| [**sendEmailWithTemplate()**](EmailApi.md#sendEmailWithTemplate) | **POST** /subaccount/email/template |  |


## `sendEmail()`

```php
sendEmail($x_sub_account_api_key, $email_message): \sendpost\model\EmailResponse[]
```



Send Email To Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$email_message = new \sendpost\model\EmailMessage(); // \sendpost\model\EmailMessage | Email message

try {
    $result = $apiInstance->sendEmail($x_sub_account_api_key, $email_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **email_message** | [**\sendpost\model\EmailMessage**](../Model/EmailMessage.md)| Email message | [optional] |

### Return type

[**\sendpost\model\EmailResponse[]**](../Model/EmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailWithTemplate()`

```php
sendEmailWithTemplate($x_sub_account_api_key, $email_message): \sendpost\model\EmailResponse[]
```



Send Email To Contacts With Template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$email_message = new \sendpost\model\EmailMessage(); // \sendpost\model\EmailMessage | Email message

try {
    $result = $apiInstance->sendEmailWithTemplate($x_sub_account_api_key, $email_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailWithTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **email_message** | [**\sendpost\model\EmailMessage**](../Model/EmailMessage.md)| Email message | [optional] |

### Return type

[**\sendpost\model\EmailResponse[]**](../Model/EmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
