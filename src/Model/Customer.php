<?php
/**
 * Customer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'int',
        'client' => 'string',
        'group' => 'int',
        'name' => 'string',
        'organization' => 'string',
        'vatNumber' => 'string',
        'gender' => '\Domainrobot\Model\GenderConstants',
        'title' => 'string',
        'addressLines' => 'string[]',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'fax' => '\Domainrobot\Model\Phone',
        'emails' => 'string[]',
        'billingEmails' => 'string[]',
        'payment' => '\Domainrobot\Model\PaymentConstants',
        'paymentMode' => 'string',
        'paymentCurrency' => '\Domainrobot\Model\Currency',
        'invoiceLanguage' => 'string',
        'taxable' => 'bool',
        'card' => '\Domainrobot\Model\Card',
        'contracts' => '\Domainrobot\Model\CustomerContract[]',
        'billingUsers' => '\Domainrobot\Model\BasicUser[]',
        'account' => '\Domainrobot\Model\Account',
        'clearAccount' => '\Domainrobot\Model\ClearAccountPeriod',
        'fname' => 'string',
        'lname' => 'string',
        'pcode' => 'string',
        'sepa' => '\Domainrobot\Model\SEPAMandate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => 'int64',
        'client' => null,
        'group' => 'int64',
        'name' => null,
        'organization' => null,
        'vatNumber' => null,
        'gender' => null,
        'title' => null,
        'addressLines' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'phone' => null,
        'fax' => null,
        'emails' => null,
        'billingEmails' => null,
        'payment' => null,
        'paymentMode' => null,
        'paymentCurrency' => null,
        'invoiceLanguage' => null,
        'taxable' => null,
        'card' => null,
        'contracts' => null,
        'billingUsers' => null,
        'account' => null,
        'clearAccount' => null,
        'fname' => null,
        'lname' => null,
        'pcode' => null,
        'sepa' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'number',
        'client' => 'client',
        'group' => 'group',
        'name' => 'name',
        'organization' => 'organization',
        'vatNumber' => 'vatNumber',
        'gender' => 'gender',
        'title' => 'title',
        'addressLines' => 'addressLines',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'phone' => 'phone',
        'fax' => 'fax',
        'emails' => 'emails',
        'billingEmails' => 'billingEmails',
        'payment' => 'payment',
        'paymentMode' => 'paymentMode',
        'paymentCurrency' => 'paymentCurrency',
        'invoiceLanguage' => 'invoiceLanguage',
        'taxable' => 'taxable',
        'card' => 'card',
        'contracts' => 'contracts',
        'billingUsers' => 'billingUsers',
        'account' => 'account',
        'clearAccount' => 'clearAccount',
        'fname' => 'fname',
        'lname' => 'lname',
        'pcode' => 'pcode',
        'sepa' => 'sepa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'client' => 'setClient',
        'group' => 'setGroup',
        'name' => 'setName',
        'organization' => 'setOrganization',
        'vatNumber' => 'setVatNumber',
        'gender' => 'setGender',
        'title' => 'setTitle',
        'addressLines' => 'setAddressLines',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'emails' => 'setEmails',
        'billingEmails' => 'setBillingEmails',
        'payment' => 'setPayment',
        'paymentMode' => 'setPaymentMode',
        'paymentCurrency' => 'setPaymentCurrency',
        'invoiceLanguage' => 'setInvoiceLanguage',
        'taxable' => 'setTaxable',
        'card' => 'setCard',
        'contracts' => 'setContracts',
        'billingUsers' => 'setBillingUsers',
        'account' => 'setAccount',
        'clearAccount' => 'setClearAccount',
        'fname' => 'setFname',
        'lname' => 'setLname',
        'pcode' => 'setPcode',
        'sepa' => 'setSepa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'client' => 'getClient',
        'group' => 'getGroup',
        'name' => 'getName',
        'organization' => 'getOrganization',
        'vatNumber' => 'getVatNumber',
        'gender' => 'getGender',
        'title' => 'getTitle',
        'addressLines' => 'getAddressLines',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'emails' => 'getEmails',
        'billingEmails' => 'getBillingEmails',
        'payment' => 'getPayment',
        'paymentMode' => 'getPaymentMode',
        'paymentCurrency' => 'getPaymentCurrency',
        'invoiceLanguage' => 'getInvoiceLanguage',
        'taxable' => 'getTaxable',
        'card' => 'getCard',
        'contracts' => 'getContracts',
        'billingUsers' => 'getBillingUsers',
        'account' => 'getAccount',
        'clearAccount' => 'getClearAccount',
        'fname' => 'getFname',
        'lname' => 'getLname',
        'pcode' => 'getPcode',
        'sepa' => 'getSepa'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['vatNumber'] = isset($data['vatNumber']) ? $data['vatNumber'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['addressLines'] = isset($data['addressLines']) ? $data['addressLines'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['billingEmails'] = isset($data['billingEmails']) ? $data['billingEmails'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['paymentMode'] = isset($data['paymentMode']) ? $data['paymentMode'] : null;
        $this->container['paymentCurrency'] = isset($data['paymentCurrency']) ? $data['paymentCurrency'] : null;
        $this->container['invoiceLanguage'] = isset($data['invoiceLanguage']) ? $data['invoiceLanguage'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['contracts'] = isset($data['contracts']) ? $data['contracts'] : null;
        $this->container['billingUsers'] = isset($data['billingUsers']) ? $data['billingUsers'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['clearAccount'] = isset($data['clearAccount']) ? $data['clearAccount'] : null;
        $this->container['fname'] = isset($data['fname']) ? $data['fname'] : null;
        $this->container['lname'] = isset($data['lname']) ? $data['lname'] : null;
        $this->container['pcode'] = isset($data['pcode']) ? $data['pcode'] : null;
        $this->container['sepa'] = isset($data['sepa']) ? $data['sepa'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ((mb_strlen($this->container['client']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'client', the character length must be smaller than or equal to 2147483647.";
        }

        if ((mb_strlen($this->container['client']) < 1)) {
            $invalidProperties[] = "invalid value for 'client', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 70)) {
            $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 0)) {
            $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['addressLines'] === null) {
            $invalidProperties[] = "'addressLines' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if (!is_null($this->container['fname']) && (mb_strlen($this->container['fname']) > 35)) {
            $invalidProperties[] = "invalid value for 'fname', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['fname']) && (mb_strlen($this->container['fname']) < 0)) {
            $invalidProperties[] = "invalid value for 'fname', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lname']) && (mb_strlen($this->container['lname']) > 35)) {
            $invalidProperties[] = "invalid value for 'lname', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['lname']) && (mb_strlen($this->container['lname']) < 0)) {
            $invalidProperties[] = "invalid value for 'lname', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['pcode'] === null) {
            $invalidProperties[] = "'pcode' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param string $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        if ((mb_strlen($client) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $client when calling Customer., must be smaller than or equal to 2147483647.');
        }
        if ((mb_strlen($client) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the customer.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Customer., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Customer., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization The name of the organization.
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        if (!is_null($organization) && (mb_strlen($organization) > 70)) {
            throw new \InvalidArgumentException('invalid length for $organization when calling Customer., must be smaller than or equal to 70.');
        }
        if (!is_null($organization) && (mb_strlen($organization) < 0)) {
            throw new \InvalidArgumentException('invalid length for $organization when calling Customer., must be bigger than or equal to 0.');
        }

        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string $vatNumber The value added tax number.
     *
     * @return $this
     */
    public function setVatNumber($vatNumber)
    {
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Domainrobot\Model\GenderConstants
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Domainrobot\Model\GenderConstants $gender The gender of the person.
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the customer
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets addressLines
     *
     * @return string[]
     */
    public function getAddressLines()
    {
        return $this->container['addressLines'];
    }

    /**
     * Sets addressLines
     *
     * @param string[] $addressLines The address of the customer
     *
     * @return $this
     */
    public function setAddressLines($addressLines)
    {
        $this->container['addressLines'] = $addressLines;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city of the customer.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state of the customer.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The country of the customer.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The phone number of the customer
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return \Domainrobot\Model\Phone
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param \Domainrobot\Model\Phone $fax The fax number.
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails The email addresses.
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets billingEmails
     *
     * @return string[]
     */
    public function getBillingEmails()
    {
        return $this->container['billingEmails'];
    }

    /**
     * Sets billingEmails
     *
     * @param string[] $billingEmails The billing recipients.
     *
     * @return $this
     */
    public function setBillingEmails($billingEmails)
    {
        $this->container['billingEmails'] = $billingEmails;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Domainrobot\Model\PaymentConstants
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Domainrobot\Model\PaymentConstants $payment The payment typ of the customer.
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets paymentMode
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
     * Sets paymentMode
     *
     * @param string $paymentMode The payment mode of the customer.
     *
     * @return $this
     */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;

        return $this;
    }

    /**
     * Gets paymentCurrency
     *
     * @return \Domainrobot\Model\Currency
     */
    public function getPaymentCurrency()
    {
        return $this->container['paymentCurrency'];
    }

    /**
     * Sets paymentCurrency
     *
     * @param \Domainrobot\Model\Currency $paymentCurrency The payment currency of the customer.
     *
     * @return $this
     */
    public function setPaymentCurrency($paymentCurrency)
    {
        $this->container['paymentCurrency'] = $paymentCurrency;

        return $this;
    }

    /**
     * Gets invoiceLanguage
     *
     * @return string
     */
    public function getInvoiceLanguage()
    {
        return $this->container['invoiceLanguage'];
    }

    /**
     * Sets invoiceLanguage
     *
     * @param string $invoiceLanguage The language to use for the invoice.
     *
     * @return $this
     */
    public function setInvoiceLanguage($invoiceLanguage)
    {
        $this->container['invoiceLanguage'] = $invoiceLanguage;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param bool $taxable The taxable flag of the customer.
     *
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Domainrobot\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Domainrobot\Model\Card $card The customers minimal credit card data if payament was post with credit card.
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets contracts
     *
     * @return \Domainrobot\Model\CustomerContract[]
     */
    public function getContracts()
    {
        return $this->container['contracts'];
    }

    /**
     * Sets contracts
     *
     * @param \Domainrobot\Model\CustomerContract[] $contracts The customers contracts.
     *
     * @return $this
     */
    public function setContracts($contracts)
    {
        $this->container['contracts'] = $contracts;

        return $this;
    }

    /**
     * Gets billingUsers
     *
     * @return \Domainrobot\Model\BasicUser[]
     */
    public function getBillingUsers()
    {
        return $this->container['billingUsers'];
    }

    /**
     * Sets billingUsers
     *
     * @param \Domainrobot\Model\BasicUser[] $billingUsers The billing users.
     *
     * @return $this
     */
    public function setBillingUsers($billingUsers)
    {
        $this->container['billingUsers'] = $billingUsers;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Domainrobot\Model\Account
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Domainrobot\Model\Account $account The account of the customer in case of prepayment or if the customer has a credit limit
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets clearAccount
     *
     * @return \Domainrobot\Model\ClearAccountPeriod
     */
    public function getClearAccount()
    {
        return $this->container['clearAccount'];
    }

    /**
     * Sets clearAccount
     *
     * @param \Domainrobot\Model\ClearAccountPeriod $clearAccount The period after the post payment account will be cleared to zero
     *
     * @return $this
     */
    public function setClearAccount($clearAccount)
    {
        $this->container['clearAccount'] = $clearAccount;

        return $this;
    }

    /**
     * Gets fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->container['fname'];
    }

    /**
     * Sets fname
     *
     * @param string $fname The first name.
     *
     * @return $this
     */
    public function setFname($fname)
    {
        if (!is_null($fname) && (mb_strlen($fname) > 35)) {
            throw new \InvalidArgumentException('invalid length for $fname when calling Customer., must be smaller than or equal to 35.');
        }
        if (!is_null($fname) && (mb_strlen($fname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fname when calling Customer., must be bigger than or equal to 0.');
        }

        $this->container['fname'] = $fname;

        return $this;
    }

    /**
     * Gets lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->container['lname'];
    }

    /**
     * Sets lname
     *
     * @param string $lname The last name.
     *
     * @return $this
     */
    public function setLname($lname)
    {
        if (!is_null($lname) && (mb_strlen($lname) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lname when calling Customer., must be smaller than or equal to 35.');
        }
        if (!is_null($lname) && (mb_strlen($lname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lname when calling Customer., must be bigger than or equal to 0.');
        }

        $this->container['lname'] = $lname;

        return $this;
    }

    /**
     * Gets pcode
     *
     * @return string
     */
    public function getPcode()
    {
        return $this->container['pcode'];
    }

    /**
     * Sets pcode
     *
     * @param string $pcode The postal code of the city.
     *
     * @return $this
     */
    public function setPcode($pcode)
    {
        $this->container['pcode'] = $pcode;

        return $this;
    }

    /**
     * Gets sepa
     *
     * @return \Domainrobot\Model\SEPAMandate
     */
    public function getSepa()
    {
        return $this->container['sepa'];
    }

    /**
     * Sets sepa
     *
     * @param \Domainrobot\Model\SEPAMandate $sepa The customers sepa mandate if payament was post with sepa.
     *
     * @return $this
     */
    public function setSepa($sepa)
    {
        $this->container['sepa'] = $sepa;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!$retrieveAllValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
            if(is_array($value)){
                foreach($value as &$v){
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}


