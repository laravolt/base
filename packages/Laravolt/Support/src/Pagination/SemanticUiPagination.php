<?php namespace Laravolt\Support\Pagination;

use Illuminate\Contracts\Pagination\Presenter;
use Illuminate\Pagination\BootstrapThreePresenter;

class SemanticUiPagination extends BootstrapThreePresenter implements Presenter {

    protected function getActivePageWrapper($text)
    {
        return '<div class="active item">'.$text.'</div>';
    }

    protected function getDisabledTextWrapper($text)
    {
        return '<div class="disabled item">'.$text.'</div>';
    }

    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {

        return '<a class="item" href="'.htmlentities($url).'">'.$page.'</a>';
        return '<li><a href="'.htmlentities($url).'"'.$rel.'>'.$page.'</a></li>';
    }

    public function render($class = null)
    {
        if ($this->hasPages())
        {
            return sprintf(
                '<div class="menu %s">%s</div>',
                $class,
                $this->getLinks()
            );
        }

        return '';
    }

}
