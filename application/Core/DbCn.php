<?php
class DbCn
{
	/**
	 * @var MyPdo
	 */
	protected static $_instance;

	/**
	 * @var Pdo
	 */
	protected $_pdo;

	/**
	 * Creates instance and returns it on subsequent calls
	 *
	 * @throws  InvalidArgumentException
	 * @param   array $options PDO connection data
	 * @returns MyPdo
	 */
	public static function getInstance(array $options = NULL)
	{
		if(self::$_instance === NULL) {

			if($options === NULL) {
				throw new InvalidArgumentException(
						'You must supply connection options on first run');
			}

			// call constructor with given options and assign instance
			self::$_instance = new self(
					$options['dsn'],
					$options['user'],
					$options['password'],
					$options['driver_options']
			);
		}

		return self::$_instance;
	}

	/**
	 * Creates new MyPdo wrapping a PDO instance
	 *
	 * @throws PDOException
	 * @param  String $dsn
	 * @param  String $user
	 * @param  String $password
	 * @param  Array  $driver_options
	 * @return void
	 */
	private function __construct($dsn, $user, $password, $driver_options)
	{
		try {
			$this->_pdo = new PDO($dsn, $user, $password, $driver_options);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}

	/**
	 * Singletons may not be cloned
	 */
	private function __clone() {
	}

	/**
	 * Delegate every get to PDO instance
	 *
	 * @param  String $name
	 * @return Mixed
	 */
	public function __get($name)
	{
		return $this->_pdo->$name;
	}

	/**
	 * Delegate every set to PDO instance
	 *
	 * @param  String $name
	 * @param  Mixed  $val
	 * @return Mixed
	 */
	public function __set($name, $val)
	{
		return $this->_pdo->$name = $val;
	}

	/**
	 * Delegate every method call to PDO instance
	 *
	 * @param  String $method
	 * @param  Array  $args
	 * @return Mixed
	 */
	public function __call($method, $args) {
		return call_user_func_array(array($this->_pdo, $method), $args);
	}
}
