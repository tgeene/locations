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

	public function getAbreviation(): string
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
}