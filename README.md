# Laravel Blog

A blog created with Laravel, part if the ITI training program

## Table of contents

* [Overview](#overview)
    - [Labs](#labs)
        - [Lab 1](#lab-1)
        - [Lab 2](#lab-2)
        - [Lab 3](#lab-3)
        - [Lab 4](#lab-4)


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

*- Bonus
* Add restore button on index page to restore deleted posts you will need to use [soft delete](https://laravel.com/docs/master/eloquent#soft-deleting)

* create [Accessor Method](https://laravel.com/docs/master/eloquent-mutators#deﬁning-an-accessor) inside Post Model that returns human readable carbon to be used

    * in posts/{id} , for example i want $post->human_readable_date will result in the formatted carbon date that is rendered in show post page

* Add View Ajax Button to posts page , that opens Bootstrap Modal , showing post info (title ,description , username, user e-mail) using ajax request

* Use livewire to prevent CRUD from refreshing the page when adding a comment

<p align="right">(<a href="#top">back to top</a>)</p>

### Lab 3:

* Add [validation](https://laravel.com/docs/master/validation#creating-form-requests) using form request files on Store & Update 
  * Title & description are required. 
  * minimum length for title is 3 chars and unique. 
  * minimum length for description is 10 chars.
  * updating a post without changing Title it still works.
  * no one hacks you and send an id of post creator that does not exist in the database.
  * display [error messages](https://laravel.com/docs/master/validation#quick-displaying-the-validation-errors) of failed validation

* Use php artisan ui:auth bootstrap –auth , to scaffold the auth pages
* Modify on the current navbar , and make it use the laravel default auth navbar.
* and also we need the link to All Posts (Do whatever you see suits the case)
* Add Authentication middleware on all posts routes. 
* and make anyone who isn’t authenticated to redirect back to login page.

* use '_slug_' , using this package the slug will be generated from the post title. 
  * users aren’t allowed to fill slug or send it in the request.
  * Show the slug column In Index page

* create [Queue Job](https://laravel.com/docs/master/queues#introduction) called '_PruneOldPostsJob_' that when dispatched it deletes posts that are created from 2 years ago
* [schedule](https://laravel.com/docs/master/scheduling#scheduling-queued-jobs) PruneOldPostsJob to run daily at midnight
* [Upload](https://laravel.com/docs/master/filesystem#file-uploads) image to post , and validate extensions are only (.jpg, .png).
  * use Storage to store and show images also when updating post we remove the old image. 
  * when deleting post we remove the old image

-- Bonus

* Make [custom validation rule](https://laravel.com/docs/master/validation#custom-validation-rules) , that makes sure the user is only allowed to create 3 posts and if he exceeded this number we show a validation error message
* add [Tags](https://github.com/spatie/laravel-tags) to post , the user will enter comma separated tags


### Lab 4:

* Install Laravel Sanctum.
* Make endpoints (api/posts GET , api/posts/{id} GET , api/posts POST). 
  * to get all posts and to get one post and to store a single post.
* Add Authentication middleware to the endpoints.
* In the api/posts & api/posts/{id} GET you must use Eloquent Api Resource with pagination.
* in the response each post must include the post creator info using UserResource.
* Apply Eager Loading when getting all posts to include the user relation to enhance performance.

* Install Laravel Socialite
* Allow login with GitHub and store user info. 
* make sure when logout and login again to not duplicate the records.
* [authentication and storage](https://laravel.com/docs/master/socialite#authentication-and-storage)