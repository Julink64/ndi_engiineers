<?php

namespace Pweb\MainBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class MainController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/NDI/app/cache/dev/jms_diextra/proxies/Pweb-MainBundle-Controller-MainController.php';
        $a = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Pweb\\MainBundle\\Controller\\MainController' => array('ajouterAction' => array(0 => 'security.access.method_interceptor'), 'modifierAction' => array(0 => 'security.access.method_interceptor'), 'supprimerAction' => array(0 => 'security.access.method_interceptor'), 'gererprojetAction' => array(0 => 'security.access.method_interceptor'), 'lierimagesAction' => array(0 => 'security.access.method_interceptor'), 'voirimageAction' => array(0 => 'security.access.method_interceptor'), 'ajouterimageAction' => array(0 => 'security.access.method_interceptor'), 'supprimerimageAction' => array(0 => 'security.access.method_interceptor'), 'statistiquesAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_74f023c2aa65bf1c1af3bef06952468c9fa6e022\__CG__\Pweb\MainBundle\Controller\MainController();
        $instance->__CGInterception__setLoader($a);
        return $instance;
    }
}
