<?php

namespace Vipps;

use Exception;
use GuzzleHttp\Client as Guzzle;
use Vipps\Exception\VippsException;

/**
 * @package Vipps
 */
class Client
{
  /** @var \Vipps\Client Holds the API client instance */
  private $client;

  /** @var string The Vipps resource */
  private $resource;

  /** @var int The UNIX timestamp when the current accessToken will expire */
  private $expiresOn;

  /** @var string The current accessToken */
  private $accessToken;

  /** @var string */
  const HTTP_METHOD_GET = 'get';

  /** @var string */
  const HTTP_METHOD_PUT = 'put';

  /** @var string */
  const HTTP_METHOD_POST = 'post';

  /** @var string */
  const HTTP_METHOD_PATCH = 'patch';

  /** @var string */
  const HTTP_METHOD_DELETE = 'delete';

  /**
   * Instantiates a new Client instance
   *
   * @param string $endpoint = '/'
   */
  public function __construct($endpoint = '/')
  {
    $this->client = new Guzzle([
      'base_uri' => Vipps::getConfig()->endpoint . '/' . trim($endpoint, '/') . '/',
      'headers' => [
        'Content-Type' => 'application/json',
        'Ocp-Apim-Subscription-Key' => Vipps::getConfig()->ecommerceSubscriptionKey
      ]
    ]);

    $this->authenticate();
  }

  /**
   * Performs authentication and/or reauthentication
   *
   * @return void
   */
  private function authenticate()
  {
    if (!$this->accessToken || $this->expiresOn < time()) {
      $response = $this->request(self::HTTP_METHOD_POST, '/accessToken/get', null, [
        'client_id' => Vipps::getConfig()->clientId,
        'client_secret' => Vipps::getConfig()->clientSecret,
        'Ocp-Apim-Subscription-Key' => Vipps::getConfig()->accessTokenSubscriptionKey
      ], true);

      $this->resource = $response->resource;
      $this->expiresOn = $response->expires_on;
      $this->accessToken = $response->access_token;
    }
  }

  /**
   * Genereates request headers
   *
   * @return array
   */
  private function buildHeaders(): array
  {
    $headers = [
      'X-Request-Id' => Vipps::getUniqueID(),
      'X-TimeStamp' => Vipps::getTimestamp(),
    ];

    if ($this->accessToken)
      $headers['Authorization'] = 'Bearer ' . $this->accessToken;

    return $headers;
  }

  /**
   * Generates request URL
   *
   * @param string $url = '/'
   * @return string
   */
  private function buildURL($url = '/'): string
  {
    return trim($url, '/');
  }

  /**
   * Generates a request
   *
   * @param array $headers = []
   * @param array $payload = null
   * @return array
   */
  private function buildRequest($headers = [], $payload = null): array
  {
    $request = [
      'headers' => array_merge($this->buildHeaders(), $headers)
    ];

    if ($payload)
      $request['body'] = json_encode($payload, JSON_FORCE_OBJECT|JSON_PRETTY_PRINT);

    return $request;
  }

  /**
   * Performs a HTTP request
   *
   * @param string $method
   * @param string $route = '/'
   * @param array $payload = null
   * @param array $headers = []
   * @throws VippsException
   * @return Response
   */
  private function request($method, $route = '/', $payload = null, $headers = [], $absoluteURL = false): Response
  {
    try {
      // Re-authenicate if token expired
      if ($this->accessToken)
        $this->authenticate();

      $response = $this->client->{$method}(
        $absoluteURL ? $route : $this->buildURL($route),
        $this->buildRequest($headers, $payload)
      );

      return new Response(json_decode($response->getBody(), true), true);
    } catch (Exception $ex) {
      $response = $ex->getResponse();
      $code = $response->getStatusCode();
      $body = json_decode($response->getBody(), true);
      $message = json_encode($body, JSON_PRETTY_PRINT);
      throw new VippsException($message, $code, $body);
    }
  }

  /**
   * Peforms HTTP GET
   *
   * @param string $route = '/'
   * @param array $headers = []
   * @return Response
   */
  public function get(string $route = '/', array $headers = []): Response
  {
    return $this->request(
      self::HTTP_METHOD_GET,
      $route,
      null,
      $headers
    );
  }

  /**
   * Peforms HTTP POST
   *
   * @param string $route = '/'
   * @param mixed $payload = null
   * @param array $headers = []
   * @return Response
   */
  public function post(string $route = '/', $payload = null, array $headers = []): Response
  {
    return $this->request(
      self::HTTP_METHOD_POST,
      $route,
      $payload,
      $headers
    );
  }

  /**
   * Peforms HTTP PUT
   *
   * @param string $route = '/'
   * @param mixed $payload = null
   * @param array $headers = []
   * @return Response
   */
  public function put(string $route = '/', $payload = null, array $headers = []): Response
  {
    return $this->request(
      self::HTTP_METHOD_PUT,
      $route,
      $payload,
      $headers
    );
  }

  /**
   * Peforms HTTP DELETE
   *
   * @param string $route = '/'
   * @param array $headers = []
   * @return Response
   */
  public function delete(string $route = '/', array $headers = []): Response
  {
    return $this->request(
      self::HTTP_METHOD_DELETE,
      $route,
      null,
      $headers
    );
  }

  /**
   * Peforms HTTP PATCH
   *
   * @param string $route = '/'
   * @param mixed $payload = null
   * @param array $headers = []
   * @return Response
   */
  public function patch(string $route = '/', $payload = null, array $headers = []): Response
  {
    return $this->request(
      self::HTTP_METHOD_PATHC,
      $route,
      $payload,
      $headers
    );
  }
}
