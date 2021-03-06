<?php

namespace Zapheus\Bridge\Psr;

use Psr\Container\ContainerExceptionInterface;

/**
 * Not Found Exception
 *
 * @package Zapheus
 * @author  Rougin Gutib <rougingutib@gmail.com>
 */
class ContainerException extends \Exception implements ContainerExceptionInterface
{
}
