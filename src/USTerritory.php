<?php


namespace Locations;


enum USTerritory implements DetailsInterface
{
	case AS;
	case DC;
	case FM;
	case GU;
	case MH;
	case MP;
	case PW;
	case PR;
	case VI;
	case AE;
	case AA;
	case AP;

	public function getAbbreviation(): string
	{
		return match($this)
        {
			USTerritory::AS => 'AS',
			USTerritory::DC => 'DC',
			USTerritory::FM => 'FM',
			USTerritory::GU => 'GU',
			USTerritory::MH => 'MH',
			USTerritory::MP => 'MP',
			USTerritory::PW => 'PW',
			USTerritory::PR => 'PR',
			USTerritory::VI => 'VI',
			USTerritory::AE => 'AE',
			USTerritory::AA => 'AA',
			USTerritory::AP => 'AP',
		};
	}

	public function getFullName(): string
	{
		return match($this)
        {
			USTerritory::AS => 'AMERICAN SAMOA',
			USTerritory::DC => 'DISTRICT OF COLUMBIA',
			USTerritory::FM => 'FEDERATED STATES OF MICRONESIA',
			USTerritory::GU => 'GUAM GU',
			USTerritory::MH => 'MARSHALL ISLANDS',
			USTerritory::MP => 'NORTHERN MARIANA ISLANDS',
			USTerritory::PW => 'PALAU',
			USTerritory::PR => 'PUERTO RICO',
			USTerritory::VI => 'VIRGIN ISLANDS',
			USTerritory::AE => 'ARMED FORCES AFRICA / CANADA / EUROPE / MIDDLE EAST',
			USTerritory::AA => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
			USTerritory::AP => 'ARMED FORCES PACIFIC',
		};
	}

	public static function lookupAbbreviation(string $value): self
	{
		return match($value)
		{
			'AS' => USTerritory::AS,
			'DC' => USTerritory::DC,
			'FM' => USTerritory::FM,
			'GU' => USTerritory::GU,
			'MH' => USTerritory::MH,
			'MP' => USTerritory::MP,
			'PW' => USTerritory::PW,
			'PR' => USTerritory::PR,
			'VI' => USTerritory::VI,
			'AE' => USTerritory::AE,
			'AA' => USTerritory::AA,
			'AP' => USTerritory::AP,
		};
	}

	public static function lookupFullName(string $value): self
	{
		return match($value)
		{
			'AMERICAN SAMOA' => USTerritory::AS,
			'DISTRICT OF COLUMBIA' => USTerritory::DC,
			'FEDERATED STATES OF MICRONESIA' => USTerritory::FM,
			'GUAM GU' => USTerritory::GU,
			'MARSHALL ISLANDS' => USTerritory::MH,
			'NORTHERN MARIANA ISLANDS' => USTerritory::MP,
			'PALAU' => USTerritory::PW,
			'PUERTO RICO' => USTerritory::PR,
			'VIRGIN ISLANDS' => USTerritory::VI,
			'ARMED FORCES AFRICA / CANADA / EUROPE / MIDDLE EAST' => USTerritory::AE,
			'ARMED FORCES AMERICA (EXCEPT CANADA)' => USTerritory::AA,
			'ARMED FORCES PACIFIC' => USTerritory::AP,
		};
	}
}