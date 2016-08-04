<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/8/4
 * Time: 21:49
 */
class ValidataClass
{
    protected $ip;
    protected $email;
    protected $int;
    protected $url;
    protected $sanitizeEmail;
    protected $sanitizeNumberInt;

    /*************IP的验证**************/
    public function getIp()
    {
        $filterIp = $this->ip;
        if (filter_var($filterIp, FILTER_VALIDATE_IP)) {
            echo "您输入的IP为：$filterIp,是正确的";
        } else {
            echo "您输入的IP为：$filterIp,是错误的";
        }
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**************邮箱的验证************/

    public function getEmail()
    {
        $filterEmail = $this->email;
        if (filter_var($filterEmail, FILTER_VALIDATE_EMAIL)) {
            echo "您的邮箱为：$filterEmail,是正确的";
        } else {
            echo "您的邮箱为：$filterEmail,是错误的";
        }

    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /***********在指定范围以整数验证值*****/

    public function getInt()
    {
        $int     = $this->int;
        $options = array('options' => array('min_range' => 0, 'max_range' => 3));
        if (filter_var($int, FILTER_VALIDATE_INT, $options) !== false) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function setInt($int)
    {
        $this->int = $int;
    }

    /*************url验证******************/

    public function getUrl()
    {
        $filterUrl = $this->url;
        if (filter_var($filterUrl, FILTER_VALIDATE_URL)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    /*************过滤邮箱中一些()//等字符******************/

    public function getSanitizeEmail()
    {
        $email = $this->sanitizeEmail;
        var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    }

    public function setSanitizeEmail($sanitizeEmail)
    {
        $this->sanitizeEmail = $sanitizeEmail;
    }

    /*******************过滤除+—符号之外的其他字符*********************/

    public function getSanitizeNumberInt()
    {
        $numberInt = $this->sanitizeNumberInt;
        var_dump(filter_var($numberInt, FILTER_SANITIZE_NUMBER_INT));
    }

    public function setSanitizeNumberInt($sanitizeNumberInt)
    {
        $this->sanitizeNumberInt = $sanitizeNumberInt;
    }
}
