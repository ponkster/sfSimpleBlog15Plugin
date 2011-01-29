<?php


/**
 * Base class that represents a query for the 'sf_blog_post_version' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.0-dev on:
 *
 * Wed 26 Jan 2011 10:35:17 PM WIT
 *
 * @method     sfSimpleBlogPostVersionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfSimpleBlogPostVersionQuery orderByAuthorId($order = Criteria::ASC) Order by the author_id column
 * @method     sfSimpleBlogPostVersionQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     sfSimpleBlogPostVersionQuery orderByStrippedTitle($order = Criteria::ASC) Order by the stripped_title column
 * @method     sfSimpleBlogPostVersionQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     sfSimpleBlogPostVersionQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method     sfSimpleBlogPostVersionQuery orderByAllowComments($order = Criteria::ASC) Order by the allow_comments column
 * @method     sfSimpleBlogPostVersionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     sfSimpleBlogPostVersionQuery orderByPublishedAt($order = Criteria::ASC) Order by the published_at column
 * @method     sfSimpleBlogPostVersionQuery orderByInternalPublishedAt($order = Criteria::ASC) Order by the internal_published_at column
 * @method     sfSimpleBlogPostVersionQuery orderByVersion($order = Criteria::ASC) Order by the version column
 *
 * @method     sfSimpleBlogPostVersionQuery groupById() Group by the id column
 * @method     sfSimpleBlogPostVersionQuery groupByAuthorId() Group by the author_id column
 * @method     sfSimpleBlogPostVersionQuery groupByTitle() Group by the title column
 * @method     sfSimpleBlogPostVersionQuery groupByStrippedTitle() Group by the stripped_title column
 * @method     sfSimpleBlogPostVersionQuery groupByContent() Group by the content column
 * @method     sfSimpleBlogPostVersionQuery groupByIsPublished() Group by the is_published column
 * @method     sfSimpleBlogPostVersionQuery groupByAllowComments() Group by the allow_comments column
 * @method     sfSimpleBlogPostVersionQuery groupByUpdatedAt() Group by the updated_at column
 * @method     sfSimpleBlogPostVersionQuery groupByPublishedAt() Group by the published_at column
 * @method     sfSimpleBlogPostVersionQuery groupByInternalPublishedAt() Group by the internal_published_at column
 * @method     sfSimpleBlogPostVersionQuery groupByVersion() Group by the version column
 *
 * @method     sfSimpleBlogPostVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfSimpleBlogPostVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfSimpleBlogPostVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfSimpleBlogPostVersionQuery leftJoinsfSimpleBlogPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfSimpleBlogPost relation
 * @method     sfSimpleBlogPostVersionQuery rightJoinsfSimpleBlogPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfSimpleBlogPost relation
 * @method     sfSimpleBlogPostVersionQuery innerJoinsfSimpleBlogPost($relationAlias = null) Adds a INNER JOIN clause to the query using the sfSimpleBlogPost relation
 *
 * @method     sfSimpleBlogPostVersion findOne(PropelPDO $con = null) Return the first sfSimpleBlogPostVersion matching the query
 * @method     sfSimpleBlogPostVersion findOneOrCreate(PropelPDO $con = null) Return the first sfSimpleBlogPostVersion matching the query, or a new sfSimpleBlogPostVersion object populated from the query conditions when no match is found
 *
 * @method     sfSimpleBlogPostVersion findOneById(int $id) Return the first sfSimpleBlogPostVersion filtered by the id column
 * @method     sfSimpleBlogPostVersion findOneByAuthorId(int $author_id) Return the first sfSimpleBlogPostVersion filtered by the author_id column
 * @method     sfSimpleBlogPostVersion findOneByTitle(string $title) Return the first sfSimpleBlogPostVersion filtered by the title column
 * @method     sfSimpleBlogPostVersion findOneByStrippedTitle(string $stripped_title) Return the first sfSimpleBlogPostVersion filtered by the stripped_title column
 * @method     sfSimpleBlogPostVersion findOneByContent(string $content) Return the first sfSimpleBlogPostVersion filtered by the content column
 * @method     sfSimpleBlogPostVersion findOneByIsPublished(boolean $is_published) Return the first sfSimpleBlogPostVersion filtered by the is_published column
 * @method     sfSimpleBlogPostVersion findOneByAllowComments(boolean $allow_comments) Return the first sfSimpleBlogPostVersion filtered by the allow_comments column
 * @method     sfSimpleBlogPostVersion findOneByUpdatedAt(string $updated_at) Return the first sfSimpleBlogPostVersion filtered by the updated_at column
 * @method     sfSimpleBlogPostVersion findOneByPublishedAt(string $published_at) Return the first sfSimpleBlogPostVersion filtered by the published_at column
 * @method     sfSimpleBlogPostVersion findOneByInternalPublishedAt(string $internal_published_at) Return the first sfSimpleBlogPostVersion filtered by the internal_published_at column
 * @method     sfSimpleBlogPostVersion findOneByVersion(int $version) Return the first sfSimpleBlogPostVersion filtered by the version column
 *
 * @method     array findById(int $id) Return sfSimpleBlogPostVersion objects filtered by the id column
 * @method     array findByAuthorId(int $author_id) Return sfSimpleBlogPostVersion objects filtered by the author_id column
 * @method     array findByTitle(string $title) Return sfSimpleBlogPostVersion objects filtered by the title column
 * @method     array findByStrippedTitle(string $stripped_title) Return sfSimpleBlogPostVersion objects filtered by the stripped_title column
 * @method     array findByContent(string $content) Return sfSimpleBlogPostVersion objects filtered by the content column
 * @method     array findByIsPublished(boolean $is_published) Return sfSimpleBlogPostVersion objects filtered by the is_published column
 * @method     array findByAllowComments(boolean $allow_comments) Return sfSimpleBlogPostVersion objects filtered by the allow_comments column
 * @method     array findByUpdatedAt(string $updated_at) Return sfSimpleBlogPostVersion objects filtered by the updated_at column
 * @method     array findByPublishedAt(string $published_at) Return sfSimpleBlogPostVersion objects filtered by the published_at column
 * @method     array findByInternalPublishedAt(string $internal_published_at) Return sfSimpleBlogPostVersion objects filtered by the internal_published_at column
 * @method     array findByVersion(int $version) Return sfSimpleBlogPostVersion objects filtered by the version column
 *
 * @package    propel.generator.plugins.sfSimpleBlog15Plugin.lib.model.om
 */
abstract class BasesfSimpleBlogPostVersionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfSimpleBlogPostVersionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfSimpleBlogPostVersion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfSimpleBlogPostVersionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfSimpleBlogPostVersionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfSimpleBlogPostVersionQuery) {
			return $criteria;
		}
		$query = new sfSimpleBlogPostVersionQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$id, $version] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    sfSimpleBlogPostVersion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfSimpleBlogPostVersionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(sfSimpleBlogPostVersionPeer::ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(sfSimpleBlogPostVersionPeer::VERSION, $key[1], Criteria::EQUAL);
		
		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(sfSimpleBlogPostVersionPeer::ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(sfSimpleBlogPostVersionPeer::VERSION, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}
		
		return $this;
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the author_id column
	 * 
	 * @param     int|array $authorId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByAuthorId($authorId = null, $comparison = null)
	{
		if (is_array($authorId)) {
			$useMinMax = false;
			if (isset($authorId['min'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::AUTHOR_ID, $authorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($authorId['max'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::AUTHOR_ID, $authorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::AUTHOR_ID, $authorId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the stripped_title column
	 * 
	 * @param     string $strippedTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByStrippedTitle($strippedTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($strippedTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $strippedTitle)) {
				$strippedTitle = str_replace('*', '%', $strippedTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::STRIPPED_TITLE, $strippedTitle, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the is_published column
	 * 
	 * @param     boolean|string $isPublished The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByIsPublished($isPublished = null, $comparison = null)
	{
		if (is_string($isPublished)) {
			$is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::IS_PUBLISHED, $isPublished, $comparison);
	}

	/**
	 * Filter the query on the allow_comments column
	 * 
	 * @param     boolean|string $allowComments The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByAllowComments($allowComments = null, $comparison = null)
	{
		if (is_string($allowComments)) {
			$allow_comments = in_array(strtolower($allowComments), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::ALLOW_COMMENTS, $allowComments, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 * 
	 * @param     string|array $updatedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query on the published_at column
	 * 
	 * @param     string|array $publishedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByPublishedAt($publishedAt = null, $comparison = null)
	{
		if (is_array($publishedAt)) {
			$useMinMax = false;
			if (isset($publishedAt['min'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::PUBLISHED_AT, $publishedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publishedAt['max'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::PUBLISHED_AT, $publishedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::PUBLISHED_AT, $publishedAt, $comparison);
	}

	/**
	 * Filter the query on the internal_published_at column
	 * 
	 * @param     string|array $internalPublishedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByInternalPublishedAt($internalPublishedAt = null, $comparison = null)
	{
		if (is_array($internalPublishedAt)) {
			$useMinMax = false;
			if (isset($internalPublishedAt['min'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::INTERNAL_PUBLISHED_AT, $internalPublishedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($internalPublishedAt['max'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::INTERNAL_PUBLISHED_AT, $internalPublishedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::INTERNAL_PUBLISHED_AT, $internalPublishedAt, $comparison);
	}

	/**
	 * Filter the query on the version column
	 * 
	 * @param     int|array $version The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (is_array($version)) {
			$useMinMax = false;
			if (isset($version['min'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::VERSION, $version['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($version['max'])) {
				$this->addUsingAlias(sfSimpleBlogPostVersionPeer::VERSION, $version['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogPostVersionPeer::VERSION, $version, $comparison);
	}

	/**
	 * Filter the query by a related sfSimpleBlogPost object
	 *
	 * @param     sfSimpleBlogPost|PropelCollection $sfSimpleBlogPost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function filterBysfSimpleBlogPost($sfSimpleBlogPost, $comparison = null)
	{
		if ($sfSimpleBlogPost instanceof sfSimpleBlogPost) {
			return $this
				->addUsingAlias(sfSimpleBlogPostVersionPeer::ID, $sfSimpleBlogPost->getId(), $comparison);
		} elseif ($sfSimpleBlogPost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(sfSimpleBlogPostVersionPeer::ID, $sfSimpleBlogPost->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterBysfSimpleBlogPost() only accepts arguments of type sfSimpleBlogPost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the sfSimpleBlogPost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function joinsfSimpleBlogPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfSimpleBlogPost');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfSimpleBlogPost');
		}
		
		return $this;
	}

	/**
	 * Use the sfSimpleBlogPost relation sfSimpleBlogPost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfSimpleBlogPostQuery A secondary query class using the current class as primary query
	 */
	public function usesfSimpleBlogPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfSimpleBlogPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfSimpleBlogPost', 'sfSimpleBlogPostQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfSimpleBlogPostVersion $sfSimpleBlogPostVersion Object to remove from the list of results
	 *
	 * @return    sfSimpleBlogPostVersionQuery The current query, for fluid interface
	 */
	public function prune($sfSimpleBlogPostVersion = null)
	{
		if ($sfSimpleBlogPostVersion) {
			$this->addCond('pruneCond0', $this->getAliasedColName(sfSimpleBlogPostVersionPeer::ID), $sfSimpleBlogPostVersion->getId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(sfSimpleBlogPostVersionPeer::VERSION), $sfSimpleBlogPostVersion->getVersion(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
	  }
	  
		return $this;
	}

} // BasesfSimpleBlogPostVersionQuery
