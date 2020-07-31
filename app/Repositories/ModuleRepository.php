<?php

/**
 * Created by PhpStorm.
 * User: price
 * Date: 01/04/2020
 * Time: 16:33
 */
namespace App\Repositories;

use App\Models\Module;
use PhpParser\Node\Expr\Array_;

/*
 * DAO
 */
class ModuleRepository
{
    protected $module;

    // Injection du module dans le constructor
    public function __construct(Module $module)
    {
        $this->module = $module;
    }

    public function save(Array $inputs)
    {
        return $this->module->create($inputs);
    }

    public function getAll()
    {
        return $this->module->all();
    }

    public function getById($id)
    {
        return $this->module->findOrFail($id);
    }

}