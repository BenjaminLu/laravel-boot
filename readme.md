# Laravel Boot
Laravel Boot installed some developers commonly used libraries, like :

1.  [Laravel 5.1.24(LTS)](https://github.com/laravel/laravel)
2.  [Bower 1.6.5](https://github.com/bower/bower)
3.  [JQuery 2.1.4](https://github.com/jquery/jquery)
4.  [Bootstrap Sass 3.3.5](https://github.com/twbs/bootstrap-sass)
5.  [Font Awesome 4.4.0](https://github.com/FortAwesome/Font-Awesome)


and integrate of these projects together.
feel free to modify the variables of Bootstrap in your Laravel 5.1 project.

## Installation
first, you need to install PHP, composer and node.js, once after you install the execution environment, type the commands below in the project working directory.
```
composer install
npm install
```

## Run Gulp
this command will move all the fonts files of Bootstrap and Font Awesome into right location under the `public` folder, and compile all the scss files of Bootstrap and Font Awesome, compressing them into all.css, finally compress javascript files of Bootstrap and jQuery into all.js.
```
gulp
```

## Include in Your View Files

put this line into head tag.
```html
<link rel="stylesheet" href="{{asset('css/all.css')}}"/>
```

put this line before body closing tag.
```html
<script src="{{asset('js/all.js')}}"></script>
```

a simple app.blade.php show case.
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website @yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    
    <link rel="stylesheet" href="{{asset('css/all.css')}}"/>
    @yield('css')
    
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <i class="fa fa-facebook-official"></i>
            <i class="glyphicon glyphicon-ok"></i>
            @yield('content')
        </div>
    </div>
	
    @yield('footer')
    <script src="{{asset('js/all.js')}}"></script>
    <script>
    $(document).ready(function() {
        console.log( "ready!" );
    });
    </script>
    @yield('page_js')
</body>
</html>
```