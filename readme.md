# Metrica Andina - Prueba Back End PHP


Probado en PHP 5.6.3

#### Parte 1


* Estructura
    + /parte-01/problema-01/ChangeString.php
    + /parte-01/problema-02/CompleteRange.php
    + /parte-01/problema-03/ClearPar.php
    
* Test de las clases
    + /parte-01/index.php
    
Ingresar al directorio `/parte-02` y ejecutar
`composer intall`
    
#### Parte 2

Framework usado Laravel 5.4

Ingresar al directorio `/parte-02` y ejecutar
`composer intall`

En el archivo .env cambiar el valor de API_URI por la URL sobre la cual se trabajara, no usar `php artisan serve` ya que la aplicación usa la libreria cURL y es posible que no permita peticiones a localhost.

Se recomienda configurar un virtualhost que apunte a `/parte-02/public`
    
    
* Estructura
    + aplicación
         + /parte-02/public
    + servicio web
        + parte-02/public/api/v1/employees?search_field=salary&amp;search_lt=1000&amp;earch_gt=1500
