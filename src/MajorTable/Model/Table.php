<?php

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\Model;

/**
 * Table
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Table
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $columns = [];

    /**
     * @var array
     */
    protected $data = [];

    public function __construct(array $data = [], array $attributes = [])
    {
        $this->data = $data;
        $this->attributes = $attributes;
    }

    /**
     * @param $name
     * @param Column $column
     */
    protected function addColumn($name, Column $column)
    {
        $this->columns[$name] = $column;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
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
}
