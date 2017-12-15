<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // bd_homepage
        if (rtrim($pathinfo, '/') === '/database') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bd_homepage');
            }

            return array (  '_controller' => 'BdBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bd_homepage',);
        }

        // frontend_principal
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontend_principal');
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontend_principal',);
        }

        // listar
        if (0 === strpos($pathinfo, '/frontend') && preg_match('#^/frontend/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listar')), array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::listarAction',));
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // backend_principal
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_principal');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_principal',);
            }

            // insertar_libro
            if ($pathinfo === '/backend/insertar') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'insertar_libro',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
