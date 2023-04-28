<?php

/**
 * @param \AnzeBlaBla\Framework\Helpers $h
 */
return function ($h) {
    /**
     * @var \AnzeBlaBla\Framework\Component $this
     */
    return <<<HTML
        <div>
            Test user page

            <p>User ID: {$this->props->query['user_id']}</p>
        </div>
    HTML;
};
