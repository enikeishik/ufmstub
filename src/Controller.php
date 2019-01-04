<?php
/**
 * UFO Framework Stub module.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Ufo\Modules\Stub;

use Ufo\Core\Result;
use Ufo\Core\Section;
use Ufo\Modules\Controller as BaseController;
use Ufo\Modules\View;

class Controller extends BaseController
{
    /**
     * Main controller method.
     * @param Section $section = null
     * @return Result
     */
    public function compose(Section $section = null): Result
    {
        $this->data = [
            'section' => $section, 
            'content' => 'Stub module output', 
        ];
        return new Result($this->getView());
    }
}
