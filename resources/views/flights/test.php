<AirCreateReservationReq xmlns="http://www.travelport.com/schema/universal_v42_0" TraceId="873b5316-bb73-457e-9539-3237126897b3" AuthorizedBy="Travelport" TargetBranch="P7141733" ProviderCode="1G" RetainReservation="Both">
  <BillingPointOfSaleInfo xmlns="http://www.travelport.com/schema/common_v42_0" OriginApplication="UAPI" />
  <BookingTraveler xmlns="http://www.travelport.com/schema/common_v42_0" Key="aEluV1BzN1N0VjJuQTBTRg==" TravelerType="ADT" Age="40" DOB="1981-07-27" Gender="M" Nationality="US">
    <BookingTravelerName Prefix="Mr" First="John" Last="Smith" />
    <DeliveryInfo>
      <ShippingAddress Key="aEluV1BzN1N0VjJuQTBTRg==">
        <Street>Via Augusta 59 5</Street>
        <City>Madrid</City>
        <State>IA</State>
        <PostalCode>50156</PostalCode>
        <Country>US</Country>
      </ShippingAddress>
    </DeliveryInfo>
    <PhoneNumber Location="DEN" CountryCode="1" AreaCode="303" Number="123456789" />
    <Email EmailID="johnsmith@travelportuniversalapidemo.com" />
    <SSR Type="DOCS" FreeText="P/GB/S12345678/GB/20JUL76/M/01JAN16/SMITH/JOHN" Carrier="AI" />
    <Address>
      <AddressName>DemoSiteAddress</AddressName>
      <Street>Via Augusta 59 5</Street>
      <City>Madrid</City>
      <State>IA</State>
      <PostalCode>50156</PostalCode>
      <Country>US</Country>
    </Address>
  </BookingTraveler>
  <FormOfPayment xmlns="http://www.travelport.com/schema/common_v42_0" Type="Check" Key="1">
    <Check RoutingNumber="456" AccountNumber="7890" CheckNumber="1234567" />
  </FormOfPayment>
  <AirPricingSolution xmlns="http://www.travelport.com/schema/air_v42_0" Key="tx2CKrBqWDKAzc5jLAAAAA==" TotalPrice="GBP115.80" BasePrice="INR9660" ApproximateTotalPrice="GBP115.80" ApproximateBasePrice="GBP94.00" EquivalentBasePrice="GBP94.00" Taxes="GBP21.80" Fees="GBP0.00">
    <AirSegment Key="tx2CKrBqWDKAvc5jLAAAAA==" OptionalServicesIndicator="false" AvailabilityDisplayType="Fare Specific Fare Quote Unbooked" Group="0" Carrier="AI" FlightNumber="763" Origin="CCU" Destination="DEL" DepartureTime="2021-07-28T06:55:00.000+05:30" ArrivalTime="2021-07-28T09:15:00.000+05:30" FlightTime="140" TravelTime="140" Distance="816" ProviderCode="1G" ClassOfService="S">
      <CodeshareInfo OperatingCarrier="AI" />
    </AirSegment>
    <AirSegment Key="tx2CKrBqWDKAxc5jLAAAAA==" OptionalServicesIndicator="false" AvailabilityDisplayType="Fare Specific Fare Quote Unbooked" Group="1" Carrier="AI" FlightNumber="762" Origin="DEL" Destination="CCU" DepartureTime="2021-07-29T20:15:00.000+05:30" ArrivalTime="2021-07-29T22:20:00.000+05:30" FlightTime="125" TravelTime="125" Distance="816" ProviderCode="1G" ClassOfService="S">
      <CodeshareInfo OperatingCarrier="AI" />
    </AirSegment>
    <AirPricingInfo PricingMethod="Auto" Key="tx2CKrBqWDKA2c5jLAAAAA==" TotalPrice="GBP115.80" BasePrice="INR9660" ApproximateTotalPrice="GBP115.80" ApproximateBasePrice="GBP94.00" Taxes="GBP21.80" ProviderCode="1G">
      <FareInfo PromotionalFare="false" FareFamily="Economy Saver" DepartureDate="2021-07-28" Amount="" EffectiveDate="2021-07-27T06:02:00.000+01:00" Destination="DEL" Origin="CCU" PassengerTypeCode="ADT" FareBasis="SIP" Key="tx2CKrBqWDKA8c5jLAAAAA==">
        <FareRuleKey FareInfoRef="tx2CKrBqWDKA8c5jLAAAAA==" ProviderCode="1G">6UUVoSldxwhg7HeUUi6WosbKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhr8Pfbco2J4WGdbqdv1GlGJSD5QULEHOHadwjMHbhzGeYkFNgwmTxgTCHLo1pwCld8siOHFaFMf8hf6E18cRejGVqfCTByZWB98KxJ35Bj3Drxa4kYfhAhHqNbjwzJx7oo0sKBvhNXxanSc/WBDOBm9dhy14poZCm0ACA4xcw3/+ly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4q+cJFUBzriwNmwgE7MqQt7PHybnt8kEFNFX/4N2RTghOW5Q29uMMLX4gS/euWFMGbeWZkRGLN3KAxevs8wf8A=</FareRuleKey>
      </FareInfo>
      <FareInfo PromotionalFare="false" FareFamily="Economy Saver" DepartureDate="2021-07-29" Amount="GBP47.00" EffectiveDate="2021-07-27T06:02:00.000+01:00" Destination="CCU" Origin="DEL" PassengerTypeCode="ADT" FareBasis="SIP" Key="tx2CKrBqWDKAQd5jLAAAAA==">
        <FareRuleKey FareInfoRef="tx2CKrBqWDKAQd5jLAAAAA==" ProviderCode="1G">6UUVoSldxwhg7HeUUi6WosbKj3F8T9EyxsqPcXxP0TLGyo9xfE/RMsuWFfXVd1OAly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4U/UuC8/Pq3NAF/izIfuYdfHMK8e3nzhqPO3+9fX2fe5h1gUOubWv9SD5QULEHOHadwjMHbhzGeYkFNgwmTxgSaKfjPBozXessiOHFaFMf8hf6E18cRejGVqfCTByZWB98KxJ35Bj3Drxa4kYfhAhGzwqagSNw6Eo0sKBvhNXxaFHpjnmZFIWFdhy14poZCm0ACA4xcw3/+ly5qxZ3qLwOXLmrFneovA5cuasWd6i8Dly5qxZ3qLwOXLmrFneovA4q+cJFUBzriwNmwgE7MqQt7PHybnt8kEFNFX/4N2RTghOW5Q29uMMLX4gS/euWFMGbeWZkRGLN3KAxevs8wf8A=</FareRuleKey>
      </FareInfo>
      <BookingInfo BookingCode="S" CabinClass="Economy" FareInfoRef="tx2CKrBqWDKA8c5jLAAAAA==" SegmentRef="tx2CKrBqWDKAvc5jLAAAAA==" HostTokenRef="tx2CKrBqWDKA0c5jLAAAAA==" />
      <BookingInfo BookingCode="S" CabinClass="Economy" FareInfoRef="tx2CKrBqWDKAQd5jLAAAAA==" SegmentRef="tx2CKrBqWDKAxc5jLAAAAA==" HostTokenRef="tx2CKrBqWDKA1c5jLAAAAA==" />
      <TaxInfo Amount="GBP7.30" Category="IN" Key="tx2CKrBqWDKA3c5jLAAAAA==" />
      <TaxInfo Amount="GBP4.90" Category="K3" Key="tx2CKrBqWDKA4c5jLAAAAA==" />
      <TaxInfo Amount="GBP4.60" Category="P2" Key="tx2CKrBqWDKA5c5jLAAAAA==" />
      <TaxInfo Amount="GBP1.60" Category="WO" Key="tx2CKrBqWDKA6c5jLAAAAA==" />
      <TaxInfo Amount="GBP3.40" Category="YR" Key="tx2CKrBqWDKA7c5jLAAAAA==" />
      <PassengerType Code="ADT" BookingTravelerRef="aEluV1BzN1N0VjJuQTBTRg==" />
    </AirPricingInfo>
    <HostToken xmlns="http://www.travelport.com/schema/common_v42_0" Key="tx2CKrBqWDKA0c5jLAAAAA==">GFB10101ADT00  01SIP                                   010001#GFB200010101NADTV3302AI0407700001991K#GFMCEIP302NAI04 AI ADTSIP</HostToken>
    <HostToken xmlns="http://www.travelport.com/schema/common_v42_0" Key="tx2CKrBqWDKA1c5jLAAAAA==">GFB10101ADT00  02SIP                                   010002#GFB200010102NADTV3302AI0407700001991K#GFMCEIP302NAI04 AI ADTSIP</HostToken>
  </AirPricingSolution>
  <ActionStatus xmlns="http://www.travelport.com/schema/common_v42_0" Type="ACTIVE" TicketDate="T*" ProviderCode="1G" />
  <Payment xmlns="http://www.travelport.com/schema/common_v42_0" Key="2" Type="Itinerary" FormOfPaymentRef="1" Amount="GBP115.80" />
</AirCreateReservationReq>