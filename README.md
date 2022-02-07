# Proyecto Final

En la rama develop se encuentran los commits realizados por los integrantes.


Al momento de ejecutar el proyecto, si se generan problemas con el archivo vendor/autoload : Se corre composer update

Si aparece 500 | server error : Se ejecutan lo siguiente:

1. Se crea una copia de .env.example, se le cambie el nombre a dicha copia por .env y se cambia dentro del archivo DB_DATABASE=bd_laravel

2. Se corre el comando php artisan cache:clear
 
3. Despues, el comando php artisan config:clear

4. Y por ultimo php artisan key:generate

5. Ejecutar php artisan serve para que cargue de nuevo la aplicación sin errores



Integrantes: 

Elizabeth Carreño Alvarez

Daniel Santiago Gaviria

Maria Camila Martinez
