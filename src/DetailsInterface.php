<?php


namespace Locations;


interface DetailsInterface
{
	public function getAbbreviation(): string;
	public function getFullName(): string;
}