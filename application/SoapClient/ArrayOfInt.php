<?php

class ArrayOfInt implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var int[] $ArrayOfInt
     */
    protected $ArrayOfInt = null;

    /**
     * @param int[] $ArrayOfInt
     */
    public function __construct(array $ArrayOfInt)
    {
      $this->ArrayOfInt = $ArrayOfInt;
    }

    /**
     * @return int[]
     */
    public function getArrayOfInt()
    {
      return $this->ArrayOfInt;
    }

    /**
     * @param int[] $ArrayOfInt
     * @return ArrayOfInt
     */
    public function setArrayOfInt(array $ArrayOfInt)
    {
      $this->ArrayOfInt = $ArrayOfInt;
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
      return isset($this->ArrayOfInt[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return int
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfInt[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param int $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfInt[] = $value;
      } else {
        $this->ArrayOfInt[$offset] = $value;
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
      unset($this->ArrayOfInt[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return int Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfInt);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfInt);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfInt);
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
      reset($this->ArrayOfInt);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfInt);
    }

}
