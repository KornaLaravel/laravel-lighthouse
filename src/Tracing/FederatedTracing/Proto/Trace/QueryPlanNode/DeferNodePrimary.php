<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\QueryPlanNode;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Trace.QueryPlanNode.DeferNodePrimary</code>
 */
class DeferNodePrimary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Trace.QueryPlanNode node = 1 [json_name = "node"];</code>
     */
    protected $node = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\QueryPlanNode $node
     * }
     */
    public function __construct($data = NULL) {
        \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Trace.QueryPlanNode node = 1 [json_name = "node"];</code>
     * @return \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\QueryPlanNode|null
     */
    public function getNode()
    {
        return $this->node;
    }

    public function hasNode()
    {
        return isset($this->node);
    }

    public function clearNode()
    {
        unset($this->node);
    }

    /**
     * Generated from protobuf field <code>.Trace.QueryPlanNode node = 1 [json_name = "node"];</code>
     * @param \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\QueryPlanNode $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkMessage($var, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace\QueryPlanNode::class);
        $this->node = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeferNodePrimary::class, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace_QueryPlanNode_DeferNodePrimary::class);

