<?php

namespace Mailosaur\Models;


class SearchCriteria
{
    /**
     * @var string The full email address to which the target email was sent.
     */
    public $sentTo = null;

    /**
     * @var string The value to seek within the target email's subject line.
     */
    public $subject = null;

    /**
     * @var string The value to seek within the target email's HTML or text body.
     */
    public $body = null;

    /**
     * @var string  If set to "ALL" (default), then only results that match
     * all specified criteria will be returned. If set to "ANY", results that 
     * match any of the specified criteria will be returned.The value to seek 
     * within the target email's HTML or text body.
     */
    public $match = null;

    public function __toArray()
    {
        return array(
            'sentTo'  => $this->sentTo,
            'subject' => $this->subject,
            'body'    => $this->body,
            'match'    => $this->match,
        );
    }

    /**
     * Prepare json-serialized string of search criteria
     *
     * @return string
     */
    public function toJsonString()
    {
        return json_encode($this->__toArray());
    }
}