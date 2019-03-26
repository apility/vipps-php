<?php

namespace Vipps\Exception;

use Exception;
use Vipps\Response;

/**
 * @package Vipps
 */
class VippsException extends Exception
{

  /** @var \Vipps\Response */
  private $response;

  /**
   * Instantiates a VippsException
   *
   * @param string $message
   * @param int $code
   * @param Response $response = null
   */
  public function __construct($message = '', $code = 0, $response = null)
  {
    parent::__construct($message, $code);
    $this->response = $response;
  }

  /**
   * Get the response object
   *
   * @return Response|null
   */
  public function getResponse(): ? Response
  {
    return $this->response;
  }
}
