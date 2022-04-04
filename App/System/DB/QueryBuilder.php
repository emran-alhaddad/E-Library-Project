<?php

namespace coding\app\system\DB;

class QueryBuilder
{
    private $pdo;
    private $selectQuery;
    private $insertQuery;
    private $updateQuery;
    private $deleteQuery;
    private $finalQuery;
    public $styledQuery;
    public static $QUERY_TYPE = QueryType::DONE;

    public function __construct($dbName)
    {
        $this->pdo = DBConnection::connect($dbName);
        $this->selectQuery = new SelectQuery();
        $this->insertQuery = new InsertQuery();
        $this->updateQuery = new UpdateQuery();
        $this->deleteQuery = new DeleteQuery();
        $this->finalQuery = "";
        $this->styledQuery = "";
    }


    private function checkQueryState($currentState)
    {
        if (
            self::$QUERY_TYPE != $currentState &&
            self::$QUERY_TYPE != QueryType::DONE
        ) {
            echo "<p style='color:red'> Finish Execution of " . self::$QUERY_TYPE . " Before Execute $currentState again !!!</p>";
            exit;
        }
        self::$QUERY_TYPE = $currentState;
    }

    // Logic between conditions 
    public function or(): self
    {
        $this->selectQuery->setLogic("OR");

        $this->updateQuery->setLogic("OR");
        $this->deleteQuery->setLogic("OR");
        return $this;
    }

    // Logic between conditions 
    public function and(): self
    {
        $this->selectQuery->setLogic('AND');
        $this->updateQuery->setLogic('AND');
        $this->deleteQuery->setLogic('AND');
        return $this;
    }


    // WHERE conditions
    public function where($condition = "1"): self
    {
        if (self::$QUERY_TYPE == QueryType::DONE) {
            $this->fillSelectArgs("where", $condition, func_get_args());
            $this->fillUpdateArgs("where", $condition, func_get_args());
            $this->fillDeleteArgs("where", $condition, func_get_args());
            return $this;
        } else {

            if (self::$QUERY_TYPE == QueryType::SELECT)
                return $this->fillSelectArgs("where", $condition, func_get_args());

            elseif (self::$QUERY_TYPE == QueryType::UPDATE)
                return $this->fillUpdateArgs("where", $condition, func_get_args());

            elseif (self::$QUERY_TYPE == QueryType::DELETE)
                return $this->fillDeleteArgs("where", $condition, func_get_args());

            else {
                echo "<p style='color:red'> Finish Execution of " . self::$QUERY_TYPE . " Before Insert again !!!</p>";
                exit;
            }
        }
    }

    private function styleQuery($query)
    {
        $newLine = "<br>&nbsp;&nbsp;&nbsp;&nbsp;";

        $this->styledQuery = str_replace("SELECT", "<i>SELECT</i> ", $query);
        $this->styledQuery = str_replace("INSERT", "<i>INSERT</i> ", $query);
        $this->styledQuery = str_replace("UPDATE", "<i>UPDATE</i> ", $query);
        $this->styledQuery = str_replace("DELETE", "<i>DELETE</i> ", $query);

        $this->styledQuery = str_replace("DISTINCT", " <i>DISTINCT</i>$newLine", $query);
        $this->styledQuery = str_replace("COUNT", " <i>COUNT</i>", $query);
        $this->styledQuery = str_replace("OR", " <i>OR</i> ", $query);
        $this->styledQuery = str_replace("AND", " <i>AND</i> ", $query);
        $this->styledQuery = str_replace("ON", " <i>ON</i> ", $query);
        $this->styledQuery = str_replace("ASC", " <i>ASC</i> ", $query);
        $this->styledQuery = str_replace("DESC", " <i>DESC</i> ", $query);

        $this->styledQuery = str_replace("INTO", "<i>INTO</i> ", $query);
        $this->styledQuery = str_replace("FROM", "<br><i>FROM</i>$newLine", $query);
        $this->styledQuery = str_replace("VALUES", "<br><i>VALUES</i> ", $query);
        $this->styledQuery = str_replace("SET", "<i>SET</i> ", $query);

        $this->styledQuery = str_replace("WHERE", "<br><i>WHERE</i>$newLine", $query);
        $this->styledQuery = str_replace("GROUP BY", "<br><i>GROUP BY</i> ", $query);
        $this->styledQuery = str_replace("HAVING", "<br><i>HAVING</i> ", $query);
        $this->styledQuery = str_replace("ORDER BY", "<br><i>ORDER BY</i>$newLine", $query);
        $this->styledQuery = str_replace("INNER JOIN", "<br><i>INNER JOIN</i> ", $query);
        $this->styledQuery = str_replace("LEFT JOIN", "<br><i>LEFT JOIN</i> ", $query);
        $this->styledQuery = str_replace("RIGHT JOIN", "<br><i>RIGHT JOIN</i> ", $query);


        $this->styledQuery = str_replace("(", "($newLine", $query);
        $this->styledQuery = str_replace(")", "$newLine)", $query);
        $this->styledQuery = str_replace(",", ",$newLine", $query);
    }

