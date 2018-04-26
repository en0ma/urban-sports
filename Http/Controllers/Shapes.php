<?php
namespace App\Http\Controllers;

use Services\Painter;
use Services\Shape\ShapeFactory;

class Shapes
{
    public function post($request, $response)
    {
        $painter = new Painter();
        $paramsCollections = $request->toArray();

        $drawnShapes = [];
        foreach ($paramsCollections as $collection) {
            $shape = ShapeFactory::create($collection);
            $drawnShapes[] = $painter->render($shape);
        }
        return $response->json($drawnShapes)->setStatus(201);
    }
}
