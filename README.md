traffic-api
===========

Client API for Sales.lv Traffic service. Traffic is a platform for SMS messaging to mobile phones worldwide and other related functionality.

This is a simple HTTP API where data is requested or manipulated with HTTP requests. Requests can be made as HTTP POST requests with a JSON body or as basic POST or GET requests.

Once you've signed up for the Traffic service, you'll be provided with a username and an API key, required for making API calls.

There is a specification provided in the [wiki here](https://github.com/Sales-LV/traffic-api/wiki) about making the API calls yourself,
as well as examples of using our libraries.

A quick start guide
------------
- Sign up for the [Traffic service with Sales.lv](http://www.sales.lv/lv/risinajumi/traffic/). Once you have done that, you will be provided with a username and an API key and all necessary data for API usage.
- Take a look at the [API documentation](https://github.com/Sales-LV/traffic-api/wiki) and the client libraries.

PHP client library
------------
PHP client library is located in `lib/php/traffic-api.php`. An usage example is provided in `lib/php/example.php`.

Requirements:
* [PHP 5.2 or newer](http://www.php.net/)
* One of these:
    * [pecl_http](http://pecl.php.net/package/pecl_http) extension is recommended but not mandatory.
    * enabled [cURL library](http://www.php.net/manual/en/book.curl.php).
    * [allow_url_fopen](http://php.net/manual/en/filesystem.configuration.php) set to true.

Library usage is [described in the wiki](https://github.com/Sales-LV/traffic-api/wiki/PHP-API-library).

Feedback, support & questions
------------
Please write to support@sales.lv with any feedback, questions or suggestions that might arise.
