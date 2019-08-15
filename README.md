 # Codeigniter 3.1.10 + Blade + HMVC

This library used Blade templating engine to provide the clean php code

### Introduction to Codeigniter

CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.

Read more about Codeigniter - https://www.codeigniter.com/

### Introduction to Blade

Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application.

Read more about Blade - https://laravel.com/docs/5.8/blade/

### Introduction to HMVC

Modular Extensions makes the CodeIgniter PHP framework modular. Modules are groups of independent components, typically model, controller and view, arranged in an application modules sub-directory that can be dropped into other CodeIgniter applications.
HMVC stands for Hierarchical Model View Controller.
Module Controllers can be used as normal Controllers or HMVC Controllers and they can be used as widgets to help you build view partials.

Read more about HMVC - https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/src/codeigniter-3.x/

### Installation Process

 1. Clone by "git clone https://github.com/we-pe/cihmvcblade.git" or download this repository to your local server
 2. Hit the url by browser "http://localhost/cihmvcblade"
 
 ### Usage

  ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      @yield('header')
    </head>
    <body>
       @yield('content')
    </body>
    </html>
```
### My_Controller.php in application/core
 ```
 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
    use Jenssegers\Blade\Blade;
    class MY_Controller extends MX_Controller {
        protected $views = APPPATH.'views';
        protected $cache = APPPATH.'cache';
        protected $blade;
        protected $data = array();

        function __construct(){
            parent::__construct();
            $this->blade = new Blade($this->views, $this->cache);
        }

        protected function load_page($content=null){
          $this->output->set_output($this->blade->render($content, $this->data));
        }
    }
```
### Welcome.php in application/modules/welcome/controllers
```
  class Welcome extends MY_Controller {
    public function index(){
      $this->data = array(
        'blog_title' => 'Welcome to CodeIgniter',
        'blog_heading' => 'Welcome to CodeIgniter with HMVC and Parser Library!'
      );
      $this->load_page('welcome/message');
    }
  }
```
### message.php in application/views/welcome
```
  @extends('../index')
  @section('content')
    {{$blog_heading}}
  @endsection
```
### .htaccess file to remove the index.php form urls
 ``` 
    <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteCond %{REQUEST_FILENAME} !-f
       RewriteCond %{REQUEST_FILENAME} !-d
       RewriteRule ^(.*)$ index.php/$1 [L]
     </IfModule>
```

For any query please contact via email at wenpiee@gmail.com or facebook at https://www.facebook.com/bagoes.we.pe
