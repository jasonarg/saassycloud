<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 1:46 PM
 * License: Public Domain
 */

namespace App\Model;

interface RootRepoInterface
{
    public function findAll();

    public function findById(integer $id);

    public function findByAttr(string $attr, $value);

    public function create(array $attributeValuePairs);

}