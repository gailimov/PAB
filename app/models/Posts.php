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
        return $this->_db->fetchAll('SELECT *, id as pid, (
                                         SELECT COUNT(id)
                                         FROM comments
                                         WHERE post_id = pid
                                     ) AS comments_count
                                     FROM posts
                                     ORDER BY created_at DESC');
    }
    
    /**
     * Get by slug
     * 
     * @param  string $slug Slug
     * @return array
     */
    public function getBySlug($slug)
    {
        return $this->_db->fetchRow('SELECT *
                                     FROM posts
                                     WHERE slug = ?', (string) $slug);
    }
}
