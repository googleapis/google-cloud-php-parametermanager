<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parametermanager/v1/service.proto

namespace Google\Cloud\ParameterManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to listing Parameters
 *
 * Generated from protobuf message <code>google.cloud.parametermanager.v1.ListParametersResponse</code>
 */
class ListParametersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Parameters
     *
     * Generated from protobuf field <code>repeated .google.cloud.parametermanager.v1.Parameter parameters = 1;</code>
     */
    private $parameters;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ParameterManager\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           The list of Parameters
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unordered list. Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parametermanager\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Parameters
     *
     * Generated from protobuf field <code>repeated .google.cloud.parametermanager.v1.Parameter parameters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * The list of Parameters
     *
     * Generated from protobuf field <code>repeated .google.cloud.parametermanager.v1.Parameter parameters = 1;</code>
     * @param array<\Google\Cloud\ParameterManager\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ParameterManager\V1\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unordered list. Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3 [(.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

