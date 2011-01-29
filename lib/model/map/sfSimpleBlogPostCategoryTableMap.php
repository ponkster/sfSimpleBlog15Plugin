<?php



/**
 * This class defines the structure of the 'sf_blog_post_category' table.
 *
 *
 * This class was autogenerated by Propel 1.6.0-dev on:
 *
 * Wed 26 Jan 2011 10:35:17 PM WIT
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.sfSimpleBlog15Plugin.lib.model.map
 */
class sfSimpleBlogPostCategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfSimpleBlog15Plugin.lib.model.map.sfSimpleBlogPostCategoryTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('sf_blog_post_category');
		$this->setPhpName('sfSimpleBlogPostCategory');
		$this->setClassname('sfSimpleBlogPostCategory');
		$this->setPackage('plugins.sfSimpleBlog15Plugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignPrimaryKey('CATEGORY_ID', 'CategoryId', 'INTEGER' , 'sf_blog_category', 'ID', true, null, null);
		$this->addForeignPrimaryKey('SF_BLOG_POST_ID', 'SfBlogPostId', 'INTEGER' , 'sf_blog_post', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('sfSimpleBlogCategory', 'sfSimpleBlogCategory', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('sfSimpleBlogPost', 'sfSimpleBlogPost', RelationMap::MANY_TO_ONE, array('sf_blog_post_id' => 'id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'false', 'filter' => 'false', ),
			'symfony_behaviors' => array(),
			'query_cache' => array('backend' => 'apc', 'lifetime' => '3600', ),
		);
	} // getBehaviors()

} // sfSimpleBlogPostCategoryTableMap
