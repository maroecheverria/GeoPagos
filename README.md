MODELADO DE CLASES
==================

Desarrollar una clase con algún framework PHP, que permita la creación de objetos que representen figuras geométricas dadas (cuadrado, triangulo, círculo) proveyendo un parámetro de entrada único que identifiqué el tipo de objeto esperado como retorno. Tip de ayuda: **“Factory”**.

La estructura del modelo de clases que deben tener las implementaciones de dichas figuras geométricas será la siguiente: 
 * Se debe definir una interfaz que exija la definición de métodos que permitan la obtención de los datos: superficie; base; altura; diámetro; tipo de figura geométrica. 
 * Puede definirse alguna clase intermedia (no instanciable) para reducir la redundancia de código. 
 * Cada una de sus concreciones debe, ante la invocación de alguno de sus métodos, retornar el valor correspondiente o null en caso de que la figura geométrica correspondiente no posea dicha característica. 

En caso de conocer la notación se valorará el diseño de su diagrama UML.

Framework Utilizado:

**Symfony Standard Edition 3.2**

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/3.2/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.2/doctrine.html
[8]:  https://symfony.com/doc/3.2/templating.html
[9]:  https://symfony.com/doc/3.2/security.html
[10]: https://symfony.com/doc/3.2/email.html
[11]: https://symfony.com/doc/3.2/logging.html
[12]: https://symfony.com/doc/3.2/assetic/asset_management.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
