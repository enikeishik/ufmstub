<?php
/**
 * UFO Framework Stub module.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Ufo\Modules\Enikeishik\Stub;

use Ufo\Core\Result;
use Ufo\Core\Section;
use Ufo\Modules\Controller as BaseController;
use Ufo\Modules\ModelInterface;
use Ufo\Modules\View;
use Ufo\Modules\ViewInterface;

class Controller extends BaseController
{
    /**
     * @see parent
     */
    public function compose(Section $section = null): Result
    {
        $this->data = [
            'section' => $section, 
            'content' => 'Stub module output', 
        ];
        return new Result($this->getView());
    }
    
    /**
     * @see parent
     */
    protected function getModel(): ModelInterface
    {
        $model = new Model();
        $model->inject($this->container);
        return $model;
    }
    
    /**
     * @see parent
     */
    protected function getView(): ViewInterface
    {
        $view = new View('index', $this->data);
        $view->inject($this->container);
        return $view;
    }
}
