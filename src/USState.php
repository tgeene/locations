<?php


namespace Locations;


enum USState implements DetailsInterface
{
	case AL;
	case AK;
	case AZ;
	case AR;
	case CA;
	case CO;
	case CT;
	case DE;
	case FL;
	case GA;
	case HI;
	case ID;
	case IL;
	case IN;
	case IA;
	case KS;
	case KY;
	case LA;
	case ME;
	case MD;
	case MA;
	case MI;
	case MN;
	case MS;
	case MO;
	case MT;
	case NE;
	case NV;
	case NH;
	case NJ;
	case NM;
	case NY;
	case NC;
	case ND;
	case OH;
	case OK;
	case OR;
	case PA;
	case RI;
	case SC;
	case SD;
	case TN;
	case TX;
	case UT;
	case VT;
	case VA;
	case WA;
	case WV;
	case WI;
	case WY;

	public function getAbbreviation(): string
	{
		return match($this)
        {
			USState::AL => 'AL',
			USState::AK => 'AK',
			USState::AZ => 'AZ',
			USState::AR => 'AR',
			USState::CA => 'CA',
			USState::CO => 'CO',
			USState::CT => 'CT',
			USState::DE => 'DE',
			USState::FL => 'FL',
			USState::GA => 'GA',
			USState::HI => 'HI',
			USState::ID => 'ID',
			USState::IL => 'IL',
			USState::IN => 'IN',
			USState::IA => 'IA',
			USState::KS => 'KS',
			USState::KY => 'KY',
			USState::LA => 'LA',
			USState::ME => 'ME',
			USState::MD => 'MD',
			USState::MA => 'MA',
			USState::MI => 'MI',
			USState::MN => 'MN',
			USState::MS => 'MS',
			USState::MO => 'MO',
			USState::MT => 'MT',
			USState::NE => 'NE',
			USState::NV => 'NV',
			USState::NH => 'NH',
			USState::NJ => 'NJ',
			USState::NM => 'NM',
			USState::NY => 'NY',
			USState::NC => 'NC',
			USState::ND => 'ND',
			USState::OH => 'OH',
			USState::OK => 'OK',
			USState::OR => 'OR',
			USState::PA => 'PA',
			USState::RI => 'RI',
			USState::SC => 'SC',
			USState::SD => 'SD',
			USState::TN => 'TN',
			USState::TX => 'TX',
			USState::UT => 'UT',
			USState::VT => 'VT',
			USState::VA => 'VA',
			USState::WA => 'WA',
			USState::WV => 'WV',
			USState::WI => 'WI',
			USState::WY => 'WY',
		};
	}

	public function getFullName(): string
	{
		return match($this)
        {
			USState::AL => 'Alabama',
			USState::AK => 'Alaska',
			USState::AZ => 'Arizona',
			USState::AR => 'Arkansas',
			USState::CA => 'California',
			USState::CO => 'Colorado',
			USState::CT => 'Connecticut',
			USState::DE => 'Delaware',
			USState::FL => 'Florida',
			USState::GA => 'Georgia',
			USState::HI => 'Hawaii',
			USState::ID => 'Idaho',
			USState::IL => 'Illinois',
			USState::IN => 'Indiana',
			USState::IA => 'Iowa',
			USState::KS => 'Kansas',
			USState::KY => 'Kentucky',
			USState::LA => 'Louisiana',
			USState::ME => 'Maine',
			USState::MD => 'Maryland',
			USState::MA => 'Massachusetts',
			USState::MI => 'Michigan',
			USState::MN => 'Minnesota',
			USState::MS => 'Mississippi',
			USState::MO => 'Missouri',
			USState::MT => 'Montana',
			USState::NE => 'Nebraska',
			USState::NV => 'Nevada',
			USState::NH => 'New Hampshire',
			USState::NJ => 'New Jersey',
			USState::NM => 'New Mexico',
			USState::NY => 'New York',
			USState::NC => 'North Carolina',
			USState::ND => 'North Dakota',
			USState::OH => 'Ohio',
			USState::OK => 'Oklahoma',
			USState::OR => 'Oregon',
			USState::PA => 'Pennsylvania',
			USState::RI => 'Rhode Island',
			USState::SC => 'South Carolina',
			USState::SD => 'South Dakota',
			USState::TN => 'Tennessee',
			USState::TX => 'Texas',
			USState::UT => 'Utah',
			USState::VT => 'Vermont',
			USState::VA => 'Virginia',
			USState::WA => 'Washington',
			USState::WV => 'West Virginia',
			USState::WI => 'Wisconsin',
			USState::WY => 'Wyoming',
		};
	}

	public static function lookupAbbreviation(string $value): ?self
	{
		return match(strtoupper($value))
		{
			'AL' => USState::AL,
			'AK' => USState::AK,
			'AZ' => USState::AZ,
			'AR' => USState::AR,
			'CA' => USState::CA,
			'CO' => USState::CO,
			'CT' => USState::CT,
			'DE' => USState::DE,
			'FL' => USState::FL,
			'GA' => USState::GA,
			'HI' => USState::HI,
			'ID' => USState::ID,
			'IL' => USState::IL,
			'IN' => USState::IN,
			'IA' => USState::IA,
			'KS' => USState::KS,
			'KY' => USState::KY,
			'LA' => USState::LA,
			'ME' => USState::ME,
			'MD' => USState::MD,
			'MA' => USState::MA,
			'MI' => USState::MI,
			'MN' => USState::MN,
			'MS' => USState::MS,
			'MO' => USState::MO,
			'MT' => USState::MT,
			'NE' => USState::NE,
			'NV' => USState::NV,
			'NH' => USState::NH,
			'NJ' => USState::NJ,
			'NM' => USState::NM,
			'NY' => USState::NY,
			'NC' => USState::NC,
			'ND' => USState::ND,
			'OH' => USState::OH,
			'OK' => USState::OK,
			'OR' => USState::OR,
			'PA' => USState::PA,
			'RI' => USState::RI,
			'SC' => USState::SC,
			'SD' => USState::SD,
			'TN' => USState::TN,
			'TX' => USState::TX,
			'UT' => USState::UT,
			'VT' => USState::VT,
			'VA' => USState::VA,
			'WA' => USState::WA,
			'WV' => USState::WV,
			'WI' => USState::WI,
			'WY' => USState::WY,
			default => null,
		};
	}
}