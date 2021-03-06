<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/currency_constant.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A currency constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.CurrencyConstant</code>
 */
class CurrencyConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{currency_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = null;
    /**
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue symbol = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $symbol = null;
    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value billable_unit_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billable_unit_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the currency constant.
     *           Currency constant resource names have the form:
     *           `currencyConstants/{currency_code}`
     *     @type \Google\Protobuf\StringValue $code
     *           Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. Full English name of the currency.
     *     @type \Google\Protobuf\StringValue $symbol
     *           Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *     @type \Google\Protobuf\Int64Value $billable_unit_micros
     *           Output only. The billable unit for this currency. Billed amounts should be multiples of
     *           this value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\CurrencyConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{currency_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{currency_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the unboxed value from <code>getCode()</code>

     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCodeUnwrapped()
    {
        return $this->readWrapperValue("code");
    }

    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCodeUnwrapped($var)
    {
        $this->writeWrapperValue("code", $var);
        return $this;}

    /**
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue symbol = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Returns the unboxed value from <code>getSymbol()</code>

     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue symbol = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getSymbolUnwrapped()
    {
        return $this->readWrapperValue("symbol");
    }

    /**
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue symbol = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue symbol = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setSymbolUnwrapped($var)
    {
        $this->writeWrapperValue("symbol", $var);
        return $this;}

    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value billable_unit_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getBillableUnitMicros()
    {
        return $this->billable_unit_micros;
    }

    /**
     * Returns the unboxed value from <code>getBillableUnitMicros()</code>

     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value billable_unit_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getBillableUnitMicrosUnwrapped()
    {
        return $this->readWrapperValue("billable_unit_micros");
    }

    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value billable_unit_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setBillableUnitMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->billable_unit_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value billable_unit_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setBillableUnitMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("billable_unit_micros", $var);
        return $this;}

}

