<?php

/**
 * Column
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\Model;

use Zend\Filter\FilterChain;
use Zend\InputFilter\InputFilter;

/**
 * Column
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Column
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var FilterChain
     */
    protected $filterChain;

    /**
     * @var string
     */
    protected $title;

    public function __construct($title, $attributes = [])
    {
        $this->title = $title;
        $this->attributes = [];
    }

    /**
     * @return FilterChain
     */
    public function getFilterChain()
    {
        if ($this->filterChain === null) {
            $this->filterChain = new FilterChain();
        }

        return $this->filterChain;
    }

    /**
     * @param FilterChain $filterChain
     */
    public function setFilterChain(FilterChain $filterChain)
    {
        $this->filterChain = $filterChain;
    }

    /**
     * @param InputFilter $filter
     */
    public function addFilter(InputFilter $filter)
    {
        $this->getFilterChain()->attach($filter);
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $value
     * @return string
     */
    public function filter($value)
    {
        return $this->getFilterChain()->filter($value);
    }
}
