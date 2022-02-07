<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Illuminate\Http\Request;

abstract class ResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
    }

    /**
     * @return Model
     */
    public abstract function resource(): Model;

    public abstract function store_validation(): array;

    public abstract function update_validation(): array;

    public function map_data(): array
    {
        return [];
    }

    public function mapped_data($data) : array {
        $mappings = $this->map_data();
        $data = [];

        foreach($mappings as $key => $function) {
            $data[$key] = $function($data[$key]);
        }

        return $data;
    }

    public function index(Request $request)
    {
        return $this->resource()::all();
    }

    public function store(Request $request)
    {
        $rules = $this->store_validation();
        $data  = $request->validate($rules);

        return $this->resource()::create($this->mapped_data($data));
    }

    public function delete(Request $request, $id)
    {
        $model = $this->resource()::findOrFail($id);
        return $model->delete();
    }

    public function update(Request $request, $id)
    {
        $model = $this->resource()::findOrFail($id);
        $data  = $request->validate($this->update_validation());

        return $model->update($this->mapped_data($data));
    }

    public function show(Request $request, $id)
    {
        $model = $this->resource()::findOrFail($id);

        return $model;
    }
}
