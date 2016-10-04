<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EnquiryType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options){
       
        $builder->add('name');
        $builder->add('email',EmailType::class);
        $builder->add('subject');
        $builder->add('body', TextareaType::class);
    } 
    
    public function getName(){
        return 'contact';
    }
}
