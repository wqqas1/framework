<?php 
namespace Litepie\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use Prettus\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package Litepie\Repository\Transformer
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
