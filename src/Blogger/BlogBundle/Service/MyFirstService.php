<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Service;

/**
 * Description of MyFirstService
 *
 * @author maria.pop
 */
class MyFirstService {
    //put your code here
    public function printSomething($something){
        var_dump($something);
    }
    
    public function getBlogById($blog_id){
        $em = $this->getDoctrine()
                    ->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($blog_id);
        
        return $blog;
    }
}
