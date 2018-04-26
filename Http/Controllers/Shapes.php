<?php
namespace App\Http\Controllers;

use Services\Shape\ShapeFactory;

class Shapes
{
    public function post($request, $response)
    {
        $paramsCollections = $request->toArray();

        $drawnShapes = [];
        foreach ($paramsCollections as $collection) {
            $shape = ShapeFactory::create($collection);
            $drawnShapes[] = $shape->draw();
        }
        return $response->json($drawnShapes)->setStatus(201);
    }
}
