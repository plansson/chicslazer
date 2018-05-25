<?php

class ArrayOfApis implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var apiEntity[] $ArrayOfApis
     */
    protected $ArrayOfApis = null;

    /**
     * @param apiEntity[] $ArrayOfApis
     */
    public function __construct(array $ArrayOfApis)
    {
      $this->ArrayOfApis = $ArrayOfApis;
    }

    /**
     * @return apiEntity[]
     */
    public function getArrayOfApis()
    {
      return $this->ArrayOfApis;
    }

    /**
     * @param apiEntity[] $ArrayOfApis
     * @return ArrayOfApis
     */
    public function setArrayOfApis(array $ArrayOfApis)
    {
      $this->ArrayOfApis = $ArrayOfApis;
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
      return isset($this->ArrayOfApis[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return apiEntity
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfApis[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param apiEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfApis[] = $value;
      } else {
        $this->ArrayOfApis[$offset] = $value;
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
      unset($this->ArrayOfApis[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return apiEntity Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfApis);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfApis);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfApis);
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
      reset($this->ArrayOfApis);
    }

    /**
     * Countable implementation
     *
     * @return apiEntity Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfApis);
    }

}
