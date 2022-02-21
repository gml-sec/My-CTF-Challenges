<?php

namespace Symfony\Config\Framework;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ExceptionsConfig 
{
    private $logLevel;
    private $statusCode;
    
    /**
     * The level of log message. Null to let Symfony decide.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logLevel($value): self
    {
        $this->logLevel = $value;
    
        return $this;
    }
    
    /**
     * The status code of the response. Null to let Symfony decide.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function statusCode($value): self
    {
        $this->statusCode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['log_level'])) {
            $this->logLevel = $value['log_level'];
            unset($value['log_level']);
        }
    
        if (isset($value['status_code'])) {
            $this->statusCode = $value['status_code'];
            unset($value['status_code']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->logLevel) {
            $output['log_level'] = $this->logLevel;
        }
        if (null !== $this->statusCode) {
            $output['status_code'] = $this->statusCode;
        }
    
        return $output;
    }

}
