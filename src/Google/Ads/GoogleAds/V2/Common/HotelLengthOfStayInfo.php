<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criterion for length of hotel stay in nights.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.HotelLengthOfStayInfo</code>
 */
final class HotelLengthOfStayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     */
    private $min_nights = null;
    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     */
    private $max_nights = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $min_nights
     *           Low end of the number of nights in the stay.
     *     @type \Google\Protobuf\Int64Value $max_nights
     *           High end of the number of nights in the stay.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getMinNights()
    {
        return $this->min_nights;
    }

    /**
     * Returns the unboxed value from <code>getMinNights()</code>

     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @return int|string|null
     */
    public function getMinNightsUnwrapped()
    {
        $wrapper = $this->getMinNights();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMinNights($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->min_nights = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMinNightsUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setMinNights($wrappedVar);
    }

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getMaxNights()
    {
        return $this->max_nights;
    }

    /**
     * Returns the unboxed value from <code>getMaxNights()</code>

     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @return int|string|null
     */
    public function getMaxNightsUnwrapped()
    {
        $wrapper = $this->getMaxNights();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMaxNights($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->max_nights = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMaxNightsUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setMaxNights($wrappedVar);
    }

}
