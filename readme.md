## FileManager for Laravel 5.*

## Installation

### Laravel 5.x:
You can install the package for your Laravel 5 project through Composer.

```bash
$ composer require seguce92/filemanager
```

Register the service provider array in `app/config/app.php`.
```php
Seguce92\Filemanager\ServiceProvider::class,
```

You can optionally use the facade for shorter code. Add this to your facades in array `aliases`:
```php
'Filemanager' => Seguce92\Filemanager\FileManagerFacade::class,
```

Export setting file and resources with command:

```bash
$ php artisan vendor:publish
```

## Configuration
To start using the file manager perform the respective configuration in the file `app\config\seguce92\filemanager.php`

```php
    /**
     * PATH GLOBAL FILEMANAGER EMBED IN TINYMCE EDITOR
     * --------------------------------------------------------------
     *  Path filemanager resources
     */
    'filemanager' => '/filemanager/',

    /**
     * TITLE MODAL DIALOG
     * --------------------------------------------------------------
     *  Title of the modal dialog
     */
    'filemanager_title' => 'FileManager for Laravel with tinymce',

    /**
     * ROUTE OR URL
     * --------------------------------------------------------------
     *  Route or url
     */
    'url'	=>	'admin/filemanager/',

    /**
     * SINGLE IMPUT
     * --------------------------------------------------------------
     *  Single file manager charge in modal dialog
     */
    'single_filemanager'	=>	'filemanager/dialog.php?type=1&amp;field_id=image-filemanager&amp;relative_url=1',

    /**
     * FRAMEWORK STYLE
     * --------------------------------------------------------------
     * Select a use framework style (bootstrap, materializecss)
     */
    'style' =>  'bootstrap',

    /**
     * CUSTOM ICONS
     * --------------------------------------------------------------
     *  Custom icons relative style
     */
    'icons' => [
        'bootstrap' =>  [
            'select'    =>  'glyphicon glyphicon-picture',
            'clear' =>  'glyphicon glyphicon-trash'
        ],

        'materializecss'    =>  [
            'select'    =>  'photo',
            'clear' =>  'delete'
        ]
    ],
```

## Use

### Add style

```php
{!! Filemanager::style() !!}
```

### Add script

```php
{!! Filemanager::script() !!}
```

### Embend in TinyMCE 4 Editor

1. First add the style and script directives
2. In the content section use the directive

    ```php
    {!! Filemanager::textarea('title for label') !!}
    ```

3. In the script section use the directive

    ```php
    {!! Filemanager::tinymce() !!}
    ```

### Single input with Dialog Responsive Filemanager

1. First add the style and script directives
2. In the content section use the directive

    ```php
    {!! Filemanager::input('title for label') !!}
    ```

### Example

```php
@extends('seguce92::layouts.admin')

@section('title')
	Example with Filemanager
@endsection

@section('style')
    {!! Html::style('path/to/bootstrap.min.css') !!}
    {!! Filemanager::style() !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-control">
                <label for="title">title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            {!! Filemanager::textarea('content') !!}

            {!! Filemanager::input('image') !!}

            <div class="form-control">
                <a href="{{ url('/') }}" class="btn btn-danger">CANCEL</a>
                <button type="submit" class="btn btn-success">SAVE</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::style('path/to/jquery.min.js') !!}
    {!! Html::style('path/to/bootstrap.min.css') !!}
    {!! Filemanager::script() !!}
    {!! Filemanager::tinymce() !!}
@endsection
```

### Information and Details
visit site [mascodigo.net](https://mascodigo.net)
