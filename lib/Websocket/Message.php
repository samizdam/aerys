<?php declare(strict_types = 1);

namespace Aerys\Websocket;

use Amp\Observable;
use Aerys\Body;

class Message extends Body {
    private $isBinary;
    
    public function __construct(Observable $observable, bool $isBinary) {
        parent::__construct($observable);
        $this->isBinary = $isBinary;
    }
    
    public function isBinary(): bool {
        return $this->isBinary;
    }
}