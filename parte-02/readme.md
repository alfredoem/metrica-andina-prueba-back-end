## Developers SAC

Probado en PHP 5.6.3

#### Parte 2

Framework usado Laravel 5.4

Ingresar al directorio `/parte-02` y ejecutar
`composer intall`
    
#### Parte 2

Framework usado Laravel 5.4

Ingresar al directorio `/parte-02` y ejecutar
`composer intall`

En el archivo .env cambiar el valor de API_URI por la URL sobre la cual se trabajara, no usar `php artisan serve` ya que la aplicación usa la libreria cURL y es posible que no permita peticiones a localhost.

Se recomienda configurar un virtualhost
    
    
* Estructura
    + aplicación
         + /parte-02/public
    + servicio web
        + parte-02/public/api/v1/employees?search_field=salary&amp;search_lt=1000&amp;earch_gt=1500