<?php

namespace CommerceGuys\Address\Metadata;

interface AddressMetadataInterface
{
    /**
     * Returns the format of the address.
     */
    public function getFormat();

    /**
     * Returns the type of the administrative area.
     */
    public function getAdministrativeAreaType();

    /**
     * Returns the prefix for the postal code.
     */
    public function getPostalCodePrefix();

    /**
     * Returns the type of the postal code.
     */
    public function getPostalCodeType();

    /**
     * Returns the format of the postal code.
     */
    public function getPostalCodeFormat();

    /**
     * Returns examples of valid postal codes.
     *
     * @return array An array containing string examples of valid postal codes.
     */
    public function getPostalCodeExamples();

    /**
     * Returns the list of required fields.
     *
     * @return array An array of address field constants,
     *   as defined on the AddressInterface
     */
    public function getRequiredFields();

    /**
     * Returns the list of fields that should be uppercased.
     *
     * @return array An array of address field constants,
     *   as defined on the AddressInterface
     */
    public function getUppercaseFields();
}
