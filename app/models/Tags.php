<?php

namespace app\models;

class Tags extends \core\Db
{
    /**
     * Get by post ID
     * 
     * @param  int $postId Post ID
     * @return array
     */
    public function getByPostId($postId)
    {
        $query = 'SELECT tags.*
                  FROM tags
                  JOIN posts_tags
                  ON tags.id = posts_tags.tag_id
                  AND posts_tags.post_id = ' . (int) $postId;
        return $this->_db->fetchAll($query);
    }
}
