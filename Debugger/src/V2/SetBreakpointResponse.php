<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for setting a breakpoint.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.SetBreakpointResponse</code>
 */
class SetBreakpointResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Breakpoint resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fileds).
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 1;</code>
     */
    private $breakpoint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Debugger\V2\Breakpoint $breakpoint
     *           Breakpoint resource.
     *           The field `id` is guaranteed to be set (in addition to the echoed fileds).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct($data);
    }

    /**
     * Breakpoint resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fileds).
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 1;</code>
     * @return \Google\Cloud\Debugger\V2\Breakpoint
     */
    public function getBreakpoint()
    {
        return $this->breakpoint;
    }

    /**
     * Breakpoint resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fileds).
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 1;</code>
     * @param \Google\Cloud\Debugger\V2\Breakpoint $var
     * @return $this
     */
    public function setBreakpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\Breakpoint::class);
        $this->breakpoint = $var;

        return $this;
    }

}

