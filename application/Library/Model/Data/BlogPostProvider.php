<?php
class Model_Data_BlogPostProvider extends Model_Data_BlogPostProviderBase
{
	
    public function getCurrent($postCount)
    {
        $strSql = '
SELECT * 
FROM blog_post 
WHERE publish_date < NOW()
ORDER BY publish_date DESC
LIMIT ' . intval($postCount);
        $params = array();
        return Model_Data_BlogPostProvider::getArrayFromQuery($strSql, $params);
    }	
	
}
