<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JsonRequestConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $contentTypes;
    private $_usedProperties = [];

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function contentTypes(mixed $value): static
    {
        $this->_usedProperties['contentTypes'] = true;
        $this->contentTypes = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'json_request';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('content_types', $value)) {
            $this->_usedProperties['contentTypes'] = true;
            $this->contentTypes = $value['content_types'];
            unset($value['content_types']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['contentTypes'])) {
            $output['content_types'] = $this->contentTypes;
        }

        return $output;
    }

}
