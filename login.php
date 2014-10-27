<?php

class Database {
	/*
	 * Edit the following variables
	 */

	private $db_host = 'localhost';  // Database Host
	private $db_user = 'root';	// Username
	private $db_pass = '';	// Password
	private $db_name = 'test';//'zend_project';	// Database
	/*
	 * End edit
	 */
	private $con = false;	  // Checks to see if the connection is active
	private $result = array();	// Results that are returned from the query

	/*
	 * Connects to the database, only one connection
	 * allowed
	 */

	public function connect() {
		if (!$this->con) {
			$myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
			if ($myconn) {
				$seldb = @mysql_select_db($this->db_name, $myconn);
				if ($seldb) {
					$this->con = true;
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return true;
		}
	}

	/*
	 * Changes the new database, sets all current results
	 * to null
	 */

	public function setDatabase($name) {
		if ($this->con) {
			if (@mysql_close()) {
				$this->con = false;
				$this->results = null;
				$this->db_name = $name;
				$this->connect();
			}
		}
	}

	/*
	 * Checks to see if the table exists when performing
	 * queries
	 */

	private function tableExists($table) {
		$tablesInDb = @mysql_query('SHOW TABLES FROM ' . $this->db_name . ' LIKE "' . $table . '"');
		if ($tablesInDb) {
			if (mysql_num_rows($tablesInDb) == 1) {
				return true;
			} else {
				return false;
			}
		}
	}

	/*
	 * Selects information from the database.
	 * Required: table (the name of the table)
	 * Optional: rows (the columns requested, separated by commas)
	 *           where (column = value as a string)
	 *           order (column DIRECTION as a string)
	 */

	public function select($table, $rows = '*', $where = null, $order = null) {
		$q = 'SELECT ' . $rows . ' FROM ' . $table;
		if ($where != null) {
			$q .= ' WHERE ' . $where;
		}
		if ($order != null) {
			$q .= ' ORDER BY ' . $order;
		}
		$query = @mysql_query($q);
		if ($query) {
			while ($row = mysql_fetch_assoc($query)) {
				$this->result[]=$row;
			}
			return true;
		} else {
			return false;
		}
	}

	/*
	 * Insert values into the table
	 * Required: table (the name of the table)
	 *           values (the values to be inserted)
	 * Optional: rows (if values don't match the number of rows)
	 */

	public function insert($table, $values, $rows = null) {
		if ($this->tableExists($table)) {
			$insert = 'INSERT INTO ' . $table;
			if ($rows != null) {
				$insert .= ' (' . $rows . ')';
			}

			for ($i = 0; $i < count($values); $i++) {
				if (is_string($values[$i]))
					$values[$i] = '"' . $values[$i] . '"';
			}
			$values = implode(',', $values);
			$insert .= ' VALUES (' . $values . ')';

			$ins = @mysql_query($insert);

			if ($ins) {
				return true;
			} else {
				return false;
			}
		}
	}

	/*
	 * Deletes table or records where condition is true
	 * Required: table (the name of the table)
	 * Optional: where (condition [column =  value])
	 */

	public function delete($table, $where = null) { //print_r($where);
		$where = implode('=', $where);
		if ($this->tableExists($table)) {
			if ($where == null) {
				$delete = 'DELETE ' . $table;
			} else {
				$delete = 'DELETE FROM ' . $table . ' WHERE ' . $where;
				//print_r($delete);
				//exit;
			}
			$del = @mysql_query($delete);

			if ($del) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/*
	 * Updates the database with the values sent
	 * Required: table (the name of the table to be updated
	 *           rows (the rows/values in a key/value array
	 *           where (the row/condition in an array (row,condition) )
	 */

	public function update($table, $rows, $where) {
		if ($this->tableExists($table)) {
			// Parse the where values
			// even values (including 0) contain the where rows
			// odd values contain the clauses for the row
			for ($i = 0; $i < count($where); $i++) {
				if ($i % 2 != 0) {
					if (is_string($where[$i])) {
						if (($i + 1) != null)
						//$where[$i] = '"'.$where[$i].'" AND ';
							$where[$i] = '' . $where[$i] . '  ';
						else
							$where[$i] = '"' . $where[$i] . '"';
					}
				}
			}
			$where = implode('=', $where);

			$update = 'UPDATE ' . $table . ' SET ';
			//print_r($update);
			//exit;
			$keys = array_keys($rows);
			for ($i = 0; $i < count($rows); $i++) {
				if (is_string($rows[$keys[$i]])) {
					$update .= $keys[$i] . '="' . $rows[$keys[$i]] . '"';
					//echo $update;
					//exit;
				} else {
					$update .= $keys[$i] . '=' . $rows[$keys[$i]];
					//echo $update;
					//exit
				}

				// Parse to add commas
				if ($i != count($rows) - 1) {
					$update .= ',';
				}
			}
			$update .= ' WHERE ' . $where;
			//echo $update;
			//exit;
			$query = @mysql_query($update);
			//echo $query;
			//exit;
			if ($query) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/*
	 * Returns the result set
	 */

	public function getResult() {
		echo json_encode($this->result);
	}

	public function index() {
		$id = isset($_POST['id'])?$_POST['id']:'';
		$name = isset($_POST['name'])?$_POST['name']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$option = $_POST['option'];
		$this->connect();
		switch ($option) {
			case 'insert':
				$this->insert('mysqlcrud', array($id, $name, $email));
				$this->select('mysqlcrud');
				$this->getResult();
				break;
			case 'update':
				$this->update('mysqlcrud', array('name' => $name), array('id', $id));
				$this->getResult();
				break;
			case 'delete':
				$this->delete('mysqlcrud', array('id', $id));
				$this->select('mysqlcrud');
				$this->getResult();
				break;
			case 'select':
				$this->select('mysqlcrud');
				$this->getResult();
				break;
			default :
				echo "not found";
		}
	}

}

$db = new Database();
$db->index();
?>