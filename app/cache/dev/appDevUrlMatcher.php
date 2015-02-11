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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/jplist_js')) {
                // _assetic_jplist_js
                if ($pathinfo === '/assetic/jplist_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jplist_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jplist_js',);
                }

                if (0 === strpos($pathinfo, '/assetic/jplist_js_')) {
                    // _assetic_jplist_js_0
                    if ($pathinfo === '/assetic/jplist_js_modernizr.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jplist_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jplist_js_0',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/jplist_js_jplist')) {
                        // _assetic_jplist_js_1
                        if ($pathinfo === '/assetic/jplist_js_jplist.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jplist_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_jplist_js_1',);
                        }

                        // _assetic_jplist_js_2
                        if ($pathinfo === '/assetic/jplist_js_jplist_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jplist_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_jplist_js_2',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/main_js')) {
                // _assetic_main_js
                if ($pathinfo === '/assetic/main_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_main_js',);
                }

                if (0 === strpos($pathinfo, '/assetic/main_js_')) {
                    if (0 === strpos($pathinfo, '/assetic/main_js_jquery-')) {
                        // _assetic_main_js_0
                        if ($pathinfo === '/assetic/main_js_jquery-1.10.2.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_main_js_0',);
                        }

                        // _assetic_main_js_1
                        if ($pathinfo === '/assetic/main_js_jquery-migrate-1.2.1.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_main_js_1',);
                        }

                        // _assetic_main_js_2
                        if ($pathinfo === '/assetic/main_js_jquery-ui_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_main_js_2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/assetic/main_js_bootstrap')) {
                        // _assetic_main_js_3
                        if ($pathinfo === '/assetic/main_js_bootstrap.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_main_js_3',);
                        }

                        // _assetic_main_js_4
                        if ($pathinfo === '/assetic/main_js_bootstrap-hover-dropdown_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_main_js_4',);
                        }

                    }

                    // _assetic_main_js_5
                    if ($pathinfo === '/assetic/main_js_html5shiv_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_main_js_5',);
                    }

                    // _assetic_main_js_6
                    if ($pathinfo === '/assetic/main_js_respond.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_main_js_6',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/main_js_jquery.')) {
                        // _assetic_main_js_7
                        if ($pathinfo === '/assetic/main_js_jquery.metisMenu_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_main_js_7',);
                        }

                        // _assetic_main_js_8
                        if ($pathinfo === '/assetic/main_js_jquery.slimscroll_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_main_js_8',);
                        }

                        // _assetic_main_js_9
                        if ($pathinfo === '/assetic/main_js_jquery.cookie_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_main_js_9',);
                        }

                    }

                    // _assetic_main_js_10
                    if ($pathinfo === '/assetic/main_js_icheck.min_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_main_js_10',);
                    }

                    // _assetic_main_js_11
                    if ($pathinfo === '/assetic/main_js_custom.min_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_main_js_11',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/main_js_jquery.')) {
                        // _assetic_main_js_12
                        if ($pathinfo === '/assetic/main_js_jquery.news-ticker_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_main_js_12',);
                        }

                        // _assetic_main_js_13
                        if ($pathinfo === '/assetic/main_js_jquery.menu_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_main_js_13',);
                        }

                    }

                    // _assetic_main_js_14
                    if ($pathinfo === '/assetic/main_js_pace.min_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_main_js_14',);
                    }

                    // _assetic_main_js_15
                    if ($pathinfo === '/assetic/main_js_holder_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_main_js_15',);
                    }

                    // _assetic_main_js_16
                    if ($pathinfo === '/assetic/main_js_responsive-tabs_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_main_js_16',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/main_js_jquery.flot')) {
                        // _assetic_main_js_17
                        if ($pathinfo === '/assetic/main_js_jquery.flot_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_main_js_17',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/main_js_jquery.flot.')) {
                            // _assetic_main_js_18
                            if ($pathinfo === '/assetic/main_js_jquery.flot.categories_19.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_main_js_18',);
                            }

                            // _assetic_main_js_19
                            if ($pathinfo === '/assetic/main_js_jquery.flot.pie_20.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_main_js_19',);
                            }

                            // _assetic_main_js_20
                            if ($pathinfo === '/assetic/main_js_jquery.flot.tooltip_21.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_main_js_20',);
                            }

                            // _assetic_main_js_21
                            if ($pathinfo === '/assetic/main_js_jquery.flot.resize_22.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_main_js_21',);
                            }

                            // _assetic_main_js_22
                            if ($pathinfo === '/assetic/main_js_jquery.flot.fillbetween_23.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_main_js_22',);
                            }

                            if (0 === strpos($pathinfo, '/assetic/main_js_jquery.flot.s')) {
                                // _assetic_main_js_23
                                if ($pathinfo === '/assetic/main_js_jquery.flot.stack_24.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_main_js_23',);
                                }

                                // _assetic_main_js_24
                                if ($pathinfo === '/assetic/main_js_jquery.flot.spline_25.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_main_js_24',);
                                }

                            }

                        }

                    }

                    // _assetic_main_js_25
                    if ($pathinfo === '/assetic/main_js_zabuto_calendar.min_26.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_main_js_25',);
                    }

                    // _assetic_main_js_26
                    if ($pathinfo === '/assetic/main_js_index_27.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'main_js',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_main_js_26',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/c')) {
                if (0 === strpos($pathinfo, '/assetic/chart_js')) {
                    // _assetic_chart_js
                    if ($pathinfo === '/assetic/chart_js.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_chart_js',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/chart_js_')) {
                        // _assetic_chart_js_0
                        if ($pathinfo === '/assetic/chart_js_highcharts_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_chart_js_0',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/chart_js_d')) {
                            // _assetic_chart_js_1
                            if ($pathinfo === '/assetic/chart_js_data_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_chart_js_1',);
                            }

                            // _assetic_chart_js_2
                            if ($pathinfo === '/assetic/chart_js_drilldown_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_chart_js_2',);
                            }

                        }

                        // _assetic_chart_js_3
                        if ($pathinfo === '/assetic/chart_js_exporting_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_chart_js_3',);
                        }

                        // _assetic_chart_js_4
                        if ($pathinfo === '/assetic/chart_js_highcharts-more_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_chart_js_4',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/chart_js_charts-highchart-')) {
                            // _assetic_chart_js_5
                            if ($pathinfo === '/assetic/chart_js_charts-highchart-pie_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_chart_js_5',);
                            }

                            // _assetic_chart_js_6
                            if ($pathinfo === '/assetic/chart_js_charts-highchart-more_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'chart_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_chart_js_6',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/assetic/core_js')) {
                    // _assetic_core_js
                    if ($pathinfo === '/assetic/core_js.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'core_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_core_js',);
                    }

                    // _assetic_core_js_0
                    if ($pathinfo === '/assetic/core_js_main_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'core_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_core_js_0',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/3')) {
            if (0 === strpos($pathinfo, '/js/3e55ad2')) {
                // _assetic_3e55ad2
                if ($pathinfo === '/js/3e55ad2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3e55ad2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3e55ad2',);
                }

                // _assetic_3e55ad2_0
                if ($pathinfo === '/js/3e55ad2_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3e55ad2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3e55ad2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/3b0eca9')) {
                // _assetic_3b0eca9
                if ($pathinfo === '/js/3b0eca9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0eca9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3b0eca9',);
                }

                if (0 === strpos($pathinfo, '/js/3b0eca9_part_')) {
                    // _assetic_3b0eca9_0
                    if ($pathinfo === '/js/3b0eca9_part_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0eca9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3b0eca9_0',);
                    }

                    // _assetic_3b0eca9_1
                    if ($pathinfo === '/js/3b0eca9_part_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0eca9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3b0eca9_1',);
                    }

                    // _assetic_3b0eca9_2
                    if ($pathinfo === '/js/3b0eca9_part_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0eca9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3b0eca9_2',);
                    }

                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_viewCatalog
            if ($pathinfo === '/admin/catalog') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::catalogAction',  '_route' => 'admin_viewCatalog',);
            }

            if (0 === strpos($pathinfo, '/admin/pro')) {
                // admin_viewProduct
                if ($pathinfo === '/admin/product') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::productAction',  '_route' => 'admin_viewProduct',);
                }

                // admin_viewProCata
                if ($pathinfo === '/admin/procata') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::procataAction',  '_route' => 'admin_viewProCata',);
                }

            }

            // admin_insertCatalog
            if ($pathinfo === '/admin/insertCatalog') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::insertCatalogAction',  '_route' => 'admin_insertCatalog',);
            }

            if (0 === strpos($pathinfo, '/admin/updateCatalog')) {
                // admin_updateCatalog
                if (preg_match('#^/admin/updateCatalog/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_updateCatalog;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updateCatalog')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::updateCatalogAction',));
                }
                not_admin_updateCatalog:

                // admin_updateCataProcess
                if (preg_match('#^/admin/updateCatalog/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_updateCataProcess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updateCataProcess')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::updateCataProcessAction',));
                }
                not_admin_updateCataProcess:

            }

            // admin_changeCatalogDel
            if (0 === strpos($pathinfo, '/admin/changeCatalogDel') && preg_match('#^/admin/changeCatalogDel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_changeCatalogDel')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::changeCatalogDelAction',));
            }

            // admin_insertProduct
            if ($pathinfo === '/admin/insertProduct') {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::insertProductAction',  '_route' => 'admin_insertProduct',);
            }

            if (0 === strpos($pathinfo, '/admin/updateProduct')) {
                // admin_updateProduct
                if (preg_match('#^/admin/updateProduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_updateProduct;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updateProduct')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::updateProductAction',));
                }
                not_admin_updateProduct:

                // admin_updateProdProcess
                if (preg_match('#^/admin/updateProduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_updateProdProcess;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_updateProdProcess')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::updateProdProcessAction',));
                }
                not_admin_updateProdProcess:

            }

            // admin_changeProductDel
            if (0 === strpos($pathinfo, '/admin/changeProductDel') && preg_match('#^/admin/changeProductDel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_changeProductDel')), array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::changeProductDelAction',));
            }

        }

        // sales_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sales_homepage')), array (  '_controller' => 'SalesBundle\\Controller\\DefaultController::indexAction',));
        }

        // sales_welcome
        if (0 === strpos($pathinfo, '/welcome') && preg_match('#^/welcome/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sales_welcome')), array (  '_controller' => 'SalesBundle\\Controller\\DefaultController::welcomeAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
