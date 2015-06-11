# yii2


##Installation 
1) To initialize your application, first move inside the "advanced" folder. In your terminal execute this command:
> composer install

2) Run following command to initialize application 
> php init

3) Setup database conection in following file
> /common/config/main-local.php 

4) Now you can execute the yii migration that will populate your database with necessary tables. 
Inside advanced folder execute this command:

> ./yii migrate

5) Confirm migration by typing "yes" and press enter.

Now you are ready to start your application and see what you got. Advanced template is consisting from front-end and back-end sides.
To start each of them, you can use these URLs:

> http://localhost/yii2/advanced/frontend/web/

and 

> localhost/advanced/backend/web

