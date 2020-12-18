<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphik.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.RaftState</code>
 */
class RaftState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string leader = 1;</code>
     */
    private $leader = '';
    /**
     * Generated from protobuf field <code>.api.Membership membership = 2;</code>
     */
    private $membership = 0;
    /**
     * Generated from protobuf field <code>repeated .api.Peer peers = 3;</code>
     */
    private $peers;
    /**
     * Generated from protobuf field <code>map<string, string> stats = 4;</code>
     */
    private $stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $leader
     *     @type int $membership
     *     @type \Api\Peer[]|\Google\Protobuf\Internal\RepeatedField $peers
     *     @type array|\Google\Protobuf\Internal\MapField $stats
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphik::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string leader = 1;</code>
     * @return string
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * Generated from protobuf field <code>string leader = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->leader = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.Membership membership = 2;</code>
     * @return int
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Generated from protobuf field <code>.api.Membership membership = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMembership($var)
    {
        GPBUtil::checkEnum($var, \Api\Membership::class);
        $this->membership = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .api.Peer peers = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeers()
    {
        return $this->peers;
    }

    /**
     * Generated from protobuf field <code>repeated .api.Peer peers = 3;</code>
     * @param \Api\Peer[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\Peer::class);
        $this->peers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> stats = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Generated from protobuf field <code>map<string, string> stats = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setStats($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->stats = $arr;

        return $this;
    }

}
