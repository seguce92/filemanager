<?php
namespace Seguce92\Filemanager;

class FileManager
{
    /**
     * [input description]
     * @method style
     * @return [Illuminate\Contracts\View\Factory] [Illuminate\View\View]
     */
    public function style()
    {
        return view('filemng::filemanager.style');
    }

    /**
     * [input description]
     * @method script
     * @return [Illuminate\Contracts\View\Factory] [Illuminate\View\View]
     */
    public function script()
    {
        return view('filemng::filemanager.script');
    }

    /**
     * [input description]
     * @method tinymce
     * @return [Illuminate\Contracts\View\Factory] [Illuminate\View\View]
     */
    public function tinymce()
    {
        return view('filemng::filemanager.tinymce');
    }
    /**
     * [input description]
     * @method input
     * @param  string $title [title for label]
     * @return [Illuminate\Contracts\View\Factory] [Illuminate\View\View]
     */
    public function input($title = 'input')
    {
        return view('filemng::filemanager.input', compact('title'));
    }

    /**
     * [input description]
     * @method textarea
     * @param  string $title [title for label]
     * @return [Illuminate\Contracts\View\Factory] [Illuminate\View\View]
     */
    public function textarea($title = 'textarea')
    {
        return view('filemng::filemanager.textarea', compact('title'));
    }
}
