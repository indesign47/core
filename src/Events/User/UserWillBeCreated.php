<?php

namespace ZEDx\Events\User;

use Illuminate\Queue\SerializesModels;
use ZEDx\Events\Event;
use ZEDx\Models\User;

class UserWillBeCreated extends Event
{
    use SerializesModels;

    public $actor;
    public $user;
    public $adtypes;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $actor, $adtypes)
    {
        $this->user = $user;
        $this->actor = $actor;
        $this->adtypes = $adtypes;
    }
}
