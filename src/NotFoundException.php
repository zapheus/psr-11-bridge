<?php

namespace Zapheus\Bridge\Psr;

use Psr\Container\NotFoundExceptionInterface;

/**
 * Not Found Exception
 *
 * @package Zapheus
 * @author  Rougin Gutib <rougingutib@gmail.com>
 */
class NotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface
{
}
