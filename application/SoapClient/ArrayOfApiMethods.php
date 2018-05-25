<?php

class ArrayOfApiMethods implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var apiMethodEntity[] $ArrayOfApiMethods
     */
    protected $ArrayOfApiMethods = null;

    /**
     * @param apiMethodEntity[] $ArrayOfApiMethods
     */
    public function __construct(array $ArrayOfApiMethods)
    {
      $this->ArrayOfApiMethods = $ArrayOfApiMethods;
    }

    /**
     * @return apiMethodEntity[]
     */
    public function getArrayOfApiMethods()
    {
      return $this->ArrayOfApiMethods;
    }

    /**
     * @param apiMethodEntity[] $ArrayOfApiMethods
     * @return ArrayOfApiMethods
     */
    public function setArrayOfApiMethods(array $ArrayOfApiMethods)
    {
      $this->ArrayOfApiMethods = $ArrayOfApiMethods;
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
      return isset($this->ArrayOfApiMethods[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return apiMethodEntity
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfApiMethods[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param apiMethodEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfApiMethods[] = $value;
      } else {
        $this->ArrayOfApiMethods[$offset] = $value;
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
      unset($this->ArrayOfApiMethods[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return apiMethodEntity Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfApiMethods);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfApiMethods);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfApiMethods);
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
      reset($this->ArrayOfApiMethods);
    }

    /**
     * Countable implementation
     *
     * @return apiMethodEntity Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfApiMethods);
    }

}
