# Uuid Param Converter Bundle

A convenient bundle for using ramsey/uuid in your controllers

[![Latest Stable Version](https://poser.pugx.org/mcfedr/uuid-paramconverter/v/stable.png)](https://packagist.org/packages/mcfedr/uuid-paramconverter)
[![License](https://poser.pugx.org/mcfedr/uuid-paramconverter/license.png)](https://packagist.org/packages/mcfedr/uuid-paramconverter)
[![Build Status](https://travis-ci.org/mcfedr/uuid-paramconverter.svg?branch=master)](https://travis-ci.org/mcfedr/uuid-paramconverter)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/97f6fe7c-375f-4ba1-b222-700a81bd3b65/mini.png)](https://insight.sensiolabs.com/projects/97f6fe7c-375f-4ba1-b222-700a81bd3b65)

## Install

### Composer

    php composer.phar require mcfedr/uuid-paramconverter

### AppKernel

Include the bundle in your AppKernel

    public function registerBundles()
    {
        $bundles = array(
            ...
            new Mcfedr\UuidParamConverterBundle\McfedrUuidParamConverterBundle()

## Config

No config needed

## Usage

Use just like any other param converter

    /**
     * @ParamConverter("uuid", class="Rhumsaa\Uuid\Uuid")
     * @Route("/simple/{uuid}")
     */
    public function simpleAction(Uuid $uuid)
    {
        return new Response($uuid->toString());
    }