<?php
/**
 * Provider
 * @package lib-bank-provider
 * @version 0.0.1
 */

namespace LibBankProvider\Iface;


interface Provider
{
    /**
     * Get all bank proivders, optionally filter by bank name.
     * @param array $ids List of bank ids.
     * @param string $name Bank name filter.
     * @return array Bank list.
     */
    static function getAll(array $ids=null, string $nama=null): array;

    /** 
     * Get one bank provider by id.
     * @param int $id Bank id.
     * @return object || null
     */
    static function getById(int $id): ?object;
}