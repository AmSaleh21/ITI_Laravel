# Laravel Blog

A blog created with Laravel, part if the ITI training program

## Table of contents

- [Overview](#overview)
    - [Labs](#labs)
        - [Lab 1](#lab-1)
        - [Lab 2](#lab-2)
- [My process](#my-process)
    - [Built with](#built-with)
    - [Libraries](#Libraries)


## Overview

<!-- ### GIF -->



<!-- <p align="right">(<a href="#top">back to top</a>)</p> -->

## Labs
### Lab 1:

* make CRUD operation on Posts
* Implement Resource Controller methods (Index, Create, Store, Edit, Update, Destroy, Show)
* All Posts is a link that redirect back to /posts route
* Use blade layout to not duplicate navbar across view ﬁles
* When submitting a form make sure to redirect back to /posts
route

<p align="right">(<a href="#top">back to top</a>)</p>

### Lab 2:

* Create migrations & model for the necessary db posts table
* make sure CRUD operation on Posts are stored in the DB
* When client Click on Delete you must show a warning before deleting and choose between yes to confirm Delete or no … and you must use Route::delete
* In Index & Show page ,make sure the Created At is formatted , so read [carbon](https://carbon.nesbot.com/docs/) documentation

* In Edit Or Create Post Creator Field must be drop down list of users
* Create PostSeeder & PostFactory class so that when i run php artisan db:seed it seeds posts table
with 500 records
* Add pagination to Index page Read About Pagination then display pagination links
* Add CURD comments inside show post page using polymorphic relation

-- Bonus
* Add restore button on index page to restore deleted posts you will need to use [soft delete](https://laravel.com/docs/master/eloquent#soft-deleting)

* create [Accessor Method](https://laravel.com/docs/master/eloquent-mutators#deﬁning-an-accessor) inside Post Model that returns human readable carbon to be used

    * in posts/{id} , for example i want $post->human_readable_date will result in the formatted carbon date that is rendered in show post page

* Add View Ajax Button to posts page , that opens Bootstrap Modal , showing post info (title ,description , username, user e-mail) using ajax request

* Use livewire to prevent CRUD from refreshing the page when adding a comment

<p align="right">(<a href="#top">back to top</a>)</p>

## process
1) Clone the project

   ``` git clone https://github.com/AmSaleh21/ITI_Laravel.git ```

2) install [composer](https://getcomposer.org/)
3) run , to create database data
    ```
    php artisan db:seed
    ```
4) in the project directory run the following
    ```
    $composer install && composer update
    $composer dump-autoload
    $php artisan serve
    ```
<p align="right">(<a href="#top">back to top</a>)</p>

### Built with

* [Laravel](https://www.laravel.com/)
* [JavaScript](https://www.javascript.com/)
* [Bootstrap](https://getbootstrap.com/)
* [FontAwesome v.4.1.7](https://fontawesome.com)

<p align="right">(<a href="#top">back to top</a>)</p>

### Libraries

* [composer](https://getcomposer.org)
* [guzzle](https://docs.guzzlephp.org/en/stable)
* [sanctum](https://laravel.com/docs/9.x/sanctum)
* [artisan](https://laravel.com/docs/9.x/artisan)
* [liveWire](https://laravel-livewire.com/)
* [illuminate](https://packagist.org/packages/illuminate/database)

<p align="right">(<a href="#top">back to top</a>)</p>
