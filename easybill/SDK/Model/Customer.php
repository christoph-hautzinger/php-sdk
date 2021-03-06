<?php

namespace easybill\SDK\Model;

class Customer
{
    const SALUTATION_UNKNOWN        = 0;
    const SALUTATION_MR             = 1;
    const SALUTATION_MRS            = 2;
    const SALUTATION_COMPANY        = 3;
    const SALUTATION_MR_AND_MRS     = 4;
    const SALUTATION_MARRIED_COUPLE = 5;
    const SALUTATION_FAMILY         = 6;
    
    public $customerID;
    public $groupID;
    public $customerNumber;
    public $salutation;
    public $personal;
    public $title;
    public $firstName;
    public $lastName;
    public $suffix_1;
    public $suffix_2;
    public $companyName;
    public $street;
    public $zipCode;
    public $city;
    public $country;
    public $postbox;
    public $postboxZipCode;
    public $postboxCity;
    public $postboxCountry;
    public $phone_1;
    public $phone_2;
    public $fax;
    public $mobile;
    public $email;
    public $internet;
    public $info_1;
    public $info_2;
    public $note;
    public $taxNumber;
    public $ustid;
    public $taxOptions;
    public $cashAllowance;
    public $cashAllowanceDays;
    public $cashDiscount;
    public $cashDiscountType;
    public $gracePeriod;
    public $salePriceLevel;
    public $bankAccountOwner_1;
    public $bankName_1;
    public $bankCode_1;
    public $bankAccount_1;
    public $bankBIC_1;
    public $bankIBAN_1;
    public $acquireOptions;
    public $paymentOptions;
    public $delivery_salutation;
    public $delivery_personal;
    public $delivery_firstName;
    public $delivery_lastName;
    public $delivery_suffix_1;
    public $delivery_suffix_2;
    public $delivery_companyName;
    public $delivery_street;
    public $delivery_zipCode;
    public $delivery_city;
    public $delivery_country;
    public $birthDate;
    public $sinceDate;
    public $sepaAgreement;
    public $sepaDate;
    public $sepaInfo;
}
