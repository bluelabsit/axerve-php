# Axerve\Client\PaymentApi

All URIs are relative to *https://sandbox.gestpay.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CheckCreditCardPost**](PaymentApi.md#apiv1checkcreditcardpost) | **POST** /api/v1/check/creditCard/ | 
[**apiV1PaymentCancelPost**](PaymentApi.md#apiv1paymentcancelpost) | **POST** /api/v1/payment/cancel/ | 
[**apiV1PaymentCapturePost**](PaymentApi.md#apiv1paymentcapturepost) | **POST** /api/v1/payment/capture/ | 
[**apiV1PaymentCreatePost**](PaymentApi.md#apiv1paymentcreatepost) | **POST** /api/v1/payment/create | 
[**apiV1PaymentMethodsPaymentIdLanguageIdGet**](PaymentApi.md#apiv1paymentmethodspaymentidlanguageidget) | **GET** /api/v1/payment/methods/{paymentId}/{languageId} | 
[**apiV1PaymentRefundPost**](PaymentApi.md#apiv1paymentrefundpost) | **POST** /api/v1/payment/refund/ | 
[**apiV1PaymentSubmitPost**](PaymentApi.md#apiv1paymentsubmitpost) | **POST** /api/v1/payment/submit | 
[**apiV1PaymentUpdatePost**](PaymentApi.md#apiv1paymentupdatepost) | **POST** /api/v1/payment/update | 
[**apiV1ShopMethodsShopLoginGet**](PaymentApi.md#apiv1shopmethodsshoploginget) | **GET** /api/v1/shop/methods/{shopLogin} | 

# **apiV1CheckCreditCardPost**
> \Axerve\Client\Model\InlineResponse2001 apiV1CheckCreditCardPost($body)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Axerve\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axerve\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Axerve\Client\Model\Body(); // \Axerve\Client\Model\Body | 

try {
    $result = $apiInstance->apiV1CheckCreditCardPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1CheckCreditCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Axerve\Client\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\Axerve\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentCancelPost**
> apiV1PaymentCancelPost($body)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\CancelPaymentRequestModel(); // \Axerve\Client\Model\Body6 | 

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
 **body** | [**\Axerve\Client\Model\Body6**](../Model/Body6.md)|  | [optional]

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



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\Body4(); // \Axerve\Client\Model\Body4 | 

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
 **body** | [**\Axerve\Client\Model\Body4**](../Model/Body4.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentCreatePost**
> \Axerve\Client\Model\CreateActionResponseModel apiV1PaymentCreatePost($body)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\CreatePaymentModel(); // \Axerve\Client\Model\Body1 | 

try {
    $result = $apiInstance->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Axerve\Client\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\Axerve\Client\Model\CreateActionResponseModel**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentMethodsPaymentIdLanguageIdGet**
> \Axerve\Client\Model\InlineResponse20010 apiV1PaymentMethodsPaymentIdLanguageIdGet($payment_id, $language_id, $payment_token)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
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

[**\Axerve\Client\Model\InlineResponse20010**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1PaymentRefundPost**
> apiV1PaymentRefundPost($body)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\Body5(); // \Axerve\Client\Model\Body5 | 

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
 **body** | [**\Axerve\Client\Model\Body5**](../Model/Body5.md)|  | [optional]

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



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\SubmitPaymentModel(); // \Axerve\Client\Model\Body3 | 
$payment_token = "payment_token_example"; // string | 

try {
    $apiInstance->submit($body, $payment_token);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Axerve\Client\Model\Body3**](../Model/Body3.md)|  | [optional]
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
> \Axerve\Client\Model\InlineResponse2004 apiV1PaymentUpdatePost($body)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Axerve\Client\Model\Body2(); // \Axerve\Client\Model\Body2 | 

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
 **body** | [**\Axerve\Client\Model\Body2**](../Model/Body2.md)|  | [optional]

### Return type

[**\Axerve\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ShopMethodsShopLoginGet**
> \Axerve\Client\Model\InlineResponse200 apiV1ShopMethodsShopLoginGet($shop_login)



Auto generated using Axerve Inspector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Axerve\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axerve\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Axerve\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_login = "shop_login_example"; // string | 

try {
    $result = $apiInstance->apiV1ShopMethodsShopLoginGet($shop_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1ShopMethodsShopLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_login** | **string**|  |

### Return type

[**\Axerve\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

