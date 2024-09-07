<?php

namespace App\Builder;

class Email
{
    private $cc = "";
    private $bcc = "";
    public function __construct(private string $to)
    {

    }
    public function addCc(string $email): self
    {
        $this->cc = $email;
        return $this;
    }
    public function addBcc(string $email): self
    {
        $this->bcc = $email;
        return $this;
    }
    public function __toString()
    {
        return "this email for ". $this->to."cc for".$this->cc."bcc for".this->bcc;
    }
}
