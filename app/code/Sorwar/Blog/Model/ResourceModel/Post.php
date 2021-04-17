<?php

namespace Sorwar\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        //To connect to the table
        $this->_init('sorwar_blog_post', 'post_id');
    }
}
