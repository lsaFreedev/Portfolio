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
        $context = $this->context;
        $request = $this->request;

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

        // portfolio_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portfolio_homepage');
            }

            return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portfolio_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // portfolio_homepage_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\AdminController::indexAction',  '_route' => 'portfolio_homepage_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/formation')) {
                // portfolio_formation_admin
                if ($pathinfo === '/admin/formation') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\FormationController::indexAction',  '_route' => 'portfolio_formation_admin',);
                }

                // portfolio_formation_show_admin
                if (0 === strpos($pathinfo, '/admin/formation/show') && preg_match('#^/admin/formation/show(?:/(?P<user>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_formation_show_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\FormationController::showAction',  'user' => 1,));
                }

                // portfolio_formation_add_admin
                if ($pathinfo === '/admin/formation/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\FormationController::addAction',  '_route' => 'portfolio_formation_add_admin',);
                }

                // portfolio_formation_edit_admin
                if (0 === strpos($pathinfo, '/admin/formation/edit') && preg_match('#^/admin/formation/edit/(?P<education>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_formation_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\FormationController::editAction',));
                }

                // portfolio_formation_delete_admin
                if (0 === strpos($pathinfo, '/admin/formation/delete') && preg_match('#^/admin/formation/delete/(?P<education>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_formation_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\FormationController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/city')) {
                // portfolio_city_admin
                if ($pathinfo === '/admin/city') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CityController::indexAction',  '_route' => 'portfolio_city_admin',);
                }

                // portfolio_city_add_admin
                if ($pathinfo === '/admin/city/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CityController::addAction',  '_route' => 'portfolio_city_add_admin',);
                }

                // portfolio_city_edit_admin
                if (0 === strpos($pathinfo, '/admin/city/edit') && preg_match('#^/admin/city/edit/(?P<city>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_city_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CityController::editAction',));
                }

                // portfolio_city_delete_admin
                if (0 === strpos($pathinfo, '/admin/city/delete') && preg_match('#^/admin/city/delete/(?P<city>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_city_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CityController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/level')) {
                // portfolio_level_admin
                if ($pathinfo === '/admin/level') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\LevelController::indexAction',  '_route' => 'portfolio_level_admin',);
                }

                // portfolio_level_add_admin
                if ($pathinfo === '/admin/level/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\LevelController::addAction',  '_route' => 'portfolio_level_add_admin',);
                }

                // portfolio_level_edit_admin
                if (0 === strpos($pathinfo, '/admin/level/edit') && preg_match('#^/admin/level/edit/(?P<level>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_level_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\LevelController::editAction',));
                }

                // portfolio_level_delete_admin
                if (0 === strpos($pathinfo, '/admin/level/delete') && preg_match('#^/admin/level/delete/(?P<level>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_level_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\LevelController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/experience')) {
                // portfolio_experience_admin
                if ($pathinfo === '/admin/experience') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ExperienceController::indexAction',  '_route' => 'portfolio_experience_admin',);
                }

                // portfolio_experience_show_admin
                if (0 === strpos($pathinfo, '/admin/experience/show') && preg_match('#^/admin/experience/show(?:/(?P<user>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_experience_show_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ExperienceController::showAction',  'user' => 1,));
                }

                // portfolio_experience_add_admin
                if ($pathinfo === '/admin/experience/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ExperienceController::addAction',  '_route' => 'portfolio_experience_add_admin',);
                }

                // portfolio_experience_edit_admin
                if (0 === strpos($pathinfo, '/admin/experience/edit') && preg_match('#^/admin/experience/edit/(?P<experience>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_experience_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ExperienceController::editAction',));
                }

                // portfolio_experience_delete_admin
                if (0 === strpos($pathinfo, '/admin/experience/delete') && preg_match('#^/admin/experience/delete/(?P<experience>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_experience_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ExperienceController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/skill')) {
                // portfolio_skill_admin
                if ($pathinfo === '/admin/skill') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\SkillController::indexAction',  '_route' => 'portfolio_skill_admin',);
                }

                // portfolio_skill_add_admin
                if ($pathinfo === '/admin/skill/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\SkillController::addAction',  '_route' => 'portfolio_skill_add_admin',);
                }

                // portfolio_skill_edit_admin
                if (0 === strpos($pathinfo, '/admin/skill/edit') && preg_match('#^/admin/skill/edit/(?P<skill>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_skill_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\SkillController::editAction',));
                }

                // portfolio_skill_delete_admin
                if (0 === strpos($pathinfo, '/admin/skill/delete') && preg_match('#^/admin/skill/delete/(?P<skill>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_skill_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\SkillController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/project')) {
                // portfolio_project_admin
                if ($pathinfo === '/admin/project') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ProjectController::indexAction',  '_route' => 'portfolio_project_admin',);
                }

                // portfolio_project_add_admin
                if ($pathinfo === '/admin/project/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ProjectController::addAction',  '_route' => 'portfolio_project_add_admin',);
                }

                // portfolio_project_edit_admin
                if (0 === strpos($pathinfo, '/admin/project/edit') && preg_match('#^/admin/project/edit/(?P<project>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_project_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ProjectController::editAction',));
                }

                // portfolio_project_delete_admin
                if (0 === strpos($pathinfo, '/admin/project/delete') && preg_match('#^/admin/project/delete/(?P<project>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_project_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ProjectController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/activity')) {
                    // portfolio_activity_admin
                    if ($pathinfo === '/admin/activity') {
                        return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ActivityController::indexAction',  '_route' => 'portfolio_activity_admin',);
                    }

                    // portfolio_activity_add_admin
                    if ($pathinfo === '/admin/activity/add') {
                        return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ActivityController::addAction',  '_route' => 'portfolio_activity_add_admin',);
                    }

                    // portfolio_activity_edit_admin
                    if (0 === strpos($pathinfo, '/admin/activity/edit') && preg_match('#^/admin/activity/edit/(?P<activity>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_activity_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ActivityController::editAction',));
                    }

                    // portfolio_activity_delete_admin
                    if (0 === strpos($pathinfo, '/admin/activity/delete') && preg_match('#^/admin/activity/delete/(?P<activity>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_activity_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ActivityController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/about')) {
                    // portfolio_about_admin
                    if ($pathinfo === '/admin/about') {
                        return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\AboutController::indexAction',  '_route' => 'portfolio_about_admin',);
                    }

                    // portfolio_about_add_admin
                    if ($pathinfo === '/admin/about/add') {
                        return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\AboutController::addAction',  '_route' => 'portfolio_about_add_admin',);
                    }

                    // portfolio_about_edit_admin
                    if (0 === strpos($pathinfo, '/admin/about/edit') && preg_match('#^/admin/about/edit/(?P<about>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_about_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\AboutController::editAction',));
                    }

                    // portfolio_about_delete_admin
                    if (0 === strpos($pathinfo, '/admin/about/delete') && preg_match('#^/admin/about/delete/(?P<about>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_about_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\AboutController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/cv')) {
                // portfolio_cv_admin
                if ($pathinfo === '/admin/cv') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CvController::indexAction',  '_route' => 'portfolio_cv_admin',);
                }

                // portfolio_cv_add_admin
                if ($pathinfo === '/admin/cv/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CvController::addAction',  '_route' => 'portfolio_cv_add_admin',);
                }

                // portfolio_cv_edit_admin
                if (0 === strpos($pathinfo, '/admin/cv/edit') && preg_match('#^/admin/cv/edit/(?P<cv>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_cv_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CvController::editAction',));
                }

                // portfolio_cv_delete_admin
                if (0 === strpos($pathinfo, '/admin/cv/delete') && preg_match('#^/admin/cv/delete/(?P<cv>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_cv_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\CvController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/image')) {
                // portfolio_image_admin
                if ($pathinfo === '/admin/image') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ImageController::indexAction',  '_route' => 'portfolio_image_admin',);
                }

                // portfolio_image_add_admin
                if ($pathinfo === '/admin/image/add') {
                    return array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ImageController::addAction',  '_route' => 'portfolio_image_add_admin',);
                }

                // portfolio_image_edit_admin
                if (0 === strpos($pathinfo, '/admin/image/edit') && preg_match('#^/admin/image/edit/(?P<image>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_image_edit_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ImageController::editAction',));
                }

                // portfolio_image_delete_admin
                if (0 === strpos($pathinfo, '/admin/image/delete') && preg_match('#^/admin/image/delete/(?P<image>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_image_delete_admin')), array (  '_controller' => 'lsa\\PortfolioBundle\\Controller\\ImageController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'lsa\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // portfolio_user_admin
            if ($pathinfo === '/admin/user') {
                return array (  '_controller' => 'lsa\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'portfolio_user_admin',);
            }

            // portfolio_user_add_admin
            if ($pathinfo === '/admin/user/add') {
                return array (  '_controller' => 'lsa\\UserBundle\\Controller\\UserController::addAction',  '_route' => 'portfolio_user_add_admin',);
            }

            // portfolio_user_edit_admin
            if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_user_edit_admin')), array (  '_controller' => 'lsa\\UserBundle\\Controller\\UserController::editAction',));
            }

            // portfolio_user_delete_admin
            if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_user_delete_admin')), array (  '_controller' => 'lsa\\UserBundle\\Controller\\UserController::deleteAction',));
            }

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
