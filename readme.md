1. Selected Framework Laravel
    Installation guide please follow: https://laravel.com/docs/5.7/installation
The main Reason to choose this framework are
	a. Easy to mange
	b. Micro service. So, it is very easy to pull a service or remove a service
	c. Automatic code generation and resources
	d. built in test case like phpunit

2. Database config:
   a. Create a database bri using following command on mysql 
       Create database bri;
   b. update the config on /.env file with right parameters 
3. Create products table through migration
 artisan make:migration  create_products_table --create=products  

2. Download bootstrap and jquery from CDN and store  on following folder:
  a. /public/css/bootstrap.min.css
  b. /public/js/jquery-2.2.4.min.js
  c. /public/js/bootstrap.min.css

3. Create a layout for our product CRUD on /resources/views/layout/home.blade.php
4. Add new controller product.php using following command
   php artisan make:conroller product

4. Add routes for each of our services
    /create - create new product  
    /update - update new product
    /list  - for list all products
    /delete - for delete all products
6. Test Case using Laravel test 
 a. create test case
     php artisan make:test ProductTest --unit
    It will create unit test under the /test/Unit/ProductTest.php where all the test cases will be writtern

