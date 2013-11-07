<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Application\Sonata\SuperMarketBundle\ApplicationSonataSuperMarketBundle(),
             //Sonata Admin Bundle
             new Sonata\AdminBundle\SonataAdminBundle(),
            //sonta cache bundle
             new Sonata\CacheBundle\SonataCacheBundle(),
            //sonata intl bundle
             new Sonata\IntlBundle\SonataIntlBundle(),
            //sonata doctrine-orm-admin bundle
             new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            //sonata Block Bundle
             new Sonata\BlockBundle\SonataBlockBundle(),
            //knp menubundle
             new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            //Sonta jQuerybundle
             new Sonata\jQueryBundle\SonatajQueryBundle(),
            
             new Shtumi\UsefulBundle\ShtumiUsefulBundle(),
            
             new Genemu\Bundle\FormBundle\GenemuFormBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
