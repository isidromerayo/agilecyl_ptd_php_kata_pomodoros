AgileCyL Pucela Testing Days: PHP Taller
=========================================================

Usos
=====

Solo test unitarios e integracion
---------------------------------

Los tests dentro de la carpeta "tests"
Las clases PHP dentro de la carpeta "src".
Create your test under "tests" directory.
Create your code under "src" directory.

Correr todos los tst

$ bin/phpunit -c tests

Si queries ver la cobertura de código (require XDebug)

$ bin/phpunit -c tests/phpunit-codecoverage.xml.dist


All test
--------

Pruebas unitarias, integración y funcionales

1) Lanzar Selenium RC Server 

$ bin/launch_selenium.sh (execution permission: chmod +x bin/launch_selenium.sh )

2) Lanzar los test 

$ bin/phpunit -c tests/phpunit-complete.xml.dist

Deberías cambiar el namespace Acme por el tuyo y borrarlo.

Kata propuesta
==============

Aplicación para la gestión de usuarios de nuestra empresa. La información básica del usuario será: nombre, apellidos, email, contraseña y grupos.
En un principio no esta decidido el sistema donde donde persistir esta información (ficheros, BBDD o LDAP).
Para una primera versión vamos a tener un fichero de texto, en el que cada línea va a tener tener campos separados por ; (y los grupos van a estar entre corchetes), ejemplo:

    juan; pérez peréz; juanperez@ejemplo.com;juan;[contabilidad,dirección]
    maría; garcía garcía; martagarcia@ejemplo.com;maria;[contabilidad]
    sergio; fernández diéz; sergio@ejemplo.com;oigres;[TI,BBDD]

Algunas restricciones:

* el email y contraseña van a ser obligatorios, sino es así no se creará el registro y se informará de ello.
* en esta primera versión la contraseña no irá cifrada, pero si en la siguiente versión.

El servicio de usuario tendrá las acciones:

* añadir
* buscar por email
* validar

El repositorio (primera versión sobre ficheros):
    
* almacenar
* recuperar

En nuestra web tendremos una página de inicio con email y contraseña para validarnos. 
Si no nos podemos validar en el sistema, nos aparecerá un mensaje de error. Si estamos dentro veremos información sobre nosotros y un listado de usuarios.
