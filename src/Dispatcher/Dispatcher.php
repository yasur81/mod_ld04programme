<?php
namespace LD04\Module\Programme\Site\Dispatcher;

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{
    public function dispatch()
    {
        echo '<h4>Hello</h4>';
    }