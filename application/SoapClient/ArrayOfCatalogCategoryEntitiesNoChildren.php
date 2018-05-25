<?php

class ArrayOfCatalogCategoryEntitiesNoChildren implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var catalogCategoryEntityNoChildren[] $ArrayOfCatalogCategoryEntitiesNoChildren
     */
    protected $ArrayOfCatalogCategoryEntitiesNoChildren = null;

    /**
     * @param catalogCategoryEntityNoChildren[] $ArrayOfCatalogCategoryEntitiesNoChildren
     */
    public function __construct(array $ArrayOfCatalogCategoryEntitiesNoChildren)
    {
      $this->ArrayOfCatalogCategoryEntitiesNoChildren = $ArrayOfCatalogCategoryEntitiesNoChildren;
    }

    /**
     * @return catalogCategoryEntityNoChildren[]
     */
    public function getArrayOfCatalogCategoryEntitiesNoChildren()
    {
      return $this->ArrayOfCatalogCategoryEntitiesNoChildren;
    }

    /**
     * @param catalogCategoryEntityNoChildren[] $ArrayOfCatalogCategoryEntitiesNoChildren
     * @return ArrayOfCatalogCategoryEntitiesNoChildren
     */
    public function setArrayOfCatalogCategoryEntitiesNoChildren(array $ArrayOfCatalogCategoryEntitiesNoChildren)
    {
      $this->ArrayOfCatalogCategoryEntitiesNoChildren = $ArrayOfCatalogCategoryEntitiesNoChildren;
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
      return isset($this->ArrayOfCatalogCategoryEntitiesNoChildren[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return catalogCategoryEntityNoChildren
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfCatalogCategoryEntitiesNoChildren[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param catalogCategoryEntityNoChildren $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfCatalogCategoryEntitiesNoChildren[] = $value;
      } else {
        $this->ArrayOfCatalogCategoryEntitiesNoChildren[$offset] = $value;
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
      unset($this->ArrayOfCatalogCategoryEntitiesNoChildren[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return catalogCategoryEntityNoChildren Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfCatalogCategoryEntitiesNoChildren);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfCatalogCategoryEntitiesNoChildren);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfCatalogCategoryEntitiesNoChildren);
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
      reset($this->ArrayOfCatalogCategoryEntitiesNoChildren);
    }

    /**
     * Countable implementation
     *
     * @return catalogCategoryEntityNoChildren Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfCatalogCategoryEntitiesNoChildren);
    }

}
