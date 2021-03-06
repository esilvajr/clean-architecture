<?php

namespace Damianopetrungaro\CleanArchitectureSlim\Users\Domain\Repository\Exception;

use Exception;

class UserNotFoundException extends \Exception
{
    public function __construct($message = 'user_not_found', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}