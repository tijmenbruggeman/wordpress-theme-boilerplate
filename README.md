# Wordpress Theme Boilerplate
When creating a website for a client, I always end up with the same scaffolding. It might be useful for you! Some advantages of this setup:  
* Runs on any OS
* Minimal setup requirements and overhead
* Keeps data in sync over multiple development enviroments  
* Contains most basic needs every client demands  

## What does this include?
* Docker Composer file to launch a local server  
* Server config (htaccess & uploads.ini)  
* Gulp for compiling SASS, minifying css & js (with sourcemaps)  
* Contact Form 7 & ACF Pro because I always end up using them
* Slick.js because every client wants a slider.  
* A sample Custom Post Type, a sample Widget and Social Media Settings.  

## Requirements
* Have Docker installed

## How do I get started?
* Download Wordpress and place the contents of the zip file in ``/public``. Wordpress is now in place.  
* Rename your theme to your liking. The directory of your theme is located at ``/public/wp-content/themes/``
* Run ``docker-compose up``, this may take a little time. Once complete, you can visite [localhost:8000](http://localhost:8000) to view the Wordpress setup.  
* Go to ``/public/wp-content/themes/[yourtheme]/`` and run ``npm install``.
* In the same folder, run: ``gulp``. Now you're ready to customize!  