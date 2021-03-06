<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/completion_service.proto

namespace Google\Cloud\Talent\V4beta1\CompleteQueryRequest;

/**
 * Enum to specify auto-completion topics.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionType</code>
 */
class CompletionType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>COMPLETION_TYPE_UNSPECIFIED = 0;</code>
     */
    const COMPLETION_TYPE_UNSPECIFIED = 0;
    /**
     * Only suggest job titles.
     *
     * Generated from protobuf enum <code>JOB_TITLE = 1;</code>
     */
    const JOB_TITLE = 1;
    /**
     * Only suggest company names.
     *
     * Generated from protobuf enum <code>COMPANY_NAME = 2;</code>
     */
    const COMPANY_NAME = 2;
    /**
     * Suggest both job titles and company names.
     *
     * Generated from protobuf enum <code>COMBINED = 3;</code>
     */
    const COMBINED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompletionType::class, \Google\Cloud\Talent\V4beta1\CompleteQueryRequest_CompletionType::class);

