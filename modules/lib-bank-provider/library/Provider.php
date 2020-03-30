<?php
/**
 * Provider
 * @package lib-bank-provider
 * @version 0.0.1
 */

namespace LibBankProvider\Library;


class Provider
{
    private static function getHandler(): ?string{
        $conf = \Mim::$app->config->libBankProvider;
        if(isset($conf->provider))
            return $conf->provider;
        return null;
    }

    static function get(array $cond=[]): array{
        $provider = self::getHandler();
        if(!$provider)
            return [];

        if(isset($cond['name']))
            return $provider::getAll($cond['name']);
        return $provider::getAll();
    }

    static function getOne(array $cond): ?object{
        $provider = self::getHandler();
        if(!$provider)
            return null;

        return $provider::getById($cond['id']);
    }
}