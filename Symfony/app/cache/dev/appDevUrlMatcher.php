<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/aluno')) {
            // aluno
            if (rtrim($pathinfo, '/') === '/aluno') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aluno;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aluno');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::indexAction',  '_route' => 'aluno',);
            }
            not_aluno:

            // aluno_create
            if ($pathinfo === '/aluno/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aluno_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::createAction',  '_route' => 'aluno_create',);
            }
            not_aluno_create:

            // aluno_new
            if ($pathinfo === '/aluno/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aluno_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::newAction',  '_route' => 'aluno_new',);
            }
            not_aluno_new:

            // aluno_show
            if (preg_match('#^/aluno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aluno_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aluno_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::showAction',));
            }
            not_aluno_show:

            // aluno_edit
            if (preg_match('#^/aluno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aluno_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aluno_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::editAction',));
            }
            not_aluno_edit:

            // aluno_update
            if (preg_match('#^/aluno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_aluno_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aluno_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::updateAction',));
            }
            not_aluno_update:

            // aluno_delete
            if (preg_match('#^/aluno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_aluno_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aluno_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::deleteAction',));
            }
            not_aluno_delete:

        }

        if (0 === strpos($pathinfo, '/certificado')) {
            // certificado
            if (rtrim($pathinfo, '/') === '/certificado') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_certificado;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'certificado');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::indexAction',  '_route' => 'certificado',);
            }
            not_certificado:

            // certificado_create
            if ($pathinfo === '/certificado/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_certificado_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::createAction',  '_route' => 'certificado_create',);
            }
            not_certificado_create:

            // certificado_new
            if ($pathinfo === '/certificado/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_certificado_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::newAction',  '_route' => 'certificado_new',);
            }
            not_certificado_new:

            // certificado_show
            if (preg_match('#^/certificado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_certificado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'certificado_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::showAction',));
            }
            not_certificado_show:

            // certificado_edit
            if (preg_match('#^/certificado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_certificado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'certificado_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::editAction',));
            }
            not_certificado_edit:

            // certificado_update
            if (preg_match('#^/certificado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_certificado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'certificado_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::updateAction',));
            }
            not_certificado_update:

            // certificado_delete
            if (preg_match('#^/certificado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_certificado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'certificado_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::deleteAction',));
            }
            not_certificado_delete:

        }

        // bd_monitorufba_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bd_monitorufba_default_index')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/departamento')) {
            // departamento
            if (rtrim($pathinfo, '/') === '/departamento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departamento');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
            }
            not_departamento:

            // departamento_create
            if ($pathinfo === '/departamento/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_departamento_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::createAction',  '_route' => 'departamento_create',);
            }
            not_departamento_create:

            // departamento_new
            if ($pathinfo === '/departamento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
            }
            not_departamento_new:

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::showAction',));
            }
            not_departamento_show:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::editAction',));
            }
            not_departamento_edit:

            // departamento_update
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_departamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::updateAction',));
            }
            not_departamento_update:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_departamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::deleteAction',));
            }
            not_departamento_delete:

        }

        if (0 === strpos($pathinfo, '/edital')) {
            // edital
            if (rtrim($pathinfo, '/') === '/edital') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_edital;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edital');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::indexAction',  '_route' => 'edital',);
            }
            not_edital:

            // edital_create
            if ($pathinfo === '/edital/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_edital_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::createAction',  '_route' => 'edital_create',);
            }
            not_edital_create:

            // edital_new
            if ($pathinfo === '/edital/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_edital_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::newAction',  '_route' => 'edital_new',);
            }
            not_edital_new:

            // edital_show
            if (preg_match('#^/edital/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_edital_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edital_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::showAction',));
            }
            not_edital_show:

            // edital_edit
            if (preg_match('#^/edital/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_edital_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edital_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::editAction',));
            }
            not_edital_edit:

            // edital_update
            if (preg_match('#^/edital/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_edital_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edital_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::updateAction',));
            }
            not_edital_update:

            // edital_delete
            if (preg_match('#^/edital/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_edital_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edital_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::deleteAction',));
            }
            not_edital_delete:

        }

        if (0 === strpos($pathinfo, '/monitoria')) {
            // monitoria
            if (rtrim($pathinfo, '/') === '/monitoria') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_monitoria;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'monitoria');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::indexAction',  '_route' => 'monitoria',);
            }
            not_monitoria:

            // monitoria_create
            if ($pathinfo === '/monitoria/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_monitoria_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::createAction',  '_route' => 'monitoria_create',);
            }
            not_monitoria_create:

            // monitoria_new
            if ($pathinfo === '/monitoria/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_monitoria_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::newAction',  '_route' => 'monitoria_new',);
            }
            not_monitoria_new:

            // monitoria_show
            if (preg_match('#^/monitoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_monitoria_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'monitoria_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::showAction',));
            }
            not_monitoria_show:

            // monitoria_edit
            if (preg_match('#^/monitoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_monitoria_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'monitoria_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::editAction',));
            }
            not_monitoria_edit:

            // monitoria_update
            if (preg_match('#^/monitoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_monitoria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'monitoria_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::updateAction',));
            }
            not_monitoria_update:

            // monitoria_delete
            if (preg_match('#^/monitoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_monitoria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'monitoria_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::deleteAction',));
            }
            not_monitoria_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pessoa')) {
                // pessoa
                if (rtrim($pathinfo, '/') === '/pessoa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pessoa');
                    }

                    return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::indexAction',  '_route' => 'pessoa',);
                }
                not_pessoa:

                // pessoa_create
                if ($pathinfo === '/pessoa/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pessoa_create;
                    }

                    return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::createAction',  '_route' => 'pessoa_create',);
                }
                not_pessoa_create:

                // pessoa_new
                if ($pathinfo === '/pessoa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa_new;
                    }

                    return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::newAction',  '_route' => 'pessoa_new',);
                }
                not_pessoa_new:

                // pessoa_show
                if (preg_match('#^/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::showAction',));
                }
                not_pessoa_show:

                // pessoa_edit
                if (preg_match('#^/pessoa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::editAction',));
                }
                not_pessoa_edit:

                // pessoa_update
                if (preg_match('#^/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_pessoa_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::updateAction',));
                }
                not_pessoa_update:

                // pessoa_delete
                if (preg_match('#^/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pessoa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::deleteAction',));
                }
                not_pessoa_delete:

            }

            if (0 === strpos($pathinfo, '/pro')) {
                if (0 === strpos($pathinfo, '/professor')) {
                    // professor
                    if (rtrim($pathinfo, '/') === '/professor') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_professor;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'professor');
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::indexAction',  '_route' => 'professor',);
                    }
                    not_professor:

                    // professor_create
                    if ($pathinfo === '/professor/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_professor_create;
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::createAction',  '_route' => 'professor_create',);
                    }
                    not_professor_create:

                    // professor_new
                    if ($pathinfo === '/professor/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_professor_new;
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::newAction',  '_route' => 'professor_new',);
                    }
                    not_professor_new:

                    // professor_show
                    if (preg_match('#^/professor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_professor_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'professor_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::showAction',));
                    }
                    not_professor_show:

                    // professor_edit
                    if (preg_match('#^/professor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_professor_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'professor_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::editAction',));
                    }
                    not_professor_edit:

                    // professor_update
                    if (preg_match('#^/professor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_professor_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'professor_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::updateAction',));
                    }
                    not_professor_update:

                    // professor_delete
                    if (preg_match('#^/professor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_professor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'professor_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::deleteAction',));
                    }
                    not_professor_delete:

                }

                if (0 === strpos($pathinfo, '/projeto')) {
                    // projeto
                    if (rtrim($pathinfo, '/') === '/projeto') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_projeto;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'projeto');
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::indexAction',  '_route' => 'projeto',);
                    }
                    not_projeto:

                    // projeto_create
                    if ($pathinfo === '/projeto/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_projeto_create;
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::createAction',  '_route' => 'projeto_create',);
                    }
                    not_projeto_create:

                    // projeto_new
                    if ($pathinfo === '/projeto/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_projeto_new;
                        }

                        return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::newAction',  '_route' => 'projeto_new',);
                    }
                    not_projeto_new:

                    // projeto_show
                    if (preg_match('#^/projeto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_projeto_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::showAction',));
                    }
                    not_projeto_show:

                    // projeto_edit
                    if (preg_match('#^/projeto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_projeto_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::editAction',));
                    }
                    not_projeto_edit:

                    // projeto_update
                    if (preg_match('#^/projeto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_projeto_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::updateAction',));
                    }
                    not_projeto_update:

                    // projeto_delete
                    if (preg_match('#^/projeto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_projeto_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::deleteAction',));
                    }
                    not_projeto_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/relatorio')) {
            // relatorio
            if (rtrim($pathinfo, '/') === '/relatorio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_relatorio;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'relatorio');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::indexAction',  '_route' => 'relatorio',);
            }
            not_relatorio:

            // relatorio_create
            if ($pathinfo === '/relatorio/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_relatorio_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::createAction',  '_route' => 'relatorio_create',);
            }
            not_relatorio_create:

            // relatorio_new
            if ($pathinfo === '/relatorio/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_relatorio_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::newAction',  '_route' => 'relatorio_new',);
            }
            not_relatorio_new:

            // relatorio_show
            if (preg_match('#^/relatorio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_relatorio_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorio_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::showAction',));
            }
            not_relatorio_show:

            // relatorio_edit
            if (preg_match('#^/relatorio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_relatorio_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorio_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::editAction',));
            }
            not_relatorio_edit:

            // relatorio_update
            if (preg_match('#^/relatorio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_relatorio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorio_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::updateAction',));
            }
            not_relatorio_update:

            // relatorio_delete
            if (preg_match('#^/relatorio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_relatorio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorio_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::deleteAction',));
            }
            not_relatorio_delete:

        }

        if (0 === strpos($pathinfo, '/selecao')) {
            // selecao
            if (rtrim($pathinfo, '/') === '/selecao') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_selecao;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'selecao');
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::indexAction',  '_route' => 'selecao',);
            }
            not_selecao:

            // selecao_create
            if ($pathinfo === '/selecao/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_selecao_create;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::createAction',  '_route' => 'selecao_create',);
            }
            not_selecao_create:

            // selecao_new
            if ($pathinfo === '/selecao/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_selecao_new;
                }

                return array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::newAction',  '_route' => 'selecao_new',);
            }
            not_selecao_new:

            // selecao_show
            if (preg_match('#^/selecao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_selecao_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'selecao_show')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::showAction',));
            }
            not_selecao_show:

            // selecao_edit
            if (preg_match('#^/selecao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_selecao_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'selecao_edit')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::editAction',));
            }
            not_selecao_edit:

            // selecao_update
            if (preg_match('#^/selecao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_selecao_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'selecao_update')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::updateAction',));
            }
            not_selecao_update:

            // selecao_delete
            if (preg_match('#^/selecao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_selecao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'selecao_delete')), array (  '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::deleteAction',));
            }
            not_selecao_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
