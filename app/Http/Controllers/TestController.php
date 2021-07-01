<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SoapClient;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{

    public function Test(){
      $array=array (
        'air:airpricersp' => 
        array (
          'common_v42_0:responsemessage' => 
          array (
            '@value' => 'Taxes returned at the FareInfo level are for informational purposes only, and may differ from those returned at the Itinerary/Passenger Type levels.',
            '@attributes' => 
            array (
              'code' => '710401',
              'type' => 'Warning',
              'providercode' => '1G',
            ),
          ),
          'air:airitinerary' => 
          array (
            'air:airsegment' => 
            array (
              0 => 
              array (
                'air:codeshareinfo' => 
                array (
                  '@value' => 'Air India',
                  '@attributes' => 
                  array (
                    'operatingcarrier' => 'AI',
                  ),
                ),
                'air:flightdetails' => 
                array (
                  '@value' => '',
                  '@attributes' => 
                  array (
                    'key' => 'z5lV5oBqWDKAg7NqCAAAAA==',
                    'origin' => 'CCU',
                    'destination' => 'BBI',
                    'departuretime' => '2021-06-30T09:10:00.000+05:30',
                    'arrivaltime' => '2021-06-30T10:20:00.000+05:30',
                    'flighttime' => '70',
                    'traveltime' => '70',
                    'distance' => '237',
                  ),
                ),
                '@attributes' => 
                array (
                  'key' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                  'group' => '0',
                  'carrier' => 'AI',
                  'flightnumber' => '776',
                  'providercode' => '1G',
                  'origin' => 'CCU',
                  'destination' => 'BBI',
                  'departuretime' => '2021-06-30T09:10:00.000+05:30',
                  'arrivaltime' => '2021-06-30T10:20:00.000+05:30',
                  'flighttime' => '70',
                  'traveltime' => '70',
                  'distance' => '237',
                  'classofservice' => 'S',
                  'changeofplane' => 'false',
                  'optionalservicesindicator' => 'false',
                  'availabilitysource' => 'A',
                  'polledavailabilityoption' => 'O and D cache or polled status used with different local status',
                  'availabilitydisplaytype' => 'Fare Specific Fare Quote Unbooked',
                ),
              ),
              1 => 
              array (
                'air:codeshareinfo' => 
                array (
                  '@value' => 'Air India',
                  '@attributes' => 
                  array (
                    'operatingcarrier' => 'AI',
                  ),
                ),
                'air:flightdetails' => 
                array (
                  '@value' => '',
                  '@attributes' => 
                  array (
                    'key' => 'z5lV5oBqWDKAi7NqCAAAAA==',
                    'origin' => 'BBI',
                    'destination' => 'DEL',
                    'departuretime' => '2021-06-30T21:35:00.000+05:30',
                    'arrivaltime' => '2021-06-30T23:45:00.000+05:30',
                    'flighttime' => '130',
                    'traveltime' => '130',
                    'distance' => '794',
                  ),
                ),
                '@attributes' => 
                array (
                  'key' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                  'group' => '0',
                  'carrier' => 'AI',
                  'flightnumber' => '474',
                  'providercode' => '1G',
                  'origin' => 'BBI',
                  'destination' => 'DEL',
                  'departuretime' => '2021-06-30T21:35:00.000+05:30',
                  'arrivaltime' => '2021-06-30T23:45:00.000+05:30',
                  'flighttime' => '130',
                  'traveltime' => '130',
                  'distance' => '794',
                  'classofservice' => 'S',
                  'changeofplane' => 'false',
                  'optionalservicesindicator' => 'false',
                  'availabilitysource' => 'A',
                  'polledavailabilityoption' => 'O and D cache or polled status used with different local status',
                  'availabilitydisplaytype' => 'Fare Specific Fare Quote Unbooked',
                ),
              ),
            ),
          ),
          'air:airpriceresult' => 
          array (
            'air:airpricingsolution' => 
            array (
              0 => 
              array (
                'air:airsegmentref' => 
                array (
                  'air:airsegmentref' => 
                  array (
                    'air:airpricinginfo' => 
                    array (
                      'air:fareinfo' => 
                      array (
                        0 => 
                        array (
                          'air:faresurcharge' => 
                          array (
                            'common_v42_0:endorsement' => 
                            array (
                              'common_v42_0:endorsement' => 
                              array (
                                'common_v42_0:endorsement' => 
                                array (
                                  'air:farerulekey' => 
                                  array (
                                    '@value' => '6UUVoSldxwgvNA4fgfh708bKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhgchAzwEuX5dqMg2NyprpAlSD5QULEHOHb4cj0HfxvdvVx0UAwD+SiCU0SN05UdULMCIbRqMTJch6v9tEaRJgF5C/YIEuJEellfDL+hvTDe08KZ4I8x6i2RJTyB5x9tYSQLWhthMb3jljiXQ9MogEdqg1kSemb+/7m0N03Bf4LZGly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA2+QKPIWaRvq6oxE1UL944DjaSte7T4ddDlN7mTMg9Nh/MRD07d6H8RmuRetWk1Zsx4WExVb316nsNJCJ9ZmkFA=',
                                    '@attributes' => 
                                    array (
                                      'fareinforef' => 'z5lV5oBqWDKAr7NqCAAAAA==',
                                      'providercode' => '1G',
                                    ),
                                  ),
                                  'air:brand' => 
                                  array (
                                    'air:title' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'Economy Saver',
                                        '@attributes' => 
                                        array (
                                          'type' => 'External',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'EcoSaver',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Short',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                    ),
                                    'air:text' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'Included in your ECONOMY SAVER fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 24hrs prior departure. 
      •  Refunds against a fee until 24hrs prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                        '@attributes' => 
                                        array (
                                          'type' => 'MarketingConsumer',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'Included in your ECONOMY SAVER fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 24hrs prior departure. 
      •  Refunds against a fee until 24hrs prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                        '@attributes' => 
                                        array (
                                          'type' => 'MarketingAgent',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      2 => 
                                      array (
                                        '@value' => 'For our budget minded travellers',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Strapline',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                    ),
                                    'air:imagelocation' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'https://cdn.travelport.com/airindia/AI_general_large_42653.jpg',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Consumer',
                                          'imagewidth' => '1400',
                                          'imageheight' => '800',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Agent',
                                          'imagewidth' => '150',
                                          'imageheight' => '149',
                                        ),
                                      ),
                                    ),
                                    'air:optionalservices' => 
                                    array (
                                      'air:optionalservice' => 
                                      array (
                                        0 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Domestic Checked Baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'DOM Bag',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Domestic Checked Baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Y,X,KG,25,',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.169+00:00',
                                            'key' => 'z5lV5oBqWDKAB8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'optionalservicesruleref' => 'z5lV5oBqWDKAC8NqCAAAAA==',
                                            'tag' => 'Checked Baggage',
                                            'displayorder' => '1',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Carry on baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Taking bags on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Carry on baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Y,1,8,CY',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.169+00:00',
                                            'key' => 'z5lV5oBqWDKAD8NqCAAAAA==',
                                            'secondarytype' => 'CY',
                                            'chargeable' => 'Included in the brand',
                                            'optionalservicesruleref' => 'z5lV5oBqWDKAE8NqCAAAAA==',
                                            'tag' => 'Carry On Hand Baggage',
                                            'displayorder' => '2',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Extra baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Additional baggage as required',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Extra baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Xbags',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.169+00:00',
                                            'key' => 'z5lV5oBqWDKAF8NqCAAAAA==',
                                            'secondarytype' => 'XS',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Other',
                                            'displayorder' => '999',
                                          ),
                                        ),
                                        3 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Refund',
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:title' => 
                                              array (
                                                '@value' => '',
                                                '@attributes' => 
                                                array (
                                                  'type' => 'Short',
                                                  'languagecode' => 'EN',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Branded Fares',
                                            'createdate' => '2021-06-29T13:07:51.169+00:00',
                                            'servicesubcode' => '',
                                            'key' => 'z5lV5oBqWDKAG8NqCAAAAA==',
                                            'secondarytype' => 'RF',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        4 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Rebooking',
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Branded Fares',
                                            'createdate' => '2021-06-29T13:07:51.169+00:00',
                                            'key' => 'z5lV5oBqWDKAH8NqCAAAAA==',
                                            'secondarytype' => 'VC',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Rebooking',
                                            'displayorder' => '3',
                                          ),
                                        ),
                                        5 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Rebooking',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Making changes to your booking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'At Air India we understand that from time to time your passengers may need to make changes to their reservation. The amount they will have to pay will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'At Air India we understand that from time to time you may need to make changes to your reservation. The amount you will have to pay will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Rebooking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Rebooking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'RuleOverride',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAI8NqCAAAAA==',
                                            'secondarytype' => '31',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Rebooking',
                                            'displayorder' => '3',
                                          ),
                                        ),
                                        6 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Refunds',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Cancelling your reservation',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'We understand that from time to time your passenger may need to cancel their reservation. The amount they will receive in refund will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'We understand that from time to time you may need to cancel your reservation. The amount you will receive in refund will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Refunds',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Refunds',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'RuleOverride',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAJ8NqCAAAAA==',
                                            'secondarytype' => '33',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        7 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Advance seat reservation',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Pre book your preferred seat',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre reserved seat assignment.
      Your passenger can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Pre reserved seat assignment
      You can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Advance seat reservation',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre Reserv',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'PreReservedSeatAssignment',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAK8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Seat Assignment',
                                            'displayorder' => '5',
                                          ),
                                        ),
                                        8 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Inflight Meals',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Food at Maharajah now at your table',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Inflight Meals',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Meals',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'MealOrBeverage',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAL8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Meals and Beverages',
                                            'displayorder' => '6',
                                          ),
                                        ),
                                        9 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'WiFi on board',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Stay connected on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'WiFi on board.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'WiFi on board.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'WiFi on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'WiFi',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'InFlightEntertainment',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAM8NqCAAAAA==',
                                            'secondarytype' => 'IT',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Other',
                                            'displayorder' => '999',
                                          ),
                                        ),
                                        10 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Miles accrual',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Getting more with each flight',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Miles accrual',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Mileage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'FrequentFlyer',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAN8NqCAAAAA==',
                                            'secondarytype' => 'MG',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Mileage Accrual',
                                            'displayorder' => '10',
                                          ),
                                        ),
                                        11 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'No show permitted',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'For your additional flexibility',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'No show.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'No show.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'No show permitted',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'NoShow',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'TravelServices',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAO8NqCAAAAA==',
                                            'secondarytype' => 'NS',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        12 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Priority Checkin Fast Track and boarding',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Beat the queues through security',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Priority Checkin Fast Track and boarding',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Priority',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'TravelServices',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAP8NqCAAAAA==',
                                            'secondarytype' => 'SY',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Priority Security',
                                            'displayorder' => '18',
                                          ),
                                        ),
                                        13 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Mileage upgrade',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade!',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade to a higher cabin.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade to a higher cabin.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Mileage upgrade',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Mileage up',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Upgrades',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAQ8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Upgrades',
                                            'displayorder' => '11',
                                          ),
                                        ),
                                      ),
                                      'air:optionalservicerules' => 
                                      array (
                                        0 => 
                                        array (
                                          'common_v42_0:remarks' => 'Y,X,KG,25,BAG',
                                          '@attributes' => 
                                          array (
                                            'key' => 'z5lV5oBqWDKAC8NqCAAAAA==',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'common_v42_0:remarks' => 'Y,1,KG,8,CY - W20,H40,L55,CM',
                                          '@attributes' => 
                                          array (
                                            'key' => 'z5lV5oBqWDKAE8NqCAAAAA==',
                                          ),
                                        ),
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'key' => 'z5lV5oBqWDKAr7NqCAAAAA==',
                                      'brandid' => '361790',
                                      'upsellbrandid' => '361788',
                                      'name' => 'Economy Saver',
                                      'carrier' => 'AI',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'value' => 'APPLY PER SECTOR',
                                  ),
                                ),
                                '@attributes' => 
                                array (
                                  'value' => 'CANCELLATION/NO-SHOW FEE',
                                ),
                              ),
                              '@attributes' => 
                              array (
                                'value' => 'NON ENDORSABLE/ CHANGE/',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'key' => 'z5lV5oBqWDKAs7NqCAAAAA==',
                              'type' => 'Other',
                              'amount' => 'INR300',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'z5lV5oBqWDKAr7NqCAAAAA==',
                            'farebasis' => 'SIPFS',
                            'passengertypecode' => 'ADT',
                            'origin' => 'CCU',
                            'destination' => 'BBI',
                            'effectivedate' => '2021-06-29T14:07:00.000+01:00',
                            'departuredate' => '2021-06-30',
                            'amount' => 'GBP26.00',
                            'negotiatedfare' => 'false',
                            'notvalidbefore' => '2021-06-30',
                            'notvalidafter' => '2021-06-30',
                            'taxamount' => 'GBP12.10',
                          ),
                        ),
                        1 => 
                        array (
                          'air:faresurcharge' => 
                          array (
                            'common_v42_0:endorsement' => 
                            array (
                              'common_v42_0:endorsement' => 
                              array (
                                'common_v42_0:endorsement' => 
                                array (
                                  'air:farerulekey' => 
                                  array (
                                    '@value' => '6UUVoSldxwgvNA4fgfh708bKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhr8Pfbco2J4W5h1gUOubWv9SD5QULEHOHadwjMHbhzGe1FJgKAGu8yllmzapJzTWH8siOHFaFMf8hf6E18cRejGVqfCTByZWB98KxJ35Bj3Drxa4kYfhAhHqNbjwzJx7oo0sKBvhNXxax82lg6oSSDxdhy14poZCm0ACA4xcw3/+ly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4q+cJFUBzriwNmwgE7MqQt7PHybnt8kEFNFX/4N2RTghOW5Q29uMMLX4gS/euWFMGbeWZkRGLN3KAxevs8wf8A=',
                                    '@attributes' => 
                                    array (
                                      'fareinforef' => 'z5lV5oBqWDKAR8NqCAAAAA==',
                                      'providercode' => '1G',
                                    ),
                                  ),
                                  'air:brand' => 
                                  array (
                                    'air:title' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'Economy Saver',
                                        '@attributes' => 
                                        array (
                                          'type' => 'External',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'EcoSaver',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Short',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                    ),
                                    'air:text' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'Included in your ECONOMY SAVER fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 24hrs prior departure. 
      •  Refunds against a fee until 24hrs prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                        '@attributes' => 
                                        array (
                                          'type' => 'MarketingConsumer',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'Included in your ECONOMY SAVER fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 24hrs prior departure. 
      •  Refunds against a fee until 24hrs prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                        '@attributes' => 
                                        array (
                                          'type' => 'MarketingAgent',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      2 => 
                                      array (
                                        '@value' => 'For our budget minded travellers',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Strapline',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                    ),
                                    'air:imagelocation' => 
                                    array (
                                      0 => 
                                      array (
                                        '@value' => 'https://cdn.travelport.com/airindia/AI_general_large_42653.jpg',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Consumer',
                                          'imagewidth' => '1400',
                                          'imageheight' => '800',
                                        ),
                                      ),
                                      1 => 
                                      array (
                                        '@value' => 'https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Agent',
                                          'imagewidth' => '150',
                                          'imageheight' => '149',
                                        ),
                                      ),
                                    ),
                                    'air:optionalservices' => 
                                    array (
                                      'air:optionalservice' => 
                                      array (
                                        0 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Domestic Checked Baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'DOM Bag',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Domestic Checked Baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Y,X,KG,25,',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAn8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'optionalservicesruleref' => 'z5lV5oBqWDKAo8NqCAAAAA==',
                                            'tag' => 'Checked Baggage',
                                            'displayorder' => '1',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Carry on baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Taking bags on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Carry on baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Y,1,8,CY',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAp8NqCAAAAA==',
                                            'secondarytype' => 'CY',
                                            'chargeable' => 'Included in the brand',
                                            'optionalservicesruleref' => 'z5lV5oBqWDKAq8NqCAAAAA==',
                                            'tag' => 'Carry On Hand Baggage',
                                            'displayorder' => '2',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Extra baggage',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Additional baggage as required',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Extra baggage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Xbags',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Baggage',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAr8NqCAAAAA==',
                                            'secondarytype' => 'XS',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Other',
                                            'displayorder' => '999',
                                          ),
                                        ),
                                        3 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Refund',
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:title' => 
                                              array (
                                                '@value' => '',
                                                '@attributes' => 
                                                array (
                                                  'type' => 'Short',
                                                  'languagecode' => 'EN',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Branded Fares',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'servicesubcode' => '',
                                            'key' => 'z5lV5oBqWDKAs8NqCAAAAA==',
                                            'secondarytype' => 'RF',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        4 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Rebooking',
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Branded Fares',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAt8NqCAAAAA==',
                                            'secondarytype' => 'VC',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Rebooking',
                                            'displayorder' => '3',
                                          ),
                                        ),
                                        5 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Rebooking',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Making changes to your booking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'At Air India we understand that from time to time your passengers may need to make changes to their reservation. The amount they will have to pay will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'At Air India we understand that from time to time you may need to make changes to your reservation. The amount you will have to pay will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Rebooking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Rebooking',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'RuleOverride',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAu8NqCAAAAA==',
                                            'secondarytype' => '31',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Rebooking',
                                            'displayorder' => '3',
                                          ),
                                        ),
                                        6 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Refunds',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Cancelling your reservation',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'We understand that from time to time your passenger may need to cancel their reservation. The amount they will receive in refund will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'We understand that from time to time you may need to cancel your reservation. The amount you will receive in refund will depend on the route and class booked.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Refunds',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Refunds',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'RuleOverride',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAv8NqCAAAAA==',
                                            'secondarytype' => '33',
                                            'chargeable' => 'Available for a charge',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        7 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Advance seat reservation',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Pre book your preferred seat',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre reserved seat assignment.
      Your passenger can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Pre reserved seat assignment
      You can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Advance seat reservation',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Pre Reserv',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'PreReservedSeatAssignment',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAw8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Seat Assignment',
                                            'displayorder' => '5',
                                          ),
                                        ),
                                        8 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Inflight Meals',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Food at Maharajah now at your table',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Inflight Meals',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Meals',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'MealOrBeverage',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAx8NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Meals and Beverages',
                                            'displayorder' => '6',
                                          ),
                                        ),
                                        9 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'WiFi on board',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Stay connected on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'WiFi on board.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'WiFi on board.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'WiFi on board',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'WiFi',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'InFlightEntertainment',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAy8NqCAAAAA==',
                                            'secondarytype' => 'IT',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Other',
                                            'displayorder' => '999',
                                          ),
                                        ),
                                        10 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Miles accrual',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Getting more with each flight',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Miles accrual',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Mileage',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'FrequentFlyer',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKAz8NqCAAAAA==',
                                            'secondarytype' => 'MG',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Mileage Accrual',
                                            'displayorder' => '10',
                                          ),
                                        ),
                                        11 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'No show permitted',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Consumer',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Agent',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'For your additional flexibility',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'No show.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'No show.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'No show permitted',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'NoShow',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'TravelServices',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKA08NqCAAAAA==',
                                            'secondarytype' => 'NS',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Refund',
                                            'displayorder' => '4',
                                          ),
                                        ),
                                        12 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Priority Checkin Fast Track and boarding',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Beat the queues through security',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Priority Checkin Fast Track and boarding',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Priority',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'TravelServices',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKA18NqCAAAAA==',
                                            'secondarytype' => 'SY',
                                            'chargeable' => 'Not offered',
                                            'tag' => 'Priority Security',
                                            'displayorder' => '18',
                                          ),
                                        ),
                                        13 => 
                                        array (
                                          'common_v42_0:servicedata' => 
                                          array (
                                            'common_v42_0:serviceinfo' => 
                                            array (
                                              'common_v42_0:description' => 'Mileage upgrade',
                                              'common_v42_0:mediaitem' => 
                                              array (
                                                'common_v42_0:mediaitem' => 
                                                array (
                                                  '@value' => '',
                                                  '@attributes' => 
                                                  array (
                                                    'caption' => 'Agent',
                                                    'height' => '60',
                                                    'width' => '60',
                                                    'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'caption' => 'Consumer',
                                                  'height' => '60',
                                                  'width' => '60',
                                                  'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                                ),
                                              ),
                                            ),
                                            'air:emd' => 
                                            array (
                                              'air:text' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade!',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Strapline',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade to a higher cabin.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingAgent',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                2 => 
                                                array (
                                                  '@value' => 'Use your miles to upgrade to a higher cabin.',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'MarketingConsumer',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              'air:title' => 
                                              array (
                                                0 => 
                                                array (
                                                  '@value' => 'Mileage upgrade',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'External',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                                1 => 
                                                array (
                                                  '@value' => 'Mileage up',
                                                  '@attributes' => 
                                                  array (
                                                    'type' => 'Short',
                                                    'languagecode' => 'EN',
                                                  ),
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'associateditem' => 'Flight',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'type' => 'Upgrades',
                                            'createdate' => '2021-06-29T13:07:51.170+00:00',
                                            'key' => 'z5lV5oBqWDKA28NqCAAAAA==',
                                            'chargeable' => 'Included in the brand',
                                            'tag' => 'Upgrades',
                                            'displayorder' => '11',
                                          ),
                                        ),
                                      ),
                                      'air:optionalservicerules' => 
                                      array (
                                        0 => 
                                        array (
                                          'common_v42_0:remarks' => 'Y,X,KG,25,BAG',
                                          '@attributes' => 
                                          array (
                                            'key' => 'z5lV5oBqWDKAo8NqCAAAAA==',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'common_v42_0:remarks' => 'Y,1,KG,8,CY - W20,H40,L55,CM',
                                          '@attributes' => 
                                          array (
                                            'key' => 'z5lV5oBqWDKAq8NqCAAAAA==',
                                          ),
                                        ),
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'key' => 'z5lV5oBqWDKAR8NqCAAAAA==',
                                      'brandid' => '361790',
                                      'upsellbrandid' => '361788',
                                      'name' => 'Economy Saver',
                                      'carrier' => 'AI',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'value' => 'APPLY PER SECTOR',
                                  ),
                                ),
                                '@attributes' => 
                                array (
                                  'value' => 'CANCELLATION/NO-SHOW FEE',
                                ),
                              ),
                              '@attributes' => 
                              array (
                                'value' => 'NON ENDORSABLE/ CHANGE/',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'key' => 'z5lV5oBqWDKAS8NqCAAAAA==',
                              'type' => 'Other',
                              'amount' => 'INR300',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'z5lV5oBqWDKAR8NqCAAAAA==',
                            'farebasis' => 'SIP',
                            'passengertypecode' => 'ADT',
                            'origin' => 'BBI',
                            'destination' => 'DEL',
                            'effectivedate' => '2021-06-29T14:07:00.000+01:00',
                            'departuredate' => '2021-06-30',
                            'amount' => 'GBP47.00',
                            'negotiatedfare' => 'false',
                            'notvalidbefore' => '2021-06-30',
                            'notvalidafter' => '2021-06-30',
                            'taxamount' => 'GBP4.10',
                          ),
                        ),
                      ),
                      'air:bookinginfo' => 
                      array (
                        'air:bookinginfo' => 
                        array (
                          'air:taxinfo' => 
                          array (
                            'air:taxinfo' => 
                            array (
                              'air:taxinfo' => 
                              array (
                                'air:taxinfo' => 
                                array (
                                  'air:farecalc' => 'CCU AI BBI Q300 2430SIPFS AI DEL Q300 4530SIP INR7560END',
                                  'air:passengertype' => 
                                  array (
                                    'air:changepenalty' => 
                                    array (
                                      'air:amount' => 'GBP29.00',
                                    ),
                                    'air:cancelpenalty' => 
                                    array (
                                      'air:amount' => 'GBP33.00',
                                    ),
                                    'air:baggageallowances' => 
                                    array (
                                      'air:baggageallowanceinfo' => 
                                      array (
                                        'air:urlinfo' => 
                                        array (
                                          'air:url' => 'VIEWTRIP.TRAVELPORT.COM/BAGGAGEPOLICY/AI',
                                        ),
                                        'air:textinfo' => 
                                        array (
                                          'air:text' => 
                                          array (
                                            0 => '25K',
                                            1 => 'BAGGAGE DISCOUNTS MAY APPLY BASED ON FREQUENT FLYER STATUS/ ONLINE CHECKIN/FORM OF PAYMENT/MILITARY/ETC.',
                                          ),
                                        ),
                                        'air:bagdetails' => 
                                        array (
                                          0 => 
                                          array (
                                            'air:baggagerestriction' => 
                                            array (
                                              'air:textinfo' => 
                                              array (
                                                'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'applicablebags' => '1stChecked',
                                            ),
                                          ),
                                          1 => 
                                          array (
                                            'air:baggagerestriction' => 
                                            array (
                                              'air:textinfo' => 
                                              array (
                                                'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'applicablebags' => '2ndChecked',
                                            ),
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'travelertype' => 'ADT',
                                          'origin' => 'CCU',
                                          'destination' => 'DEL',
                                          'carrier' => 'AI',
                                        ),
                                      ),
                                      'air:carryonallowanceinfo' => 
                                      array (
                                        0 => 
                                        array (
                                          'air:textinfo' => 
                                          array (
                                            'air:text' => '8K',
                                          ),
                                          'air:carryondetails' => 
                                          array (
                                            0 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '1',
                                              ),
                                            ),
                                            1 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '2',
                                              ),
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'origin' => 'CCU',
                                            'destination' => 'BBI',
                                            'carrier' => 'AI',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'air:textinfo' => 
                                          array (
                                            'air:text' => '8K',
                                          ),
                                          'air:carryondetails' => 
                                          array (
                                            0 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '1',
                                              ),
                                            ),
                                            1 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '2',
                                              ),
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'origin' => 'BBI',
                                            'destination' => 'DEL',
                                            'carrier' => 'AI',
                                          ),
                                        ),
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'code' => 'ADT',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'category' => 'YR',
                                    'amount' => 'GBP3.40',
                                    'key' => 'z5lV5oBqWDKAq7NqCAAAAA==',
                                  ),
                                ),
                                '@attributes' => 
                                array (
                                  'category' => 'P2',
                                  'amount' => 'GBP2.30',
                                  'key' => 'z5lV5oBqWDKAp7NqCAAAAA==',
                                ),
                              ),
                              '@attributes' => 
                              array (
                                'category' => 'K3',
                                'amount' => 'GBP3.80',
                                'key' => 'z5lV5oBqWDKAo7NqCAAAAA==',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'category' => 'IN',
                              'amount' => 'GBP6.70',
                              'key' => 'z5lV5oBqWDKAn7NqCAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'bookingcode' => 'S',
                            'cabinclass' => 'Economy',
                            'fareinforef' => 'z5lV5oBqWDKAR8NqCAAAAA==',
                            'segmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                            'hosttokenref' => 'z5lV5oBqWDKAl7NqCAAAAA==',
                          ),
                        ),
                        '@attributes' => 
                        array (
                          'bookingcode' => 'S',
                          'cabinclass' => 'Economy',
                          'fareinforef' => 'z5lV5oBqWDKAr7NqCAAAAA==',
                          'segmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                          'hosttokenref' => 'z5lV5oBqWDKAk7NqCAAAAA==',
                        ),
                      ),
                      '@attributes' => 
                      array (
                        'key' => 'z5lV5oBqWDKAm7NqCAAAAA==',
                        'totalprice' => 'GBP89.20',
                        'baseprice' => 'INR7560',
                        'approximatetotalprice' => 'GBP89.20',
                        'approximatebaseprice' => 'GBP73.00',
                        'equivalentbaseprice' => 'GBP73.00',
                        'approximatetaxes' => 'GBP16.20',
                        'taxes' => 'GBP16.20',
                        'latestticketingtime' => '2021-06-30T23:59:00.000+01:00',
                        'pricingmethod' => 'Guaranteed',
                        'refundable' => 'true',
                        'includesvat' => 'false',
                        'eticketability' => 'Yes',
                        'platingcarrier' => 'AI',
                        'providercode' => '1G',
                      ),
                    ),
                    'air:farenote' => 
                    array (
                      0 => 
                      array (
                        '@value' => 'RATE USED IN EQU TOTAL IS BSR 1INR - 0.009686GBP',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA58NqCAAAAA==',
                        ),
                      ),
                      1 => 
                      array (
                        '@value' => 'LAST DATE TO PURCHASE TICKET: 30JUN21',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA68NqCAAAAA==',
                        ),
                      ),
                      2 => 
                      array (
                        '@value' => 'TICKETING AGENCY 8W37',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA78NqCAAAAA==',
                        ),
                      ),
                      3 => 
                      array (
                        '@value' => 'DEFAULT PLATING CARRIER AI',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA88NqCAAAAA==',
                        ),
                      ),
                      4 => 
                      array (
                        '@value' => 'FARE HAS A PLATING CARRIER RESTRICTION',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA98NqCAAAAA==',
                        ),
                      ),
                      5 => 
                      array (
                        '@value' => 'E-TKT REQUIRED',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA+8NqCAAAAA==',
                        ),
                      ),
                      6 => 
                      array (
                        '@value' => 'TICKETING FEES MAY APPLY',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKA/8NqCAAAAA==',
                        ),
                      ),
                    ),
                    'common_v42_0:hosttoken' => 
                    array (
                      0 => 
                      array (
                        '@value' => 'GFB10101ADT00  01SIPFS                                 010001#GFB200010101NADTV3302AI0400800001991K#GFMCEIP302NAI04 AI ADTSIPFS',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKAk7NqCAAAAA==',
                        ),
                      ),
                      1 => 
                      array (
                        '@value' => 'GFB10101ADT00  02SIP                                   010002#GFB200010102NADTV3302AI0407700001991K#GFMCEIP302NAI04 AI ADTSIP',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKAl7NqCAAAAA==',
                        ),
                      ),
                    ),
                    '@attributes' => 
                    array (
                      'key' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                    ),
                  ),
                  '@attributes' => 
                  array (
                    'key' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                  ),
                ),
                '@attributes' => 
                array (
                  'key' => 'z5lV5oBqWDKAj7NqCAAAAA==',
                  'totalprice' => 'GBP89.20',
                  'baseprice' => 'INR7560',
                  'approximatetotalprice' => 'GBP89.20',
                  'approximatebaseprice' => 'GBP73.00',
                  'equivalentbaseprice' => 'GBP73.00',
                  'taxes' => 'GBP16.20',
                  'fees' => 'GBP0.00',
                  'approximatetaxes' => 'GBP16.20',
                  'quotedate' => '2021-06-29',
                ),
              ),
              1 => 
              array (
                'air:airsegmentref' => 
                array (
                  'air:airsegmentref' => 
                  array (
                    'air:airpricinginfo' => 
                    array (
                      'air:fareinfo' => 
                      array (
                        0 => 
                        array (
                          'air:farerulekey' => 
                          array (
                            '@value' => '6UUVoSldxwgvNA4fgfh708bKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhr8QEPE5mswOH2M+yJT5xc5SD5QULEHOHfy+L2eO6kuhVx0UAwD+SiCU0SN05UdULMCIbRqMTJch6v9tEaRJgF5C/YIEuJEelnKDgpmjnJFVTuuPDZc/rXpJTyB5x9tYSQLWhthMb3jljiXQ9MogEdouJPfZz/ggym0N03Bf4LZGly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA2+QKPIWaRvq6oxE1UL944DjaSte7T4ddDlN7mTMg9NhBr8o+GOA4yVmuRetWk1Zsx4WExVb316nsNJCJ9ZmkFA=',
                            '@attributes' => 
                            array (
                              'fareinforef' => 'z5lV5oBqWDKAI9NqCAAAAA==',
                              'providercode' => '1G',
                            ),
                          ),
                          'air:brand' => 
                          array (
                            'air:title' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'Economy Basic',
                                '@attributes' => 
                                array (
                                  'type' => 'External',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'EcoBasic',
                                '@attributes' => 
                                array (
                                  'type' => 'Short',
                                  'languagecode' => 'EN',
                                ),
                              ),
                            ),
                            'air:text' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'Included in your ECONOMY BASIC fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 1hr prior departure. 
      •  Refunds against a fee until 1hr prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                '@attributes' => 
                                array (
                                  'type' => 'MarketingConsumer',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'Upgrade to Economy Basic fares which offer rebooking against a fee until 1 hour prior departure',
                                '@attributes' => 
                                array (
                                  'type' => 'Upsell',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              2 => 
                              array (
                                '@value' => 'Included in your ECONOMY BASIC fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 1hr prior departure. 
      •  Refunds against a fee until 1hr prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                '@attributes' => 
                                array (
                                  'type' => 'MarketingAgent',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              3 => 
                              array (
                                '@value' => 'Always good deals',
                                '@attributes' => 
                                array (
                                  'type' => 'Strapline',
                                  'languagecode' => 'EN',
                                ),
                              ),
                            ),
                            'air:imagelocation' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'https://cdn.travelport.com/airindia/AI_general_large_42653.jpg',
                                '@attributes' => 
                                array (
                                  'type' => 'Consumer',
                                  'imagewidth' => '1400',
                                  'imageheight' => '800',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg',
                                '@attributes' => 
                                array (
                                  'type' => 'Agent',
                                  'imagewidth' => '150',
                                  'imageheight' => '149',
                                ),
                              ),
                            ),
                            'air:optionalservices' => 
                            array (
                              'air:optionalservice' => 
                              array (
                                0 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Domestic Checked Baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'DOM Bag',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Domestic Checked Baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Y,X,KG,25,',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAa9NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'optionalservicesruleref' => 'z5lV5oBqWDKAb9NqCAAAAA==',
                                    'tag' => 'Checked Baggage',
                                    'displayorder' => '1',
                                  ),
                                ),
                                1 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Carry on baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Taking bags on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Carry on baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Y,1,8,CY',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAc9NqCAAAAA==',
                                    'secondarytype' => 'CY',
                                    'chargeable' => 'Included in the brand',
                                    'optionalservicesruleref' => 'z5lV5oBqWDKAd9NqCAAAAA==',
                                    'tag' => 'Carry On Hand Baggage',
                                    'displayorder' => '2',
                                  ),
                                ),
                                2 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Extra baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Additional baggage as required',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Extra baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Xbags',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAe9NqCAAAAA==',
                                    'secondarytype' => 'XS',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Other',
                                    'displayorder' => '999',
                                  ),
                                ),
                                3 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Refund',
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:title' => 
                                      array (
                                        '@value' => '',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Short',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Branded Fares',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'servicesubcode' => '',
                                    'key' => 'z5lV5oBqWDKAf9NqCAAAAA==',
                                    'secondarytype' => 'RF',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                4 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Rebooking',
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Branded Fares',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAg9NqCAAAAA==',
                                    'secondarytype' => 'VC',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Rebooking',
                                    'displayorder' => '3',
                                  ),
                                ),
                                5 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Rebooking',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Making changes to your booking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'At Air India we understand that from time to time your passengers may need to make changes to their reservation. The amount they will have to pay will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'At Air India we understand that from time to time you may need to make changes to your reservation. The amount you will have to pay will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Rebooking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Rebooking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'RuleOverride',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAh9NqCAAAAA==',
                                    'secondarytype' => '31',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Rebooking',
                                    'displayorder' => '3',
                                  ),
                                ),
                                6 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Refunds',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Cancelling your reservation',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'We understand that from time to time your passenger may need to cancel their reservation. The amount they will receive in refund will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'We understand that from time to time you may need to cancel your reservation. The amount you will receive in refund will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Refunds',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Refunds',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'RuleOverride',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAi9NqCAAAAA==',
                                    'secondarytype' => '33',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                7 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Advance seat reservation',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Pre book your preferred seat',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre reserved seat assignment.
      Your passenger can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Pre reserved seat assignment
      You can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Advance seat reservation',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre Reserv',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'PreReservedSeatAssignment',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAj9NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Seat Assignment',
                                    'displayorder' => '5',
                                  ),
                                ),
                                8 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Inflight Meals',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Food at Maharajah now at your table',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Inflight Meals',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Meals',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'MealOrBeverage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAk9NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Meals and Beverages',
                                    'displayorder' => '6',
                                  ),
                                ),
                                9 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'WiFi on board',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Stay connected on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'WiFi on board.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'WiFi on board.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'WiFi on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'WiFi',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'InFlightEntertainment',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAl9NqCAAAAA==',
                                    'secondarytype' => 'IT',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Other',
                                    'displayorder' => '999',
                                  ),
                                ),
                                10 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Miles accrual',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Getting more with each flight',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Miles accrual',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Mileage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'FrequentFlyer',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAm9NqCAAAAA==',
                                    'secondarytype' => 'MG',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Mileage Accrual',
                                    'displayorder' => '10',
                                  ),
                                ),
                                11 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'No show permitted',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'For your additional flexibility',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'No show.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'No show.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'No show permitted',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'NoShow',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'TravelServices',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAn9NqCAAAAA==',
                                    'secondarytype' => 'NS',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                12 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Priority Checkin Fast Track and boarding',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Beat the queues through security',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Priority Checkin Fast Track and boarding',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Priority',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'TravelServices',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAo9NqCAAAAA==',
                                    'secondarytype' => 'SY',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Priority Security',
                                    'displayorder' => '18',
                                  ),
                                ),
                                13 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Mileage upgrade',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade!',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade to a higher cabin.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade to a higher cabin.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Mileage upgrade',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Mileage up',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Upgrades',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAp9NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Upgrades',
                                    'displayorder' => '11',
                                  ),
                                ),
                              ),
                              'air:optionalservicerules' => 
                              array (
                                0 => 
                                array (
                                  'common_v42_0:remarks' => 'Y,X,KG,25,BAG',
                                  '@attributes' => 
                                  array (
                                    'key' => 'z5lV5oBqWDKAb9NqCAAAAA==',
                                  ),
                                ),
                                1 => 
                                array (
                                  'common_v42_0:remarks' => 'Y,1,KG,8,CY - W20,H40,L55,CM',
                                  '@attributes' => 
                                  array (
                                    'key' => 'z5lV5oBqWDKAd9NqCAAAAA==',
                                  ),
                                ),
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'key' => 'z5lV5oBqWDKAI9NqCAAAAA==',
                              'brandid' => '361788',
                              'name' => 'Economy Basic',
                              'upsellbrandfound' => 'false',
                              'carrier' => 'AI',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'z5lV5oBqWDKAI9NqCAAAAA==',
                            'farebasis' => 'UIPFS',
                            'passengertypecode' => 'ADT',
                            'origin' => 'CCU',
                            'destination' => 'BBI',
                            'effectivedate' => '2021-06-29T14:07:00.000+01:00',
                            'departuredate' => '2021-06-30',
                            'amount' => 'GBP32.00',
                            'negotiatedfare' => 'false',
                            'notvalidbefore' => '2021-06-30',
                            'notvalidafter' => '2021-06-30',
                            'taxamount' => 'GBP12.40',
                          ),
                        ),
                        1 => 
                        array (
                          'air:farerulekey' => 
                          array (
                            '@value' => '6UUVoSldxwgvNA4fgfh708bKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhjhGzeFHZRRoNXELvJMYZyhSD5QULEHOHdUt3xQia9pA1FJgKAGu8yllmzapJzTWH8siOHFaFMf8hf6E18cRejGVqfCTByZWB0CgoL3q+7C2IiI34n2+2lvqNbjwzJx7oo0sKBvhNXxax82lg6oSSDzc67sI5uuwCkACA4xcw3/+ly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4q+cJFUBzriwNmwgE7MqQt7PHybnt8kEFNFX/4N2RTgIH9bZnLKGtbX4gS/euWFMGbeWZkRGLN3KAxevs8wf8A=',
                            '@attributes' => 
                            array (
                              'fareinforef' => 'z5lV5oBqWDKAq9NqCAAAAA==',
                              'providercode' => '1G',
                            ),
                          ),
                          'air:brand' => 
                          array (
                            'air:title' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'Economy Basic',
                                '@attributes' => 
                                array (
                                  'type' => 'External',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'EcoBasic',
                                '@attributes' => 
                                array (
                                  'type' => 'Short',
                                  'languagecode' => 'EN',
                                ),
                              ),
                            ),
                            'air:text' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'Included in your ECONOMY BASIC fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 1hr prior departure. 
      •  Refunds against a fee until 1hr prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                '@attributes' => 
                                array (
                                  'type' => 'MarketingConsumer',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'Upgrade to Economy Basic fares which offer rebooking against a fee until 1 hour prior departure',
                                '@attributes' => 
                                array (
                                  'type' => 'Upsell',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              2 => 
                              array (
                                '@value' => 'Included in your ECONOMY BASIC fare are:
      
      •  Check in 25kg baggage allowance. 
      •  Carry on one bag max 8kg. 
      •  Choice of continental or Indian cuisine non veg or veg. 
      •  Complimentary liquors and wine. 
      •  Spacious seats with a pitch of 33 inches. 
      •  Rebooking against a fee until 1hr prior departure. 
      •  Refunds against a fee until 1hr prior departure. 
      •  Earn miles when you fly.
      
      Note: Refer to fare rules for specific booking terms and conditions.
      • Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.',
                                '@attributes' => 
                                array (
                                  'type' => 'MarketingAgent',
                                  'languagecode' => 'EN',
                                ),
                              ),
                              3 => 
                              array (
                                '@value' => 'Always good deals',
                                '@attributes' => 
                                array (
                                  'type' => 'Strapline',
                                  'languagecode' => 'EN',
                                ),
                              ),
                            ),
                            'air:imagelocation' => 
                            array (
                              0 => 
                              array (
                                '@value' => 'https://cdn.travelport.com/airindia/AI_general_large_42653.jpg',
                                '@attributes' => 
                                array (
                                  'type' => 'Consumer',
                                  'imagewidth' => '1400',
                                  'imageheight' => '800',
                                ),
                              ),
                              1 => 
                              array (
                                '@value' => 'https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg',
                                '@attributes' => 
                                array (
                                  'type' => 'Agent',
                                  'imagewidth' => '150',
                                  'imageheight' => '149',
                                ),
                              ),
                            ),
                            'air:optionalservices' => 
                            array (
                              'air:optionalservice' => 
                              array (
                                0 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Domestic Checked Baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2152.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'DOM Bag',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Baggage Allowance Domestic Flights
      
      First Class (F,A,O) 40kgs
      Business Class (C,D,J,Z,I) 35kgs
      Economy Class (Y, B, M, H, K, Q, V, W, G, L, U, T, S, X, E) 25kgs',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Domestic Checked Baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Y,X,KG,25,',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKA89NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'optionalservicesruleref' => 'z5lV5oBqWDKA99NqCAAAAA==',
                                    'tag' => 'Checked Baggage',
                                    'displayorder' => '1',
                                  ),
                                ),
                                1 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Carry on baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2153.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Taking bags on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'One carry on bag max 8kg permitted 55 cms (22 inches) x 40 cms (16 inches) x 20 cms (8 inches). 
      
      Children are entitled to the same cabin baggage allowance as adults.
      
      In addition to one piece of cabin baggage or package, you may also be permitted to carry one following personal item, subject to Security Regulations:
      
      • A Ladys hand bag.
      • An overcoat or wrap.
      • A rug or a blanket
      • A camera or binoculars
      • Reasonable amount of reading material for the flight.
      • Infants feed for consumption during the flight and infants carrying basket, feeding bottle, if an infant is carried.
      • A Collapsible wheelchair or pair of crutches or braces for passengers use, if dependent on these.
      • A Walking stick.
      • An umbrella (Folding type)
      • Medicines required during Flight like Asthma inhaler etc.
      • A Laptop.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Carry on baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Y,1,8,CY',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKA+9NqCAAAAA==',
                                    'secondarytype' => 'CY',
                                    'chargeable' => 'Included in the brand',
                                    'optionalservicesruleref' => 'z5lV5oBqWDKA/9NqCAAAAA==',
                                    'tag' => 'Carry On Hand Baggage',
                                    'displayorder' => '2',
                                  ),
                                ),
                                2 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Extra baggage',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_45799.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Additional baggage as required',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Pre purchase additional baggage allowance for check in as required. 
      
      20% discount if you pre book your excess prior to 6 hours before your flight.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Extra baggage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Xbags',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Baggage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAA+NqCAAAAA==',
                                    'secondarytype' => 'XS',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Other',
                                    'displayorder' => '999',
                                  ),
                                ),
                                3 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Refund',
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:title' => 
                                      array (
                                        '@value' => '',
                                        '@attributes' => 
                                        array (
                                          'type' => 'Short',
                                          'languagecode' => 'EN',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Branded Fares',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'servicesubcode' => '',
                                    'key' => 'z5lV5oBqWDKAB+NqCAAAAA==',
                                    'secondarytype' => 'RF',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                4 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Rebooking',
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Branded Fares',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAC+NqCAAAAA==',
                                    'secondarytype' => 'VC',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Rebooking',
                                    'displayorder' => '3',
                                  ),
                                ),
                                5 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Rebooking',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2160.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Making changes to your booking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'At Air India we understand that from time to time your passengers may need to make changes to their reservation. The amount they will have to pay will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'At Air India we understand that from time to time you may need to make changes to your reservation. The amount you will have to pay will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Rebooking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Rebooking',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'RuleOverride',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAD+NqCAAAAA==',
                                    'secondarytype' => '31',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Rebooking',
                                    'displayorder' => '3',
                                  ),
                                ),
                                6 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Refunds',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2161.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Cancelling your reservation',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'We understand that from time to time your passenger may need to cancel their reservation. The amount they will receive in refund will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'We understand that from time to time you may need to cancel your reservation. The amount you will receive in refund will depend on the route and class booked.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Refunds',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Refunds',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'RuleOverride',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAE+NqCAAAAA==',
                                    'secondarytype' => '33',
                                    'chargeable' => 'Available for a charge',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                7 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Advance seat reservation',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2162.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Pre book your preferred seat',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre reserved seat assignment.
      Your passenger can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Pre reserved seat assignment
      You can check-in through AIR INDIA website  www.airindia.in and make selection of your seat on- line and print boarding pass.
      
      Please note that if the flight is operated by another airline then the options to pre assign seats might be different.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Advance seat reservation',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Pre Reserv',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'PreReservedSeatAssignment',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAF+NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Seat Assignment',
                                    'displayorder' => '5',
                                  ),
                                ),
                                8 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Inflight Meals',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2158.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Food at Maharajah now at your table',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'In Business or Economy Class passengers can enjoy a selection of meals with a choice of continental or Indian cuisine. 
      
      These are accompanied by complimentary liquors, wines or soft drinks. 
      
      In First Class passengers are treated to stimulating cocktails followed by a fine selection of the most delectable entrees. 
      
      Gourmet food in First Class is served on specially selected Noritake fine bone china.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Inflight Meals',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Meals',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'MealOrBeverage',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAG+NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Meals and Beverages',
                                    'displayorder' => '6',
                                  ),
                                ),
                                9 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'WiFi on board',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_4570.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Stay connected on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'WiFi on board.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'WiFi on board.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'WiFi on board',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'WiFi',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'InFlightEntertainment',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAH+NqCAAAAA==',
                                    'secondarytype' => 'IT',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Other',
                                    'displayorder' => '999',
                                  ),
                                ),
                                10 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Miles accrual',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2154.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Getting more with each flight',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Every time you fly Air India, you accrue miles based on sector and the booking class. The miles you earn on domestic sector and on international sectors.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Miles accrual',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Mileage',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'FrequentFlyer',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAI+NqCAAAAA==',
                                    'secondarytype' => 'MG',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Mileage Accrual',
                                    'displayorder' => '10',
                                  ),
                                ),
                                11 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'No show permitted',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Consumer',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Agent',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_42570.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'For your additional flexibility',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'No show.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'No show.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'No show permitted',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'NoShow',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'TravelServices',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAJ+NqCAAAAA==',
                                    'secondarytype' => 'NS',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Refund',
                                    'displayorder' => '4',
                                  ),
                                ),
                                12 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Priority Checkin Fast Track and boarding',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2165.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Beat the queues through security',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Passengers travelling in Executive Class or First Class can check in at a separate exclusive zone, use the fast lane and board the plane with priority.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Priority Checkin Fast Track and boarding',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Priority',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'TravelServices',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAK+NqCAAAAA==',
                                    'secondarytype' => 'SY',
                                    'chargeable' => 'Not offered',
                                    'tag' => 'Priority Security',
                                    'displayorder' => '18',
                                  ),
                                ),
                                13 => 
                                array (
                                  'common_v42_0:servicedata' => 
                                  array (
                                    'common_v42_0:serviceinfo' => 
                                    array (
                                      'common_v42_0:description' => 'Mileage upgrade',
                                      'common_v42_0:mediaitem' => 
                                      array (
                                        'common_v42_0:mediaitem' => 
                                        array (
                                          '@value' => '',
                                          '@attributes' => 
                                          array (
                                            'caption' => 'Agent',
                                            'height' => '60',
                                            'width' => '60',
                                            'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'caption' => 'Consumer',
                                          'height' => '60',
                                          'width' => '60',
                                          'url' => 'https://cdn.travelport.com/airindia/AI_general_medium_2166.jpg',
                                        ),
                                      ),
                                    ),
                                    'air:emd' => 
                                    array (
                                      'air:text' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade!',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Strapline',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade to a higher cabin.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingAgent',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        2 => 
                                        array (
                                          '@value' => 'Use your miles to upgrade to a higher cabin.',
                                          '@attributes' => 
                                          array (
                                            'type' => 'MarketingConsumer',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      'air:title' => 
                                      array (
                                        0 => 
                                        array (
                                          '@value' => 'Mileage upgrade',
                                          '@attributes' => 
                                          array (
                                            'type' => 'External',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          '@value' => 'Mileage up',
                                          '@attributes' => 
                                          array (
                                            'type' => 'Short',
                                            'languagecode' => 'EN',
                                          ),
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'associateditem' => 'Flight',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'airsegmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'type' => 'Upgrades',
                                    'createdate' => '2021-06-29T13:07:51.170+00:00',
                                    'key' => 'z5lV5oBqWDKAL+NqCAAAAA==',
                                    'chargeable' => 'Included in the brand',
                                    'tag' => 'Upgrades',
                                    'displayorder' => '11',
                                  ),
                                ),
                              ),
                              'air:optionalservicerules' => 
                              array (
                                0 => 
                                array (
                                  'common_v42_0:remarks' => 'Y,X,KG,25,BAG',
                                  '@attributes' => 
                                  array (
                                    'key' => 'z5lV5oBqWDKA99NqCAAAAA==',
                                  ),
                                ),
                                1 => 
                                array (
                                  'common_v42_0:remarks' => 'Y,1,KG,8,CY - W20,H40,L55,CM',
                                  '@attributes' => 
                                  array (
                                    'key' => 'z5lV5oBqWDKA/9NqCAAAAA==',
                                  ),
                                ),
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'key' => 'z5lV5oBqWDKAq9NqCAAAAA==',
                              'brandid' => '361788',
                              'name' => 'Economy Basic',
                              'upsellbrandfound' => 'false',
                              'carrier' => 'AI',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'z5lV5oBqWDKAq9NqCAAAAA==',
                            'farebasis' => 'UIP',
                            'passengertypecode' => 'ADT',
                            'origin' => 'BBI',
                            'destination' => 'DEL',
                            'effectivedate' => '2021-06-29T14:07:00.000+01:00',
                            'departuredate' => '2021-06-30',
                            'amount' => 'GBP55.00',
                            'negotiatedfare' => 'false',
                            'notvalidbefore' => '2021-06-30',
                            'notvalidafter' => '2021-06-30',
                            'taxamount' => 'GBP4.50',
                          ),
                        ),
                      ),
                      'air:bookinginfo' => 
                      array (
                        'air:bookinginfo' => 
                        array (
                          'air:taxinfo' => 
                          array (
                            'air:taxinfo' => 
                            array (
                              'air:taxinfo' => 
                              array (
                                'air:taxinfo' => 
                                array (
                                  'air:farecalc' => 'CCU AI BBI Q300 3030UIPFS AI DEL Q300 5330UIP INR8960END',
                                  'air:passengertype' => 
                                  array (
                                    'air:changepenalty' => 
                                    array (
                                      'air:amount' => 'GBP24.00',
                                    ),
                                    'air:cancelpenalty' => 
                                    array (
                                      'air:amount' => 'GBP29.00',
                                    ),
                                    'air:baggageallowances' => 
                                    array (
                                      'air:baggageallowanceinfo' => 
                                      array (
                                        'air:urlinfo' => 
                                        array (
                                          'air:url' => 'VIEWTRIP.TRAVELPORT.COM/BAGGAGEPOLICY/AI',
                                        ),
                                        'air:textinfo' => 
                                        array (
                                          'air:text' => 
                                          array (
                                            0 => '25K',
                                            1 => 'BAGGAGE DISCOUNTS MAY APPLY BASED ON FREQUENT FLYER STATUS/ ONLINE CHECKIN/FORM OF PAYMENT/MILITARY/ETC.',
                                          ),
                                        ),
                                        'air:bagdetails' => 
                                        array (
                                          0 => 
                                          array (
                                            'air:baggagerestriction' => 
                                            array (
                                              'air:textinfo' => 
                                              array (
                                                'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'applicablebags' => '1stChecked',
                                            ),
                                          ),
                                          1 => 
                                          array (
                                            'air:baggagerestriction' => 
                                            array (
                                              'air:textinfo' => 
                                              array (
                                                'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'applicablebags' => '2ndChecked',
                                            ),
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'travelertype' => 'ADT',
                                          'origin' => 'CCU',
                                          'destination' => 'DEL',
                                          'carrier' => 'AI',
                                        ),
                                      ),
                                      'air:carryonallowanceinfo' => 
                                      array (
                                        0 => 
                                        array (
                                          'air:textinfo' => 
                                          array (
                                            'air:text' => '8K',
                                          ),
                                          'air:carryondetails' => 
                                          array (
                                            0 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '1',
                                              ),
                                            ),
                                            1 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '2',
                                              ),
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'origin' => 'CCU',
                                            'destination' => 'BBI',
                                            'carrier' => 'AI',
                                          ),
                                        ),
                                        1 => 
                                        array (
                                          'air:textinfo' => 
                                          array (
                                            'air:text' => '8K',
                                          ),
                                          'air:carryondetails' => 
                                          array (
                                            0 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '1',
                                              ),
                                            ),
                                            1 => 
                                            array (
                                              'air:baggagerestriction' => 
                                              array (
                                                'air:textinfo' => 
                                                array (
                                                  'air:text' => 'CHGS MAY APPLY IF BAGS EXCEED TTL WT ALLOWANCE',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'applicablecarryonbags' => '2',
                                              ),
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'origin' => 'BBI',
                                            'destination' => 'DEL',
                                            'carrier' => 'AI',
                                          ),
                                        ),
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'code' => 'ADT',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'category' => 'YR',
                                    'amount' => 'GBP3.40',
                                    'key' => 'z5lV5oBqWDKAH9NqCAAAAA==',
                                  ),
                                ),
                                '@attributes' => 
                                array (
                                  'category' => 'P2',
                                  'amount' => 'GBP2.30',
                                  'key' => 'z5lV5oBqWDKAG9NqCAAAAA==',
                                ),
                              ),
                              '@attributes' => 
                              array (
                                'category' => 'K3',
                                'amount' => 'GBP4.50',
                                'key' => 'z5lV5oBqWDKAF9NqCAAAAA==',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'category' => 'IN',
                              'amount' => 'GBP6.70',
                              'key' => 'z5lV5oBqWDKAE9NqCAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'bookingcode' => 'U',
                            'cabinclass' => 'Economy',
                            'fareinforef' => 'z5lV5oBqWDKAq9NqCAAAAA==',
                            'segmentref' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                            'hosttokenref' => 'z5lV5oBqWDKAC9NqCAAAAA==',
                          ),
                        ),
                        '@attributes' => 
                        array (
                          'bookingcode' => 'U',
                          'cabinclass' => 'Economy',
                          'fareinforef' => 'z5lV5oBqWDKAI9NqCAAAAA==',
                          'segmentref' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                          'hosttokenref' => 'z5lV5oBqWDKAB9NqCAAAAA==',
                        ),
                      ),
                      '@attributes' => 
                      array (
                        'key' => 'z5lV5oBqWDKAD9NqCAAAAA==',
                        'totalprice' => 'GBP103.90',
                        'baseprice' => 'INR8960',
                        'approximatetotalprice' => 'GBP103.90',
                        'approximatebaseprice' => 'GBP87.00',
                        'equivalentbaseprice' => 'GBP87.00',
                        'approximatetaxes' => 'GBP16.90',
                        'taxes' => 'GBP16.90',
                        'latestticketingtime' => '2021-06-30T23:59:00.000+01:00',
                        'pricingmethod' => 'Guaranteed',
                        'refundable' => 'true',
                        'includesvat' => 'false',
                        'platingcarrier' => 'AI',
                        'providercode' => '1G',
                      ),
                    ),
                    'common_v42_0:hosttoken' => 
                    array (
                      0 => 
                      array (
                        '@value' => 'GFB10101ADT00  01UIPFS                                 010001#GFB200010101NADTV3302022100800001991K#GFMCEIP302N0221 AI ADTUIPFS',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKAB9NqCAAAAA==',
                        ),
                      ),
                      1 => 
                      array (
                        '@value' => 'GFB10101ADT00  02UIP                                   010002#GFB200010102NADTV3302022108900001991K#GFMCEIP302N0221 AI ADTUIP',
                        '@attributes' => 
                        array (
                          'key' => 'z5lV5oBqWDKAC9NqCAAAAA==',
                        ),
                      ),
                    ),
                    '@attributes' => 
                    array (
                      'key' => 'z5lV5oBqWDKAh7NqCAAAAA==',
                    ),
                  ),
                  '@attributes' => 
                  array (
                    'key' => 'z5lV5oBqWDKAf7NqCAAAAA==',
                  ),
                ),
                '@attributes' => 
                array (
                  'key' => 'z5lV5oBqWDKAA9NqCAAAAA==',
                  'totalprice' => 'GBP103.90',
                  'baseprice' => 'INR8960',
                  'approximatetotalprice' => 'GBP103.90',
                  'approximatebaseprice' => 'GBP87.00',
                  'equivalentbaseprice' => 'GBP87.00',
                  'taxes' => 'GBP16.90',
                  'fees' => 'GBP0.00',
                  'approximatetaxes' => 'GBP16.90',
                  'quotedate' => '2021-06-29',
                ),
              ),
            ),
            'air:farerule' => 
            array (
              0 => 
              array (
                'air:farerulelong' => 
                array (
                  0 => 
                  array (
                    '@value' => 'RULE - 302/AI04
      UNLESS OTHERWISE SPECIFIED
      ECONOMY FARES ON DOMESTIC SECTORS
      APPLICATION
      AREA
      THESE FARES APPLY
      WITHIN INDIA.
      CLASS OF SERVICE
      THESE FARES APPLY FOR ECONOMY CLASS SERVICE.
      TYPES OF TRANSPORTATION
      THIS RULE GOVERNS ONE-WAY FARES.
      FARES GOVERNED BY THIS RULE CAN BE USED TO CREATE
      ONE-WAY/ROUND-TRIP/CIRCLE-TRIP JOURNEYS.
      ON SPECIFIED DOMESTIC SECTORS.',
                    '@attributes' => 
                    array (
                      'category' => '0',
                      'type' => 'RULE',
                    ),
                  ),
                  1 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE FARE COMPONENT MUST NOT BE ON
      ONE OR MORE OF THE FOLLOWING
      AI FLIGHTS 001 THROUGH 099
      AI FLIGHTS 100 THROUGH 399
      AI FLIGHTS 900 THROUGH 999
      AI FLIGHTS 1001 THROUGH 1099
      AI FLIGHTS 1100 THROUGH 1399
      AI FLIGHTS 1900 THROUGH 1999.
      AND
      THE FARE COMPONENT MUST BE ON
      ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '4',
                      'type' => 'RULE',
                    ),
                  ),
                  2 => 
                  array (
                    '@value' => 'FOR -IP TYPE FARES
      RESERVATIONS ARE REQUIRED FOR ALL SECTORS.
      NOTE -
      TICKETING AND BOOKING TRANSACTIONS  TO BE
      COMPLETED  SIMULTANEOUSLY AND ONLY CONFIRMED
      TICKETS TO BE ISSUED.NO TIME LIMIT PERMITTED',
                    '@attributes' => 
                    array (
                      'category' => '5',
                      'type' => 'RULE',
                    ),
                  ),
                  3 => 
                  array (
                    '@value' => 'NONE FOR ONE WAY FARES',
                    '@attributes' => 
                    array (
                      'category' => '7',
                      'type' => 'RULE',
                    ),
                  ),
                  4 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      NO STOPOVERS PERMITTED.',
                    '@attributes' => 
                    array (
                      'category' => '8',
                      'type' => 'RULE',
                    ),
                  ),
                  5 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      TRANSFERS NOT PERMITTED ON THE FARE COMPONENT
      FARE BREAK AND EMBEDDED SURFACE SECTORS NOT PERMITTED ON
      THE FARE COMPONENT.',
                    '@attributes' => 
                    array (
                      'category' => '9',
                      'type' => 'RULE',
                    ),
                  ),
                  6 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      DOUBLE OPEN JAWS NOT PERMITTED.
      APPLICABLE ADD-ON CONSTRUCTION IS ADDRESSED IN
      MISCELLANEOUS PROVISIONS - CATEGORY 23.
      END-ON-END
      END-ON-END COMBINATIONS PERMITTED WITH AI FARES.
      VALIDATE ALL FARE COMPONENTS. SIDE TRIPS PERMITTED.
      OPEN JAWS/ROUND TRIPS/CIRCLE TRIPS
      FARES MAY BE COMBINED ON A HALF ROUND TRIP BASIS WITH AI
      FARES
      -TO FORM SINGLE OPEN JAWS AT THE POINT OF ORIGIN.
      MILEAGE OF THE OPEN SEGMENT MUST BE EQUAL/LESS THAN
      MILEAGE OF THE LONGEST FLOWN FARE COMPONENT.
      -TO FORM ROUND TRIPS
      -TO FORM CIRCLE TRIPS
      PROVIDED -
      COMBINATIONS ARE WITH ANY FARE FOR CARRIER AI IN ANY
      RULE AND TARIFF.',
                    '@attributes' => 
                    array (
                      'category' => '10',
                      'type' => 'RULE',
                    ),
                  ),
                  7 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      THE PROVISIONS BELOW APPLY ONLY AS FOLLOWS -
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      A SURCHARGE OF INR 300 PER COUPON WILL BE ADDED TO THE
      APPLICABLE FARE FOR TRAVEL.
      PROVIDED TRAVEL IS ON ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '12',
                      'type' => 'RULE',
                    ),
                  ),
                  8 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      VALID FOR TRAVEL COMMENCING ON/AFTER 01JUN 21 AND ON/
      BEFORE 31JUL 21.',
                    '@attributes' => 
                    array (
                      'category' => '14',
                      'type' => 'RULE',
                    ),
                  ),
                  9 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      FARES MAY ONLY BE SOLD BY AI.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE SOLD IN
      ALBANIA/AUSTRALIA/AUSTRIA/BAHRAIN/BANGLADESH/BELGIUM/
      LUXEMBOURG/BOSNIA AND HERZEGOVINA/CAMBODIA/CANADA/BERMUDA/
      CHINA/TAIWAN, PROVINCE OF/COSTA RICA/CYPRUS/CZECH
      REPUBLIC/EGYPT/FINLAND/FRANCE/GERMANY/GREECE/HONG KONG,
      SAR, CHINA/HUNGARY/INDIA/INDONESIA/IRELAND/ISRAEL/ITALY/
      JAPAN/JORDAN
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN KAZAKHSTAN/KYRGYZSTAN/KUWAIT/LEBANON/
      LIECHTENSTEIN/MALAYSIA/MEXICO/MOLDOVA,REPUBLIC OF/
      MONTENEGRO/NICARAGUA/NEPAL/NETHERLANDS/NEW ZEALAND/
      PANAMA/PHILIPPINES/ROMANIA/RUSSIA/SAUDI ARABIA/
      SERBIA/SINGAPORE/SLOVAKIA/SLOVENIA/SOUTH AFRICA/
      KOREA, REPUBLIC OF/SPAIN AND CANARY ISLANDS/SRI
      LANKA/SWITZERLAND/THAILAND/TURKEY/UNITED KINGDOM
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN THE UNITED STATES/WEST AFRICA/SOUTHERN
      AFRICA/EAST AFRICA/SCANDINAVIA/MIDDLE EAST AND MAY
      ONLY BE SOLD IN AREA 1/AREA 2/AREA 3',
                    '@attributes' => 
                    array (
                      'category' => '15',
                      'type' => 'RULE',
                    ),
                  ),
                  10 => 
                  array (
                    '@value' => 'WITHIN INDIA FOR S- TYPE FARES
      CHANGES
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3000 FOR REISSUE/REVALIDATION.
      NOTE -
      FIRST CHANGE FREE FOR TICKETS ISSUED FOR TRAVEL
      ON OR BEFORE 30 JUN 2021 TILL EXISTING TICKET
      VALIDITY FOR AI OPERATED FLTS ONLY
      REISSUANCE FOR FIRST FREE CHANGE ONLY
      PERMITTED BY AI ATO/CTO/GDS AND AI CALL CENTRE.
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL
      RE-ISSUANCE FEE WILL NOT BE  APPLICABLE. ONLY
      DIFFERENCE IN TOTAL FARE IS TO BE  COLLECTED.
      DOWNSELLING IS NOT ALLOWED
      --------------------------------------------------
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      RE-ISSUANCE / RE-VALIDATION  FEE -
      INR 3000 OR BASIC FARE WHICH EVER IS LOWER TILL
      12 HR BEFORE DEP. NOT PERMITTED LESS
      THAN 12 HOURS BEFORE DEPARTURE.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE APPL
      ICABLE ON INFANT TICKETS.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CANCELLATIONS
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3500 FOR CANCEL.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CANCELLATION FEE -
      INR 3500 OR BASIC FARE WHICH EVER IS LOWER TILL
      12 HR BEFORE DEP. NOT PERMITTED LESS
      THAN 12 HOURS BEFORE DEPARTURE.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE APPL
      ICABLE ON INFANT TICKETS.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CHANGES/CANCELLATIONS
      CHANGES/CANCELLATIONS PERMITTED FOR NO-SHOW.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CHANGES / CANCELLATION FEE IF CANCELLED
      LESS THAN 12 HOUR BEFORE DEPARTURE - 100 PERCENT
      OF BASIC FARE WILL BE FORFEITED.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      CHARGES ARE NON-COMMISISONABLE.  APPLICABLE GST
      WILL BE ADDITIONAL.
      --------------------------------------------------
      AIR INDIA NO-SHOW WAIVER AT AIRPORT - FOR RBDS -
      H/K/Q/V/W/G/L/U/T/S/E IN CASE THE PASSENGER HAS
      REPORTED AT THE AIRPORT AFTER CLOSURE OF COUNTER
      BUT BEFORE DEPARTURE OF FLIGHT WOULD BE PERMITTED
      TO ROLL OVER ON NO-SHOW AT A CHARGE OF INR 3500.
      --------------------------------------------------
      THIS WILL BE AUTHORISED AT THE AIRPORT AT THE
      TIME OF FLIGHT ONLY AND CANNOT BE LEVIED/ WAIVED
      AT CBO.
      --------------------------------------------------
      THE WAIVER OF NO-SHOW IN SUCH CASES TO BE
      AUTHORISED BY THE DUTY MANAGER.
      --------------------------------------------------
      FURTHER FARE DIFFERENCE IF ANY AS PER THE RBD /
      FARE BASIS AVAILABLE / APPLICABLE ON THE NEXT
      AVAILABLE FLIGHT WILL HAVE TO BE CHARGED FROM THE
      PASSENGER IN ADDITION TO THE ROLL-OVER CHARGE.
      ------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      NOTE -
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER BEFORE COMMENCEMENT OF TRAVEL
      PENALTY CHARGES STAND WAIVED OFF. THE ABOVE IS
      APPLICABLE ONLY WHEN TICKET IS PURCHASED BEFORE
      DEATH OF PASSENGER OR IMMEDIATE FAMILY MEMBER IS
      OCCURRED.
      -------------------------------------------------
      IMMEDIATE FAMILY SHALL BE LIMITED TO SPOUSE
      CHILDREN INCLUDING ADOPTED CHILDREN PARENTS
      BROTHERS SISTERS GRAND-PARENTS GRANDCHILDREN FA
      FATHER IN LAW MOTHER IN LAW SISTER IN LAW BROTHER
      IN LAW SON IN LAW AND DAUGHTER IN LAW
      -----------------------------------------------
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER OCCURRED AFTER COMMENCEMENT OF
      TRAVEL PENALTY CHARGES STAND WAIVED OFF.
      -------------------------------------------------
      IN CASE OF DEATH OF PASSENGER OCCURRED AFTER
      COMMENCEMENT OF TRAVEL ACCOMPANYING PASSENGER MAY
      TERMINATE TRAVEL OR INTERRUPT TRAVEL UNTIL
      COMPLETION OF FORMALITIES AND RELIGIOUS CUSTOMS
      IF ANY BUT IN NO EVENT LATER THAN FORTY FIVE 45
      DAYS AFTER TRAVEL IS INTERRUPTED. THE TICKET OF
      RETURNING PASSENGERS WILL BE ENDORSED RETURN
      ACCOUNT DEATH NAME  AND SUCH ENDORSEMENT SHALL BE
      AUTHENTICATED BY VALIDATION OR OTHER DUTY MANAGER
      OFFICIAL STAMP. REFUND MAY BE ARRANGED. RE-
      ROUTING MAY BE PERMITTED APPLICABLE PENALTY IF
      ANY MAY BE WAIVED. DIFFERENCE OF FARE NEEDS TO BE
      COLLECTED.
      ----------------------------------------------
      FOR RETURN-ONWARD TICKER REFUND DEDUCT ONE WAY
      FARE AND LEVIES FOR THE TRAVELLED SECTOR AND
      BALANCE AMOUNT MAY BE REFUNDED.
      -----------------------------------------------
      PENALTY ON ABOVE ACCOUNT IS WAIVED FOR FIRST
      TRANSACTION ONLY. SUBSEQUENT TRANSACTION IF ANY
      WILL ATTRACT APPLICABLE PENALTY.',
                    '@attributes' => 
                    array (
                      'category' => '16',
                      'type' => 'RULE',
                    ),
                  ),
                  11 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      THE ORIGINAL AND THE REISSUED TICKET MUST BE ANNOTATED -
      NON ENDORSABLE/ CHANGE/ - AND - CANCELLATION/NO-SHOW FEE-
      AND - APPLY PER SECTOR - IN THE ENDORSEMENT BOX.',
                    '@attributes' => 
                    array (
                      'category' => '18',
                      'type' => 'RULE',
                    ),
                  ),
                  12 => 
                  array (
                    '@value' => 'FOR ONE WAY FARES
      ACCOMPANIED CHILD 2-11 - CHARGE 100 PERCENT OF THE FARE
      OR - 1ST INFANT UNDER 2 WITHOUT A SEAT - CHARGE INR 1250
      .
      RESULTING FARE IS A ONE-WAY.
      TICKETING CODE - BASE FARE CODE PLUS IN.',
                    '@attributes' => 
                    array (
                      'category' => '19',
                      'type' => 'RULE',
                    ),
                  ),
                  13 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW FARE
      WHEN CALCULATING A DIFFERENTIAL. THIS FARE MAY BE USED AS
      THE THROUGH FARE WHEN PRICING A FARE COMPONENT WITH OR
      WITHOUT A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '23',
                      'type' => 'RULE',
                    ),
                  ),
                  14 => 
                  array (
                    '@value' => 'NONE UNLESS OTHERWISE SPECIFIED',
                    '@attributes' => 
                    array (
                      'category' => '26',
                      'type' => 'RULE',
                    ),
                  ),
                  15 => 
                  array (
                    '@value' => 'DO A CATEGORY 31 SPECIFIC TEXT ENTRY TO VIEW CONTENTS
      ALSO REFERENCE 16 PENALTIES - FOR ADDITIONAL CHANGE INFORMATION',
                    '@attributes' => 
                    array (
                      'category' => '31',
                      'type' => 'RULE',
                    ),
                  ),
                  16 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      APPLIES IN THE CASE OF DEATH OF PASSENGER OR FAMILY
      MEMBER.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      VALID FOR INFANT WITHOUT A SEAT.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST. NO CHARGE FOR INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      REFUND REQUEST REQUIRED 12 HOURS BEFORE ORIGINALLY
      SCHEDULED FLIGHT OF FIRST UNUSED TICKET COUPON.
      CHARGE INR 3675 PER FARE COMPONENT. IF ALL PENALTIES IN
      PRICING UNIT ARE PER FARE COMPONENT COLLECT EACH. IF MIX
      OF PER FARE COMPONENT AND PER PRICING UNIT CALCULATE EACH
      AS PER PRICING UNIT AND COLLECT HIGHEST. NO CHARGE FOR
      INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      FARE IS NONREFUNDABLE BEFORE ORIGINALLY SCHEDULED FLIGHT
      OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.
      OR -
      FARE IS NONREFUNDABLE ANYTIME AFTER ORIGINALLY SCHEDULED
      FLIGHT OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.',
                    '@attributes' => 
                    array (
                      'category' => '33',
                      'type' => 'RULE',
                    ),
                  ),
                ),
                '@attributes' => 
                array (
                  'fareinforef' => 'z5lV5oBqWDKAR8NqCAAAAA==',
                  'rulenumber' => 'AI04',
                  'source' => 'ATPCO',
                  'tariffnumber' => '008',
                ),
              ),
              1 => 
              array (
                'air:farerulelong' => 
                array (
                  0 => 
                  array (
                    '@value' => 'RULE - 302/AI04
      UNLESS OTHERWISE SPECIFIED
      ECONOMY FARES ON DOMESTIC SECTORS
      APPLICATION
      AREA
      THESE FARES APPLY
      WITHIN INDIA.
      CLASS OF SERVICE
      THESE FARES APPLY FOR ECONOMY CLASS SERVICE.
      TYPES OF TRANSPORTATION
      THIS RULE GOVERNS ONE-WAY FARES.
      FARES GOVERNED BY THIS RULE CAN BE USED TO CREATE
      ONE-WAY/ROUND-TRIP/CIRCLE-TRIP JOURNEYS.
      ON SPECIFIED DOMESTIC SECTORS.',
                    '@attributes' => 
                    array (
                      'category' => '0',
                      'type' => 'RULE',
                    ),
                  ),
                  1 => 
                  array (
                    '@value' => 'BETWEEN CCU AND BBI FOR -FS TYPE FARES WITH FOOTNOTE 1K
      THE FARE COMPONENT MUST BE ON
      ONE OR MORE OF THE FOLLOWING
      AI FLIGHT 674
      AI FLIGHT 719
      AI FLIGHT 776.',
                    '@attributes' => 
                    array (
                      'category' => '4',
                      'type' => 'RULE',
                    ),
                  ),
                  2 => 
                  array (
                    '@value' => 'FOR -IPFS TYPE FARES
      RESERVATIONS ARE REQUIRED FOR ALL SECTORS.
      NOTE -
      TICKETING AND BOOKING TRANSACTIONS  TO BE
      COMPLETED  SIMULTANEOUSLY AND ONLY CONFIRMED
      TICKETS TO BE ISSUED.NO TIME LIMIT PERMITTED',
                    '@attributes' => 
                    array (
                      'category' => '5',
                      'type' => 'RULE',
                    ),
                  ),
                  3 => 
                  array (
                    '@value' => 'NONE FOR ONE WAY FARES',
                    '@attributes' => 
                    array (
                      'category' => '7',
                      'type' => 'RULE',
                    ),
                  ),
                  4 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      NO STOPOVERS PERMITTED.',
                    '@attributes' => 
                    array (
                      'category' => '8',
                      'type' => 'RULE',
                    ),
                  ),
                  5 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      TRANSFERS NOT PERMITTED ON THE FARE COMPONENT
      FARE BREAK AND EMBEDDED SURFACE SECTORS NOT PERMITTED ON
      THE FARE COMPONENT.',
                    '@attributes' => 
                    array (
                      'category' => '9',
                      'type' => 'RULE',
                    ),
                  ),
                  6 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      DOUBLE OPEN JAWS NOT PERMITTED.
      APPLICABLE ADD-ON CONSTRUCTION IS ADDRESSED IN
      MISCELLANEOUS PROVISIONS - CATEGORY 23.
      END-ON-END
      END-ON-END COMBINATIONS PERMITTED WITH AI FARES.
      VALIDATE ALL FARE COMPONENTS. SIDE TRIPS PERMITTED.
      OPEN JAWS/ROUND TRIPS/CIRCLE TRIPS
      FARES MAY BE COMBINED ON A HALF ROUND TRIP BASIS WITH AI
      FARES
      -TO FORM SINGLE OPEN JAWS AT THE POINT OF ORIGIN.
      MILEAGE OF THE OPEN SEGMENT MUST BE EQUAL/LESS THAN
      MILEAGE OF THE LONGEST FLOWN FARE COMPONENT.
      -TO FORM ROUND TRIPS
      -TO FORM CIRCLE TRIPS
      PROVIDED -
      COMBINATIONS ARE WITH ANY FARE FOR CARRIER AI IN ANY
      RULE AND TARIFF.',
                    '@attributes' => 
                    array (
                      'category' => '10',
                      'type' => 'RULE',
                    ),
                  ),
                  7 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      THE PROVISIONS BELOW APPLY ONLY AS FOLLOWS -
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      A SURCHARGE OF INR 300 PER COUPON WILL BE ADDED TO THE
      APPLICABLE FARE FOR TRAVEL.
      PROVIDED TRAVEL IS ON ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '12',
                      'type' => 'RULE',
                    ),
                  ),
                  8 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      VALID FOR TRAVEL COMMENCING ON/AFTER 01JUN 21 AND ON/
      BEFORE 31JUL 21.',
                    '@attributes' => 
                    array (
                      'category' => '14',
                      'type' => 'RULE',
                    ),
                  ),
                  9 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      FARES MAY ONLY BE SOLD BY AI.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE SOLD IN
      ALBANIA/AUSTRALIA/AUSTRIA/BAHRAIN/BANGLADESH/BELGIUM/
      LUXEMBOURG/BOSNIA AND HERZEGOVINA/CAMBODIA/CANADA/BERMUDA/
      CHINA/TAIWAN, PROVINCE OF/COSTA RICA/CYPRUS/CZECH
      REPUBLIC/EGYPT/FINLAND/FRANCE/GERMANY/GREECE/HONG KONG,
      SAR, CHINA/HUNGARY/INDIA/INDONESIA/IRELAND/ISRAEL/ITALY/
      JAPAN/JORDAN
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN KAZAKHSTAN/KYRGYZSTAN/KUWAIT/LEBANON/
      LIECHTENSTEIN/MALAYSIA/MEXICO/MOLDOVA,REPUBLIC OF/
      MONTENEGRO/NICARAGUA/NEPAL/NETHERLANDS/NEW ZEALAND/
      PANAMA/PHILIPPINES/ROMANIA/RUSSIA/SAUDI ARABIA/
      SERBIA/SINGAPORE/SLOVAKIA/SLOVENIA/SOUTH AFRICA/
      KOREA, REPUBLIC OF/SPAIN AND CANARY ISLANDS/SRI
      LANKA/SWITZERLAND/THAILAND/TURKEY/UNITED KINGDOM
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN THE UNITED STATES/WEST AFRICA/SOUTHERN
      AFRICA/EAST AFRICA/SCANDINAVIA/MIDDLE EAST AND MAY
      ONLY BE SOLD IN AREA 1/AREA 2/AREA 3',
                    '@attributes' => 
                    array (
                      'category' => '15',
                      'type' => 'RULE',
                    ),
                  ),
                  10 => 
                  array (
                    '@value' => 'WITHIN INDIA FOR S- TYPE FARES
      CHANGES
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3000 FOR REISSUE/REVALIDATION.
      NOTE -
      FIRST CHANGE FREE FOR TICKETS ISSUED FOR TRAVEL
      ON OR BEFORE 30 JUN 2021 TILL EXISTING TICKET
      VALIDITY FOR AI OPERATED FLTS ONLY
      REISSUANCE FOR FIRST FREE CHANGE ONLY
      PERMITTED BY AI ATO/CTO/GDS AND AI CALL CENTRE.
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL
      RE-ISSUANCE FEE WILL NOT BE  APPLICABLE. ONLY
      DIFFERENCE IN TOTAL FARE IS TO BE  COLLECTED.
      DOWNSELLING IS NOT ALLOWED
      --------------------------------------------------
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      RE-ISSUANCE / RE-VALIDATION  FEE -
      INR 3000 OR BASIC FARE WHICH EVER IS LOWER TILL
      12 HR BEFORE DEP. NOT PERMITTED LESS
      THAN 12 HOURS BEFORE DEPARTURE.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE APPL
      ICABLE ON INFANT TICKETS.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CANCELLATIONS
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3500 FOR CANCEL.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CANCELLATION FEE -
      INR 3500 OR BASIC FARE WHICH EVER IS LOWER TILL
      12 HR BEFORE DEP. NOT PERMITTED LESS
      THAN 12 HOURS BEFORE DEPARTURE.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE APPL
      ICABLE ON INFANT TICKETS.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CHANGES/CANCELLATIONS
      CHANGES/CANCELLATIONS PERMITTED FOR NO-SHOW.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CHANGES / CANCELLATION FEE IF CANCELLED
      LESS THAN 12 HOUR BEFORE DEPARTURE - 100 PERCENT
      OF BASIC FARE WILL BE FORFEITED.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      CHARGES ARE NON-COMMISISONABLE.  APPLICABLE GST
      WILL BE ADDITIONAL.
      --------------------------------------------------
      AIR INDIA NO-SHOW WAIVER AT AIRPORT - FOR RBDS -
      H/K/Q/V/W/G/L/U/T/S/E IN CASE THE PASSENGER HAS
      REPORTED AT THE AIRPORT AFTER CLOSURE OF COUNTER
      BUT BEFORE DEPARTURE OF FLIGHT WOULD BE PERMITTED
      TO ROLL OVER ON NO-SHOW AT A CHARGE OF INR 3500.
      --------------------------------------------------
      THIS WILL BE AUTHORISED AT THE AIRPORT AT THE
      TIME OF FLIGHT ONLY AND CANNOT BE LEVIED/ WAIVED
      AT CBO.
      --------------------------------------------------
      THE WAIVER OF NO-SHOW IN SUCH CASES TO BE
      AUTHORISED BY THE DUTY MANAGER.
      --------------------------------------------------
      FURTHER FARE DIFFERENCE IF ANY AS PER THE RBD /
      FARE BASIS AVAILABLE / APPLICABLE ON THE NEXT
      AVAILABLE FLIGHT WILL HAVE TO BE CHARGED FROM THE
      PASSENGER IN ADDITION TO THE ROLL-OVER CHARGE.
      ------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      NOTE -
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER BEFORE COMMENCEMENT OF TRAVEL
      PENALTY CHARGES STAND WAIVED OFF. THE ABOVE IS
      APPLICABLE ONLY WHEN TICKET IS PURCHASED BEFORE
      DEATH OF PASSENGER OR IMMEDIATE FAMILY MEMBER IS
      OCCURRED.
      -------------------------------------------------
      IMMEDIATE FAMILY SHALL BE LIMITED TO SPOUSE
      CHILDREN INCLUDING ADOPTED CHILDREN PARENTS
      BROTHERS SISTERS GRAND-PARENTS GRANDCHILDREN FA
      FATHER IN LAW MOTHER IN LAW SISTER IN LAW BROTHER
      IN LAW SON IN LAW AND DAUGHTER IN LAW
      -----------------------------------------------
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER OCCURRED AFTER COMMENCEMENT OF
      TRAVEL PENALTY CHARGES STAND WAIVED OFF.
      -------------------------------------------------
      IN CASE OF DEATH OF PASSENGER OCCURRED AFTER
      COMMENCEMENT OF TRAVEL ACCOMPANYING PASSENGER MAY
      TERMINATE TRAVEL OR INTERRUPT TRAVEL UNTIL
      COMPLETION OF FORMALITIES AND RELIGIOUS CUSTOMS
      IF ANY BUT IN NO EVENT LATER THAN FORTY FIVE 45
      DAYS AFTER TRAVEL IS INTERRUPTED. THE TICKET OF
      RETURNING PASSENGERS WILL BE ENDORSED RETURN
      ACCOUNT DEATH NAME  AND SUCH ENDORSEMENT SHALL BE
      AUTHENTICATED BY VALIDATION OR OTHER DUTY MANAGER
      OFFICIAL STAMP. REFUND MAY BE ARRANGED. RE-
      ROUTING MAY BE PERMITTED APPLICABLE PENALTY IF
      ANY MAY BE WAIVED. DIFFERENCE OF FARE NEEDS TO BE
      COLLECTED.
      ----------------------------------------------
      FOR RETURN-ONWARD TICKER REFUND DEDUCT ONE WAY
      FARE AND LEVIES FOR THE TRAVELLED SECTOR AND
      BALANCE AMOUNT MAY BE REFUNDED.
      -----------------------------------------------
      PENALTY ON ABOVE ACCOUNT IS WAIVED FOR FIRST
      TRANSACTION ONLY. SUBSEQUENT TRANSACTION IF ANY
      WILL ATTRACT APPLICABLE PENALTY.',
                    '@attributes' => 
                    array (
                      'category' => '16',
                      'type' => 'RULE',
                    ),
                  ),
                  11 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      THE ORIGINAL AND THE REISSUED TICKET MUST BE ANNOTATED -
      NON ENDORSABLE/ CHANGE/ - AND - CANCELLATION/NO-SHOW FEE-
      AND - APPLY PER SECTOR - IN THE ENDORSEMENT BOX.',
                    '@attributes' => 
                    array (
                      'category' => '18',
                      'type' => 'RULE',
                    ),
                  ),
                  12 => 
                  array (
                    '@value' => 'FOR ONE WAY FARES
      ACCOMPANIED CHILD 2-11 - CHARGE 100 PERCENT OF THE FARE
      OR - 1ST INFANT UNDER 2 WITHOUT A SEAT - CHARGE INR 1250
      .
      RESULTING FARE IS A ONE-WAY.
      TICKETING CODE - BASE FARE CODE PLUS IN.',
                    '@attributes' => 
                    array (
                      'category' => '19',
                      'type' => 'RULE',
                    ),
                  ),
                  13 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW FARE
      WHEN CALCULATING A DIFFERENTIAL. THIS FARE MAY BE USED AS
      THE THROUGH FARE WHEN PRICING A FARE COMPONENT WITH OR
      WITHOUT A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '23',
                      'type' => 'RULE',
                    ),
                  ),
                  14 => 
                  array (
                    '@value' => 'NONE UNLESS OTHERWISE SPECIFIED',
                    '@attributes' => 
                    array (
                      'category' => '26',
                      'type' => 'RULE',
                    ),
                  ),
                  15 => 
                  array (
                    '@value' => 'DO A CATEGORY 31 SPECIFIC TEXT ENTRY TO VIEW CONTENTS
      ALSO REFERENCE 16 PENALTIES - FOR ADDITIONAL CHANGE INFORMATION',
                    '@attributes' => 
                    array (
                      'category' => '31',
                      'type' => 'RULE',
                    ),
                  ),
                  16 => 
                  array (
                    '@value' => 'FOR S- TYPE FARES
      APPLIES IN THE CASE OF DEATH OF PASSENGER OR FAMILY
      MEMBER.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      VALID FOR INFANT WITHOUT A SEAT.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST. NO CHARGE FOR INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      REFUND REQUEST REQUIRED 12 HOURS BEFORE ORIGINALLY
      SCHEDULED FLIGHT OF FIRST UNUSED TICKET COUPON.
      CHARGE INR 3675 PER FARE COMPONENT. IF ALL PENALTIES IN
      PRICING UNIT ARE PER FARE COMPONENT COLLECT EACH. IF MIX
      OF PER FARE COMPONENT AND PER PRICING UNIT CALCULATE EACH
      AS PER PRICING UNIT AND COLLECT HIGHEST. NO CHARGE FOR
      INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      FARE IS NONREFUNDABLE BEFORE ORIGINALLY SCHEDULED FLIGHT
      OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.
      OR -
      FARE IS NONREFUNDABLE ANYTIME AFTER ORIGINALLY SCHEDULED
      FLIGHT OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.',
                    '@attributes' => 
                    array (
                      'category' => '33',
                      'type' => 'RULE',
                    ),
                  ),
                ),
                '@attributes' => 
                array (
                  'fareinforef' => 'z5lV5oBqWDKAr7NqCAAAAA==',
                  'rulenumber' => 'AI04',
                  'source' => 'ATPCO',
                  'tariffnumber' => '008',
                ),
              ),
              2 => 
              array (
                'air:farerulelong' => 
                array (
                  0 => 
                  array (
                    '@value' => 'RULE - 302/0221
      UNLESS OTHERWISE SPECIFIED
      EASY FARES
      APPLICATION
      AREA
      THESE FARES APPLY
      WITHIN INDIA.
      CLASS OF SERVICE
      THESE FARES APPLY FOR ECONOMY CLASS SERVICE.
      TYPES OF TRANSPORTATION
      THIS RULE GOVERNS ONE-WAY FARES.
      FARES GOVERNED BY THIS RULE CAN BE USED TO CREATE
      ONE-WAY/ROUND-TRIP/CIRCLE-TRIP/OPEN-JAW JOURNEYS.
      ON SPECIFIED DOMESTIC SECTORS ONLY',
                    '@attributes' => 
                    array (
                      'category' => '0',
                      'type' => 'RULE',
                    ),
                  ),
                  1 => 
                  array (
                    '@value' => 'BETWEEN CCU AND BBI FOR -FS TYPE FARES WITH FOOTNOTE 1K
      THE FARE COMPONENT MUST BE ON
      ONE OR MORE OF THE FOLLOWING
      AI FLIGHT 674
      AI FLIGHT 719
      AI FLIGHT 776.',
                    '@attributes' => 
                    array (
                      'category' => '4',
                      'type' => 'RULE',
                    ),
                  ),
                  2 => 
                  array (
                    '@value' => 'FOR -IPFS TYPE FARES
      RESERVATIONS ARE REQUIRED FOR ALL SECTORS.
      NOTE -
      TICKETING AND BOOKING TRANSACTIONS  TO BE
      COMPLETED  SIMULTANEOUSLY AND ONLY CONFIRMED
      TICKETS TO BE ISSUED.NO TIME LIMIT PERMITTED',
                    '@attributes' => 
                    array (
                      'category' => '5',
                      'type' => 'RULE',
                    ),
                  ),
                  3 => 
                  array (
                    '@value' => 'NONE FOR ONE WAY FARES',
                    '@attributes' => 
                    array (
                      'category' => '7',
                      'type' => 'RULE',
                    ),
                  ),
                  4 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      NO STOPOVERS PERMITTED.',
                    '@attributes' => 
                    array (
                      'category' => '8',
                      'type' => 'RULE',
                    ),
                  ),
                  5 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      TRANSFERS NOT PERMITTED ON THE FARE COMPONENT
      FARE BREAK AND EMBEDDED SURFACE SECTORS NOT PERMITTED ON
      THE FARE COMPONENT.',
                    '@attributes' => 
                    array (
                      'category' => '9',
                      'type' => 'RULE',
                    ),
                  ),
                  6 => 
                  array (
                    '@value' => 'FOR U- TYPE FARES
      DOUBLE OPEN JAWS NOT PERMITTED.
      APPLICABLE ADD-ON CONSTRUCTION IS ADDRESSED IN
      MISCELLANEOUS PROVISIONS - CATEGORY 23.
      END-ON-END
      END-ON-END COMBINATIONS PERMITTED WITH AI FARES.
      VALIDATE ALL FARE COMPONENTS. SIDE TRIPS PERMITTED.
      OPEN JAWS/ROUND TRIPS/CIRCLE TRIPS
      FARES MAY BE COMBINED ON A HALF ROUND TRIP BASIS WITH AI
      FARES
      -TO FORM SINGLE OPEN JAWS.
      MILEAGE OF THE OPEN SEGMENT MUST BE EQUAL/LESS THAN
      MILEAGE OF THE LONGEST FLOWN FARE COMPONENT.
      -TO FORM ROUND TRIPS
      -TO FORM CIRCLE TRIPS
      PROVIDED -
      COMBINATIONS ARE WITH ANY FARE FOR CARRIER AI IN ANY
      RULE IN ANY TARIFF.',
                    '@attributes' => 
                    array (
                      'category' => '10',
                      'type' => 'RULE',
                    ),
                  ),
                  7 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE PROVISIONS BELOW APPLY ONLY AS FOLLOWS -
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      A SURCHARGE OF INR 300 PER COUPON WILL BE ADDED TO THE
      APPLICABLE FARE FOR TRAVEL.
      PROVIDED TRAVEL IS ON ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '12',
                      'type' => 'RULE',
                    ),
                  ),
                  8 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      VALID FOR TRAVEL COMMENCING ON/AFTER 01JUN 21 AND ON/
      BEFORE 31JUL 21.',
                    '@attributes' => 
                    array (
                      'category' => '14',
                      'type' => 'RULE',
                    ),
                  ),
                  9 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      FARES MAY ONLY BE SOLD BY AI.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE SOLD IN
      ALBANIA/AUSTRALIA/AUSTRIA/BAHRAIN/BANGLADESH/BELGIUM/
      LUXEMBOURG/BOSNIA AND HERZEGOVINA/CAMBODIA/CANADA/BERMUDA/
      CHINA/TAIWAN, PROVINCE OF/COSTA RICA/CYPRUS/CZECH
      REPUBLIC/EGYPT/FINLAND/FRANCE/GERMANY/GREECE/HONG KONG,
      SAR, CHINA/HUNGARY/INDIA/INDONESIA/IRELAND/ISRAEL/ITALY/
      JAPAN/JORDAN
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN KAZAKHSTAN/KYRGYZSTAN/KUWAIT/LEBANON/
      LIECHTENSTEIN/MALAYSIA/MEXICO/MOLDOVA,REPUBLIC OF/
      MONTENEGRO/NICARAGUA/NEPAL/NETHERLANDS/NEW ZEALAND/
      PANAMA/PHILIPPINES/ROMANIA/RUSSIA/SAUDI ARABIA/
      SERBIA/SINGAPORE/SLOVAKIA/SLOVENIA/SOUTH AFRICA/
      KOREA, REPUBLIC OF/SPAIN AND CANARY ISLANDS/SRI
      LANKA/SWITZERLAND/THAILAND/TURKEY/UNITED KINGDOM
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN THE UNITED STATES/WEST AFRICA/SOUTHERN
      AFRICA/EAST AFRICA/SCANDINAVIA/MIDDLE EAST AND MAY
      ONLY BE SOLD IN AREA 1/AREA 2/AREA 3',
                    '@attributes' => 
                    array (
                      'category' => '15',
                      'type' => 'RULE',
                    ),
                  ),
                  10 => 
                  array (
                    '@value' => 'WITHIN INDIA FOR U- TYPE FARES
      CHANGES
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 2500 FOR REISSUE/REVALIDATION.
      NOTE -
      FIRST CHANGE FREE FOR TICKETS ISSUED FOR TRAVEL
      ON OR BEFORE 30 JUN 2021 TILL EXISTING TICKET
      VALIDITY FOR AI OPERATED FLTS ONLY
      REISSUANCE FOR FIRST FREE CHANGE ONLY
      PERMITTED BY AI ATO/CTO/GDS AND AI CALL CENTRE.
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL
      RE-ISSUANCE FEE WILL NOT BE  APPLICABLE. ONLY
      DIFFERENCE IN TOTAL FARE IS TO BE  COLLECTED.
      DOWNSELLING IS NOT ALLOWED
      --------------------------------------------------
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      PERMITTED TILL 02 HR BEFORE SCHEDULED DEPARTURE OF
      THE FLIGHT AGAINST A CHANGE FEE OF INR 2500 PER
      COUPON OR BASIC FARE WHICH EVER IS LOWER.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION  FEE WOULD BE
      APPLICABLE ON INFANT TICKETS.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CANCELLATIONS
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3000 FOR CANCEL.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      PERMITTED TILL 02 HR BEFORE SCHEDULED DEPARTURE OF
      THE FLIGHT AGAINST A CHANGE FEE OF INR 3000 PER
      COUPON OR BASIC FARE WHICH EVER IS LOWER.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE
      APPLICABLE ON INFANT TICKETS.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CHANGES/CANCELLATIONS
      CHANGES/CANCELLATIONS PERMITTED FOR NO-SHOW.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CHANGES / CANCELLATION FEE IF CANCELLED
      LESS THAN TWO HOUR BEFORE DEPARTURE - 100 PERCENT
      OF BASIC FARE WILL BE FORFEITED.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      CHARGES ARE NON-COMMISISONABLE.  APPLICABLE GST
      WILL BE ADDITIONAL.
      --------------------------------------------------
      AIR INDIA NO-SHOW WAIVER AT AIRPORT - FOR RBDS -
      H/K/Q/V/W/G/L/U/T/S/E IN CASE THE PASSENGER HAS
      REPORTED AT THE AIRPORT AFTER CLOSURE OF COUNTER
      BUT BEFORE DEPARTURE OF FLIGHT WOULD BE PERMITTED
      TO ROLL OVER ON NO-SHOW AT A CHARGE OF INR 3500.
      --------------------------------------------------
      THIS WILL BE AUTHORISED AT THE AIRPORT AT THE
      TIME OF FLIGHT ONLY AND CANNOT BE LEVIED/ WAIVED
      AT CBO.
      --------------------------------------------------
      THE WAIVER OF NO-SHOW IN SUCH CASES TO BE
      AUTHORISED BY THE DUTY MANAGER.
      --------------------------------------------------
      FURTHER FARE DIFFERENCE IF ANY AS PER THE RBD/
      FARE BASIS AVAILABLE/ APPLICABLE ON THE NEXT
      AVAILABLE FLIGHT WILL HAVE TO BE CHARGED FROM THE
      PASSENGER IN ADDITION TO THE NO-SHOW PENALTY.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      NOTE -
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER BEFORE COMMENCEMENT OF TRAVEL
      PENALTY CHARGES STAND WAIVED OFF. THE ABOVE IS
      APPLICABLE ONLY WHEN TICKET IS PURCHASED BEFORE
      DEATH OF PASSENGER OR IMMEDIATE FAMILY MEMBER IS
      OCCURRED.
      -------------------------------------------------
      IMMEDIATE FAMILY SHALL BE LIMITED TO SPOUSE
      CHILDREN INCLUDING ADOPTED CHILDREN PARENTS
      BROTHERS SISTERS GRAND-PARENTS GRANDCHILDREN FA
      FATHER IN LAW MOTHER IN LAW SISTER IN LAW BROTHER
      IN LAW SON IN LAW AND DAUGHTER IN LAW
      -----------------------------------------------
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER OCCURRED AFTER COMMENCEMENT OF
      TRAVEL PENALTY CHARGES STAND WAIVED OFF.
      -------------------------------------------------
      IN CASE OF DEATH OF PASSENGER OCCURRED AFTER
      COMMENCEMENT OF TRAVEL ACCOMPANYING PASSENGER MAY
      TERMINATE TRAVEL OR INTERRUPT TRAVEL UNTIL
      COMPLETION OF FORMALITIES AND RELIGIOUS CUSTOMS
      IF ANY BUT IN NO EVENT LATER THAN FORTY FIVE 45
      DAYS AFTER TRAVEL IS INTERRUPTED. THE TICKET OF
      RETURNING PASSENGERS WILL BE ENDORSED RETURN
      ACCOUNT DEATH NAME  AND SUCH ENDORSEMENT SHALL BE
      AUTHENTICATED BY VALIDATION OR OTHER DUTY MANAGER
      OFFICIAL STAMP. REFUND MAY BE ARRANGED. RE-
      ROUTING MAY BE PERMITTED APPLICABLE PENALTY IF
      ANY MAY BE WAIVED. DIFFERENCE OF FARE NEEDS TO BE
      COLLECTED.
      ----------------------------------------------
      FOR RETURN-ONWARD TICKER REFUND DEDUCT ONE WAY
      FARE AND LEVIES FOR THE TRAVELLED SECTOR AND
      BALANCE AMOUNT MAY BE REFUNDED.
      -----------------------------------------------
      PENALTY ON ABOVE ACCOUNT IS WAIVED FOR FIRST
      TRANSACTION ONLY. SUBSEQUENT TRANSACTION IF ANY
      WILL ATTRACT APPLICABLE PENALTY.',
                    '@attributes' => 
                    array (
                      'category' => '16',
                      'type' => 'RULE',
                    ),
                  ),
                  11 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE HIGHER INTERMEDIATE POINT RULE DOES NOT APPLY FOR
      STOPOVERS
      OR - THE HIGHER INTERMEDIATE POINT RULE DOES NOT APPLY FOR
      CONNECTIONS.
      NOTE -
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW
      FARE. WHEN CALCULATING A DIFFERENTIAL. THIS FARE
      MUST NOT BE USED AS THE THROUGH FARE WHEN PRICING
      A FARE COMPONENT WITH A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '17',
                      'type' => 'RULE',
                    ),
                  ),
                  12 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE ORIGINAL AND THE REISSUED TICKET MUST BE ANNOTATED -
      NON ENDORSEABLE - AND - VALID ON AI - IN THE ENDORSEMENT
      BOX.',
                    '@attributes' => 
                    array (
                      'category' => '18',
                      'type' => 'RULE',
                    ),
                  ),
                  13 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      ACCOMPANIED CHILD 2-11 - CHARGE 100 PERCENT OF THE FARE.
      TICKETING CODE - BASE FARE CODE PLUS CH
      OR - 1ST INFANT UNDER 2 WITHOUT A SEAT - CHARGE INR 1250
      .
      RESULTING FARE IS A ONE-WAY.
      TICKETING CODE - BASE FARE CODE PLUS IN
      OR - INFANT UNDER 2 WITH A SEAT - CHARGE 100 PERCENT OF
      THE FARE.
      TICKETING CODE - BASE FARE CODE PLUS CH.',
                    '@attributes' => 
                    array (
                      'category' => '19',
                      'type' => 'RULE',
                    ),
                  ),
                  14 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW FARE
      WHEN CALCULATING A DIFFERENTIAL. THIS FARE MAY BE USED AS
      THE THROUGH FARE WHEN PRICING A FARE COMPONENT WITH OR
      WITHOUT A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '23',
                      'type' => 'RULE',
                    ),
                  ),
                  15 => 
                  array (
                    '@value' => 'DO A CATEGORY 31 SPECIFIC TEXT ENTRY TO VIEW CONTENTS
      ALSO REFERENCE 16 PENALTIES - FOR ADDITIONAL CHANGE INFORMATION',
                    '@attributes' => 
                    array (
                      'category' => '31',
                      'type' => 'RULE',
                    ),
                  ),
                  16 => 
                  array (
                    '@value' => 'FOR U- TYPE FARES
      APPLIES IN THE CASE OF DEATH OF PASSENGER OR FAMILY
      MEMBER.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      VALID FOR INFANT WITHOUT A SEAT.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST. NO CHARGE FOR INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      REFUND REQUEST REQUIRED 2 HOURS BEFORE ORIGINALLY
      SCHEDULED FLIGHT OF FIRST UNUSED TICKET COUPON.
      CHARGE INR 3150 PER FARE COMPONENT. IF ALL PENALTIES IN
      PRICING UNIT ARE PER FARE COMPONENT COLLECT EACH. IF MIX
      OF PER FARE COMPONENT AND PER PRICING UNIT CALCULATE EACH
      AS PER PRICING UNIT AND COLLECT HIGHEST. NO CHARGE FOR
      INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      FARE IS NONREFUNDABLE BEFORE ORIGINALLY SCHEDULED FLIGHT
      OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.
      OR -
      FARE IS NONREFUNDABLE ANYTIME AFTER ORIGINALLY SCHEDULED
      FLIGHT OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.',
                    '@attributes' => 
                    array (
                      'category' => '33',
                      'type' => 'RULE',
                    ),
                  ),
                ),
                '@attributes' => 
                array (
                  'fareinforef' => 'z5lV5oBqWDKAI9NqCAAAAA==',
                  'rulenumber' => '0221',
                  'source' => 'ATPCO',
                  'tariffnumber' => '008',
                ),
              ),
              3 => 
              array (
                'air:farerulelong' => 
                array (
                  0 => 
                  array (
                    '@value' => 'RULE - 302/0221
      UNLESS OTHERWISE SPECIFIED
      EASY FARES
      APPLICATION
      AREA
      THESE FARES APPLY
      WITHIN INDIA.
      CLASS OF SERVICE
      THESE FARES APPLY FOR ECONOMY CLASS SERVICE.
      TYPES OF TRANSPORTATION
      THIS RULE GOVERNS ONE-WAY FARES.
      FARES GOVERNED BY THIS RULE CAN BE USED TO CREATE
      ONE-WAY/ROUND-TRIP/CIRCLE-TRIP/OPEN-JAW JOURNEYS.
      ON SPECIFIED DOMESTIC SECTORS ONLY',
                    '@attributes' => 
                    array (
                      'category' => '0',
                      'type' => 'RULE',
                    ),
                  ),
                  1 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE FARE COMPONENT MUST NOT BE ON
      ONE OR MORE OF THE FOLLOWING
      AI FLIGHTS 001 THROUGH 099
      AI FLIGHTS 100 THROUGH 399
      AI FLIGHTS 900 THROUGH 999
      AI FLIGHTS 1001 THROUGH 1099
      AI FLIGHTS 1100 THROUGH 1399
      AI FLIGHTS 1900 THROUGH 1999.
      AND
      THE FARE COMPONENT MUST BE ON
      ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '4',
                      'type' => 'RULE',
                    ),
                  ),
                  2 => 
                  array (
                    '@value' => 'FOR -IP TYPE FARES
      RESERVATIONS ARE REQUIRED FOR ALL SECTORS.
      NOTE -
      TICKETING AND BOOKING TRANSACTIONS  TO BE
      COMPLETED  SIMULTANEOUSLY AND ONLY CONFIRMED
      TICKETS TO BE ISSUED.NO TIME LIMIT PERMITTED',
                    '@attributes' => 
                    array (
                      'category' => '5',
                      'type' => 'RULE',
                    ),
                  ),
                  3 => 
                  array (
                    '@value' => 'NONE FOR ONE WAY FARES',
                    '@attributes' => 
                    array (
                      'category' => '7',
                      'type' => 'RULE',
                    ),
                  ),
                  4 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      NO STOPOVERS PERMITTED.',
                    '@attributes' => 
                    array (
                      'category' => '8',
                      'type' => 'RULE',
                    ),
                  ),
                  5 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      TRANSFERS NOT PERMITTED ON THE FARE COMPONENT
      FARE BREAK AND EMBEDDED SURFACE SECTORS NOT PERMITTED ON
      THE FARE COMPONENT.',
                    '@attributes' => 
                    array (
                      'category' => '9',
                      'type' => 'RULE',
                    ),
                  ),
                  6 => 
                  array (
                    '@value' => 'FOR U- TYPE FARES
      DOUBLE OPEN JAWS NOT PERMITTED.
      APPLICABLE ADD-ON CONSTRUCTION IS ADDRESSED IN
      MISCELLANEOUS PROVISIONS - CATEGORY 23.
      END-ON-END
      END-ON-END COMBINATIONS PERMITTED WITH AI FARES.
      VALIDATE ALL FARE COMPONENTS. SIDE TRIPS PERMITTED.
      OPEN JAWS/ROUND TRIPS/CIRCLE TRIPS
      FARES MAY BE COMBINED ON A HALF ROUND TRIP BASIS WITH AI
      FARES
      -TO FORM SINGLE OPEN JAWS.
      MILEAGE OF THE OPEN SEGMENT MUST BE EQUAL/LESS THAN
      MILEAGE OF THE LONGEST FLOWN FARE COMPONENT.
      -TO FORM ROUND TRIPS
      -TO FORM CIRCLE TRIPS
      PROVIDED -
      COMBINATIONS ARE WITH ANY FARE FOR CARRIER AI IN ANY
      RULE IN ANY TARIFF.',
                    '@attributes' => 
                    array (
                      'category' => '10',
                      'type' => 'RULE',
                    ),
                  ),
                  7 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE PROVISIONS BELOW APPLY ONLY AS FOLLOWS -
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN INDIA
      AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      A SURCHARGE OF INR 300 PER COUPON WILL BE ADDED TO THE
      APPLICABLE FARE FOR TRAVEL.
      PROVIDED TRAVEL IS ON ONE OR MORE OF THE FOLLOWING
      ANY AI FLIGHT OPERATED BY AI.',
                    '@attributes' => 
                    array (
                      'category' => '12',
                      'type' => 'RULE',
                    ),
                  ),
                  8 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      VALID FOR TRAVEL COMMENCING ON/AFTER 01JUN 21 AND ON/
      BEFORE 31JUL 21.',
                    '@attributes' => 
                    array (
                      'category' => '14',
                      'type' => 'RULE',
                    ),
                  ),
                  9 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      FARES MAY ONLY BE SOLD BY AI.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI.
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      OR - SALE IS RESTRICTED TO SPECIFIC AGENTS.
      TICKETS MUST BE ISSUED ON AI AND MAY NOT BE SOLD IN
      INDIA AND MAY ONLY BE SOLD IN AREA 1/AREA 2/AREA 3
      FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE SOLD IN
      ALBANIA/AUSTRALIA/AUSTRIA/BAHRAIN/BANGLADESH/BELGIUM/
      LUXEMBOURG/BOSNIA AND HERZEGOVINA/CAMBODIA/CANADA/BERMUDA/
      CHINA/TAIWAN, PROVINCE OF/COSTA RICA/CYPRUS/CZECH
      REPUBLIC/EGYPT/FINLAND/FRANCE/GERMANY/GREECE/HONG KONG,
      SAR, CHINA/HUNGARY/INDIA/INDONESIA/IRELAND/ISRAEL/ITALY/
      JAPAN/JORDAN
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN KAZAKHSTAN/KYRGYZSTAN/KUWAIT/LEBANON/
      LIECHTENSTEIN/MALAYSIA/MEXICO/MOLDOVA,REPUBLIC OF/
      MONTENEGRO/NICARAGUA/NEPAL/NETHERLANDS/NEW ZEALAND/
      PANAMA/PHILIPPINES/ROMANIA/RUSSIA/SAUDI ARABIA/
      SERBIA/SINGAPORE/SLOVAKIA/SLOVENIA/SOUTH AFRICA/
      KOREA, REPUBLIC OF/SPAIN AND CANARY ISLANDS/SRI
      LANKA/SWITZERLAND/THAILAND/TURKEY/UNITED KINGDOM
      OR - FARES MAY ONLY BE SOLD BY AI OR HR.
      TICKETS MUST BE ISSUED ON AI OR HR AND MAY NOT BE
      SOLD IN THE UNITED STATES/WEST AFRICA/SOUTHERN
      AFRICA/EAST AFRICA/SCANDINAVIA/MIDDLE EAST AND MAY
      ONLY BE SOLD IN AREA 1/AREA 2/AREA 3',
                    '@attributes' => 
                    array (
                      'category' => '15',
                      'type' => 'RULE',
                    ),
                  ),
                  10 => 
                  array (
                    '@value' => 'WITHIN INDIA FOR U- TYPE FARES
      CHANGES
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 2500 FOR REISSUE/REVALIDATION.
      NOTE -
      FIRST CHANGE FREE FOR TICKETS ISSUED FOR TRAVEL
      ON OR BEFORE 30 JUN 2021 TILL EXISTING TICKET
      VALIDITY FOR AI OPERATED FLTS ONLY
      REISSUANCE FOR FIRST FREE CHANGE ONLY
      PERMITTED BY AI ATO/CTO/GDS AND AI CALL CENTRE.
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL
      RE-ISSUANCE FEE WILL NOT BE  APPLICABLE. ONLY
      DIFFERENCE IN TOTAL FARE IS TO BE  COLLECTED.
      DOWNSELLING IS NOT ALLOWED
      --------------------------------------------------
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      PERMITTED TILL 02 HR BEFORE SCHEDULED DEPARTURE OF
      THE FLIGHT AGAINST A CHANGE FEE OF INR 2500 PER
      COUPON OR BASIC FARE WHICH EVER IS LOWER.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION  FEE WOULD BE
      APPLICABLE ON INFANT TICKETS.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CANCELLATIONS
      BEFORE DEPARTURE
      PER COUPON CHARGE INR 3000 FOR CANCEL.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      PERMITTED TILL 02 HR BEFORE SCHEDULED DEPARTURE OF
      THE FLIGHT AGAINST A CHANGE FEE OF INR 3000 PER
      COUPON OR BASIC FARE WHICH EVER IS LOWER.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      NO RE-VALIDATION OR CANCELLATION FEE WOULD BE
      APPLICABLE ON INFANT TICKETS.
      --------------------------------------------------
      IN CASE OF CHANGE TO HIGHER RBD FOR TRAVEL ON THE
      SAME DAY/SAME FLIGHT/RE-ISSUANCE FEE WILL NOT BE
      APPLICABLE.ONLY DIFFERENCE IN TOTAL FARE IS TO BE
      COLLECTED.
      --------------------------------------------------
      CANCELLATION FEE OF PARTLY USED TICKET
      DEDUCT ONEWAY FARE AND LEVIES FOR THE TRAVELLED
      SECTOR PLUS CANCELLATION FEE
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      --------------------------------------------------
      RESERVATIONS BOOKED MORE THAN 7 DAYS PRIOR TO
      COMMENCEMENT OF TRAVEL MAY BE CANCELLED OR
      AMENDED WITHIN 24 HOURS OF BOOKING TICKET WITHOUT
      PENALTY.RESERVATIONS BOOKED WITHIN 7 DAYS OF
      COMMENCEMENT OF TRAVEL ARE SUBJECT TO THE
      APPLICABLE CANCELLATION PENALTY.
      CHANGES/CANCELLATIONS
      CHANGES/CANCELLATIONS PERMITTED FOR NO-SHOW.
      NOTE -
      TEXT BELOW NOT VALIDATED FOR AUTOPRICING.
      CHANGES / CANCELLATION FEE IF CANCELLED
      LESS THAN TWO HOUR BEFORE DEPARTURE - 100 PERCENT
      OF BASIC FARE WILL BE FORFEITED.
      --------------------------------------------------
      THE CHANGE/REISSUE CHARGE IS NON - REFUNDABLE
      --------------------------------------------------
      CHARGES ARE NON-COMMISISONABLE.  APPLICABLE GST
      WILL BE ADDITIONAL.
      --------------------------------------------------
      AIR INDIA NO-SHOW WAIVER AT AIRPORT - FOR RBDS -
      H/K/Q/V/W/G/L/U/T/S/E IN CASE THE PASSENGER HAS
      REPORTED AT THE AIRPORT AFTER CLOSURE OF COUNTER
      BUT BEFORE DEPARTURE OF FLIGHT WOULD BE PERMITTED
      TO ROLL OVER ON NO-SHOW AT A CHARGE OF INR 3500.
      --------------------------------------------------
      THIS WILL BE AUTHORISED AT THE AIRPORT AT THE
      TIME OF FLIGHT ONLY AND CANNOT BE LEVIED/ WAIVED
      AT CBO.
      --------------------------------------------------
      THE WAIVER OF NO-SHOW IN SUCH CASES TO BE
      AUTHORISED BY THE DUTY MANAGER.
      --------------------------------------------------
      FURTHER FARE DIFFERENCE IF ANY AS PER THE RBD/
      FARE BASIS AVAILABLE/ APPLICABLE ON THE NEXT
      AVAILABLE FLIGHT WILL HAVE TO BE CHARGED FROM THE
      PASSENGER IN ADDITION TO THE NO-SHOW PENALTY.
      --------------------------------------------------
      FOR WAIVER OF PENALTY ON ACCOUNT OF DEATH OF
      PASSENGER OR IMMEDIATE FAMILY MEMBER PLS REFER
      LAST PAGE
      NOTE -
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER BEFORE COMMENCEMENT OF TRAVEL
      PENALTY CHARGES STAND WAIVED OFF. THE ABOVE IS
      APPLICABLE ONLY WHEN TICKET IS PURCHASED BEFORE
      DEATH OF PASSENGER OR IMMEDIATE FAMILY MEMBER IS
      OCCURRED.
      -------------------------------------------------
      IMMEDIATE FAMILY SHALL BE LIMITED TO SPOUSE
      CHILDREN INCLUDING ADOPTED CHILDREN PARENTS
      BROTHERS SISTERS GRAND-PARENTS GRANDCHILDREN FA
      FATHER IN LAW MOTHER IN LAW SISTER IN LAW BROTHER
      IN LAW SON IN LAW AND DAUGHTER IN LAW
      -----------------------------------------------
      IN CASE OF DEATH OF A PASSENGER OR IMMEDIATE
      FAMILY MEMBER OCCURRED AFTER COMMENCEMENT OF
      TRAVEL PENALTY CHARGES STAND WAIVED OFF.
      -------------------------------------------------
      IN CASE OF DEATH OF PASSENGER OCCURRED AFTER
      COMMENCEMENT OF TRAVEL ACCOMPANYING PASSENGER MAY
      TERMINATE TRAVEL OR INTERRUPT TRAVEL UNTIL
      COMPLETION OF FORMALITIES AND RELIGIOUS CUSTOMS
      IF ANY BUT IN NO EVENT LATER THAN FORTY FIVE 45
      DAYS AFTER TRAVEL IS INTERRUPTED. THE TICKET OF
      RETURNING PASSENGERS WILL BE ENDORSED RETURN
      ACCOUNT DEATH NAME  AND SUCH ENDORSEMENT SHALL BE
      AUTHENTICATED BY VALIDATION OR OTHER DUTY MANAGER
      OFFICIAL STAMP. REFUND MAY BE ARRANGED. RE-
      ROUTING MAY BE PERMITTED APPLICABLE PENALTY IF
      ANY MAY BE WAIVED. DIFFERENCE OF FARE NEEDS TO BE
      COLLECTED.
      ----------------------------------------------
      FOR RETURN-ONWARD TICKER REFUND DEDUCT ONE WAY
      FARE AND LEVIES FOR THE TRAVELLED SECTOR AND
      BALANCE AMOUNT MAY BE REFUNDED.
      -----------------------------------------------
      PENALTY ON ABOVE ACCOUNT IS WAIVED FOR FIRST
      TRANSACTION ONLY. SUBSEQUENT TRANSACTION IF ANY
      WILL ATTRACT APPLICABLE PENALTY.',
                    '@attributes' => 
                    array (
                      'category' => '16',
                      'type' => 'RULE',
                    ),
                  ),
                  11 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE HIGHER INTERMEDIATE POINT RULE DOES NOT APPLY FOR
      STOPOVERS
      OR - THE HIGHER INTERMEDIATE POINT RULE DOES NOT APPLY FOR
      CONNECTIONS.
      NOTE -
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW
      FARE. WHEN CALCULATING A DIFFERENTIAL. THIS FARE
      MUST NOT BE USED AS THE THROUGH FARE WHEN PRICING
      A FARE COMPONENT WITH A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '17',
                      'type' => 'RULE',
                    ),
                  ),
                  12 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THE ORIGINAL AND THE REISSUED TICKET MUST BE ANNOTATED -
      NON ENDORSEABLE - AND - VALID ON AI - IN THE ENDORSEMENT
      BOX.',
                    '@attributes' => 
                    array (
                      'category' => '18',
                      'type' => 'RULE',
                    ),
                  ),
                  13 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      ACCOMPANIED CHILD 2-11 - CHARGE 100 PERCENT OF THE FARE.
      TICKETING CODE - BASE FARE CODE PLUS CH
      OR - 1ST INFANT UNDER 2 WITHOUT A SEAT - CHARGE INR 1250
      .
      RESULTING FARE IS A ONE-WAY.
      TICKETING CODE - BASE FARE CODE PLUS IN
      OR - INFANT UNDER 2 WITH A SEAT - CHARGE 100 PERCENT OF
      THE FARE.
      TICKETING CODE - BASE FARE CODE PLUS CH.',
                    '@attributes' => 
                    array (
                      'category' => '19',
                      'type' => 'RULE',
                    ),
                  ),
                  14 => 
                  array (
                    '@value' => 'UNLESS OTHERWISE SPECIFIED
      THIS FARE MUST NOT BE USED AS THE HIGH OR THE LOW FARE
      WHEN CALCULATING A DIFFERENTIAL. THIS FARE MAY BE USED AS
      THE THROUGH FARE WHEN PRICING A FARE COMPONENT WITH OR
      WITHOUT A DIFFERENTIAL.',
                    '@attributes' => 
                    array (
                      'category' => '23',
                      'type' => 'RULE',
                    ),
                  ),
                  15 => 
                  array (
                    '@value' => 'DO A CATEGORY 31 SPECIFIC TEXT ENTRY TO VIEW CONTENTS
      ALSO REFERENCE 16 PENALTIES - FOR ADDITIONAL CHANGE INFORMATION',
                    '@attributes' => 
                    array (
                      'category' => '31',
                      'type' => 'RULE',
                    ),
                  ),
                  16 => 
                  array (
                    '@value' => 'FOR U- TYPE FARES
      APPLIES IN THE CASE OF DEATH OF PASSENGER OR FAMILY
      MEMBER.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      VALID FOR INFANT WITHOUT A SEAT.
      REFUND MAY BE REQUESTED ANYTIME.
      NO CHARGE. IF ALL PENALTIES IN PRICING UNIT ARE PER FARE
      COMPONENT COLLECT EACH. IF MIX OF PER FARE COMPONENT AND
      PER PRICING UNIT CALCULATE EACH AS PER PRICING UNIT AND
      COLLECT HIGHEST. NO CHARGE FOR INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      REFUND REQUEST REQUIRED 2 HOURS BEFORE ORIGINALLY
      SCHEDULED FLIGHT OF FIRST UNUSED TICKET COUPON.
      CHARGE INR 3150 PER FARE COMPONENT. IF ALL PENALTIES IN
      PRICING UNIT ARE PER FARE COMPONENT COLLECT EACH. IF MIX
      OF PER FARE COMPONENT AND PER PRICING UNIT CALCULATE EACH
      AS PER PRICING UNIT AND COLLECT HIGHEST. NO CHARGE FOR
      INFANT WITHOUT SEAT.
      FORM OF REFUND - ORIGINAL FORM OF PAYMENT. ONLY VALIDATING
      CARRIER MAY REFUND TICKET.
      REPRICE FLOWN PORTION USING FARES IN EFFECT ON TICKET
      ISSUANCE DATE. FOR FULLY FLOWN FARE COMPONENTS FARE BREAK
      POINTS MAY NOT BE CHANGED. FOR PARTIALLY FLOWN FARE
      COMPONENTS ONLY DESTINATION FARE BREAK POINTS MAY BE
      CHANGED. REPRICE USING NORMAL/SPECIAL ONE WAY/ROUND TRIP
      FARES/ANY RULE/FARE CLASS/EQUAL OR HIGHER RBD. PUBLIC
      FARES ARE USED IF TICKETED FARE IS IN PUBLIC TARIFF.
      QUALIFIED PRIVATE FARES OR PUBLIC FARES ARE USED IF
      TICKETED FARE IS IN PRIVATE TARIFF. NEW FARE FOR FULLY
      FLOWN FARE COMPONENTS MUST BE EQUAL TO OR HIGHER THAN
      TICKETED FARE.
      OR -
      FARE IS NONREFUNDABLE BEFORE ORIGINALLY SCHEDULED FLIGHT
      OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.
      OR -
      FARE IS NONREFUNDABLE ANYTIME AFTER ORIGINALLY SCHEDULED
      FLIGHT OF FIRST UNUSED TICKET COUPON.
      IF MIX OF PER FARE COMPONENT AND PER PRICING UNIT
      CALCULATE EACH AS PER PRICING UNIT AND COLLECT HIGHEST.
      REPRICE USING EQUAL OR HIGHER RBD.',
                    '@attributes' => 
                    array (
                      'category' => '33',
                      'type' => 'RULE',
                    ),
                  ),
                ),
                '@attributes' => 
                array (
                  'fareinforef' => 'z5lV5oBqWDKAq9NqCAAAAA==',
                  'rulenumber' => '0221',
                  'source' => 'ATPCO',
                  'tariffnumber' => '008',
                ),
              ),
            ),
          ),
          '@attributes' => 
          array (
            'transactionid' => '57E20E6D0A0D6A816844C8EB2F1834B4',
            'responsetime' => '618',
            'class' => '',
          ),
        ),
      );
      return $array;
    }
   
