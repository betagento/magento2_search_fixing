<?php 
namespace Betagento\SearchFix\SearchAdapter\Query\ValueTransformer;

use Magento\Elasticsearch\SearchAdapter\Query\ValueTransformerInterface;

class DoubleTransformer implements ValueTransformerInterface {

    /**
     * @inheritdoc
     */
    public function transform(string $value): ?float
    {
        return \is_numeric($value) ? (float) $value : null;
    }
    
}