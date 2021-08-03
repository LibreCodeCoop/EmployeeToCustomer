<?php

namespace Modules\EmployeeToCustomer\Listeners;

use App\Events\Module\Installed as Event;
use App\Traits\Contacts;

class FinishInstallation
{
    use Contacts;

    public $alias = 'employee-to-customer';

    /**
     * Handle the event.
     *
     * @param  Event $event
     * @return void
     */
    public function handle(Event $event)
    {
        if ($event->alias != $this->alias) {
            return;
        }

        $this->addCustomerType('employee');
    }
}
