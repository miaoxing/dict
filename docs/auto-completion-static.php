<?php

namespace Miaoxing\Dict\Service;

class DictItemModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see DictItemModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see DictItemModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see DictItemModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see DictItemModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see DictItemModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see DictItemModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see DictItemModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see DictItemModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see DictItemModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see DictItemModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see DictItemModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see DictItemModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see DictItemModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see DictItemModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictItemModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see DictItemModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictItemModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see DictItemModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see DictItemModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see DictItemModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see DictItemModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictItemModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see DictItemModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see DictItemModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see DictItemModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see DictItemModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see DictItemModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see DictItemModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see DictItemModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see DictItemModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see DictItemModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see DictItemModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see DictItemModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see DictItemModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see DictItemModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see DictItemModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see DictItemModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see DictItemModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see DictItemModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see DictItemModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see DictItemModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see DictItemModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see DictItemModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see DictItemModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see DictItemModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see DictItemModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictItemModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictItemModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictItemModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = QueryBuilder::table('user')->where('id', 1);
     * $users = QueryBuilder::table('user')->where('id', '>', 1);
     * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
     * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see DictItemModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see DictItemModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictItemModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictItemModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictItemModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictItemModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see DictItemModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see DictItemModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictItemModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see DictItemModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see DictItemModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see DictItemModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see DictItemModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * @param mixed $if
     * @param mixed ...$args
     * @return $this
     * @see DictItemModel::whereIf
     */
    public static function whereIf($if, ...$args): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see DictItemModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see DictItemModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see DictItemModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see DictItemModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see DictItemModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see DictItemModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see DictItemModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see DictItemModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see DictItemModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see DictItemModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see DictItemModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see DictItemModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see DictItemModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see DictItemModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see DictItemModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictItemModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictItemModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictItemModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see DictItemModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see DictItemModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see DictItemModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see DictItemModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see DictItemModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see DictItemModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class DictModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see DictModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see DictModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see DictModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see DictModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see DictModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see DictModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see DictModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see DictModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see DictModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see DictModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see DictModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see DictModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see DictModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see DictModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see DictModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see DictModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see DictModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see DictModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see DictModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see DictModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see DictModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see DictModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see DictModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see DictModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see DictModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see DictModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see DictModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see DictModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see DictModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see DictModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see DictModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see DictModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see DictModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see DictModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see DictModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see DictModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see DictModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see DictModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see DictModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see DictModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see DictModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see DictModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see DictModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see DictModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see DictModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = QueryBuilder::table('user')->where('id', 1);
     * $users = QueryBuilder::table('user')->where('id', '>', 1);
     * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
     * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see DictModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see DictModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see DictModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see DictModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see DictModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see DictModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see DictModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see DictModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see DictModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see DictModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see DictModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * @param mixed $if
     * @param mixed ...$args
     * @return $this
     * @see DictModel::whereIf
     */
    public static function whereIf($if, ...$args): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see DictModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see DictModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see DictModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see DictModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see DictModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see DictModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see DictModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see DictModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see DictModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see DictModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see DictModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see DictModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see DictModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see DictModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see DictModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see DictModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see DictModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see DictModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see DictModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see DictModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see DictModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see DictModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

namespace Miaoxing\Dict\Service;

if (0) {
    class DictItemModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see DictItemModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see DictItemModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see DictItemModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see DictItemModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see DictItemModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see DictItemModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see DictItemModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see DictItemModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see DictItemModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see DictItemModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see DictItemModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see DictItemModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see DictItemModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see DictItemModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictItemModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see DictItemModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictItemModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see DictItemModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see DictItemModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see DictItemModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see DictItemModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictItemModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see DictItemModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see DictItemModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see DictItemModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see DictItemModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see DictItemModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see DictItemModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see DictItemModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see DictItemModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see DictItemModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see DictItemModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see DictItemModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see DictItemModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see DictItemModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see DictItemModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see DictItemModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see DictItemModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see DictItemModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see DictItemModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see DictItemModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see DictItemModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see DictItemModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see DictItemModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see DictItemModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see DictItemModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictItemModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictItemModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictItemModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = QueryBuilder::table('user')->where('id', 1);
         * $users = QueryBuilder::table('user')->where('id', '>', 1);
         * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
         * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see DictItemModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see DictItemModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictItemModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictItemModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictItemModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictItemModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see DictItemModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see DictItemModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictItemModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see DictItemModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see DictItemModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see DictItemModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see DictItemModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * @param mixed $if
         * @param mixed ...$args
         * @return $this
         * @see DictItemModel::whereIf
         */
        public function whereIf($if, ...$args): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see DictItemModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see DictItemModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see DictItemModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see DictItemModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see DictItemModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see DictItemModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see DictItemModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see DictItemModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see DictItemModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see DictItemModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see DictItemModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see DictItemModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see DictItemModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see DictItemModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see DictItemModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictItemModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictItemModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictItemModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see DictItemModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see DictItemModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see DictItemModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see DictItemModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see DictItemModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see DictItemModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class DictModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see DictModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see DictModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see DictModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see DictModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see DictModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see DictModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see DictModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see DictModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see DictModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see DictModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see DictModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see DictModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see DictModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see DictModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see DictModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see DictModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see DictModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see DictModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see DictModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see DictModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see DictModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see DictModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see DictModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see DictModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see DictModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see DictModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see DictModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see DictModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see DictModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see DictModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see DictModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see DictModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see DictModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see DictModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see DictModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see DictModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see DictModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see DictModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see DictModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see DictModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see DictModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see DictModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see DictModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see DictModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see DictModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = QueryBuilder::table('user')->where('id', 1);
         * $users = QueryBuilder::table('user')->where('id', '>', 1);
         * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
         * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see DictModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see DictModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see DictModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see DictModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see DictModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see DictModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see DictModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see DictModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see DictModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see DictModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see DictModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * @param mixed $if
         * @param mixed ...$args
         * @return $this
         * @see DictModel::whereIf
         */
        public function whereIf($if, ...$args): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see DictModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see DictModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see DictModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see DictModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see DictModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see DictModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see DictModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see DictModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see DictModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see DictModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see DictModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see DictModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see DictModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see DictModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see DictModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see DictModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see DictModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see DictModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see DictModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see DictModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see DictModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see DictModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }
}
