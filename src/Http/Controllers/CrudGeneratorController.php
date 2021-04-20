<?php
namespace JMagusib\CrudGenerator\Http\Controllers;

use Inertia\Inertia;

class CrudGeneratorController extends Controller
{

    public function index()
    {
        return Inertia::render('CrudGenerator/Index',[
            'dataTypes' => Controller::FIELD_TYPES
        ]);
    }
}
