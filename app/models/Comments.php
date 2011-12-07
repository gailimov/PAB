<?php

namespace app\models;

class Comments extends \core\Db
{
    /**
     * Get by post ID
     * 
     * @param  int $postId Post ID
     * @return array
     */
    public function getByPostId($postId)
    {
        $query = 'SELECT *
                  FROM comments
                  WHERE post_id = ' . (int) $postId;
        return $this->_db->fetchAll($query);
    }
}
