<?php
namespace Services;

use Services\Shape\IShape;

class Painter
{
    /**
     * Render shape.
     *
     * @param null|IShape $shape
     * @return array
     */
    public function render(?IShape $shape): array
    {
        if (!$shape) {
            return $this->renderWithError("Not a valid shape");
        }

        try {
            $shapeDetails = $shape->draw();
            return $this->renderWithSuccess($shapeDetails);

        } catch (\Throwable $e) {
            return $this->renderWithError($e->getMessage());
        }
    }

    /**
     * Render shape with error.
     *
     * @param string $errorMessage
     * @return array
     */
    private function renderWithError(string $errorMessage) : array
    {
        return [
            'is_valid' => false,
            'definition' => null,
            'definition_format' => '',
            'error_message' => $errorMessage,
        ];
    }

    /**
     * Render valid shapes.
     *
     * @param array $shapeDetails
     * @return array
     */
    private function renderWithSuccess(array $shapeDetails) : array
    {
        return array_merge($shapeDetails, ['is_valid' => true, 'error_message' => '',]);
    }
}
