<?php

namespace Unoegohh\MailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = $this->get('mailer')->createMessage()
            ->setSubject("form mailer")
            ->setFrom(array("pegas@tets.ru" => "pegast"))
            ->setBody($this->renderView('UnoegohhMailerBundle:Default:index.html.twig'), 'text/html')
            ->addTo("yuri.karmakov@pegast.ru")
            ->addTo("unoegohhtest@gmail.com");

        $this->get('mailer')->send($message);
        $space= '<img src="http://cdn01.pegast.su/get/f8/bb/fd/528a7087c446ed744d7ac20eca79ba215eb8a1297fb957eac7a792f9d4/10x10.gif" alt="" width="5px" height="5px">';
        return $this->render('UnoegohhMailerBundle:Default:index.html.twig', array('space'=> $space));
    }
}
