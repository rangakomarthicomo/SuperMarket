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

        // application_sonata_super_market_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_sonata_super_market_homepage')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\DefaultController::indexAction',));
        }

        // application_sonata_supermarket_price
        if ($pathinfo === '/price') {
            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PriceController::getPriceAction',  '_route' => 'application_sonata_supermarket_price',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/sonata/supermarket')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/brand')) {
                        // admin_sonata_supermarket_brand_list
                        if ($pathinfo === '/admin/sonata/supermarket/brand/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_list',  '_route' => 'admin_sonata_supermarket_brand_list',);
                        }

                        // admin_sonata_supermarket_brand_create
                        if ($pathinfo === '/admin/sonata/supermarket/brand/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_create',  '_route' => 'admin_sonata_supermarket_brand_create',);
                        }

                        // admin_sonata_supermarket_brand_batch
                        if ($pathinfo === '/admin/sonata/supermarket/brand/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_batch',  '_route' => 'admin_sonata_supermarket_brand_batch',);
                        }

                        // admin_sonata_supermarket_brand_edit
                        if (preg_match('#^/admin/sonata/supermarket/brand/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_brand_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_edit',));
                        }

                        // admin_sonata_supermarket_brand_delete
                        if (preg_match('#^/admin/sonata/supermarket/brand/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_brand_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_delete',));
                        }

                        // admin_sonata_supermarket_brand_show
                        if (preg_match('#^/admin/sonata/supermarket/brand/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_brand_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_show',));
                        }

                        // admin_sonata_supermarket_brand_export
                        if ($pathinfo === '/admin/sonata/supermarket/brand/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\BrandAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.brand',  '_sonata_name' => 'admin_sonata_supermarket_brand_export',  '_route' => 'admin_sonata_supermarket_brand_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/category')) {
                        // admin_sonata_supermarket_category_list
                        if ($pathinfo === '/admin/sonata/supermarket/category/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_list',  '_route' => 'admin_sonata_supermarket_category_list',);
                        }

                        // admin_sonata_supermarket_category_create
                        if ($pathinfo === '/admin/sonata/supermarket/category/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_create',  '_route' => 'admin_sonata_supermarket_category_create',);
                        }

                        // admin_sonata_supermarket_category_batch
                        if ($pathinfo === '/admin/sonata/supermarket/category/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_batch',  '_route' => 'admin_sonata_supermarket_category_batch',);
                        }

                        // admin_sonata_supermarket_category_edit
                        if (preg_match('#^/admin/sonata/supermarket/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_category_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_edit',));
                        }

                        // admin_sonata_supermarket_category_delete
                        if (preg_match('#^/admin/sonata/supermarket/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_category_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_delete',));
                        }

                        // admin_sonata_supermarket_category_show
                        if (preg_match('#^/admin/sonata/supermarket/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_category_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_show',));
                        }

                        // admin_sonata_supermarket_category_export
                        if ($pathinfo === '/admin/sonata/supermarket/category/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.category',  '_sonata_name' => 'admin_sonata_supermarket_category_export',  '_route' => 'admin_sonata_supermarket_category_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/product')) {
                        // admin_sonata_supermarket_product_list
                        if ($pathinfo === '/admin/sonata/supermarket/product/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_list',  '_route' => 'admin_sonata_supermarket_product_list',);
                        }

                        // admin_sonata_supermarket_product_create
                        if ($pathinfo === '/admin/sonata/supermarket/product/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_create',  '_route' => 'admin_sonata_supermarket_product_create',);
                        }

                        // admin_sonata_supermarket_product_batch
                        if ($pathinfo === '/admin/sonata/supermarket/product/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_batch',  '_route' => 'admin_sonata_supermarket_product_batch',);
                        }

                        // admin_sonata_supermarket_product_edit
                        if (preg_match('#^/admin/sonata/supermarket/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_product_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_edit',));
                        }

                        // admin_sonata_supermarket_product_delete
                        if (preg_match('#^/admin/sonata/supermarket/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_product_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_delete',));
                        }

                        // admin_sonata_supermarket_product_show
                        if (preg_match('#^/admin/sonata/supermarket/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_product_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_show',));
                        }

                        // admin_sonata_supermarket_product_export
                        if ($pathinfo === '/admin/sonata/supermarket/product/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\ProductAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.product',  '_sonata_name' => 'admin_sonata_supermarket_product_export',  '_route' => 'admin_sonata_supermarket_product_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/customer')) {
                        // admin_sonata_supermarket_customer_list
                        if ($pathinfo === '/admin/sonata/supermarket/customer/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_list',  '_route' => 'admin_sonata_supermarket_customer_list',);
                        }

                        // admin_sonata_supermarket_customer_create
                        if ($pathinfo === '/admin/sonata/supermarket/customer/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_create',  '_route' => 'admin_sonata_supermarket_customer_create',);
                        }

                        // admin_sonata_supermarket_customer_batch
                        if ($pathinfo === '/admin/sonata/supermarket/customer/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_batch',  '_route' => 'admin_sonata_supermarket_customer_batch',);
                        }

                        // admin_sonata_supermarket_customer_edit
                        if (preg_match('#^/admin/sonata/supermarket/customer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_customer_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_edit',));
                        }

                        // admin_sonata_supermarket_customer_delete
                        if (preg_match('#^/admin/sonata/supermarket/customer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_customer_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_delete',));
                        }

                        // admin_sonata_supermarket_customer_show
                        if (preg_match('#^/admin/sonata/supermarket/customer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_customer_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_show',));
                        }

                        // admin_sonata_supermarket_customer_export
                        if ($pathinfo === '/admin/sonata/supermarket/customer/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\CustomerAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.customer',  '_sonata_name' => 'admin_sonata_supermarket_customer_export',  '_route' => 'admin_sonata_supermarket_customer_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/purchaseorder')) {
                        // admin_sonata_supermarket_purchaseorder_list
                        if ($pathinfo === '/admin/sonata/supermarket/purchaseorder/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_list',  '_route' => 'admin_sonata_supermarket_purchaseorder_list',);
                        }

                        // admin_sonata_supermarket_purchaseorder_create
                        if ($pathinfo === '/admin/sonata/supermarket/purchaseorder/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_create',  '_route' => 'admin_sonata_supermarket_purchaseorder_create',);
                        }

                        // admin_sonata_supermarket_purchaseorder_batch
                        if ($pathinfo === '/admin/sonata/supermarket/purchaseorder/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_batch',  '_route' => 'admin_sonata_supermarket_purchaseorder_batch',);
                        }

                        // admin_sonata_supermarket_purchaseorder_edit
                        if (preg_match('#^/admin/sonata/supermarket/purchaseorder/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_purchaseorder_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_edit',));
                        }

                        // admin_sonata_supermarket_purchaseorder_delete
                        if (preg_match('#^/admin/sonata/supermarket/purchaseorder/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_purchaseorder_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_delete',));
                        }

                        // admin_sonata_supermarket_purchaseorder_show
                        if (preg_match('#^/admin/sonata/supermarket/purchaseorder/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_purchaseorder_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_show',));
                        }

                        // admin_sonata_supermarket_purchaseorder_export
                        if ($pathinfo === '/admin/sonata/supermarket/purchaseorder/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\PurchaseOrderAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.purchase_order',  '_sonata_name' => 'admin_sonata_supermarket_purchaseorder_export',  '_route' => 'admin_sonata_supermarket_purchaseorder_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/supermarket/orderitem')) {
                        // admin_sonata_supermarket_orderitem_list
                        if ($pathinfo === '/admin/sonata/supermarket/orderitem/list') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::listAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_list',  '_route' => 'admin_sonata_supermarket_orderitem_list',);
                        }

                        // admin_sonata_supermarket_orderitem_create
                        if ($pathinfo === '/admin/sonata/supermarket/orderitem/create') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::createAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_create',  '_route' => 'admin_sonata_supermarket_orderitem_create',);
                        }

                        // admin_sonata_supermarket_orderitem_batch
                        if ($pathinfo === '/admin/sonata/supermarket/orderitem/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::batchAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_batch',  '_route' => 'admin_sonata_supermarket_orderitem_batch',);
                        }

                        // admin_sonata_supermarket_orderitem_edit
                        if (preg_match('#^/admin/sonata/supermarket/orderitem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_orderitem_edit')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::editAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_edit',));
                        }

                        // admin_sonata_supermarket_orderitem_delete
                        if (preg_match('#^/admin/sonata/supermarket/orderitem/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_orderitem_delete')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_delete',));
                        }

                        // admin_sonata_supermarket_orderitem_show
                        if (preg_match('#^/admin/sonata/supermarket/orderitem/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_supermarket_orderitem_show')), array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::showAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_show',));
                        }

                        // admin_sonata_supermarket_orderitem_export
                        if ($pathinfo === '/admin/sonata/supermarket/orderitem/export') {
                            return array (  '_controller' => 'Application\\Sonata\\SuperMarketBundle\\Controller\\OrderItemAdminController::exportAction',  '_sonata_admin' => 'application_sonata_super_market.admin.order_item',  '_sonata_name' => 'admin_sonata_supermarket_orderitem_export',  '_route' => 'admin_sonata_supermarket_orderitem_export',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/shtumi_')) {
            // shtumi_ajaxautocomplete
            if ($pathinfo === '/shtumi_ajaxautocomplete') {
                return array (  '_controller' => 'Shtumi\\UsefulBundle\\Controller\\AjaxAutocompleteJSONController::getJSONAction',  '_route' => 'shtumi_ajaxautocomplete',);
            }

            // shtumi_dependent_filtered_entity
            if ($pathinfo === '/shtumi_dependent_filtered_entity') {
                return array (  '_controller' => 'ShtumiUsefulBundle:DependentFilteredEntity:getOptions',  '_route' => 'shtumi_dependent_filtered_entity',);
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