public function Test1(){
    $TARGETBRANCH = 'P7141733';
    $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
$Provider = '1G';//1G/1V/1P/ACH
$PreferredDate = date('Y-m-d', strtotime("+75 day"));
$returnDate= date('Y-m-d', strtotime("+80 day"));
$message = <<<EOM
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header/>
   <soapenv:Body>
      <air:LowFareSearchReq TraceId="trace" AuthorizedBy="user" SolutionResult="true" TargetBranch="$TARGETBRANCH" xmlns:air="http://www.travelport.com/schema/air_v42_0" xmlns:com="http://www.travelport.com/schema/common_v42_0">
         <com:BillingPointOfSaleInfo OriginApplication="UAPI"/>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="CCU"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="DEL"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="$PreferredDate">
            </air:SearchDepTime>            
         </air:SearchAirLeg>
         
         <air:AirSearchModifiers>
            <air:PreferredProviders>
               <com:Provider Code="$Provider"/>
            </air:PreferredProviders>
         </air:AirSearchModifiers>
		 <com:SearchPassenger BookingTravelerRef="1" Code="ADT" xmlns:com="http://www.travelport.com/schema/common_v42_0"/>
      </air:LowFareSearchReq>
   </soapenv:Body>
</soapenv:Envelope>
EOM;


$file = "001-".$Provider."_LowFareSearchReq.xml"; // file name to save the request xml for test only(if you want to save the request/response)
$this->prettyPrint($message,$file);//call function to pretty print xml


$auth = base64_encode("$CREDENTIALS"); 
$soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");
/*("https://americas.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");*/
$header = array(
"Content-Type: text/xml;charset=UTF-8", 
"Accept: gzip,deflate", 
"Cache-Control: no-cache", 
"Pragma: no-cache", 
"SOAPAction: \"\"",
"Authorization: Basic $auth", 
"Content-length: ".strlen($message),
); 
//curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 30); 
//curl_setopt($soap_do, CURLOPT_TIMEOUT, 30); 
// curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false); 
// curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false); 
// curl_setopt($soap_do, CURLOPT_POST, true ); 
curl_setopt($soap_do, CURLOPT_POSTFIELDS, $message); 
curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header); 
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($soap_do);
curl_close($soap_do);
// return $return;
$file = "001-".$Provider."_LowFareSearchRsp.xml"; // file name to save the response xml for test only(if you want to save the request/response)
$content = $this->prettyPrint($return,$file);
$f=$this->parseOutput($content);
return $f;
//outputWriter($file, $return);
//print_r(curl_getinfo($soap_do));
}