    public function getFinalQuery()
    {
        return $this->finalQuery;
    }

    public function execute()
    {
        try {
            switch (self::$QUERY_TYPE) {
                case QueryType::SELECT:
                    $this->buildSelectQuery();
                    $this->selectQuery->clearAll();

                    break;
                case QueryType::INSERT:
                    $this->buildInsertQuery();
                    $this->insertQuery->clearAll();

                    break;
                case QueryType::UPDATE:
                    $this->buildUpdateQuery();
                    $this->updateQuery->clearAll();

                    break;
                case QueryType::DELETE:
                    $this->buildDeleteQuery();
                    $this->deleteQuery->clearAll();

                    break;
            }


            $stmt = $this->pdo->prepare($this->finalQuery);
            $exec = $stmt->execute();

            if (self::$QUERY_TYPE == QueryType::SELECT) {
                $exec = $stmt->fetchAll(\PDO::FETCH_OBJ);
                self::$QUERY_TYPE = QueryType::DONE;
            }

            $this->selectQuery = new SelectQuery();

            return $exec;
        } catch (\Exception $error) {
            echo "<p style='color:red'>$error;</p>";
            // exit();
        }
    }

    // Sort 
    public function sort($sortType = ORDERBY::ASC): self
    {
        $this->checkQueryState(QueryType::SELECT);
        $this->selectQuery->setSortType($sortType);
        return $this;
    }


    // --------------------------- SELECT QUERY 

