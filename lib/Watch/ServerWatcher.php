<?php

namespace Aerys\Watch;

use Aerys\Watch\BinOptions;

interface ServerWatcher {
    public function watch(BinOptions $binOptions);
}