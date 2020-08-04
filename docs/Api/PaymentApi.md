# Swagger\Client\PaymentApi

All URIs are relative to *https://sandbox.gestpay.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PaymentCancelPost**](PaymentApi.md#apiv1paymentcancelpost) | **POST** /api/v1/payment/cancel/ | 
[**apiV1PaymentCapturePost**](PaymentApi.md#apiv1paymentcapturepost) | **POST** /api/v1/payment/capture/ | 
[**apiV1PaymentCreatePost**](PaymentApi.md#apiv1paymentcreatepost) | **POST** /api/v1/payment/create | 
[**apiV1PaymentMethodsPaymentIdLanguageIdGet**](PaymentApi.md#apiv1paymentmethodspaymentidlanguageidget) | **GET** /api/v1/payment/methods/{paymentId}/{languageId} | 
[**apiV1PaymentRefundPost**](PaymentApi.md#apiv1paymentrefundpost) | **POST** /api/v1/payment/refund/ | 
[**apiV1PaymentSubmitPost**](PaymentApi.md#apiv1paymentsubmitpost) | **POST** /api/v1/payment/submit | 
[**apiV1PaymentUpdatePost**](PaymentApi.md#apiv1paymentupdatepost) | **POST** /api/v1/payment/update | 

# **apiV1PaymentCancelPost**
> apiV1PaymentCancelPost($body)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $apiInstance->apiV1PaymentCancelPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentCapturePost**
> apiV1PaymentCapturePost($body)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 

try {
    $apiInstance->apiV1PaymentCapturePost($body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentCreatePost**
> \Swagger\Client\Model\InlineResponse2001 apiV1PaymentCreatePost($body)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->apiV1PaymentCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentMethodsPaymentIdLanguageIdGet**
> \Swagger\Client\Model\InlineResponse2002 apiV1PaymentMethodsPaymentIdLanguageIdGet($payment_id, $language_id, $payment_token)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = "payment_id_example"; // string | 
$language_id = "language_id_example"; // string | 
$payment_token = "payment_token_example"; // string | 

try {
    $result = $apiInstance->apiV1PaymentMethodsPaymentIdLanguageIdGet($payment_id, $language_id, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentMethodsPaymentIdLanguageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **language_id** | **string**|  |
 **payment_token** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentRefundPost**
> apiV1PaymentRefundPost($body)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $apiInstance->apiV1PaymentRefundPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentSubmitPost**
> apiV1PaymentSubmitPost($body, $payment_token)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 
$payment_token = "payment_token_example"; // string | 

try {
    $apiInstance->apiV1PaymentSubmitPost($body, $payment_token);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  | [optional]
 **payment_token** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 apiV1PaymentUpdatePost($body)



Auto generated using Swagger Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->apiV1PaymentUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

