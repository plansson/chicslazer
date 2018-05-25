<?php

class ArrayOfCatalogCategoryEntities implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var catalogCategoryEntity[] $ArrayOfCatalogCategoryEntities
     */
    protected $ArrayOfCatalogCategoryEntities = null;

    /**
     * @param catalogCategoryEntity[] $ArrayOfCatalogCategoryEntities
     */
    public function __construct(array $ArrayOfCatalogCategoryEntities)
    {
      $this->ArrayOfCatalogCategoryEntities = $ArrayOfCatalogCategoryEntities;
    }

    /**
     * @return catalogCategoryEntity[]
     */
    public function getArrayOfCatalogCategoryEntities()
    {
      return $this->ArrayOfCatalogCategoryEntities;
    }

    /**
     * @param catalogCategoryEntity[] $ArrayOfCatalogCategoryEntities
     * @return ArrayOfCatalogCategoryEntities
     */
    public function setArrayOfCatalogCategoryEntities(array $ArrayOfCatalogCategoryEntities)
    {
      $this->ArrayOfCatalogCategoryEntities = $ArrayOfCatalogCategoryEntities;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ArrayOfCatalogCategoryEntities[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return catalogCategoryEntity
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfCatalogCategoryEntities[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param catalogCategoryEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfCatalogCategoryEntities[] = $value;
      } else {
        $this->ArrayOfCatalogCategoryEntities[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArrayOfCatalogCategoryEntities[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return catalogCategoryEntity Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfCatalogCategoryEntities);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfCatalogCategoryEntities);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfCatalogCategoryEntities);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ArrayOfCatalogCategoryEntities);
    }

    /**
     * Countable implementation
     *
     * @return catalogCategoryEntity Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfCatalogCategoryEntities);
    }

}
