<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'aluno' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aluno/',    ),  ),  4 =>   array (  ),),
        'aluno_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aluno/',    ),  ),  4 =>   array (  ),),
        'aluno_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aluno/new',    ),  ),  4 =>   array (  ),),
        'aluno_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/aluno',    ),  ),  4 =>   array (  ),),
        'aluno_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/aluno',    ),  ),  4 =>   array (  ),),
        'aluno_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/aluno',    ),  ),  4 =>   array (  ),),
        'aluno_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\AlunoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/aluno',    ),  ),  4 =>   array (  ),),
        'certificado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/certificado/',    ),  ),  4 =>   array (  ),),
        'certificado_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/certificado/',    ),  ),  4 =>   array (  ),),
        'certificado_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/certificado/new',    ),  ),  4 =>   array (  ),),
        'certificado_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/certificado',    ),  ),  4 =>   array (  ),),
        'certificado_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/certificado',    ),  ),  4 =>   array (  ),),
        'certificado_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/certificado',    ),  ),  4 =>   array (  ),),
        'certificado_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\CertificadoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/certificado',    ),  ),  4 =>   array (  ),),
        'bd_monitorufba_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'departamento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/departamento/',    ),  ),  4 =>   array (  ),),
        'departamento_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/departamento/',    ),  ),  4 =>   array (  ),),
        'departamento_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/departamento/new',    ),  ),  4 =>   array (  ),),
        'departamento_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/departamento',    ),  ),  4 =>   array (  ),),
        'departamento_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/departamento',    ),  ),  4 =>   array (  ),),
        'departamento_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/departamento',    ),  ),  4 =>   array (  ),),
        'departamento_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\DepartamentoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/departamento',    ),  ),  4 =>   array (  ),),
        'edital' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edital/',    ),  ),  4 =>   array (  ),),
        'edital_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edital/',    ),  ),  4 =>   array (  ),),
        'edital_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edital/new',    ),  ),  4 =>   array (  ),),
        'edital_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edital',    ),  ),  4 =>   array (  ),),
        'edital_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/edital',    ),  ),  4 =>   array (  ),),
        'edital_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edital',    ),  ),  4 =>   array (  ),),
        'edital_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\EditalController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edital',    ),  ),  4 =>   array (  ),),
        'monitoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/monitoria/',    ),  ),  4 =>   array (  ),),
        'monitoria_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/monitoria/',    ),  ),  4 =>   array (  ),),
        'monitoria_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/monitoria/new',    ),  ),  4 =>   array (  ),),
        'monitoria_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/monitoria',    ),  ),  4 =>   array (  ),),
        'monitoria_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/monitoria',    ),  ),  4 =>   array (  ),),
        'monitoria_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/monitoria',    ),  ),  4 =>   array (  ),),
        'monitoria_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\MonitoriaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/monitoria',    ),  ),  4 =>   array (  ),),
        'pessoa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/',    ),  ),  4 =>   array (  ),),
        'pessoa_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/',    ),  ),  4 =>   array (  ),),
        'pessoa_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pessoa/new',    ),  ),  4 =>   array (  ),),
        'pessoa_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pessoa',    ),  ),  4 =>   array (  ),),
        'pessoa_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/pessoa',    ),  ),  4 =>   array (  ),),
        'pessoa_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pessoa',    ),  ),  4 =>   array (  ),),
        'pessoa_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\PessoaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pessoa',    ),  ),  4 =>   array (  ),),
        'professor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professor/',    ),  ),  4 =>   array (  ),),
        'professor_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professor/',    ),  ),  4 =>   array (  ),),
        'professor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professor/new',    ),  ),  4 =>   array (  ),),
        'professor_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/professor',    ),  ),  4 =>   array (  ),),
        'professor_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/professor',    ),  ),  4 =>   array (  ),),
        'professor_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/professor',    ),  ),  4 =>   array (  ),),
        'professor_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProfessorController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/professor',    ),  ),  4 =>   array (  ),),
        'projeto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projeto/',    ),  ),  4 =>   array (  ),),
        'projeto_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projeto/',    ),  ),  4 =>   array (  ),),
        'projeto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projeto/new',    ),  ),  4 =>   array (  ),),
        'projeto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projeto',    ),  ),  4 =>   array (  ),),
        'projeto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/projeto',    ),  ),  4 =>   array (  ),),
        'projeto_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projeto',    ),  ),  4 =>   array (  ),),
        'projeto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\ProjetodemonitoriaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projeto',    ),  ),  4 =>   array (  ),),
        'relatorio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/relatorio/',    ),  ),  4 =>   array (  ),),
        'relatorio_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/relatorio/',    ),  ),  4 =>   array (  ),),
        'relatorio_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/relatorio/new',    ),  ),  4 =>   array (  ),),
        'relatorio_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/relatorio',    ),  ),  4 =>   array (  ),),
        'relatorio_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/relatorio',    ),  ),  4 =>   array (  ),),
        'relatorio_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/relatorio',    ),  ),  4 =>   array (  ),),
        'relatorio_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\RelatorioController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/relatorio',    ),  ),  4 =>   array (  ),),
        'selecao' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/selecao/',    ),  ),  4 =>   array (  ),),
        'selecao_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/selecao/',    ),  ),  4 =>   array (  ),),
        'selecao_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/selecao/new',    ),  ),  4 =>   array (  ),),
        'selecao_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/selecao',    ),  ),  4 =>   array (  ),),
        'selecao_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/selecao',    ),  ),  4 =>   array (  ),),
        'selecao_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/selecao',    ),  ),  4 =>   array (  ),),
        'selecao_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Bd\\MonitorUfbaBundle\\Controller\\SelecaoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/selecao',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}