<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;


 class Listener
{
    protected $container;

   

    public function onKernelRequest(RequestEvent $event)
    {
        $request   = $event->getRequest();
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json'))
        {
            $data = json_decode($request->getContent(), true);

            if ($data === null) {
             return $request;
            }
            $request->request->replace($data);
       }
       if(strpos($request->getPathInfo(), '/admin/') === 0){
        $request->attributes->set('User', 'admin');
        dump($request->attributes->get('User'));
        }elseif (strpos($request->getPathInfo(), '/student/') === 0) {
            $request->attributes->set('User', 'API');
        }
    }

    protected function transformJsonBody(Request $request)
  {
  
   return $request;
  }

   


}


?>