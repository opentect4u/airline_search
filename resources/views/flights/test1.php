<universal:AirCreateReservationRsp xmlns:universal="http://www.travelport.com/schema/universal_v42_0" xmlns:common_v42_0="http://www.travelport.com/schema/common_v42_0" xmlns:air="http://www.travelport.com/schema/air_v42_0" TraceId="bcc99a31-bcb1-4e39-bb82-187c881fed8f" TransactionId="A35151B70A0D6A7E5A240F7487F41132" ResponseTime="2903">
  <common_v42_0:ResponseMessage Code="13566" Type="Warning" ProviderCode="1G">Brand optional services were filtered out as they are not offered in the brand or are only available at a charge.</common_v42_0:ResponseMessage>
  <universal:UniversalRecord LocatorCode="13IU7Y" Version="0" Status="Active">
    <common_v42_0:BookingTraveler Key="UmpoZFNVcHFZdjF3R0xmWQ==" TravelerType="ADT" Age="40" DOB="1981-07-14" Gender="M" ElStat="A">
      <common_v42_0:BookingTravelerName Prefix="Mr" First="John" Last="Smith" />
      <common_v42_0:DeliveryInfo>
        <common_v42_0:ShippingAddress Key="UmpoZFNVcHFZdjF3R0xmWQ==" ElStat="A">
          <common_v42_0:AddressName>JOHNMR SMITH</common_v42_0:AddressName>
          <common_v42_0:Street>Via Augusta 59 5</common_v42_0:Street>
          <common_v42_0:City>Madrid</common_v42_0:City>
          <common_v42_0:State>IA</common_v42_0:State>
          <common_v42_0:PostalCode>50156</common_v42_0:PostalCode>
          <common_v42_0:Country>US</common_v42_0:Country>
          <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
        </common_v42_0:ShippingAddress>
      </common_v42_0:DeliveryInfo>
      <common_v42_0:PhoneNumber Key="LGWoGq+pWDKAqCPeGAAAAA==" Type="None" Location="DEN" CountryCode="1" Number="123456789" AreaCode="303" ElStat="A">
        <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
      </common_v42_0:PhoneNumber>
      <common_v42_0:Email Key="LGWoGq+pWDKAsCPeGAAAAA==" EmailID="johnsmith@travelportuniversalapidemo.com" ElStat="A">
        <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
      </common_v42_0:Email>
      <common_v42_0:SSR Key="LGWoGq+pWDKArCPeGAAAAA==" Status="HK" Type="DOCS" FreeText="P/GB/S12345678/GB/20JUL76/M/01JAN16/SMITH/JOHN -1SMITH/JOHNMR" Carrier="AI" ProviderReservationInfoRef="LGWoGq+pWDKAvEPeGAAAAA==" ElStat="A" />
      <common_v42_0:Address Key="LGWoGq+pWDKAtCPeGAAAAA==" ElStat="A">
        <common_v42_0:AddressName>DemoSiteAddress</common_v42_0:AddressName>
        <common_v42_0:Street>Via Augusta 59 5</common_v42_0:Street>
        <common_v42_0:City>Madrid</common_v42_0:City>
        <common_v42_0:State>IA</common_v42_0:State>
        <common_v42_0:PostalCode>50156</common_v42_0:PostalCode>
        <common_v42_0:Country>US</common_v42_0:Country>
        <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
      </common_v42_0:Address>
    </common_v42_0:BookingTraveler>
    <common_v42_0:ActionStatus Key="LGWoGq+pWDKAxCPeGAAAAA==" Type="ACTIVE" ProviderReservationInfoRef="LGWoGq+pWDKAvEPeGAAAAA==" ProviderCode="1G" ElStat="A" />
    <universal:ProviderReservationInfo Key="LGWoGq+pWDKAvEPeGAAAAA==" ProviderCode="1G" LocatorCode="S22MX5" CreateDate="2021-07-14T04:40:56.546+00:00" ModifiedDate="2021-07-14T04:40:56.546+00:00" HostCreateDate="2021-07-14" OwningPCC="8W37" />
    <air:AirReservation LocatorCode="13IU7Z" CreateDate="2021-07-14T04:40:55.702+00:00" ModifiedDate="2021-07-14T04:40:56.545+00:00">
      <common_v42_0:SupplierLocator SupplierCode="AI" SupplierLocatorCode="HNYTN" ProviderReservationInfoRef="LGWoGq+pWDKAvEPeGAAAAA==" CreateDateTime="2021-07-14T04:40:00.000+00:00" />
      <common_v42_0:BookingTravelerRef Key="UmpoZFNVcHFZdjF3R0xmWQ==" />
      <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
      <air:AirSegment Key="ToXeIqBqWDKANZJVGAAAAA==" Group="0" Carrier="AI" CabinClass="Economy" FlightNumber="763" ProviderCode="1G" Origin="CCU" Destination="DEL" DepartureTime="2021-07-15T06:55:00.000+05:30" ArrivalTime="2021-07-15T09:15:00.000+05:30" TravelTime="140" Distance="816" ClassOfService="S" ETicketability="Yes" Equipment="321" Status="HK" ChangeOfPlane="false" GuaranteedPaymentCarrier="No" ProviderReservationInfoRef="LGWoGq+pWDKAvEPeGAAAAA==" TravelOrder="1" ProviderSegmentOrder="1" OptionalServicesIndicator="false" ElStat="A">
        <air:FlightDetails Key="LGWoGq+pWDKAxEPeGAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-07-15T06:55:00.000+05:30" ArrivalTime="2021-07-15T09:15:00.000+05:30" FlightTime="140" TravelTime="140" Equipment="321" OriginTerminal="2" DestinationTerminal="3" AutomatedCheckin="false" ElStat="A" />
        <common_v42_0:SellMessage>DEPARTS CCU TERMINAL 2  - ARRIVES DEL TERMINAL 3</common_v42_0:SellMessage>
        <common_v42_0:SellMessage>*DEPARTURE CCU TERMINAL 2 / ARRIVAL DEL TERMINAL 3*</common_v42_0:SellMessage>
      </air:AirSegment>
      <air:AirPricingInfo Key="ToXeIqBqWDKARZJVGAAAAA==" TotalPrice="GBP60.10" BasePrice="INR4830" ApproximateTotalPrice="GBP60.10" ApproximateBasePrice="GBP47.00" EquivalentBasePrice="GBP47.00" Taxes="GBP13.10" LatestTicketingTime="2021-07-15T23:59:00.000+01:00" TrueLastDateToTicket="2021-07-15T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" Exchangeable="true" IncludesVAT="false" ETicketability="Yes" ProviderCode="1G" ProviderReservationInfoRef="LGWoGq+pWDKAvEPeGAAAAA==" AirPricingInfoGroup="1" PricingType="StoredFare" ElStat="A" FareCalculationInd="G">
        <air:FareInfo Key="ToXeIqBqWDKAWZJVGAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-07-14T00:00:00.000+01:00" Amount="INR4830" NotValidBefore="2021-07-15" NotValidAfter="2021-07-15" PseudoCityCode="8W37" ElStat="A">
          <air:FareSurcharge Key="LGWoGq+pWDKAzEPeGAAAAA==" Type="Other" Amount="INR300" ElStat="A" SegmentRef="ToXeIqBqWDKANZJVGAAAAA==" />
          <common_v42_0:Endorsement Value="NON ENDORSABLE/ CHANGE/" />
          <common_v42_0:Endorsement Value="CANCELLATION/NO-SHOW FEE" />
          <common_v42_0:Endorsement Value="APPLY PER SECTOR" />
          <air:BaggageAllowance>
            <air:MaxWeight Value="25" Unit="Kilograms" />
          </air:BaggageAllowance>
          <air:Brand Key="ToXeIqBqWDKAWZJVGAAAAA==" BrandID="361790" Name="Economy Saver" Carrier="AI">
            <air:Title Type="External">Economy Saver</air:Title>
            <air:Title Type="Short">EcoSaver</air:Title>
            <air:Text Type="MarketingConsumer">Included in your ECONOMY SAVER fare are:

