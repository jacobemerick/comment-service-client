<?php
/**
 * Body
 *
 * PHP version 5
 *
 * @category Class
 * @package  Jacobemerick\CommentService
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Jacobemerick\CommentService\Model;

use \ArrayAccess;
/**
 * Body Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Jacobemerick\CommentService
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'commenter' => '\Jacobemerick\CommentService\Model\CommentsCommenter',
        'body' => 'string',
        'should_notify' => 'bool',
        'should_display' => 'bool',
        'domain' => 'string',
        'path' => 'string',
        'url' => 'string',
        'thread' => 'string',
        'reply_to' => 'string',
        'ip_address' => 'string',
        'user_agent' => 'string',
        'referrer' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'commenter' => 'commenter',
        'body' => 'body',
        'should_notify' => 'should_notify',
        'should_display' => 'should_display',
        'domain' => 'domain',
        'path' => 'path',
        'url' => 'url',
        'thread' => 'thread',
        'reply_to' => 'reply_to',
        'ip_address' => 'ip_address',
        'user_agent' => 'user_agent',
        'referrer' => 'referrer'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'commenter' => 'setCommenter',
        'body' => 'setBody',
        'should_notify' => 'setShouldNotify',
        'should_display' => 'setShouldDisplay',
        'domain' => 'setDomain',
        'path' => 'setPath',
        'url' => 'setUrl',
        'thread' => 'setThread',
        'reply_to' => 'setReplyTo',
        'ip_address' => 'setIpAddress',
        'user_agent' => 'setUserAgent',
        'referrer' => 'setReferrer'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'commenter' => 'getCommenter',
        'body' => 'getBody',
        'should_notify' => 'getShouldNotify',
        'should_display' => 'getShouldDisplay',
        'domain' => 'getDomain',
        'path' => 'getPath',
        'url' => 'getUrl',
        'thread' => 'getThread',
        'reply_to' => 'getReplyTo',
        'ip_address' => 'getIpAddress',
        'user_agent' => 'getUserAgent',
        'referrer' => 'getReferrer'
    );
  
    
    /**
      * $commenter 
      * @var \Jacobemerick\CommentService\Model\CommentsCommenter
      */
    protected $commenter;
    
    /**
      * $body 
      * @var string
      */
    protected $body;
    
    /**
      * $should_notify 
      * @var bool
      */
    protected $should_notify;
    
    /**
      * $should_display 
      * @var bool
      */
    protected $should_display;
    
    /**
      * $domain 
      * @var string
      */
    protected $domain;
    
    /**
      * $path 
      * @var string
      */
    protected $path;
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    
    /**
      * $thread 
      * @var string
      */
    protected $thread;
    
    /**
      * $reply_to 
      * @var string
      */
    protected $reply_to;
    
    /**
      * $ip_address 
      * @var string
      */
    protected $ip_address;
    
    /**
      * $user_agent 
      * @var string
      */
    protected $user_agent;
    
    /**
      * $referrer 
      * @var string
      */
    protected $referrer;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->commenter = $data["commenter"];
            $this->body = $data["body"];
            $this->should_notify = $data["should_notify"];
            $this->should_display = $data["should_display"];
            $this->domain = $data["domain"];
            $this->path = $data["path"];
            $this->url = $data["url"];
            $this->thread = $data["thread"];
            $this->reply_to = $data["reply_to"];
            $this->ip_address = $data["ip_address"];
            $this->user_agent = $data["user_agent"];
            $this->referrer = $data["referrer"];
        }
    }
    
    /**
     * Gets commenter
     * @return \Jacobemerick\CommentService\Model\CommentsCommenter
     */
    public function getCommenter()
    {
        return $this->commenter;
    }
  
    /**
     * Sets commenter
     * @param \Jacobemerick\CommentService\Model\CommentsCommenter $commenter 
     * @return $this
     */
    public function setCommenter($commenter)
    {
        
        $this->commenter = $commenter;
        return $this;
    }
    
    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
  
    /**
     * Sets body
     * @param string $body 
     * @return $this
     */
    public function setBody($body)
    {
        
        $this->body = $body;
        return $this;
    }
    
    /**
     * Gets should_notify
     * @return bool
     */
    public function getShouldNotify()
    {
        return $this->should_notify;
    }
  
    /**
     * Sets should_notify
     * @param bool $should_notify 
     * @return $this
     */
    public function setShouldNotify($should_notify)
    {
        
        $this->should_notify = $should_notify;
        return $this;
    }
    
    /**
     * Gets should_display
     * @return bool
     */
    public function getShouldDisplay()
    {
        return $this->should_display;
    }
  
    /**
     * Sets should_display
     * @param bool $should_display 
     * @return $this
     */
    public function setShouldDisplay($should_display)
    {
        
        $this->should_display = $should_display;
        return $this;
    }
    
    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
  
    /**
     * Sets domain
     * @param string $domain 
     * @return $this
     */
    public function setDomain($domain)
    {
        
        $this->domain = $domain;
        return $this;
    }
    
    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
  
    /**
     * Sets path
     * @param string $path 
     * @return $this
     */
    public function setPath($path)
    {
        
        $this->path = $path;
        return $this;
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
        return $this;
    }
    
    /**
     * Gets thread
     * @return string
     */
    public function getThread()
    {
        return $this->thread;
    }
  
    /**
     * Sets thread
     * @param string $thread 
     * @return $this
     */
    public function setThread($thread)
    {
        
        $this->thread = $thread;
        return $this;
    }
    
    /**
     * Gets reply_to
     * @return string
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }
  
    /**
     * Sets reply_to
     * @param string $reply_to 
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        
        $this->reply_to = $reply_to;
        return $this;
    }
    
    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }
  
    /**
     * Sets ip_address
     * @param string $ip_address 
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        
        $this->ip_address = $ip_address;
        return $this;
    }
    
    /**
     * Gets user_agent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }
  
    /**
     * Sets user_agent
     * @param string $user_agent 
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        
        $this->user_agent = $user_agent;
        return $this;
    }
    
    /**
     * Gets referrer
     * @return string
     */
    public function getReferrer()
    {
        return $this->referrer;
    }
  
    /**
     * Sets referrer
     * @param string $referrer 
     * @return $this
     */
    public function setReferrer($referrer)
    {
        
        $this->referrer = $referrer;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
