<?php


/**
 * Base class that represents a query for the 'sf_blog_about' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.0-dev on:
 *
 * Wed 26 Jan 2011 10:35:17 PM WIT
 *
 * @method     sfSimpleBlogAboutQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     sfSimpleBlogAboutQuery orderByAbout($order = Criteria::ASC) Order by the about column
 *
 * @method     sfSimpleBlogAboutQuery groupById() Group by the id column
 * @method     sfSimpleBlogAboutQuery groupByAbout() Group by the about column
 *
 * @method     sfSimpleBlogAboutQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfSimpleBlogAboutQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfSimpleBlogAboutQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfSimpleBlogAbout findOne(PropelPDO $con = null) Return the first sfSimpleBlogAbout matching the query
 * @method     sfSimpleBlogAbout findOneOrCreate(PropelPDO $con = null) Return the first sfSimpleBlogAbout matching the query, or a new sfSimpleBlogAbout object populated from the query conditions when no match is found
 *
 * @method     sfSimpleBlogAbout findOneById(int $id) Return the first sfSimpleBlogAbout filtered by the id column
 * @method     sfSimpleBlogAbout findOneByAbout(string $about) Return the first sfSimpleBlogAbout filtered by the about column
 *
 * @method     array findById(int $id) Return sfSimpleBlogAbout objects filtered by the id column
 * @method     array findByAbout(string $about) Return sfSimpleBlogAbout objects filtered by the about column
 *
 * @package    propel.generator.plugins.sfSimpleBlog15Plugin.lib.model.om
 */
abstract class BasesfSimpleBlogAboutQuery extends ModelCriteria
{

	// query_cache behavior
	protected $queryKey = '';

	/**
	 * Initializes internal state of BasesfSimpleBlogAboutQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfSimpleBlogAbout', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfSimpleBlogAboutQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfSimpleBlogAboutQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfSimpleBlogAboutQuery) {
			return $criteria;
		}
		$query = new sfSimpleBlogAboutQuery();
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
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    sfSimpleBlogAbout|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfSimpleBlogAboutPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(12, 56, 832), $con);
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
	 * @return    sfSimpleBlogAboutQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfSimpleBlogAboutPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfSimpleBlogAboutQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfSimpleBlogAboutPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogAboutQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfSimpleBlogAboutPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the about column
	 * 
	 * @param     string $about The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfSimpleBlogAboutQuery The current query, for fluid interface
	 */
	public function filterByAbout($about = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($about)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $about)) {
				$about = str_replace('*', '%', $about);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfSimpleBlogAboutPeer::ABOUT, $about, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfSimpleBlogAbout $sfSimpleBlogAbout Object to remove from the list of results
	 *
	 * @return    sfSimpleBlogAboutQuery The current query, for fluid interface
	 */
	public function prune($sfSimpleBlogAbout = null)
	{
		if ($sfSimpleBlogAbout) {
			$this->addUsingAlias(sfSimpleBlogAboutPeer::ID, $sfSimpleBlogAbout->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

	// query_cache behavior
	
	public function setQueryKey($key)
	{
		$this->queryKey = $key;
		return $this;
	}
	
	public function getQueryKey()
	{
		return $this->queryKey;
	}
	
	public function cacheContains($key)
	{
		return apc_fetch($key);
	}
	
	public function cacheFetch($key)
	{
		return apc_fetch($key);
	}
	
	public function cacheStore($key, $value, $lifetime = 3600)
	{
		apc_store($key, $value, $lifetime);
	}
	
	protected function getSelectStatement($con = null)
	{
		$dbMap = Propel::getDatabaseMap(sfSimpleBlogAboutPeer::DATABASE_NAME);
		$db = Propel::getDB(sfSimpleBlogAboutPeer::DATABASE_NAME);
	  if ($con === null) {
			$con = Propel::getConnection(sfSimpleBlogAboutPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		
		if (!$this->hasSelectClause()) {
			$this->addSelfSelectColumns();
		}
	
	  $this->configureSelectColumns();
	  
		$con->beginTransaction();
		try {
			$this->basePreSelect($con);
			$key = $this->getQueryKey();
			if ($key && $this->cacheContains($key)) {
				$params = $this->getParams();
				$sql = $this->cacheFetch($key);
			} else {
				$params = array();
				$sql = BasePeer::createSelectSql($this, $params);
				if ($key) {
					$this->cacheStore($key, $sql);
				}
			}
			$stmt = $con->prepare($sql);
			$db->bindValues($stmt, $params, $dbMap);
			$stmt->execute();
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
		
		return $stmt;
	}
	
	protected function getCountStatement($con = null)
	{
		$dbMap = Propel::getDatabaseMap($this->getDbName());
		$db = Propel::getDB($this->getDbName());
	  if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
	
		$con->beginTransaction();
		try {
			$this->basePreSelect($con);
			$key = $this->getQueryKey();
			if ($key && $this->cacheContains($key)) {
				$params = $this->getParams();
				$sql = $this->cacheFetch($key);
			} else {
				if (!$this->hasSelectClause() && !$this->getPrimaryCriteria()) {
					$this->addSelfSelectColumns();
				}
				$params = array();
				$needsComplexCount = $this->getGroupByColumns()
					|| $this->getOffset()
					|| $this->getLimit()
					|| $this->getHaving()
					|| in_array(Criteria::DISTINCT, $this->getSelectModifiers());
				if ($needsComplexCount) {
					if (BasePeer::needsSelectAliases($this)) {
						if ($this->getHaving()) {
							throw new PropelException('Propel cannot create a COUNT query when using HAVING and  duplicate column names in the SELECT part');
						}
						$db->turnSelectColumnsToAliases($this);
					}
					$selectSql = BasePeer::createSelectSql($this, $params);
					$sql = 'SELECT COUNT(*) FROM (' . $selectSql . ') propelmatch4cnt';
				} else {
					// Replace SELECT columns with COUNT(*)
					$this->clearSelectColumns()->addSelectColumn('COUNT(*)');
					$sql = BasePeer::createSelectSql($this, $params);
				}
				if ($key) {
					$this->cacheStore($key, $sql);
				}
			}
			$stmt = $con->prepare($sql);
			$db->bindValues($stmt, $params, $dbMap);
			$stmt->execute();
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	
		return $stmt;
	}

} // BasesfSimpleBlogAboutQuery