•  Check in 25kg baggage allowance. 
•  Carry on one bag max 8kg. 
•  Choice of continental or Indian cuisine non veg or veg. 
•  Complimentary liquors and wine. 
•  Spacious seats with a pitch of 33 inches. 
•  Rebooking against a fee until 24hrs prior departure. 
•  Refunds against a fee until 24hrs prior departure. 
•  Earn miles when you fly.

Note: Refer to fare rules for specific booking terms and conditions.
• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
            <air:Text Type="MarketingAgent">Included in your ECONOMY SAVER fare are:

•  Check in 25kg baggage allowance. 
•  Carry on one bag max 8kg. 
•  Choice of continental or Indian cuisine non veg or veg. 
•  Complimentary liquors and wine. 
•  Spacious seats with a pitch of 33 inches. 
•  Rebooking against a fee until 24hrs prior departure. 
•  Refunds against a fee until 24hrs prior departure. 
•  Earn miles when you fly.

Note: Refer to fare rules for specific booking terms and conditions.
• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
            <air:Text Type="Strapline">For our budget minded travellers</air:Text>
            <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/airindia/AI_general_large_42653.jpg</air:ImageLocation>
            <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="149">https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg</air:ImageLocation>
            <air:OptionalServices>
              <air:OptionalService Type="Baggage" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKAaZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Domestic Checked Baggage</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
              <air:OptionalService Type="Baggage" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKAcZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Carry on baggage</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
              <air:OptionalService Type="PreReservedSeatAssignment" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKAjZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Advance seat reservation</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
              <air:OptionalService Type="MealOrBeverage" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKAkZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Inflight Meals</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
              <air:OptionalService Type="FrequentFlyer" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKAmZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Miles accrual</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
              <air:OptionalService Type="Upgrades" CreateDate="2021-07-14T04:40:55.786+00:00" ElStat="A" Key="ToXeIqBqWDKApZJVGAAAAA==" AssessIndicator="MileageAndCurrency" Chargeable="Included in the brand">
                <common_v42_0:ServiceInfo>
                  <common_v42_0:Description>Mileage upgrade</common_v42_0:Description>
                </common_v42_0:ServiceInfo>
                <air:EMD AssociatedItem="Flight" />
              </air:OptionalService>
            </air:OptionalServices>
          </air:Brand>
        </air:FareInfo>
        <air:BookingInfo BookingCode="S" CabinClass="Economy" FareInfoRef="ToXeIqBqWDKAWZJVGAAAAA==" SegmentRef="ToXeIqBqWDKANZJVGAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="ToXeIqBqWDKASZJVGAAAAA==" />
        <air:TaxInfo Category="K3" Amount="GBP2.40" Key="ToXeIqBqWDKATZJVGAAAAA==" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="ToXeIqBqWDKAUZJVGAAAAA==" />
        <air:TaxInfo Category="YR" Amount="GBP1.70" Key="ToXeIqBqWDKAVZJVGAAAAA==" />
        <air:FareCalc>CCU AI DEL Q300 4530SIP INR4830END</air:FareCalc>
        <air:PassengerType Code="ADT" BookingTravelerRef="UmpoZFNVcHFZdjF3R0xmWQ==">
          <air:FareGuaranteeInfo GuaranteeDate="2021-07-14" GuaranteeType="Guaranteed" />
        </air:PassengerType>
        <common_v42_0:BookingTravelerRef Key="UmpoZFNVcHFZdjF3R0xmWQ==" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:TicketingModifiersRef Key="LGWoGq+pWDKA4EPeGAAAAA==" />
      </air:AirPricingInfo>
      <air:TicketingModifiers PlatingCarrier="AI" Key="LGWoGq+pWDKA4EPeGAAAAA==" ElStat="A">
        <air:DocumentSelect IssueElectronicTicket="true" />
      </air:TicketingModifiers>
    </air:AirReservation>
    <common_v42_0:AgencyInfo>
      <common_v42_0:AgentAction ActionType="Created" AgentCode="uAPI4648209292-e1e4ba84" BranchCode="P7141733" AgencyCode="S7141726" EventTime="2021-07-14T04:40:53.802+00:00" />
    </common_v42_0:AgencyInfo>
    <common_v42_0:FormOfPayment Key="LGWoGq+pWDKAuCPeGAAAAA==" Type="Check" Reusable="false" ProfileKey="8fUpK73LSaKZgJ+m1tODaQ==" ElStat="A">
      <common_v42_0:Check RoutingNumber="456" AccountNumber="7890" CheckNumber="1234567" />
      <common_v42_0:ProviderReservationInfoRef Key="LGWoGq+pWDKAvEPeGAAAAA==" />
    </common_v42_0:FormOfPayment>
  </universal:UniversalRecord>
</universal:AirCreateReservationRsp>