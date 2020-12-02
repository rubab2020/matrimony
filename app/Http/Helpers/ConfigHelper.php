<?php

namespace App\Http\Helpers;

class ConfigHelper
{
	public static function getEducationList()
	{
		return [
			'MSC'=>'MSC',
			'MBA'=>'MBA',
			'BBA'=>'BBA',
			'BSC'=>'BSC',
			'Bachelors'=>'Bachelors',
			'MBBS'=>'MBBS',
			'B.Com'=>'B.Com',
			'Diploma'=>'Diploma',
			'HSC'=>'HSC',
			'SSC'=>'SSC',
			'Fazil'=>'Fazil',
			'Kamil'=>'Kamil',
			'Dakhil'=>'Dakhil',
			'Associates'=>'Associates',
			'B Pharm'=>'B Pharm',
			'CA'=>'CA',
			'LLB'=>'LLB',
			'LLM'=>'LLM',
			'M Pharm'=>'M Pharm',
			'M.Com'=>'M.Com',
			'Doctorate'=>'Doctorate',
			'MPhil'=>'MPhil',
			'Some College'=>'Some College',
			'High School'=>'High School',
			'Incomplete High School'=>'Incomplete High School',
		];
	}

	public static function getOccupationList()
	{
		return [
			'Doctor'=>'Doctor',
			'Engineer'=>'Engineer',
			'Architect'=>'Architect',
			'Banker'=>'Banker',
			'Lawyear'=>'Lawyear',
			'BSC Cader'=>'BSC Cader',
			'Businessman'=>'Businessman',
			'Salesman'=>'Salesman',
			'Operator'=>'Operator',
			'Armed Force'=>'Armed Force',
			'Public Service Holder'=>'Public Service Holder',
			'Private Service Holder'=>'Private Service Holder',
			'Nurse'=>'Nurse',
			'Other'=>'Other',
		];
	}

	public static function getCountryList()
	{
		return array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
	}

	public static function getDistrictList()
	{
		return array(
		  'bandarban'=>'Bandarban',
		  'barguna'=>'Barguna',
		  'bagerhat'=>'Bagerhat',
		  'barisal'=>'Barisal',
		  'bogura'=>'Bogura',
		  'bhola'=>'Bhola',
		  'brahmanbaria'=>'Brahmanbaria',
		  'chapainawabganj'=>'Chapainawabganj',
		  'comilla'=>'Comilla',
		  'coxsbazar'=>'Coxsbazar',
		  'chattogram'=>'Chattogram',
		  'chandpur'=>'Chandpur',
		  'chuadanga'=>'Chuadanga',
		  'dhaka'=>'Dhaka',
		  'dinajpur'=>'Dinajpur',
		  'feni'=>'Feni',
		  'faridpur'=>'Faridpur',
		  'gazipur'=>'Gazipur',
		  'gopalganj'=>'Gopalganj',
		  'gaibandha'=>'Gaibandha',
		  'habiganj'=>'Habiganj',
		  'jhalakathi'=>'Jhalakathi',
		  'jhenaidah'=>'Jhenaidah',
		  'joypurhat'=>'Joypurhat',
		  'jashore'=>'Jashore',
		  'jamalpur'=>'Jamalpur',
		  'khagrachhari'=>'Khagrachhari',
		  'kushtia'=>'Kushtia',
		  'khulna'=>'Khulna',
		  'kishoreganj'=>'Kishoreganj',
		  'kurigram'=>'Kurigram',
		  'lakshmipur'=>'Lakshmipur',
		  'lalmonirhat'=>'Lalmonirhat',
		  'manikganj'=>'Manikganj',
		  'madaripur'=>'Madaripur',
		  'mymensingh'=>'Mymensingh',
		  'meherpur'=>'Meherpur',
		  'moulvibazar'=>'Moulvibazar',
		  'magura'=>'Magura',
		  'munshiganj'=>'Munshiganj',
		  'narsingdi'=>'Narsingdi',
		  'netrokona'=>'Netrokona',
		  'narayanganj'=>'Narayanganj',
		  'nilphamari'=>'Nilphamari',
		  'narail'=>'Narail',
		  'naogaon'=>'Naogaon',
		  'noakhali'=>'Noakhali',
		  'natore'=>'Natore',
		  'patuakhali'=>'Patuakhali',
		  'pirojpur'=>'Pirojpur',
		  'rangamati'=>'Rangamati',
		  'satkhira'=>'Satkhira',
		  'sherpur'=>'Sherpur',
		  'sunamganj'=>'Sunamganj',
		  'shariatpur'=>'Shariatpur',
		  'sylhet'=>'Sylhet',
		  'sirajganj'=>'Sirajganj',
		  'pabna'=>'Pabna',
		  'panchagarh'=>'Panchagarh',
		  'rajshahi'=>'Rajshahi',
		  'rajbari'=>'Rajbari',
		  'rangpur'=>'Rangpur',
		  'tangail'=>'Tangail',
		  'thakurgaon'=>'Thakurgaon',
		);
	}

	public static function getCityList()
	{
		return [
		  'dhaka'=>'Dhaka',
		  'chattogram'=>'Chattogram',
		  'khulna'=>'Khulna',
		  'rajshahi'=>'Rajshahi',
		  'narayanganj'=>'Narayanganj',
		  'gazipur'=>'Gazipur',
		  'sylhet'=>'Sylhet',
		  'barisal'=>'Barisal',
		  'rangpur'=>'Rangpur',
		  'comilla'=>'Comilla',
		  'mymensingh'=>'Mymensingh',
		];
	}

	public static function getReligionList()
	{
		return [
			'muslim' => 'Muslim',
			'hindu' => 'Hindu',
			'sikh'=> 'Sikh',
			'christian_catholic' => 'Christian(Catholic)',
			'christian_other' => 'Christian(Other)',
			'christian_protestant' => 'Christian(Protestant)',
			'anglican' => 'Anglican',
			'atheist' => 'Atheist',
			'baptist' => 'Baptist',
			'buddhist_taoist' => 'Buddhist/Taoist',
			'evengelical' => 'Evengelical',
			'jain' => 'Jain',
			'jewish' => 'Jewish',
			'mormon_Lds' => 'Mormon/Lds',
			'spiritual_but_not_religious' => 'Spiritual But Not Religious',
			'not_religious' => 'Not Religious',
			'other' => 'Other'

		];
	} 
}