Fotorama widgets for Yii2
================

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
php composer.phar require --prefer-dist infinitiweb/fotorama "dev-master"
```

or add

```
"infinitiweb/fotorama": "dev-master"
```

to the require section of your `composer.json` file.


docs js http://fotorama.io/

```php
<?php \infinitiweb\widgets\fotorama\Fotorama::begin([
	'clientOptions' => [
		'width'=>'100%',
		'nav'=>'thumbs',
		'minwidth'=>'150',
		'maxwidth'=>'600',
		'maxheight'=>'400',
	]
])?>
	<img src="/screen1.png">
	<img src="/screen1.png">
	<img src="/screen1.png">
	<img src="/screen1.png">
<?php infinitiweb\widgets\fotorama\Fotorama::end();?>
```



