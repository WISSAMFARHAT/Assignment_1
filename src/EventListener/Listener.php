<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;


 class Listener
{
    protected $parameters;

    public function __construct($paramValue)
    {
        $this->parameters=$paramValue;
    }


    public function onKernelRequest(RequestEvent $event)
    {
        $request   = $event->getRequest();
        $router  = $request->getPathInfo();

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json'))
        {
            $data = json_decode($request->getContent(), true);

            if ($data === null) {
             return $request;
            }
            $request->request->replace($data);
       }
        $url=explode("/",$request->getPathInfo());
        
       if ( in_array("/".$url[1], $this->parameters)) {
       {
        $request->attributes->set('context', $url[1]);
         }
       }
    }

    protected function transformJsonBody(Request $request)
  {

   return $request;
  }

   


}


?>