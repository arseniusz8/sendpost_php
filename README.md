# sendpost

Email API and SMTP relay to not just send and measure email sending, but also alert and optimise. We provide you with tools, expertise and support needed to reliably deliver emails to your customers inboxes on time, every time.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "arseniusz8/sendpost_php": "^1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sendpost/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
    <?php
      require_once(__DIR__ . '/vendor/autoload.php');
      $client = new GuzzleHttp\Client();

      $apiInstance = new sendpost\api\EmailApi($client);
  
      $x_sub_account_api_key = 'your_api_key'; // string | Sub-Account API Key
      $email_message = new \sendpost\model\EmailMessage(); 
      $email_message->setSubject('Hello World');
      $email_message->setHtmlBody('<strong>it works!</strong>');
      $email_message->setIppool('PiedPiper');
      $from = new \sendpost\model\From();
      $from->setEmail('richard@piedpiper.com');

      $to = new \sendpost\model\To();
      $to->setEmail('gavin@hooli.com');
      $email_message->setTo(array($to));
      $email_message->setFrom($from);

      try {
          $result = $apiInstance->sendEmail($x_sub_account_api_key, $email_message);
          print_r($result);
      } catch (Exception $e) {
          echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
      }
    ?> 

```

## API Endpoints

All URIs are relative to *https://api.sendpost.io/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmailApi* | [**sendEmail**](docs/Api/EmailApi.md#sendemail) | **POST** /subaccount/email/ | 
*EmailApi* | [**sendEmailWithTemplate**](docs/Api/EmailApi.md#sendemailwithtemplate) | **POST** /subaccount/email/template | 

## Models

- [Attachment](docs/Model/Attachment.md)
- [City](docs/Model/City.md)
- [CopyTo](docs/Model/CopyTo.md)
- [Device](docs/Model/Device.md)
- [EmailMessage](docs/Model/EmailMessage.md)
- [EmailResponse](docs/Model/EmailResponse.md)
- [EventMetadata](docs/Model/EventMetadata.md)
- [From](docs/Model/From.md)
- [Os](docs/Model/Os.md)
- [QEmailMessage](docs/Model/QEmailMessage.md)
- [QEvent](docs/Model/QEvent.md)
- [ReplyTo](docs/Model/ReplyTo.md)
- [To](docs/Model/To.md)
- [UserAgent](docs/Model/UserAgent.md)
- [WebhookEvent](docs/Model/WebhookEvent.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@sendpost.io
