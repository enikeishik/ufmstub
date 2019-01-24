<?php
/**
 * UFO Framework Stub module.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Ufo\Modules\Enikeishik\Ufmstub;

use Ufo\Modules\Model as BaseModel;

/**
 * Module level model base class.
 */
class Model extends BaseModel
{
    /**
     * Some model method to get items data.
     * @return array
     */
    public function getItems(): array
    {
        return [
            (object) ['id' => 1, 'title' => 'first item title',  'text' => 'first item text'], 
            (object) ['id' => 2, 'title' => 'second item title', 'text' => 'second item text'], 
            (object) ['id' => 3, 'title' => 'third item title',  'text' => 'third item text'], 
            (object) ['id' => 4, 'title' => 'fourth item title', 'text' => 'fourth item text'], 
        ];
    }
    
    /**
     * Some model method to get one item data.
     * @return ?stdClass
     */
    public function getItem(): ?\stdClass
    {
        if (empty($this->params['itemId'])) {
            return null;
        }
        
        return (object) [
            'title' => 'one item title', 
            'text'  => 'one item text', 
        ];
    }
}
