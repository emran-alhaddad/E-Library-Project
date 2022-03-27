<?php

require_once('SelectQuery.php');
require_once('InsertQuery.php');
require_once('UpdateQuery.php');
require_once('DeleteQuery.php');
require_once('DBConnection.php');


abstract class QueryType
{
    public  const SELECT = "SELECT Query";
    public  const INSERT = "INSERT Query";
    public  const UPDATE = "UPDATE Query";
    public  const DELETE = "DELETE Query";
    public  const DONE = 1005;
}


class QueryBuilder
{


    private $pdo;
    private $selectQuery;
    private $insertQuery;
    private $updateQuery;
    private $deleteQuery;
    private static $QUERY_TYPE = QueryType::DONE;
    private $finalQuery;
    public $styledQuery;

    public function __construct($dbName="")
    {
        $this->pdo = DBConnection::connect($dbName);
        $this->selectQuery = new SelectQuery();
        $this->insertQuery = new InsertQuery();
        $this->updateQuery = new UpdateQuery();
        $this->deleteQuery = new DeleteQuery();
        $this->finalQuery = "";
        $this->styledQuery = "";
    }

    private function checkSelectState()
    {
        if (
            self::$QUERY_TYPE != QueryType::SELECT &&
            self::$QUERY_TYPE != QueryType::DONE
        ) {
            echo "<p style='color:red'> Finish Execution of ".self::$QUERY_TYPE ." Before Select again !!!</p>";
            exit;
        }
        self::$QUERY_TYPE = QueryType::SELECT;
    }

