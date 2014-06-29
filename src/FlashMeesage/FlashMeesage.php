<?php
namespace FlashMeesage;

use Zend\Session\Container;

class FlashMeesage
{
    /** @var  Container */
    protected $sessionContainer;

    public function __construct()
    {
        $this->sessionContainer = new Container('flashMeesage');

        if (!isset($this->sessionContainer->messages)) {
            $this->sessionContainer->messages = [];
        }
    }

    public function addMessage($message, $namespace = 'info')
    {
        $this->sessionContainer->messages[] = [$message, $namespace];
    }

    public function getMessages($namespace = null)
    {
        $items = $this->sessionContainer->messages;
        $this->sessionContainer->messages = [];
        return $items;
    }
}