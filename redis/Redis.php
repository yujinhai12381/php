<?php
class YC_Redis {

    private static $_INSTANCE = array();

    public static function getInstance($keyName,$config) {
        if(!isset(self::$_INSTANCE[$keyName])) {
            var_export($config);
            self::$_INSTANCE[$keyName] = new self($config);
        }
        return self::$_INSTANCE[$keyName];
    }

    private $_redis = null;

    private function __construct($config) {
        $this->_redis = new Redis();
        if(array_key_exists('port',$config)) {
            $this->_redis->connect($config['host'][0],$config['port']);
        } else {
            $this->_redis->connect($config['host'][0],6379);
        }

        $this->_redis->select($config['prefix']);
        $this->_redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_IGBINARY);
    }

    public function set($key, $value, $expire = 0) {
        if(empty($key)) return false;
        try {
            return $this->_redis->set($key, $value, $expire);
        } catch(Exception $e) {
            error_log($key . " key set value into redis failed.");
            error_log($e);
            return false;
        }
    }

    public function get($key) {
        if(empty($key)) return false;
        try {
            return $this->_redis->get($key);
        } catch(Exception $e) {
            error_log($key . " key get value from redis failed.");
            error_log($e);
            return false;
        }
    }
    
    public function deleteByPrefix($prefix) {
        if(empty($prefix)) return false; 
        try {
            return $this->_redis->deleteByPrefix($prefix);
        } catch(Exception $e) {
            error_log($prefix . " deleteByPrefix from redis failed.");
            error_log($e);
            return false;
        }
    }

    public function delete($key) {
        if (empty($key)) {
            return false;
        }
        try {
            return $this->_redis->delete($key);
        } catch(Exception $e) {
            error_log($key . " delete from redis failed.");
            error_log($e);
            return false;
        }
    }
}
