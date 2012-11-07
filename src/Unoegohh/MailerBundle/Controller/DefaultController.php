<?php

namespace Unoegohh\MailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $message = $this->get('mailer')->createMessage()
//            ->setSubject("form mailer")
//            ->setFrom(array("pegas@tets.ru" => "pegast"))
//            ->setBody($this->renderView('UnoegohhMailerBundle:Default:index.html.twig'), 'text/html')
//            ->addTo("yuri.karmakov@pegast.ru");
//
//        $this->get('mailer')->send($message);

        return $this->render('UnoegohhMailerBundle:Default:index.html.twig');
    }
}
