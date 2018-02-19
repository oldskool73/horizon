<?php

namespace Vzool\Horizon\SupervisorCommands;

use Vzool\Horizon\Contracts\Pausable;

class Pause
{
    /**
     * Process the command.
     *
     * @param  \Vzool\Horizon\Contracts\Pausable  $pausable
     * @return void
     */
    public function process(Pausable $pausable)
    {
        $pausable->pause();
    }
}
