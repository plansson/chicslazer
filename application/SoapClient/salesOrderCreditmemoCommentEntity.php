<?php

class salesOrderCreditmemoCommentEntity
{

    /**
     * @var string $parent_id
     */
    protected $parent_id = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $is_customer_notified
     */
    protected $is_customer_notified = null;

    /**
     * @var string $comment_id
     */
    protected $comment_id = null;

    /**
     * @var string $is_visible_on_front
     */
    protected $is_visible_on_front = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
      return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setParent_id($parent_id)
    {
      $this->parent_id = $parent_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_customer_notified()
    {
      return $this->is_customer_notified;
    }

    /**
     * @param string $is_customer_notified
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setIs_customer_notified($is_customer_notified)
    {
      $this->is_customer_notified = $is_customer_notified;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment_id()
    {
      return $this->comment_id;
    }

    /**
     * @param string $comment_id
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setComment_id($comment_id)
    {
      $this->comment_id = $comment_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIs_visible_on_front()
    {
      return $this->is_visible_on_front;
    }

    /**
     * @param string $is_visible_on_front
     * @return salesOrderCreditmemoCommentEntity
     */
    public function setIs_visible_on_front($is_visible_on_front)
    {
      $this->is_visible_on_front = $is_visible_on_front;
      return $this;
    }

}
