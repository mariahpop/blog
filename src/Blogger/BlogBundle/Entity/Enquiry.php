<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class Enquiry {
    protected $name;
    protected $email;
    protected $subject;
    protected $body;
    
    function getName() {
        return $this->name;
    }
    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setBody($body) {
        $this->body = $body;
    }

        function getEmail() {
        return $this->email;
    }

    function getSubject() {
        return $this->subject;
    }

    function getBody() {
        return $this->body;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new NotBlank());

        $metadata->addPropertyConstraint('email', new Email());

        $metadata->addPropertyConstraint('subject', new NotBlank());
        $metadata->addPropertyConstraint('subject', new Length(['max' =>50]));

        $metadata->addPropertyConstraint('body', new Length(['min' =>50]));
    }


}