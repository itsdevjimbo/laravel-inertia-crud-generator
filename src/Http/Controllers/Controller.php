<?php
namespace JMagusib\CrudGenerator\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    CONST FIELD_TYPES = [
        [
            'id'    => 'string',
            'name'  => 'Text'
        ],
        [
            'id'    => 'text',
            'name'  => 'Textarea'
        ],
        [
            'id'    => 'decimal',
            'name'  => 'Numeric',
        ],
        [
            'id'    => 'boolean',
            'name'  => 'Boolean',
        ],
        [
            'id'    => 'datetime',
            'name'  => 'Datetime',
        ],
        [
            'id'    => 'date',
            'name'  => 'Date',
        ],

    ];
}
