<?php


namespace Locations;


interface DetailsInterface
{
	public function getAbreviation(): string;
	public function getFullName(): string;
}