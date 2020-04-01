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

        $ids = null;
        $name= null;

        if(isset($cond['name']))
            $name = $cond['name'];
        if(isset($cond['id']))
            $ids  = (array)$cond['id'];
        
        return $provider::getAll($ids, $name);
    }

    static function getOne(array $cond): ?object{
        $provider = self::getHandler();
        if(!$provider)
            return null;

        return $provider::getById($cond['id']);
    }
}