    // SELECT [*|fields] 
    public function select($fields = "*"): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("fields", $fields, func_get_args());
    }

    // Count() 
    public function count($fields = "*"): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("count", $fields, func_get_args());
    }

    // SELECT [all|distict] 
    public function distinct(): self
    {
        $this->checkQueryState(QueryType::SELECT);
        $this->selectQuery->settype("distinct");
        return $this;
    }


    // FROM table1[,table2,..]
    public function from($table): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("tables", $table, func_get_args());
    }

    // ORDERBY conditions
    public function orderBy($field): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("orderBy", $field, func_get_args());
    }

    // GROUPBY conditions
    public function groupBy($field): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("groupBy", $field, func_get_args());
    }

    // HAVING conditions
    public function having($condition): self
    {
        $this->checkQueryState(QueryType::SELECT);
        return $this->fillSelectArgs("having", $condition, func_get_args());
    }


    public function innerJoin($table, $on)
    {
        $this->checkQueryState(QueryType::SELECT);
        $this->selectQuery->setJoin("Inner", $table, $on);
        return $this;
    }

    public function leftJoin($table, $on)
    {
        $this->checkQueryState(QueryType::SELECT);
        $this->selectQuery->setJoin("Left", $table, $on);
        return $this;
    }

    public function rightJoin($table, $on)
    {
        $this->checkQueryState(QueryType::SELECT);
        $this->selectQuery->setJoin("Right", $table, $on);
        return $this;
    }






    // -------------- Insert Query Configurations

    public function insertInto($table)
    {
        $this->fillInsertArgs("tables", $table, func_get_args());
        return $this;
    }

    public function fields()
    {

        if (count(func_get_args()) >= 1 && count(func_get_args()[0]) > 1)
            $this->fillInsertArgs("fields", "", func_get_args()[0]);
        else
            $this->fillInsertArgs("fields", "", func_get_args());

        return $this;
    }

    public function values()
    {
        if (count(func_get_args()) >= 1 && count(func_get_args()[0]) > 1)
            $this->fillInsertArgs("values", "", func_get_args()[0]);
        else
            $this->fillInsertArgs("values", "", func_get_args());
        return $this;
    }




    // -------------- Update Query Configurations


    public function update($table)
    {
        $this->checkQueryState(QueryType::UPDATE);
        $this->updateQuery->tables = $table;
        return $this;
    }

    public function set($field, $value)
    {
        $this->checkQueryState(QueryType::UPDATE);
        $this->updateQuery->fields = $field;
        $this->updateQuery->values = $value;
        return $this;
    }



    // -------------- DELETE Query Configurations

    public function delete($table)
    {
        $this->checkQueryState(QueryType::DELETE);
        $this->deleteQuery->tables = $table;
        return $this;
    }



    // -----------------------------------

    //  ---------------- Build Queries 

    private function buildSelectQuery()
    {
        // get Count
        $count = implode(", ", $this->selectQuery->count);

        // get Fields
        $fields = implode(", ", $this->selectQuery->fields);

        // get tables
        $tables = implode(", ", $this->selectQuery->tables);

        // get InnerJoin
        $innerJoin  = "";
        foreach ($this->selectQuery->innerJoin as $row)
            foreach ($row as $table => $cols) {
                $innerJoin .= " INNER JOIN " . $table . " ON " . $cols . " ";
            }

        // get LeftJoin
        $leftJoin  = "";
        foreach ($this->selectQuery->leftJoin as $row)
            foreach ($row as $table => $cols) {
                $leftJoin .= " LEFT JOIN " . $table . " ON " . $cols . " ";
            }

        // get RightJoin
        $rigthJoin  = "";
        foreach ($this->selectQuery->rightJoin as $row)
            foreach ($row as $table => $cols) {
                $rigthJoin .= " RIGHT JOIN " . $table . " ON " . $cols . " ";
            }

        // get  Where Conditions
        $wheres = implode(" ", $this->selectQuery->where);

        // get Group By Conditions
        $groups = implode(', ', $this->selectQuery->groupBy);

        // get Having Conditions
        $havings = implode($this->selectQuery->logic, $this->selectQuery->having);

        // get Order By Conditions
        $orders = implode(', ', $this->selectQuery->orderBy);

        if (!empty($count)) $count = " COUNT(" . $count . ")";
        if (!empty($wheres)) $wheres = " WHERE " . $wheres;
        if (!empty($groups)) $groups = " GROUP BY " . $groups;
        if (!empty($havings)) $havings = " HAVING " .  $havings;
        if (!empty($orders)) $orders = " ORDER BY " .  $orders;

        if (!empty($fields) && !empty($count)) $count .= " , ";

        $this->finalQuery = "SELECT " .
            $this->selectQuery->type . " " . $count . " " .
            $fields . " FROM " . $tables . $innerJoin . $leftJoin . $rigthJoin
            . $wheres .  $groups .
            $havings .  $orders;

        $this->styleQuery($this->finalQuery);
    }

    private function buildInsertQuery()
    {
        // get Fields
        $fields = implode(", ", $this->insertQuery->fields);

        // get tables
        $tables = implode(", ", $this->insertQuery->tables);

        // get values
        $values = implode(", ", $this->insertQuery->values);

        if (!empty($fields)) $fields = " ( " . $fields . " ) ";
        if (!empty($values)) $values = " ( " . $values . " ) ";


        $this->finalQuery = "INSERT INTO " . $tables . $fields . " VALUES" . $values;
        $this->styleQuery($this->finalQuery);
    }

    private function buildUpdateQuery()
    {
        // get tables
        $tables = implode(", ", $this->updateQuery->tables);

        // get parameters of update query as key=value
        $params = "";
        for ($i = 0; $i < sizeof($this->updateQuery->fields); $i++)
            $params .= " " . $this->updateQuery->fields[$i] . "=" . $this->updateQuery->values[$i] . " ,";

        // get conditions
        $wheres = implode(" ", $this->updateQuery->where);

        if (!empty($params)) $params = " SET " . substr_replace($params, "", -1);
        if (!empty($wheres)) $wheres = " WHERE " . $wheres;

        $this->finalQuery = "UPDATE " . $tables . $params . $wheres;
        $this->styleQuery($this->finalQuery);
    }

    private function buildDeleteQuery()
    {

        // get tables
        $tables = implode(", ", $this->deleteQuery->tables);

        // get conditions
        $wheres = implode(" ", $this->deleteQuery->where);

        if (!empty($wheres)) $wheres = " WHERE " . $wheres;


        $this->finalQuery = $this->styledQuery = "DELETE FROM " . $tables . $wheres;
        $this->styleQuery($this->finalQuery);
    }


    // -------------------- Fill Arguments Templates

    private function fillSelectArgs($property, $default, $args)
    {
        $logic = (strtoupper($property) === "WHERE" || strtoupper($property) === "HAVING") ?
            $this->selectQuery->logic : "";

        $sortType = (strtoupper($property) === "ORDERBY") ?
            " " . $this->selectQuery->sortType : "";

        if (count($args) > 1)
            foreach ($args as $arg) {
                $this->selectQuery->$property =  $logic . $arg . $sortType;
            }
        else {
            if (count($this->selectQuery->$property) >= 1)
                $this->selectQuery->$property = $logic . $default . $sortType;
            else
                $this->selectQuery->$property = $default . $sortType;
        }


        return $this;
    }

    private function fillInsertArgs($property, $default, $args)
    {
        $this->checkQueryState(QueryType::INSERT);
        if (count($args) > 1)
            foreach ($args as $arg) {
                $this->insertQuery->$property =  $arg;
            }
        else $this->insertQuery->$property = $default;
        return $this;
    }

    private function fillUpdateArgs($property, $default, $args)
    {
        $logic = (strtoupper($property) === "WHERE") ?
            $this->updateQuery->logic : "";


        if (count($args) > 1)
            foreach ($args as $arg) {
                $this->updateQuery->$property =  $logic . $arg;
            }
        else {
            if (count($this->updateQuery->$property) >= 1)
                $this->updateQuery->$property = $logic . $default;
            else
                $this->updateQuery->$property = $default;
        }

        return $this;
    }

    private function fillDeleteArgs($property, $default, $args)
    {
        $logic = (strtoupper($property) === "WHERE") ?
            $this->updateQuery->logic : "";


        if (count($args) > 1)
            foreach ($args as $arg) {
                $this->deleteQuery->$property =  $logic . $arg;
            }
        else {
            if (count($this->deleteQuery->$property) >= 1)
                $this->deleteQuery->$property = $logic . $default;
            else
                $this->deleteQuery->$property = $default;
        }


        return $this;
    }
}