//Pretty print XML
public function prettyPrint($result,$file){
	$dom = new \DOMDocument;
	$dom->preserveWhiteSpace = false;
	$dom->loadXML($result);
	$dom->formatOutput = true;		
	//call function to write request/response in file	
	// outputWriter($file,$dom->saveXML());	
	return $dom->saveXML();
}

//function to write output in a file
function outputWriter($file,$content){	
	file_put_contents($file, $content); // Write request/response and save them in the File
}

public function ListAirSegments($key, $lowFare){	
	foreach($lowFare->children('air',true) as $airSegmentList){		
		if(strcmp($airSegmentList->getName(),'AirSegmentList') == 0){			
			foreach($airSegmentList->children('air', true) as $airSegment){				
				if(strcmp($airSegment->getName(),'AirSegment') == 0){					
					foreach($airSegment->attributes() as $a => $b){						
						if(strcmp($a,'Key') == 0){							
							if(strcmp($b, $key) == 0){								
								return $airSegment;
							}
						}
					}
				}
			}
		}
	}
}


public function parseOutput($content){	//parse the Search response to get values to use in detail request
	$LowFareSearchRsp = $content; //use this if response is not saved anywhere else use above variable
	//echo $LowFareSearchRsp;
	$xml = simplexml_load_String("$LowFareSearchRsp", null, null, 'SOAP', true);	
	
	if(!$xml){
        trigger_error("Encoding Error!", E_USER_ERROR);
    }

	$Results = $xml->children('SOAP',true);
	foreach($Results->children('SOAP',true) as $fault){
		if(strcmp($fault->getName(),'Fault') == 0){
			trigger_error("Error occurred request/response processing!", E_USER_ERROR);
		}
	}
	
	
	$count = 0;
	$fileName = public_path('flight/')."flights.txt";
	if(file_exists($fileName)){
		file_put_contents($fileName, "");
	}

	$data = collect();
    
	foreach($Results->children('air',true) as $lowFare){		
		foreach($lowFare->children('air',true) as $airPriceSol){	
            		
			if(strcmp($airPriceSol->getName(),'AirPricingSolution') == 0){		
				$count = $count + 1;
				file_put_contents($fileName, "Air Pricing Solutions Details ".$count.":\r\n", FILE_APPEND);
				file_put_contents($fileName,"--------------------------------------\r\n", FILE_APPEND);
				foreach($airPriceSol->children('air',true) as $journey){					
					if(strcmp($journey->getName(),'Journey') == 0){
						file_put_contents($fileName,"\r\nJourney Details: ", FILE_APPEND);
						file_put_contents($fileName,"\r\n", FILE_APPEND);
						file_put_contents($fileName,"--------------------------------------\r\n", FILE_APPEND);						
                        $Journey= collect();
                        $journeydetails = collect();
                        foreach($journey->children('air', true) as $segmentRef){	
                           						
							if(strcmp($segmentRef->getName(),'AirSegmentRef') == 0){								
                                $details=[];
                                foreach($segmentRef->attributes() as $a => $b){	
                                   
									$segment = $this->ListAirSegments($b, $lowFare);
									foreach($segment->attributes() as $c => $d){
                                        if(strcmp($c, "Origin") == 0){
                                            // $journeydetails->push(['From'=>$d]);
                                            $details["From"]=$d;
											file_put_contents($fileName,"From ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "Destination") == 0){
                                            // $journeydetails->push(['To'=>$d]);
                                            $details["To"]=$d;
											file_put_contents($fileName,"To ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "Carrier") == 0){		
                                            // $journeydetails->push(['Airline'=>$d]);	
                                            $details["Airline"]=$d;								
											file_put_contents($fileName,"Airline: ".$d."\r\n", FILE_APPEND);	
										}
										if(strcmp($c, "FlightNumber") == 0){	
                                            // $journeydetails->push(['flight'=>$d]);
                                            $details["Flight"]=$d;
											file_put_contents($fileName,"Flight ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "DepartureTime") == 0){	
                                            // $journeydetails->push(['Depart'=>$d]);	
                                            $details["Depart"]=$d;										
											file_put_contents($fileName,"Depart ".$d."\r\n", FILE_APPEND);	
										}
										if(strcmp($c, "ArrivalTime") == 0){	
                                            // $journeydetails->push(['Arrive'=>$d]);
                                            $details["Arrive"]=$d;
											file_put_contents($fileName,"Arrive ".$d."\r\n", FILE_APPEND);	
										
                                        }	
                                       
									}
                                 
								}
                                
                                $journeydetails->push($details);
									
							}
						}	
						 $Journey->push(['journey'=>collect($journeydetails)]);				
											
					}					
				}
               // Price Details
                foreach($airPriceSol->children('air',true) as $priceInfo){
                    $flightPrice = [];
                    if(strcmp($priceInfo->getName(),'AirPricingInfo') == 0){
                        foreach($priceInfo->attributes() as $e => $f){
                            if(strcmp($e, "ApproximateBasePrice") == 0){
                                // $flightPrice->push('Approx. Base Price: '.$f);
                                $flightPrice['Approx Base Price'] = $f;
                                // array_push($flightPrice, 'Approx. Base Price: '.$f);
                            }
                            if(strcmp($e, "ApproximateTaxes") == 0){
                                // $flightPrice->push('Approx Taxes: '.$f);
                                $flightPrice['Approx Taxes'] = $f;
                                // array_push($flightPrice, 'Approx. Taxes: '.$f);
                            }
                            if(strcmp($e, "ApproximateTotalPrice") == 0){
                                // $flightPrice->push('Approx Total Value: '.$f);
                                $flightPrice['Approx Total Value'] = $f;
                                // array_push($flightPrice, 'Approx. Total Price: '.$f);
                            }
                            if(strcmp($e, "BasePrice") == 0){
                                // $flightPrice->push('Base Price'.$f);
                                $flightPrice['Base Price'] = $f;
                                // array_push($flightPrice, 'Base Price: '.$f);
                            }
                            if(strcmp($e, "Taxes") == 0){
                                // $flightPrice->push('Taxes '.$f);
                                $flightPrice['Taxes'] = $f;
                                // array_push($flightPrice, 'Taxes: '.$f);
                            }
                            if(strcmp($e, "TotalPrice") == 0){
                                // $flightPrice->push('Total Price '.$f);
                                $flightPrice['Total Price'] = $f;
                                // array_push($flightPrice, 'Total Price: '.$f);
                            }

                        }
                        foreach($priceInfo->children('air',true) as $bookingInfo){
                            if(strcmp($bookingInfo->getName(),'BookingInfo') == 0){
                                foreach($bookingInfo->attributes() as $e => $f){
                                    if(strcmp($e, "CabinClass") == 0){
                                        // $flightPrice->push('Cabin Class'.$f);
                                        // $flightPrice[$e] = $f;
                                        $flightPrice['Cabin Class'] = $f;
                                        // array_push($flightPrice, 'Cabin Class'.$f);
                                    }
                                }
                            }
                        }
                    
                    }
                    if(count($flightPrice)){
                          $Journey->push(['price'=>$flightPrice]);
                        // $flight['price'] = collect($flightPrice);
                    }

                }
			
                $data->push(['flight'=>collect($Journey)]);
                file_put_contents($fileName,"\r\n", FILE_APPEND);
 
            
            
            }

			
		}
	}
	
	// print_r($data) ;
    // echo $data;
    return $data;
	// echo "\r\n"."Processing Done. Please check results in files.";

}

}
