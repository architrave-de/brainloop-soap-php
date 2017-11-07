<?php declare(strict_types=1);
/**
 * Copyright (C) 2013 - 2017 Architrave GmbH
 *
 *   This file contains proprietary source code and confidential
 *   information. Its contents may not be disclosed or distributed to
 *   third parties unless prior specific permission by Architrave GmbH,
 *   Berlin, Germany is obtained in writing. This applies
 *   to copies made in any form and using any medium. It applies to
 *   partial as well as complete copies.
 *
 * @website  http://www.architrave.de
 */

require __DIR__ . '/../vendor/autoload.php';

$options = \WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions::instance();
$options->setOrigin('https://my.brainloop.net/BrainloopWebService/v3/services.svc?wsdl');
$options->setDestination(__DIR__ . '/../..');
$options->setComposerName('architrave/brainloop-soap-php');
$options->setAddComments([
    'generated on ' . date(DATE_RFC822)
]);
$options->setNamespace('Brainloop\\Soap');

$generator = new \WsdlToPhp\PackageGenerator\Generator\Generator($options);
$generator->generatePackage();
