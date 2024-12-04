<?php


namespace Locations;


interface DetailsInterface
{
	public function getAbbreviation(): string;
	public function getFullName(): string;
	public static function lookupAbbreviation(string $value): self;
}