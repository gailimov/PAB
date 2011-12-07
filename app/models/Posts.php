<?php

namespace app\models;

class Posts extends \core\Db
{
    /**
     * Get all
     * 
     * @return array
     */
    public function getAll()
    {
        $query = 'SELECT *, id as pid, (
                      SELECT COUNT(id)
                      FROM comments
                      WHERE post_id = pid
                  ) AS comments_count
                  FROM posts
                  ORDER BY created_at DESC';
        return $this->_db->fetchAll($query);
    }
    
    /**
     * Get by slug
     * 
     * @param  string $slug Slug
     * @return array
     */
    public function getBySlug($slug)
    {
        $query = 'SELECT *
                  FROM posts
                  WHERE slug = ?';
        return $this->_db->fetchRow($query, (string) $slug);
    }
}
