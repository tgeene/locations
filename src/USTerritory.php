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
			USTerritory::AS => 'American Samoa',
			USTerritory::DC => 'District of Columbia',
			USTerritory::FM => 'Federated States of Micronesia',
			USTerritory::GU => 'Guam',
			USTerritory::MH => 'Marshall Islands',
			USTerritory::MP => 'Northern Mariana Islands',
			USTerritory::PW => 'Palau',
			USTerritory::PR => 'Puerto Rico',
			USTerritory::VI => 'Virgin Islands',
			USTerritory::AE => 'Armed Forces - Africa / Canada / Europe / Middle East',
			USTerritory::AA => 'Armed Forces - America (Except Canada)',
			USTerritory::AP => 'Armed Forces - Pacific',
		};
	}

	public static function lookupAbbreviation(string $value): ?self
	{
		return match(strtoupper($value))
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
			default => null,
		};
	}
}