    // SELECT [*|fields] 
    public function select($fields = "*"): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("fields", $fields, func_get_args());
    }

    // Count() 
    public function count($fields = "*"): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("count", $fields, func_get_args());
    }

    // Sort 
    public function sort($sortType = ORDERBY::ASC): self
    {
        $this->checkSelectState();
        $this->selectQuery->setSortType($sortType);
        return $this;
    }

    // SELECT [all|distict] 
    public function distinct(): self
    {
        $this->checkSelectState();
        $this->selectQuery->settype("distinct");
        return $this;
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

    // FROM table1[,table2,..]
    public function from($table): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("tables", $table, func_get_args());
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
                echo "<p style='color:red'> Finish Execution of ".self::$QUERY_TYPE ." Before Insert again !!!</p>";
                exit;
            }
        }
    }


    // GROUPBY conditions
    public function groupBy($field): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("groupBy", $field, func_get_args());
    }

    // HAVING conditions
    public function having($condition): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("having", $condition, func_get_args());
    }

    // ORDERBY conditions
    public function orderBy($field): self
    {
        $this->checkSelectState();
        return $this->fillSelectArgs("orderBy", $field, func_get_args());
    }

    public function innerJoin($table, $on)
    {
        $this->checkSelectState();
        $this->selectQuery->setJoin("Inner", $table, $on);
        return $this;
    }

    public function leftJoin($table, $on)
    {
        $this->checkSelectState();
        $this->selectQuery->setJoin("Left", $table, $on);
        return $this;
    }

    public function rightJoin($table, $on)
    {
        $this->checkSelectState();
        $this->selectQuery->setJoin("Right", $table, $on);
        return $this;
    }

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



        $this->styledQuery = "SELECT" . $this->selectQuery->type . $count .
            $fields . "FROM " . $tables . $innerJoin . $leftJoin . $rigthJoin
            . $wheres .  $groups .
            $havings .  $orders;

        $newLine = "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $this->styledQuery = str_replace("SELECT", "<i>SELECT</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("DISTINCT", " <i>DISTINCT</i>$newLine", $this->styledQuery);
        $this->styledQuery = str_replace("COUNT", " <i>COUNT</i>", $this->styledQuery);
        $this->styledQuery = str_replace("FROM", "<br><i>FROM</i>$newLine", $this->styledQuery);
        $this->styledQuery = str_replace("WHERE", "<br><i>WHERE</i>$newLine", $this->styledQuery);
        $this->styledQuery = str_replace("GROUP BY", "<br><i>GROUP BY</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("HAVING", "<br><i>HAVING</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("ORDER BY", "<br><i>ORDER BY</i>$newLine", $this->styledQuery);
        $this->styledQuery = str_replace(", ", ", $newLine", $this->styledQuery);
        $this->styledQuery = str_replace("INNER JOIN", "<br><i>INNER JOIN</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("LEFT JOIN", "<br><i>LEFT JOIN</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("RIGHT JOIN", "<br><i>RIGHT JOIN</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("ON", " <i>ON</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("ASC", " <i>ASC</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("DESC", " <i>DESC</i> ", $this->styledQuery);
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
                    break;
                case QueryType::INSERT:
                    $this->buildInsertQuery();
                    break;
                case QueryType::UPDATE:
                    $this->buildUpdateQuery();
                    break;
                case QueryType::DELETE:
                    $this->buildDeleteQuery();
                    break;
            }

            $stmt = $this->pdo->prepare($this->finalQuery);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $error) {
            echo "<p style='color:red'>$error;</p>";
            // exit();
        }
    }


    // -------------- Insert Query Configurations

    private function checkInsertState()
    {
        if (
            self::$QUERY_TYPE != QueryType::INSERT &&
            self::$QUERY_TYPE != QueryType::DONE
        ) {
            echo "<p style='color:red'> Finish Execution of ".self::$QUERY_TYPE ." Before Insert again !!!</p>";
            exit;
        }
        self::$QUERY_TYPE = QueryType::INSERT;
    }

    public function insertInto($table)
    {
        $this->fillInsertArgs("tables", $table, func_get_args());
        return $this;
    }

    public function fields()
    {

        $this->fillInsertArgs("fields", "", func_get_args());
        print_r($this->insertQuery);
        return $this;
    }

    public function values()
    {
        $this->fillInsertArgs("values", "", func_get_args());
        return $this;
    }

    private function buildInsertQuery()
    {
        print_r($this->insertQuery->fields);
        // get Fields
        $fields = implode(", ", $this->insertQuery->fields);

        // get tables
        $tables = implode(", ", $this->insertQuery->tables);

        // get values
        $values = implode(", ", $this->insertQuery->values);

        if (!empty($fields)) $fields = " ( " . $fields . " ) ";
        if (!empty($values)) $values = " ( " . $values . " ) ";


        $this->finalQuery = $this->styledQuery
            = "INSERT INTO " . $tables . $fields . " VALUES" . $values;

        $newLine = "<br>&nbsp;&nbsp;&nbsp;&nbsp;";
        $this->styledQuery = str_replace("INSERT", "<i>INSERT</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("INTO", "<i>INTO</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("VALUES", "<br><i>VALUES</i> ", $this->styledQuery);
        $this->styledQuery = str_replace("(", "($newLine", $this->styledQuery);
        $this->styledQuery = str_replace(")", "$newLine)", $this->styledQuery);
        $this->styledQuery = str_replace(",", ",$newLine", $this->styledQuery);
    }


    // -------------- Update Query Configurations

    private function checkUpdateState()
    {
        if (
            self::$QUERY_TYPE != QueryType::UPDATE &&
            self::$QUERY_TYPE != QueryType::DONE
        ) {
            echo "<p style='color:red'> Finish Execution of ".self::$QUERY_TYPE ." Before Update again !!!</p>";
            exit;
        }
        self::$QUERY_TYPE = QueryType::UPDATE;
    }

    public function update($table)
    {
        $this->checkUpdateState();
        $this->updateQuery->tables = $table;
        return $this;
    }

    public function set($field, $value)
    {
        $this->checkUpdateState();
        $this->updateQuery->fields = $field;
        $this->updateQuery->values = $value;
        return $this;
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





        $this->finalQuery = $this->styledQuery = "UPDATE " . $tables . $params . $wheres;

        $newLine = "<br>&nbsp;&nbsp;&nbsp;&nbsp;";
        $this->styledQuery = str_replace("UPDATE", "<i>UPDATE</i> ", $this->finalQuery);
        $this->styledQuery = str_replace("SET", "<i>SET</i> ", $this->finalQuery);
        $this->styledQuery = str_replace("WHERE", "<i>WHERE</i> ", $this->finalQuery);
        $this->styledQuery = str_replace(",", ",$newLine", $this->finalQuery);
    }


    // -------------- DELETE Query Configurations

    private function checkDeleteState()
    {
        if (
            self::$QUERY_TYPE != QueryType::DELETE &&
            self::$QUERY_TYPE != QueryType::DONE
        ) {
            echo "<p style='color:red'> Finish Execution of ".self::$QUERY_TYPE ." Before Delete again !!!</p>";
            exit;
        }
        self::$QUERY_TYPE = QueryType::DELETE;
    }

    public function delete($table)
    {
        $this->checkDeleteState();
        $this->deleteQuery->tables = $table;
        return $this;
    }


    private function buildDeleteQuery()
    {

        // get tables
        $tables = implode(", ", $this->deleteQuery->tables);

        // get conditions
        $wheres = implode(" ", $this->deleteQuery->where);

        if (!empty($wheres)) $wheres = " WHERE " . $wheres;


        $this->finalQuery = $this->styledQuery = "DELETE FROM " . $tables . $wheres;

        $newLine = "<br>&nbsp;&nbsp;&nbsp;&nbsp;";
        $this->styledQuery = str_replace("DELETE", "<i>DELETE</i> ", $this->finalQuery);
        $this->styledQuery = str_replace("FROM", "<i>FROM</i> ", $this->finalQuery);
        $this->styledQuery = str_replace("WHERE", "<i>WHERE</i> ", $this->finalQuery);
        $this->styledQuery = str_replace(",", ",$newLine", $this->finalQuery);
    }


    // -----------------------------------

    // Fill Arguments Templates

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
        $this->checkInsertState();
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
