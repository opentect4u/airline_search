PreferCompleteItinerary="false"
CompleteItinerary="false"
CompleteItinerary="true" 
SolutionResult="false"


<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
   <soap:Body>
      <air:LowFareSearchReq TargetBranch="P7102538" TraceId="PP_1G_001" SolutionResult="false" AuthorizedBy="SUSIL" xmlns:air="http://www.travelport.com/schema/air_v50_0" xmlns:com="http://www.travelport.com/schema/common_v50_0">
         <com:BillingPointOfSaleInfo OriginApplication="UAPI"/>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="PHW"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="CPT"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="2020-05-31"/>
         </air:SearchAirLeg>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="CPT"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="PHW"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="2020-06-05"/>
         </air:SearchAirLeg>
         <air:AirSearchModifiers>
            <air:PreferredProviders>
               <com:Provider Code="1G"/>
            </air:PreferredProviders>
            <air:PermittedCarriers>
               <com:Carrier Code="SA"/>
            </air:PermittedCarriers>
         </air:AirSearchModifiers>
         <com:SearchPassenger Code="ADT"/>
         <com:SearchPassenger Code="CNN" Age="10"/>
      </air:LowFareSearchReq>
   </soap:Body>
</soap:Envelope>

===================================
<air:LowFareSearchRsp xmlns:air="http://www.travelport.com/schema/air_v42_0" TraceId="51678c74-b6dc-4b95-b0a6-da9169e40e2e" TransactionId="1856B9920A0D6A809BE55EEBB1BF9DB7" ResponseTime="2242" DistanceUnits="MI" CurrencyType="GBP">
  <air:FlightDetailsList>
    <air:FlightDetails Key="RUAYVoAqWDKApsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T21:00:00.000+05:30" ArrivalTime="2021-06-18T23:15:00.000+05:30" FlightTime="135" TravelTime="135" Equipment="320" />
    <air:FlightDetails Key="RUAYVoAqWDKArsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T06:55:00.000+05:30" ArrivalTime="2021-06-18T09:15:00.000+05:30" FlightTime="140" TravelTime="140" Equipment="321" OriginTerminal="2" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAtsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T20:30:00.000+05:30" ArrivalTime="2021-06-18T23:00:00.000+05:30" FlightTime="150" TravelTime="150" Equipment="788" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAvsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T10:15:00.000+05:30" ArrivalTime="2021-06-18T12:35:00.000+05:30" FlightTime="140" TravelTime="140" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAxsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T07:10:00.000+05:30" ArrivalTime="2021-06-18T09:35:00.000+05:30" FlightTime="145" TravelTime="145" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAzsPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T15:20:00.000+05:30" ArrivalTime="2021-06-18T17:45:00.000+05:30" FlightTime="145" TravelTime="145" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKA1sPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T20:20:00.000+05:30" ArrivalTime="2021-06-18T22:45:00.000+05:30" FlightTime="145" TravelTime="145" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKA3sPKAAAAAA==" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T10:25:00.000+05:30" ArrivalTime="2021-06-18T12:55:00.000+05:30" FlightTime="150" TravelTime="150" Equipment="767" />
    <air:FlightDetails Key="RUAYVoAqWDKA5sPKAAAAAA==" Origin="CCU" Destination="JRG" DepartureTime="2021-06-18T07:45:00.000+05:30" ArrivalTime="2021-06-18T09:05:00.000+05:30" FlightTime="80" TravelTime="960" Distance="286" Equipment="ATR" OnTimePerformance="-1" />
    <air:FlightDetails Key="RUAYVoAqWDKA6sPKAAAAAA==" Origin="JRG" Destination="BBI" DepartureTime="2021-06-18T09:25:00.000+05:30" ArrivalTime="2021-06-18T10:30:00.000+05:30" FlightTime="65" TravelTime="960" Distance="162" Equipment="ATR" OnTimePerformance="-1" DestinationTerminal="1" />
    <air:FlightDetails Key="RUAYVoAqWDKA8sPKAAAAAA==" Origin="BBI" Destination="DEL" DepartureTime="2021-06-18T21:35:00.000+05:30" ArrivalTime="2021-06-18T23:45:00.000+05:30" FlightTime="130" TravelTime="960" Equipment="321" OriginTerminal="1" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKA+sPKAAAAAA==" Origin="CCU" Destination="GAU" DepartureTime="2021-06-18T06:05:00.000+05:30" ArrivalTime="2021-06-18T07:35:00.000+05:30" FlightTime="90" TravelTime="755" Equipment="ATR" />
    <air:FlightDetails Key="RUAYVoAqWDKADtPKAAAAAA==" Origin="GAU" Destination="DEL" DepartureTime="2021-06-18T15:45:00.000+05:30" ArrivalTime="2021-06-18T18:40:00.000+05:30" FlightTime="175" TravelTime="755" Equipment="321" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAHtPKAAAAAA==" Origin="GAU" Destination="DEL" DepartureTime="2021-06-18T19:20:00.000+05:30" ArrivalTime="2021-06-18T22:05:00.000+05:30" FlightTime="165" TravelTime="960" Equipment="32B" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAJtPKAAAAAA==" Origin="CCU" Destination="IXB" DepartureTime="2021-06-18T13:40:00.000+05:30" ArrivalTime="2021-06-18T14:55:00.000+05:30" FlightTime="75" TravelTime="1595" Equipment="319" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKALtPKAAAAAA==" Origin="IXB" Destination="DEL" DepartureTime="2021-06-19T13:50:00.000+05:30" ArrivalTime="2021-06-19T16:15:00.000+05:30" FlightTime="145" TravelTime="1595" Equipment="321" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKANtPKAAAAAA==" Origin="CCU" Destination="PAT" DepartureTime="2021-06-18T19:40:00.000+05:30" ArrivalTime="2021-06-18T20:40:00.000+05:30" FlightTime="60" TravelTime="1135" Equipment="32B" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAPtPKAAAAAA==" Origin="PAT" Destination="DEL" DepartureTime="2021-06-19T12:40:00.000+05:30" ArrivalTime="2021-06-19T14:35:00.000+05:30" FlightTime="115" TravelTime="1135" Equipment="32A" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKARtPKAAAAAA==" Origin="PAT" Destination="DEL" DepartureTime="2021-06-19T16:00:00.000+05:30" ArrivalTime="2021-06-19T17:35:00.000+05:30" FlightTime="95" TravelTime="1315" Equipment="319" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKATtPKAAAAAA==" Origin="CCU" Destination="IXA" DepartureTime="2021-06-18T16:10:00.000+05:30" ArrivalTime="2021-06-18T17:10:00.000+05:30" FlightTime="60" TravelTime="1180" Equipment="319" />
    <air:FlightDetails Key="RUAYVoAqWDKAVtPKAAAAAA==" Origin="IXA" Destination="DEL" DepartureTime="2021-06-19T09:00:00.000+05:30" ArrivalTime="2021-06-19T11:50:00.000+05:30" FlightTime="170" TravelTime="1180" Equipment="32A" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAXtPKAAAAAA==" Origin="CCU" Destination="IXA" DepartureTime="2021-06-18T14:25:00.000+05:30" ArrivalTime="2021-06-18T15:25:00.000+05:30" FlightTime="60" TravelTime="1285" Equipment="319" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAZtPKAAAAAA==" Origin="CCU" Destination="HYD" DepartureTime="2021-06-18T19:00:00.000+05:30" ArrivalTime="2021-06-18T21:15:00.000+05:30" FlightTime="135" TravelTime="835" Equipment="319" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAbtPKAAAAAA==" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T06:40:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="135" TravelTime="835" Equipment="321" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAdtPKAAAAAA==" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T11:15:00.000+05:30" ArrivalTime="2021-06-19T13:50:00.000+05:30" FlightTime="155" TravelTime="1130" Equipment="32B" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAAtPKAAAAAA==" Origin="GAU" Destination="DMU" DepartureTime="2021-06-18T08:05:00.000+05:30" ArrivalTime="2021-06-18T08:50:00.000+05:30" FlightTime="45" TravelTime="755" Distance="137" Equipment="ATR" OnTimePerformance="-1" />
    <air:FlightDetails Key="RUAYVoAqWDKABtPKAAAAAA==" Origin="DMU" Destination="IMF" DepartureTime="2021-06-18T09:20:00.000+05:30" ArrivalTime="2021-06-18T10:00:00.000+05:30" FlightTime="40" TravelTime="755" Distance="78" Equipment="ATR" OnTimePerformance="-1" />
    <air:FlightDetails Key="RUAYVoAqWDKAFtPKAAAAAA==" Origin="IMF" Destination="GAU" DepartureTime="2021-06-18T14:20:00.000+05:30" ArrivalTime="2021-06-18T15:15:00.000+05:30" FlightTime="55" TravelTime="755" Distance="171" Equipment="321" OnTimePerformance="-1" />
    <air:FlightDetails Key="RUAYVoAqWDKAftPKAAAAAA==" Origin="CCU" Destination="BLR" DepartureTime="2021-06-18T14:10:00.000+05:30" ArrivalTime="2021-06-18T16:45:00.000+05:30" FlightTime="155" TravelTime="385" Equipment="319" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAhtPKAAAAAA==" Origin="BLR" Destination="DEL" DepartureTime="2021-06-18T17:45:00.000+05:30" ArrivalTime="2021-06-18T20:35:00.000+05:30" FlightTime="170" TravelTime="385" Equipment="788" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAjtPKAAAAAA==" Origin="BLR" Destination="DEL" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="165" TravelTime="1125" Equipment="32B" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAltPKAAAAAA==" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T09:40:00.000+05:30" ArrivalTime="2021-06-18T12:25:00.000+05:30" FlightTime="165" TravelTime="520" Equipment="32A" OriginTerminal="2" DestinationTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAntPKAAAAAA==" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T16:00:00.000+05:30" ArrivalTime="2021-06-18T18:20:00.000+05:30" FlightTime="140" TravelTime="520" Equipment="32B" OriginTerminal="2" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAptPKAAAAAA==" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T18:00:00.000+05:30" ArrivalTime="2021-06-18T20:30:00.000+05:30" FlightTime="150" TravelTime="665" Equipment="320" OriginTerminal="2" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKArtPKAAAAAA==" Origin="CCU" Destination="MAA" DepartureTime="2021-06-18T14:40:00.000+05:30" ArrivalTime="2021-06-18T17:05:00.000+05:30" FlightTime="145" TravelTime="1095" Equipment="321" OriginTerminal="2" DestinationTerminal="1" />
    <air:FlightDetails Key="RUAYVoAqWDKAttPKAAAAAA==" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="165" TravelTime="1095" Equipment="321" OriginTerminal="1" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAvtPKAAAAAA==" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T09:55:00.000+05:30" ArrivalTime="2021-06-19T13:00:00.000+05:30" FlightTime="185" TravelTime="1340" Equipment="32B" OriginTerminal="1" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAxtPKAAAAAA==" Origin="CCU" Destination="IMF" DepartureTime="2021-06-18T11:20:00.000+05:30" ArrivalTime="2021-06-18T12:40:00.000+05:30" FlightTime="80" TravelTime="440" Equipment="319" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAztPKAAAAAA==" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T16:55:00.000+05:30" ArrivalTime="2021-06-18T19:45:00.000+05:30" FlightTime="170" TravelTime="1320" Equipment="319" OriginTerminal="2" DestinationTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKA1tPKAAAAAA==" Origin="BOM" Destination="ATQ" DepartureTime="2021-06-19T07:15:00.000+05:30" ArrivalTime="2021-06-19T09:50:00.000+05:30" FlightTime="155" TravelTime="1320" Equipment="32B" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKA3tPKAAAAAA==" Origin="ATQ" Destination="DEL" DepartureTime="2021-06-19T13:40:00.000+05:30" ArrivalTime="2021-06-19T14:55:00.000+05:30" FlightTime="75" TravelTime="1320" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKA5tPKAAAAAA==" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T17:35:00.000+05:30" ArrivalTime="2021-06-18T20:20:00.000+05:30" FlightTime="165" TravelTime="1390" Equipment="320" DestinationTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKA7tPKAAAAAA==" Origin="BOM" Destination="UDR" DepartureTime="2021-06-19T12:15:00.000+05:30" ArrivalTime="2021-06-19T13:45:00.000+05:30" FlightTime="90" TravelTime="1390" Equipment="320" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKA9tPKAAAAAA==" Origin="UDR" Destination="DEL" DepartureTime="2021-06-19T15:20:00.000+05:30" ArrivalTime="2021-06-19T16:45:00.000+05:30" FlightTime="85" TravelTime="1390" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKA/tPKAAAAAA==" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T10:25:00.000+05:30" ArrivalTime="2021-06-18T13:00:00.000+05:30" FlightTime="155" TravelTime="1820" Equipment="320" DestinationTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKABuPKAAAAAA==" Origin="BLR" Destination="MAA" DepartureTime="2021-06-19T11:50:00.000+05:30" ArrivalTime="2021-06-19T12:50:00.000+05:30" FlightTime="60" TravelTime="1780" Equipment="32B" DestinationTerminal="1" />
    <air:FlightDetails Key="RUAYVoAqWDKADuPKAAAAAA==" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T17:00:00.000+05:30" ArrivalTime="2021-06-19T19:50:00.000+05:30" FlightTime="170" TravelTime="1780" Equipment="321" OriginTerminal="1" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAFuPKAAAAAA==" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T14:40:00.000+05:30" ArrivalTime="2021-06-18T16:55:00.000+05:30" FlightTime="135" TravelTime="390" Equipment="320" OriginTerminal="2" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAHuPKAAAAAA==" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T17:30:00.000+05:30" ArrivalTime="2021-06-18T19:40:00.000+05:30" FlightTime="130" TravelTime="555" Equipment="320" OriginTerminal="2" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAJuPKAAAAAA==" Origin="BOM" Destination="IXC" DepartureTime="2021-06-19T09:55:00.000+05:30" ArrivalTime="2021-06-19T12:20:00.000+05:30" FlightTime="145" TravelTime="1375" Equipment="320" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKALuPKAAAAAA==" Origin="IXC" Destination="DEL" DepartureTime="2021-06-19T15:25:00.000+05:30" ArrivalTime="2021-06-19T16:30:00.000+05:30" FlightTime="65" TravelTime="1375" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKANuPKAAAAAA==" Origin="IXC" Destination="DEL" DepartureTime="2021-06-19T18:50:00.000+05:30" ArrivalTime="2021-06-19T19:55:00.000+05:30" FlightTime="65" TravelTime="1580" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKAPuPKAAAAAA==" Origin="BOM" Destination="HYD" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T07:40:00.000+05:30" FlightTime="90" TravelTime="1135" Equipment="320" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKARuPKAAAAAA==" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T10:05:00.000+05:30" ArrivalTime="2021-06-19T12:30:00.000+05:30" FlightTime="145" TravelTime="1135" Equipment="320" DestinationTerminal="3" />
    <air:FlightDetails Key="RUAYVoAqWDKATuPKAAAAAA==" Origin="BOM" Destination="HYD" DepartureTime="2021-06-18T19:20:00.000+05:30" ArrivalTime="2021-06-18T20:55:00.000+05:30" FlightTime="95" TravelTime="1355" Equipment="320" OriginTerminal="2" />
    <air:FlightDetails Key="RUAYVoAqWDKAVuPKAAAAAA==" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T07:00:00.000+05:30" ArrivalTime="2021-06-19T09:00:00.000+05:30" FlightTime="120" TravelTime="1355" Equipment="320" DestinationTerminal="3" />
  </air:FlightDetailsList>
  <air:AirSegmentList>
    <air:AirSegment Key="RUAYVoAqWDKAosPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="415" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T21:00:00.000+05:30" ArrivalTime="2021-06-18T23:15:00.000+05:30" FlightTime="135" Distance="816" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKApsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAqsPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="763" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T06:55:00.000+05:30" ArrivalTime="2021-06-18T09:15:00.000+05:30" FlightTime="140" Distance="816" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKArsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAssPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="770" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T20:30:00.000+05:30" ArrivalTime="2021-06-18T23:00:00.000+05:30" FlightTime="150" Distance="816" ETicketability="Yes" Equipment="788" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAtsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAusPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="706" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T10:15:00.000+05:30" ArrivalTime="2021-06-18T12:35:00.000+05:30" FlightTime="140" Distance="816" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAvsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAwsPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="720" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T07:10:00.000+05:30" ArrivalTime="2021-06-18T09:35:00.000+05:30" FlightTime="145" Distance="816" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAxsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAysPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="778" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T15:20:00.000+05:30" ArrivalTime="2021-06-18T17:45:00.000+05:30" FlightTime="145" Distance="816" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAzsPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA0sPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="708" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T20:20:00.000+05:30" ArrivalTime="2021-06-18T22:45:00.000+05:30" FlightTime="145" Distance="816" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA1sPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA2sPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="402" Origin="CCU" Destination="DEL" DepartureTime="2021-06-18T10:25:00.000+05:30" ArrivalTime="2021-06-18T12:55:00.000+05:30" FlightTime="150" Distance="816" ETicketability="Yes" Equipment="767" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA3sPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA4sPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="9745" Origin="CCU" Destination="BBI" DepartureTime="2021-06-18T07:45:00.000+05:30" ArrivalTime="2021-06-18T10:30:00.000+05:30" FlightTime="165" Distance="237" ETicketability="Yes" Equipment="ATR" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" NumberOfStops="1" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:CodeshareInfo OperatingCarrier="9I" OperatingFlightNumber="745">ALLIANCE AIR</air:CodeshareInfo>
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA5sPKAAAAAA==" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA6sPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA7sPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="474" Origin="BBI" Destination="DEL" DepartureTime="2021-06-18T21:35:00.000+05:30" ArrivalTime="2021-06-18T23:45:00.000+05:30" FlightTime="130" Distance="794" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA8sPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA9sPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="9741" Origin="CCU" Destination="GAU" DepartureTime="2021-06-18T06:05:00.000+05:30" ArrivalTime="2021-06-18T07:35:00.000+05:30" FlightTime="90" Distance="311" ETicketability="Yes" Equipment="ATR" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:CodeshareInfo OperatingCarrier="9I" OperatingFlightNumber="741">ALLIANCE AIR</air:CodeshareInfo>
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA+sPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKACtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="890" Origin="GAU" Destination="DEL" DepartureTime="2021-06-18T15:45:00.000+05:30" ArrivalTime="2021-06-18T18:40:00.000+05:30" FlightTime="175" Distance="904" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKADtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAGtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="892" Origin="GAU" Destination="DEL" DepartureTime="2021-06-18T19:20:00.000+05:30" ArrivalTime="2021-06-18T22:05:00.000+05:30" FlightTime="165" Distance="904" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAHtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAItPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="721" Origin="CCU" Destination="IXB" DepartureTime="2021-06-18T13:40:00.000+05:30" ArrivalTime="2021-06-18T14:55:00.000+05:30" FlightTime="75" Distance="282" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAJtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAKtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="880" Origin="IXB" Destination="DEL" DepartureTime="2021-06-19T13:50:00.000+05:30" ArrivalTime="2021-06-19T16:15:00.000+05:30" FlightTime="145" Distance="699" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKALtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAMtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="732" Origin="CCU" Destination="PAT" DepartureTime="2021-06-18T19:40:00.000+05:30" ArrivalTime="2021-06-18T20:40:00.000+05:30" FlightTime="60" Distance="294" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKANtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAOtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="410" Origin="PAT" Destination="DEL" DepartureTime="2021-06-19T12:40:00.000+05:30" ArrivalTime="2021-06-19T14:35:00.000+05:30" FlightTime="115" Distance="532" ETicketability="Yes" Equipment="32A" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAPtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAQtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="408" Origin="PAT" Destination="DEL" DepartureTime="2021-06-19T16:00:00.000+05:30" ArrivalTime="2021-06-19T17:35:00.000+05:30" FlightTime="95" Distance="532" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKARtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAStPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="3743" Origin="CCU" Destination="IXA" DepartureTime="2021-06-18T16:10:00.000+05:30" ArrivalTime="2021-06-18T17:10:00.000+05:30" FlightTime="60" Distance="199" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKATtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAUtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="896" Origin="IXA" Destination="DEL" DepartureTime="2021-06-19T09:00:00.000+05:30" ArrivalTime="2021-06-19T11:50:00.000+05:30" FlightTime="170" Distance="933" ETicketability="Yes" Equipment="32A" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAVtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAWtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="745" Origin="CCU" Destination="IXA" DepartureTime="2021-06-18T14:25:00.000+05:30" ArrivalTime="2021-06-18T15:25:00.000+05:30" FlightTime="60" Distance="199" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAXtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAYtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="526" Origin="CCU" Destination="HYD" DepartureTime="2021-06-18T19:00:00.000+05:30" ArrivalTime="2021-06-18T21:15:00.000+05:30" FlightTime="135" Distance="745" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAZtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAatPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="559" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T06:40:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="135" Distance="781" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAbtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKActPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="543" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T11:15:00.000+05:30" ArrivalTime="2021-06-19T13:50:00.000+05:30" FlightTime="155" Distance="781" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAdtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA/sPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="9741" Origin="CCU" Destination="IMF" DepartureTime="2021-06-18T06:05:00.000+05:30" ArrivalTime="2021-06-18T10:00:00.000+05:30" FlightTime="235" Distance="376" ETicketability="Yes" Equipment="ATR" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" NumberOfStops="2" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:CodeshareInfo OperatingCarrier="9I" OperatingFlightNumber="741">ALLIANCE AIR</air:CodeshareInfo>
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA+sPKAAAAAA==" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAAtPKAAAAAA==" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKABtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAEtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="890" Origin="IMF" Destination="DEL" DepartureTime="2021-06-18T14:20:00.000+05:30" ArrivalTime="2021-06-18T18:40:00.000+05:30" FlightTime="260" Distance="1069" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" NumberOfStops="1" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAFtPKAAAAAA==" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKADtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAetPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="771" Origin="CCU" Destination="BLR" DepartureTime="2021-06-18T14:10:00.000+05:30" ArrivalTime="2021-06-18T16:45:00.000+05:30" FlightTime="155" Distance="961" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAftPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAgtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="503" Origin="BLR" Destination="DEL" DepartureTime="2021-06-18T17:45:00.000+05:30" ArrivalTime="2021-06-18T20:35:00.000+05:30" FlightTime="170" Distance="1063" ETicketability="Yes" Equipment="788" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAhtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAitPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="804" Origin="BLR" Destination="DEL" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="165" Distance="1063" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAjtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAktPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="676" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T09:40:00.000+05:30" ArrivalTime="2021-06-18T12:25:00.000+05:30" FlightTime="165" Distance="1035" ETicketability="Yes" Equipment="32A" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAltPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAmtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="687" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T16:00:00.000+05:30" ArrivalTime="2021-06-18T18:20:00.000+05:30" FlightTime="140" Distance="708" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAntPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAotPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="660" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T18:00:00.000+05:30" ArrivalTime="2021-06-18T20:30:00.000+05:30" FlightTime="150" Distance="708" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAptPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAqtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="765" Origin="CCU" Destination="MAA" DepartureTime="2021-06-18T14:40:00.000+05:30" ArrivalTime="2021-06-18T17:05:00.000+05:30" FlightTime="145" Distance="860" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKArtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAstPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="440" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T08:55:00.000+05:30" FlightTime="165" Distance="1095" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAttPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAutPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="430" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T09:55:00.000+05:30" ArrivalTime="2021-06-19T13:00:00.000+05:30" FlightTime="185" Distance="1095" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAvtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAwtPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="715" Origin="CCU" Destination="IMF" DepartureTime="2021-06-18T11:20:00.000+05:30" ArrivalTime="2021-06-18T12:40:00.000+05:30" FlightTime="80" Distance="376" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAxtPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAytPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="773" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T16:55:00.000+05:30" ArrivalTime="2021-06-18T19:45:00.000+05:30" FlightTime="170" Distance="1035" ETicketability="Yes" Equipment="319" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAztPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA0tPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="649" Origin="BOM" Destination="ATQ" DepartureTime="2021-06-19T07:15:00.000+05:30" ArrivalTime="2021-06-19T09:50:00.000+05:30" FlightTime="155" Distance="881" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA1tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA2tPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="454" Origin="ATQ" Destination="DEL" DepartureTime="2021-06-19T13:40:00.000+05:30" ArrivalTime="2021-06-19T14:55:00.000+05:30" FlightTime="75" Distance="258" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA3tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA4tPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="776" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T17:35:00.000+05:30" ArrivalTime="2021-06-18T20:20:00.000+05:30" FlightTime="165" Distance="1035" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA5tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA6tPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="613" Origin="BOM" Destination="UDR" DepartureTime="2021-06-19T12:15:00.000+05:30" ArrivalTime="2021-06-19T13:45:00.000+05:30" FlightTime="90" Distance="388" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA7tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA8tPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="628" Origin="UDR" Destination="DEL" DepartureTime="2021-06-19T15:20:00.000+05:30" ArrivalTime="2021-06-19T16:45:00.000+05:30" FlightTime="85" Distance="338" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA9tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKA+tPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="772" Origin="CCU" Destination="BOM" DepartureTime="2021-06-18T10:25:00.000+05:30" ArrivalTime="2021-06-18T13:00:00.000+05:30" FlightTime="155" Distance="1035" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKA/tPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAAuPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="564" Origin="BLR" Destination="MAA" DepartureTime="2021-06-19T11:50:00.000+05:30" ArrivalTime="2021-06-19T12:50:00.000+05:30" FlightTime="60" Distance="168" ETicketability="Yes" Equipment="32B" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKABuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKACuPKAAAAAA==" Group="0" Carrier="AI" FlightNumber="539" Origin="MAA" Destination="DEL" DepartureTime="2021-06-19T17:00:00.000+05:30" ArrivalTime="2021-06-19T19:50:00.000+05:30" FlightTime="170" Distance="1095" ETicketability="Yes" Equipment="321" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKADuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAEuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="944" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T14:40:00.000+05:30" ArrivalTime="2021-06-18T16:55:00.000+05:30" FlightTime="135" Distance="708" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAFuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAGuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="910" Origin="BOM" Destination="DEL" DepartureTime="2021-06-18T17:30:00.000+05:30" ArrivalTime="2021-06-18T19:40:00.000+05:30" FlightTime="130" Distance="708" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAHuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAIuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="653" Origin="BOM" Destination="IXC" DepartureTime="2021-06-19T09:55:00.000+05:30" ArrivalTime="2021-06-19T12:20:00.000+05:30" FlightTime="145" Distance="837" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAJuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAKuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="707" Origin="IXC" Destination="DEL" DepartureTime="2021-06-19T15:25:00.000+05:30" ArrivalTime="2021-06-19T16:30:00.000+05:30" FlightTime="65" Distance="145" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKALuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAMuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="638" Origin="IXC" Destination="DEL" DepartureTime="2021-06-19T18:50:00.000+05:30" ArrivalTime="2021-06-19T19:55:00.000+05:30" FlightTime="65" Distance="145" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKANuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAOuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="873" Origin="BOM" Destination="HYD" DepartureTime="2021-06-19T06:10:00.000+05:30" ArrivalTime="2021-06-19T07:40:00.000+05:30" FlightTime="90" Distance="386" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAPuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAQuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="830" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T10:05:00.000+05:30" ArrivalTime="2021-06-19T12:30:00.000+05:30" FlightTime="145" Distance="781" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKARuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKASuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="875" Origin="BOM" Destination="HYD" DepartureTime="2021-06-18T19:20:00.000+05:30" ArrivalTime="2021-06-18T20:55:00.000+05:30" FlightTime="95" Distance="386" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKATuPKAAAAAA==" />
    </air:AirSegment>
    <air:AirSegment Key="RUAYVoAqWDKAUuPKAAAAAA==" Group="0" Carrier="UK" FlightNumber="860" Origin="HYD" Destination="DEL" DepartureTime="2021-06-19T07:00:00.000+05:30" ArrivalTime="2021-06-19T09:00:00.000+05:30" FlightTime="120" Distance="781" ETicketability="Yes" Equipment="320" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail exists" OptionalServicesIndicator="false" AvailabilitySource="A" AvailabilityDisplayType="Fare Shop/Optimal Shop">
      <air:AirAvailInfo ProviderCode="1G" />
      <air:FlightDetailsRef Key="RUAYVoAqWDKAVuPKAAAAAA==" />
    </air:AirSegment>
  </air:AirSegmentList>
  <air:FareInfoList>
    <air:FareInfo Key="RUAYVoAqWDKAWuPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAjuPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAWuPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwyAM+5jKd4fRFW4goBrahKa1O/Sy//+MhbaTFimxE+cVQjA0wqtM4d8GfIZYUdsLaKB6Lg/Y8UKIJhsopmCpT5zjTqttVw6U3sMkyStg5mwPqRu2Pab0Vo3W6VJFQT+KTnUCP1JuSlvMa6y0pPPeO7mfIifol1++Vipr</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAB3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKA6yPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAkuPKAAAAAA==" FareBasis="U0RPRPV" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP54.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareTicketDesignator Value="PV" />
      <air:FareSurcharge Key="RUAYVoAqWDKAyuPKAAAAAA==" Type="Other" Amount="INR507" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAkuPKAAAAAA==" ProviderCode="1G">gws-eJxNjsEKwyAQRD8mzH1W2JreDGpoaJEgNZBL//8zuiYpdMGdGd6uGkJwdMKb+PBfAz5De2IpFSignZRfUHpCLOyguIzGutZ1w3XFaKQc9FTpc4z3pCaYdeaJemE/eozNGFW97yroD6Nb28DP5IfZMqX3UtTyKNam7YL0sJ9+Aa4JK+A=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAD3PKAAAAAA==" BrandID="803573" UpSellBrandID="803572">
        <air:UpsellBrand FareBasis="U0RPRPS" FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAzuPKAAAAAA==" FareBasis="LIP" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP58.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKA7uPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAzuPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5yxJrmltAkLK2GM7dDL/v8zprQdzGBLtvxKKTk642g+/duAzzBV1PYEGihf8oqrvxCmZAPNZaz1gXM8qNp25UDrPSwsToDiih1SN2x7nOe3NI7UUqGhH0WnmsCP5Jtom5YXnQ4xxBiD3U+RHvryC7XDKjU=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAF3PKAAAAAA==" BrandID="361788" UpSellBrandID="361793">
        <air:UpsellBrand FareBasis="MIP" FareInfoRef="RUAYVoAqWDKAUzPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA8uPKAAAAAA==" FareBasis="EIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="BBI" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP20.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA8uPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkOwjAMfEw193EkaHzLQhC+RKgqh174/zNwApWwZM/Y4y2lFBiEV1nTvy14L9lgfQM66F6KIfBCiCcHKKGh2VNHdS6IXu9T+6KMLlap6oC7Ok5pGI4Za325xrnWUTDOYlCfwEnaw2nPtz2bGhlVNUr5iVzhf34AFCIq6g==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAH3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP9I" FareInfoRef="RUAYVoAqWDKAczPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKACvPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="BBI" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKADvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKACvPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku9N10N5aoGjRpmraduGy//+MpcAkIiV24rxSSo5O2MuQztbh22WF1hdQQfO5POCvF8JZsoLiCt76xDEerFo3ZUdpPZxkigZYuPhdaoZ1i+OoptEHW2ooaEfRqE3gT8rNaM3zJys9GWKMQe6HyAH25Q+7Aype</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAJ3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAizPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAHvPKAAAAAA==" FareBasis="EIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="GAU" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP19.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAHvPKAAAAAA==" ProviderCode="1G">gws-eJxNTkEOwzAIe0zlu8mhDbekWbZxiaapPfSy/z9jJGulIYENRoaUUmAQzrKk/5jwmbLB2htooOcj7wgkId4coISKai81nAbR521oP5S+xSJFHXBXxyH1wDFqKbtrHLaegn4WnfoAF6lPpy3ftmxqZFTVKOspcoH/+QUZqCrw</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAL3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP9I" FareInfoRef="RUAYVoAqWDKAmzPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKANvPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="GAU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP61.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAOvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKANvPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5yVNrkltOkWNsLY49DL/v8zprQdzGBLtmTsGKOjMw42xv/o8OlSQakPoILKOd8wkIRTs4LmMp7ljmPda1o3ZUdrHk42BQEWLv0utcC61XN6S+NwkkFoaEfRqAb4kXwRrWl+pcKe9CEEb9dD5Ah9+QW6fCpi</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAN3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAszPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAVvPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IXB" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP33.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAhvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAVvPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkKwzAMfEyY+8g2jX2z6yRUFEzpAs2l/39G5SSFCqQZabTlnB2d8CRj/rcBn6EotN2BBprr+wwvnhBLVlDcjIfecIxHq7ZN2VF6D6vUZICFS9ilbli3WOvLNPpgSw0F/Sg6tQn8yHwx2sr0LMpAxpRSlOshcoR9+QXCnCpv</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAP3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAzzPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAbvPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="IXB" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAcvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAdvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAbvPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJd6cU1txatk5UmyoEHNiF//8M0m1IRErsxHnFGB2d8CJ9/LcOny4VlPoAKmg+5gX+fCKcJSsoLuNZ7jjG1ap1U3aU1sNBBjXAxMnvUjOsWyzvq2n0wZYaCtpRNGoT+JF8M1rT+EqFngyqGmQ+RPawL7/BvSp1</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAR3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKA5zPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAivPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="PAT" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP40.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAxvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAivPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5yWNbklZC0Lg1C27tDL/v8zpvQBM9iSLb9ijI7OeLMx/luHb5cKSn0BFZQvaUXve8KUbKC5Ce+y4Bz3qtZdOdBaD7PlIMDMeTikZtj2mPNHGgfTUqGhHUWjmsBFpodoTfc1FQ6kDyF4e54iR+jLH8deKnY=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAT3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKA9zPKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAovPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="PAT" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP40.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKApvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAqvPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAovPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku1Oq0dxaQdEqUIU2Llz2/5+xFJi0SImdOK8Yo6MTPmSI/9bh06WCUl9ABc2nvKIPPeEsOUBxGe+y4R5Xq9ZTuVBaD0cZ1QAzZ39JzXCccUu7afRiSw0F7SgatQn8SH4arWnaU6Eng6oGWW6RA+zLL8GmKnI=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAV3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAD0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAyvPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IXA" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP27.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKABwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAyvPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu2y6NrklZC01hTD2gPWy//+MOW0HM9iSLRk7paRU4SBj+o8Ony4brN6BCnraO0MvJMSbDRSd8LAbzvXg07orB0rzsEiJDpg594fUAtteS3m5Rg1ucBS0o2jUB/iRaXFa8/WZjT0ZYoxB1lPkCP/yC8IHKm4=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAX3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAK0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA4vPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="IXA" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP60.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKA5vPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKA6vPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA4vPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgkAM/Bgy9+mKQG+7gSU0mo1RD3Lx/z/DLmBCk3amnb5ijIFB2Ekfz9bg2ySDlSdQQPcp33HVCxE8WUEJGS974BhXr5ZN2VFqD0cZ1QEz53aXqmHdon2Sa+yCL3UU1KOo1CfwJ3lxWtL0TsaWHFR1kNshsod/+QPDYyp1</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAZ3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAQ0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKACwPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="HYD" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKARwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKACwPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkKwzAMfEyY+8hxGvtm4yTEFExpm4Mv/f8zKmeBCKQZabSFEAyN8CFjuFuHXxczcnkDBVRf6wQ79IRoUkExMz75hXPcabXsyoHSepgkeQUsXOwhNUPdY0qbarROlyoK2lE0qhO4yLwqLXH6xkxLOu+9k+cpcoR++QfIAip7</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAb3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAX0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAIwPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="HYD" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAJwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAKwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAIwPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwyAM+5jKd4fRFm6gQlXUCU3bLlz2/5+x0HbSIiV24rxCCIZGOMkc/m3AZ4gFpT6BCqqnfIcdb4TRpIFiMl7lgWvca7UeyonSe7jI4hWwcrWn1A3tiFtLqtE6Xaoo6EfRqU7gR/KmtMb0joWWdN57J/slcoZ++QXCSip3</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAd3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAd0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKASwPKAAAAAA==" FareBasis="EIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="IMF" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP23.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKASwPKAAAAAA==" ProviderCode="1G">gws-eJxNTkEOwjAMe8zku1Mh1txaSidyoJomOOzC/59B2g2JSImdOHKSUgoMwqvM6T8mfKZssLYBDfS054JwISHe7KCEimqrGk6D6PM2tAOlb7FIUQcs6jikHthHLeXtGoeto6CfRac+wI/Uh9OW769samRU1Si3U+QM//MLHIEq9w==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAf3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP9I" FareInfoRef="RUAYVoAqWDKAk0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAYwPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="IMF" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP73.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAjwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAYwPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJd6dstL212loRARUCLrvw/59Bug2JSImdOK+UkqMTnsWnfxvwGbJC2xNooPlSbvDuRDhLVlBcwUsfOMaDVdum7Ci9h7PM0QCVddylbli3qPdqGv1kSw0F/Sg6tQn8SLkYbXl5Z+VIhhhjkOsh0sO+/AK/Sypt</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAh3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAq0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAnwPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="BLR" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKA2wPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAnwPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJd2cU1t5ayiYqUIUGHHbh/z8DdxsSkRI7cV4xxp698WRD/LcOny4VlDoDFZSf7zPc8UCYkgW0fsSzPLCPe1XrqmxorYfZchBg4uQ2qRmWNeb8lkbntVRoaEfRqCbwI+NVtKbLKxU60ocQvN12kQP05RfE7Cp2</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAj3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAu0PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAtwPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="BLR" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP60.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAuwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAvwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAtwPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku5MxaG/toIhqqJrYLlz2/5+xFJhEpMROnFcIQanCTvpwtQbfJmbksgIFNB/Tgru/EWrJBoomvPML57izatmVA6X2cJDBG2Di1B5SNWx7fCyraezUlhoK6lFUahP4kzQbLXH8xMyWdN57J89TZA/78gfCPypy</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAl3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKA00PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA3wPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="BOM" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP60.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAGxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA3wPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkOgzAMfAya+zilEN+SpiCiqmnV5cCF/z+jDlAJS/aMPd5CCI5O2EkfjtZgaWJGLi+ggOaXxx1nPRFiyQyKG/DOT+zj3qplVTaU2sMkSQ0wcmw3qRrmNab0NY2ds6WGgnoUldoE/mSYjJZ4/cTMlvSq6uW2i+xhX/4AxaoqdQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAn3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKA70PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA9wPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="BOM" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKA+wPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKA/wPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA9wPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJd6cU1t5atk5UQEDAZRf+/zNIR5GIlNiJ80opOTrhQcb0bwPeQ66o+gAUNJ/LBX6/I5wlKyiu4Fnv6OPBqropX5TWw0mmaICFi9+kVc16PN6uptEHW2ooaEfRqE3gR8rJqOb5lSs9GWKMQc5d5Aj78gPDbip6</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAp3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAB1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAHxPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="MAA" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP47.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAWxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAHxPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJd6cU1t5alU1UiArxOOzC/38G7jYkIiV24rxSSo7OeLIx/duAz5AransADZTfcoY/HghTsoDmJjzrHft4ULWtyobWe1isRAFmzn6TumFZYylvafRBS4WGfhSdagI/Ml1EWz6/cqUnQ4wx2HUXOUJffgG6zipl</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAr3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAI1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKANxPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="MAA" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP60.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAOxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAPxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKANxPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgkAM/Bgy92lFoLfdwBI26saoFy7+/2fYBUxo0s6001cIQanCTvpwtgbfJmbk8gIK6D6lO652IdSTFRRNeOcnjnHzatmUHaX2cJTRHDBzbnepGtYtPmJ0jZ36UkdBPYpKfQJ/khanJU6fmNmSg5kNcjtE9vAvf74PKmI=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAt3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAO1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAewPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IMF" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP34.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareSurcharge Key="RUAYVoAqWDKAfwPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAewPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku1PYaG+tChXRtGra48Bl//8ZS4FJRErsxI6SGKOjE15ljOfo8O2SQusTqKCl3gt6R0KsWUFxM176wLHubVo3ZUdpHmbJwQCFZdilFli3mvPHNPYXMxgK2lE0agP8ybwYrWl6J+VA+hCCl9shcoR9+QO8uipk</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAv3PKAAAAAA==" BrandID="361790" UpSellBrandID="361788">
        <air:UpsellBrand FareBasis="UIP" FareInfoRef="RUAYVoAqWDKAV1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAXxPKAAAAAA==" FareBasis="UEPP" PassengerTypeCode="ADT" Origin="CCU" Destination="ATQ" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP78.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAnxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAoxPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAXxPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku5M9yrEVawWXik1w4LL//4y5wCQiJXbivGKMTjc+LcSrdfh2acJUP0AF5Wl5I9x5gynZQPOMNc8zzvle5bpLB1prYmFxAYoXHlIzbHschlUae2qr0NCuolFN4E/yKFrTa6H73u0P8/EUGaA3f/hSKn0=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAx3PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAdxPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="ATQ" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP33.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAexPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAdxPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkOgzAMfAya+ziJCr4lgqBGoKgLFy79/zPqAJVqyZ6xx1uM0dEJb9LHf+vw6VJBqS+gguZTXuHFE86SHRSX8S4PXONq1XooJ0rr4SijGmDmHE6pGfYjpu1pGn2wpYaCdhSN2gR+JN+N1jRtqTCQg6oOslwie9iXX75JKm4=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAz3PKAAAAAA==" BrandID="361790" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKApxPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="CCU" Destination="UDR" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP83.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKA5xPKAAAAAA==" Type="Other" Amount="INR1113" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKApxPKAAAAAA==" ProviderCode="1G">gws-eJxNUNFuwyAM/Jjo3s+EBXhL1DRaldSb2pKJl/3/Z8yEVJoRxvjs88E4jo5OOEgY/1uH+/UTxdYm36+lPCdsX7rdoBCYSwMZnAfiTx9qgmK1u2hey3NHvVg9dJpfe5/E5ZVCWhMpKQXxbnCUAWxEjaaC6PKKmz4OTtt5fiB4iUapRso+8T0Gp/JoeT3Q5utw8upnZwcWLtKgaiiqRXG55DotfvRyTsVvhxpaB96B/QCOJzT10aT66X6CDDClf2nGRto=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA13PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAvxPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="UDR" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP39.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKAwxPKAAAAAA==" Type="Other" Amount="INR528" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAvxPKAAAAAA==" ProviderCode="1G">gws-eJxNT0GOgzAMfEw197EJhNyoBFURyLtqF6pc+v9n1CFUWkd2Eo81Mx6GQanCTuLwPy5A9rPKb37O0x3rj60zDAovqSOjBqB/NbE0KD67i21Lfu4oH5+HXce/vUmi20IhAz3alKIE7ZTSgZWo0jgouGwLZnscnJ7jtKJplS5rTsom8SuD03byvh1orUWcnMKofuHGm1SoBLJZNmzjo6gFhv5Uxdv3LfYIfB++NI4Vqvvek/OJMcKNfgAGG0Wh</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA33PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKAl1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA6xPKAAAAAA==" FareBasis="UEPP" PassengerTypeCode="ADT" Origin="CCU" Destination="MAA" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP63.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAGyPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:FareSurcharge Key="RUAYVoAqWDKAHyPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA6xPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku5tB6bEVawWHVWgaBy77/8+Yy0NapMROnFeM0WiO3o3x3zp8u7RgqW+ggvJXShiCf8Ap2UFnGVteV1zzQeV6SCe61sTCYgIUKzylZtiPOE2bNPpeW4UO7Soa1QRukmfRmp4fmikPtKG3+RI5Qm/+APFhKnk=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA53PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAAyPKAAAAAA==" FareBasis="SIP" PassengerTypeCode="ADT" Origin="MAA" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP60.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareSurcharge Key="RUAYVoAqWDKAByPKAAAAAA==" Type="Other" Amount="INR300" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAAyPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJdyeMbbm12jpRARUCLrvw/59BuhWJSImdOK8QglKFg4zh3zp8upiRyxMooPuSbjjbiVBPNlA04ZUfaOPm1bIrB0rt4SyzOWDl2u/SVtxavMfoGgf1pY6CehSV+gR+JF2clri8Y2ZPTmY2ybWJHOFffgHBtipt</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA73PKAAAAAA==" BrandID="361790" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAIyPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="CCU" Destination="BOM" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP71.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKAXyPKAAAAAA==" Type="Other" Amount="INR956" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAIyPKAAAAAA==" ProviderCode="1G">gws-eJxNT0EOwjAMewzy3Wmndr0NGIhpIyBgQ73w/2eQrkMiVdI2jmyn6zpHJwwSu//YAdnOJPf8HE4XTDedBigEVlIgo2uA9u1jaVBsdhGdx/xcUD42D933r8UncfNIIRtatClFaVxwlABWokpjoGA3jxj0sXJaHm5XBB9plGqk9Ik/GWy2W+vritZaxMlT0zu7cOZZKlQCWTUrjse5qEXvwqaKj+1b7BH4PWxprCtU960lhw1jhBn9Agt9RaI=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA93PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKAu1PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAOyPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="BOM" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKAPyPKAAAAAA==" Type="Other" Amount="INR956" />
      <air:FareSurcharge Key="RUAYVoAqWDKAQyPKAAAAAA==" Type="Other" Amount="INR746" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAOyPKAAAAAA==" ProviderCode="1G">gws-eJxNT8uOgzAM/Jhq7mPzCLnRCqpFsO6qLVS59P8/ow6h0jqKnXismXHf90oVthL6/3ECkp9F/tJjGn+w3GyZYFB4ii0ZtAa6VxVyg+Kzm9g6p8eG/PF52Hl4blUUXWcKWdGjizFIra1SWrAQFRoHBad1xmT3ndPvMC6oY6DLmpOyivzK4LDded92tOQsTo71oF5w5VUKlAPJLBkut9+s1gRpDlW8fd9sj8D34UtjX6G479Sb04ExwI1+AAocRaI=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA/3PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKA01PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAYyPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="CCU" Destination="IXC" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP95.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKAoyPKAAAAAA==" Type="Other" Amount="INR1276" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAYyPKAAAAAA==" ProviderCode="1G">gws-eJxNUEGOgzAMfAya+zhQktxAtGgR1Fu1hTaX/v8Z6xAqraM4jsceT9J1naMTtuK7/1bhevlBsrXI7TmmR4/lV5cJCoG52JLeNUB41T4nKFa7ia5zemzIF6uH9ufnVkdx60whrYmUGL00rnWUFixEhSaDqNYZk953TtvTe0A48WSUaqSsI79jcCgPltcdLT4PJy/N2dmBkaMUKBuSalIMw5qnRR/kmIpPhRxaB76B/QD2JxT1waQ2/fUA6WFK/wBmT0bZ</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAB4PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAeyPKAAAAAA==" FareBasis="U0RPRPV" PassengerTypeCode="ADT" Origin="IXC" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP31.00" NegotiatedFare="false" TourCode="UKPOSUK" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareTicketDesignator Value="PV" />
      <air:FareSurcharge Key="RUAYVoAqWDKAfyPKAAAAAA==" Type="Other" Amount="INR292" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAeyPKAAAAAA==" ProviderCode="1G">gws-eJxNjtEKgzAMRT9G7nuS0bm+VWxlZSNImTJf9v+fsUQdLNDcezlJ25SSkDBduU//1eHTLQ9UbYCC7OTyhEQhiIUNxFKwUJvbvOK8IhrRnR7KPkdjzMEEU5joQF7Y9l7fozG6CIsrwx+GW9vAz5S7WR3yq2qwfGNrw3pC6mE//QKuVSvc</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAD4PKAAAAAA==" BrandID="803573" UpSellBrandID="803572">
        <air:UpsellBrand FareBasis="U0RPRPS" FareInfoRef="RUAYVoAqWDKAB2PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKApyPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="CCU" Destination="HYD" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP83.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKA5yPKAAAAAA==" Type="Other" Amount="INR1113" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKApyPKAAAAAA==" ProviderCode="1G">gws-eJxNUEGOwyAMfEw09zGhAW6JmkatkrqrbZMVl/3/M2pCKtUIYzz2eKDve0cn7CT039bgfrki21rk5zXl54DlocsNCoG51JHBeSD+taEkKFa7ia5zfm4oF6uHDuNra5O4daaQ1kRKSkG86xylAytRpSkgmnXGTX93TtvXPCJ4iUapRso28TMGh/Joed3R6stw8uJHZwcmTlKhYsiqWXE+r2VaPLVyTMV/gxJaBz6B/QD2J1T10aT64X6ADDClb2YTRtQ=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAF4PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAvyPKAAAAAA==" FareBasis="V1NUKYS" PassengerTypeCode="ADT" Origin="HYD" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP55.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YS" />
      <air:FareSurcharge Key="RUAYVoAqWDKAwyPKAAAAAA==" Type="Other" Amount="INR746" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAvyPKAAAAAA==" ProviderCode="1G">gws-eJxNT9EOgjAM/Bhz79cxN/eGCRgIpBoVzF78/8+wY5DYpd3Wa+6ubds6OmGQ2P7HCch2Znnk19gPmO86j1A4WEmBjM4Dl08TS4Nis6voMuXXivKxeei1e69NErdMFNLTIqQUxbvgKAGsRJXGQMFpmTDqc+O07PoZPkWarBopm8RDBrvtZH3d0FqLONn7ztmFG29SoRLIqlkx5K6onaOcd1V8bd9ij8DxsKWxrVDdXyw57hgjzOgPC75FqA==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAH4PKAAAAAA==" BrandID="803575" UpSellBrandID="803574">
        <air:UpsellBrand FareBasis="V1NUKYF" FareInfoRef="RUAYVoAqWDKAQ2PKAAAAAA==" />
      </air:Brand>
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA6yPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA6yPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5zSNrmltAkLG2GM9dDL/v8zprQdzGBLtvyKMTo642hT/LcOn24uKPUFVFC+pgeGvidMyQ6aS9jKE9e4V7UeyonWepiZnQDZZTulZtiPuCybNA6jlgoN7Sga1QR+JN1E67y+6XSIPoTg7X6JnKAvv7luKj8=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAJ4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAGzPKAAAAAA==" FareBasis="U0RPRPS" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP59.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:FareTicketDesignator Value="PS" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" ProviderCode="1G">gws-eJxNjs0KgzAQhB9G5r4bSNRbJIlULEHSpuCl7/8YnagFF7Izy7c/8d4bMSpOe3+PDt+urlhyATKEL6YnrHUjlMUOUZNQpWxle+FaMZDkg56qrU/CGC0Fs53lRC2wHzmESsZZ45oq2mE0ywn8TXrQ5im+l2xZD8o0fS4oPfjTH7H6K+E=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAL4PKAAAAAA==" BrandID="803572" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAUzPKAAAAAA==" FareBasis="MIP" PassengerTypeCode="ADT" Origin="CCU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP101.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAUzPKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJdyegrbt12lpRARVCcNiF//8M3G1IRErsxHnFGJ1u7G2I/9bh000FpT6BCsqXdIPRToQpW0HzhHt54JgPqtZN2dFaDzOzC5A92y41w7rFeX5LM561lCJoV9GoJvAj6SJap+VF1yGGcRyDXQ+RA/TmF9caKls=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAN4PKAAAAAA==" BrandID="361793" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAczPKAAAAAA==" FareBasis="UIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="BBI" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP31.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAczPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5zBGt/yWMd8CaO0h172/58xJ2thBluyZWSnlAKD8C5z+o8JnykbrK1AAz1LMdwCCfHmACUs2O2thtMg+rwN7YfSt1ilqgOe6jikHjhGrXV3jcPWUdDPolMf4CLLy2nLjy2bGhlVNUo5Rc7wP78bDCr2</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAP4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAizPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="BBI" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAizPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkKw0AMe0zQXXbIdpuEzNChZSilPeTS/z+jmixQgy3Z8hZCcLqxtyH8W4NvM2fk8gIKKF/jA13bEq5kA80jPvmJc3xUtezKgVZ7mJhcgOTJDqkatj0uS5bGrtdSoaEeRaWawEXiTbTM65uuQxynaRrtfoocoC9/thsqMg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAR4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAmzPKAAAAAA==" FareBasis="UIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="GAU" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP36.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAmzPKAAAAAA==" ProviderCode="1G">gws-eJxNTrsOAjEM+5iT96QI2mwt5YAsFUJ0uIX//wzcckhESuzEeeWcgwSVk8b8bwveS3F4ewINQr+VjkM8CpTJBtGwovvDHPuCxHqb2hd1dEnVagRcjTilYdhmrLVTk7mWqBhnMSgn8CPrnbSVy6u4uUgys6TnXZQI/vkBLTUrGg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAT4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAszPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="GAU" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP69.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAszPKAAAAAA==" ProviderCode="1G">gws-eJxNTkEKwzAMe0zRXfahSW8JNFnLRhhjPfSy/z9jStvBDLZkS8ZOKTndOFpI/zHgM+QVa3sBDVTO5YExknA1O2hesK1PXOtR03YoJ1r3sLK6ANWrnVIP7Ee95U0ag8kgNPSj6FQD/EhZRFue33QdYpymKdr9EhmgL7+62So/</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAV4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAzzPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IXB" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP39.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAzzPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwkAM/Jgy90kq7va2tXZxERYRC/bi/3+Gs20FA8lMMnmllJxuPFtI/9bh040FpT6BCsrL+4I+9IQpWUHzGUt54BiPqtZN2dFaDzOzC5A92y41w7rFaVqk8UQtFRraUTSqCfzIfBOt4/VF1yHGYRii3Q+RAfryC8FLKkg=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAX4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA5zPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="IXB" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA5zPKAAAAAA==" ProviderCode="1G">gws-eJxNTkkKw0AMe0zQXXbIMrdJSYYOLUMpLTSX/v8Z1WSBGmzJlrcYo9ONvQ3x3xp8mykjlydQQPm83NG1LeFKVtB8wTs/cIwHVcum7Gi1h4nJBUiebJeqYd1i/lykseu1VGioR1GpJnCS5SpapvlF1yGOIYTRbofIAfryB7zVKkk=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAZ4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA9zPKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="PAT" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP46.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA9zPKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+2FJbkldA0NhVBGe+hl//8ZU9oOZrAlW36llExM5ak+/duAz5AransDDUJf8wbnHgJlckDUJux1xT0eWG2ncqH2HilSjIBiRS+pG44zjuNOTZznUqKiH0WnnMCPTDNpy69NjIckxBiDLrcoHvzyC8MQKk8=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAb4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAD0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="PAT" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP46.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAD0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+yFpbkl0ISGlVBKd+hl//8Zc9oOZrAlW37FGJUqfIqP/zbgM6SK2jaggeZTXuDcg1BLDlA0411X3OPBqu1ULpTew8KiBiha5JK64TjjmnbT6LwtNRT0o+jUJvAjeTba0rRT7RDHEMIor1ukh335Bb1YKks=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAd4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAK0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IXA" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP33.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAK0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+yONbmldA0LgzDGCutl//8ZU/qAGWzJloydUnK68WpD+o8O324sKPUFVFBZPiN6I2FqVtB8xlKeONaDpnVTdrTmYWZ2AbJn26UWWLc6TYs09hcZhIZ2FI1qgJPMd9E63t50HWKIMQZ7HCIH6Msfu3EqPg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAf4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAQ0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="IXA" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP68.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAQ0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+xB09wSaEPDRhhjg/Wy//+MKW0HM9iSLb9SSk43jhbSvw34DLmitgfQQPm83DCGC+FKNtB8wavecY5HVduuHGi9h4XFBShe7JC6YdtjfWdpDNRSoaEfRaeawI8sq2jL85OuQ5xijJNdT5EB+vILvnsqSQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAh4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAX0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="HYD" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAX0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKgzAQ/BiZ+2xETW4RNRgKoZR6yKX//xmdqIUu7M7szr5ijI7OONoU/63Dp5szcnkBBZTvdcXQ94QpqaC5DUd+4h73qpZTudBaDxOTEyC5ZJfUDPWMy3JI4zBqqdDQjqJRTeBHtl20zOubTofoQwjeHrfICfryC8MaKk8=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAj4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAd0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="HYD" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP54.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAd0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+zSR24pJKFlI4yxHXrZ/3/GlLaDGWzJll8xRqcbR5viv3X4dMuGrT6BCspTvmPoe8KV7KB5xnt74BoPqtZDOdFaDwuLC1C82Ck1w37EdU/SOIxaKjS0o2hUE/iRvIrWJb3oOsQ5hDDb7RI5QV9+Ab1iKks=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAl4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAk0PKAAAAAA==" FareBasis="UIP9I" PassengerTypeCode="ADT" Origin="CCU" Destination="IMF" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP33.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAk0PKAAAAAA==" ProviderCode="1G">gws-eJxNTkEOwzAIe0zlu8mmNdySpa3GoVE1rYde9v9njGSdNCSwwciQUgoMwpuM6T8GvIdssPoEKuhp64LLlYR4c4ASZuy2qeE0iD6vXfuitC0WKeqARR271AJHr6XsrrHbOgraWTTqA/zI/HBa8/TKpkZGVY1yP0WO8D8/JewrCQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAn4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAq0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="IMF" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP83.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAq0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJdycI1t46aa1WARVCcNiF//8M3G1IRErsxHmllJxuvNiY/m3AZ5gqansCDZTP+YbgJ8KVrKB5xrs+cIwHVdum7Gi9h4XFBShebJe6Yd1ivRdpDGctFRr6UXSqCfxIXkTbNL/oOsQQYwx2PUSO0JdfvBEqRQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAp4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAu0PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="BLR" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAu0PKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjku1MEtLcyoFq1qZrQOHDZ/3/GXGDSIiV24rxijI7O2NsQ/63BpxkzclmBAspvzxVd2xKmZAfNLdjyC9e4V7UcyolWe5iYnADJJTulatiPOE2bNHa9lgoN9Sgq1QR+ZLmLlnF+0+kQfQjB2+MSOUBffgHABCpK</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAr4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA00PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="BLR" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP68.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA00PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+xB09zS0YSVlTDKduhl//8ZU9oOarAlW36llJxu7C2kq3X4duOMua5ABeVTXtCHG+FKNtA84zO/cI4PqtZdOdBaDwuLC1C82CE1w7bH+7JKY6CWCg3tKBrVBP4kP0TrOL3pOsQhxjjY8xQZoC9/vVcqRg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAt4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA70PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="BOM" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP68.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA70PKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJdydI63rrGKuoEAUhdtiF//8M3G1IRErsxHmllJxu7C2kf+vw6caCUl9ABeXnxx19OBGmZAXNZyzliWN8ULVuyo7WepiZXYDs2XapGdYtTtMijYFaKjS0o2hUE/iR+Spax8ubrkMcYoyD3Q6RAfryC8DCKkk=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAv4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAB1PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="BOM" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAB1PKAAAAAA==" ProviderCode="1G">gws-eJxNTssOgzAM+xjkexIEtLcy0WoVWzdN24HL/v8z5kInESmxE+cVQjAxlVGncLYO327OyOUFFAh9iTcMfS8wJhtELeKTn2jjjtWyKwdq7ZEkyQhIlnSXtkJr8fK4U5Nh5FKioh5FpZzAn8QraZmXtxgPifPeO12bKBP45Q++hipO</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAx4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAI1PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="MAA" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP55.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAI1PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu5zSNrkldA0LY2GM9dDL/v8zpvQBM9iSLb9ijI7OONoU/63Dt0sFpb6BCsqfKWHoe8KUbKC5BWt54Rz3qtZdOdBaDzOzEyC7bIfUDNse53mVxmHUUqGhHUWjmsBFlrtoTbcPnQ7RhxC8PU6RE/TlD7XmKjk=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAz4PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAO1PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="MAA" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP68.00" NegotiatedFare="false" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAO1PKAAAAAA==" ProviderCode="1G">gws-eJxNTssKwzAM+5iiu+xB09wSaEPDtjDGduhl//8ZU9oOZrAlW36llJxuHC2kfxvwGXJFbU+ggfJ5uWEMF8KVbKD5gnd94ByPqrZdOdB6DwuLC1C82CF1w7bHe87SGKilQkM/ik41gR9ZVtGW5xddhzjFGCe7niID9OUXuScqNg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA14PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAV1PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="CCU" Destination="IMF" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP40.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAV1PKAAAAAA==" ProviderCode="1G">gws-eJxNTkEKwzAMe0zRXfbGmtxSuoaF0jDGeuhl/3/GlLaDGWzJloydUnK68WZ9+o8On24oKPUFVFBZloxLIGFqNtB8wlqeONeDpnVXDrTmYWZ2AbJnO6QW2PY6jqs0Xk0GoaEdRaMa4Eemh2gd7m+6DjHEGIPNp8ge+vILu2kqPQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA34PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAb1PKAAAAAA==" FareBasis="UIP" PassengerTypeCode="ADT" Origin="IMF" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP82.00" NegotiatedFare="false" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18">
      <air:BaggageAllowance>
        <air:MaxWeight Value="25" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAb1PKAAAAAA==" ProviderCode="1G">gws-eJxNTssOwjAM+5jJdycI1t46aa1WARVCcNiF//8M3G1IRErsxHmllJxuvNiY/m3AZ5gqansCDZTP+YbgJ8KVrKB5xrs+cIwHVdum7Gi9h4XFBShebJe6Yd1ivRdpDGctFRr6UXSqCfxIXkTbNL/oOsQQYwx2PUSO0JdfvBEqRQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA54PKAAAAAA==" BrandID="361788" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAf1PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="CCU" Destination="UDR" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP91.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" ProviderCode="1G">gws-eJxNUEGOwyAMfEw09zGJINwSNUVbJXVXVcmKS///jDUhlWqEMR57PDBNk6MTegnTt3W4X39QbG3y+0olzdgeut2gEJiLngxuAMa/PtQExWp30byWtKNerB46L6+9j+LySiGtiZQYgwzOO0oPNqJGU0F0ecVNnwen7bw8MYr3RqlGyj7yMwan8tHyeqDN1+HkdVicHUhM0qBqKKpFcbnkOi2atHMq3h1qaB34BPYDOJ7Q1I8mdZjvJ8gAU/oPSGVGtg==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA74PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAl1PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="UDR" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP45.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAl1PKAAAAAA==" ProviderCode="1G">gws-eJxNT9EKgzAM/Jhx75dY7PrmQGWiZGNMR1/2/5+x1CosJWmbC3eXruuUKmwldv9xAbKfRZ55nIY7loctEwwKL6klowbg+mliaVB8dhNb5zxuKB+fh93699Yk0XWmkIEeMaUoQVulNGAlqjQOCi7rjMleO6dnPywIlOSy5qRsEk8ZHLaT921Hay3i5BB69QsjR6lQCWSzbFj7V1ELreqhiq/vW+wROB++NPYVqvurJ6cDY4Qb/QHmW0V7</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA94PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAu1PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="CCU" Destination="BOM" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP77.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAu1PKAAAAAA==" ProviderCode="1G">gws-eJxNT0FuwzAMe0zBO+UEtnVL1zZokEwdhiaDL/3/MyrHKTAZkm1RIKlhGAKDMEoa/scJKH4W+SnjdLtjedgywSDwopFMoQfyX5dqg+Kzm9g6l3FD/fg87Hx9bp1KWGcK2dNDVZP0IQZKBzaiRuOg4LTOmOx35/T8enwj5qhOaU7KTvmRwWE7e992tNUqTt76a/ALI0dpUA0Us2K4XNaqlrLqoYqX71vtEfg8fGnsKzT32ZPTgTHBjb4B9HZFlQ==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKA/4PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA01PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="BOM" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP60.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-18" NotValidAfter="2021-06-18" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA01PKAAAAAA==" ProviderCode="1G">gws-eJxNT0FuhDAMfMxq7mOHJuRGK0BFsN6qKlS59P/PqENYaR3FTjzWzHgYBqUKo6ThNW5A8bPJV5mX6RPbw7YFBoWnHMmkHdD/hlQbFJ89xPa1zAfqx+dh7+PPEbLovlLIQI+cc5JOo1IC2IgajYOC275ise+T0+84bXjrYnZZc1KGzKcMLtu99+1EW67i5NSN6gUzZ2lQDRSzYvh43Kta1D5fqvjzfas9As+HL41zhea+V28uF8YEN/oP67RFhA==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAB5PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKA71PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="CCU" Destination="IXC" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP103.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" ProviderCode="1G">gws-eJxNUEGOgzAMfAya+zhkCbmBaKNFULeqCt1c9v/PWIdQaR3FcTz2eJJhGBydsJMw/LcGt+s3sq1VHq+U04j1rusMhcBc7MjgPNC/21ASFKvdRbclpx3lYvXQ8fLa2yhuWyikNZESYxDvOkdpwUpUaQqIZlsw6/PgtD3/TIjuyxulGinbyM8YnMp7y+uBVl+Gk1d/cXYgMUmFiiGrZsU0bYZZs3fnVPw2KKF14BPYD+B4QlXfm1Q/3k6QAab0D0E1RqU=</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAD5PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAB2PKAAAAAA==" FareBasis="U0RPRPS" PassengerTypeCode="ADT" Origin="IXC" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP37.00" NegotiatedFare="false" TourCode="UKPOSUK" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19">
      <air:FareTicketDesignator Value="PS" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="15" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAB2PKAAAAAA==" ProviderCode="1G">gws-eJxNjtEOgyAMRT/G3PcWh4w3jGAkW4hhc5kv/v9nrFWX2ITee3NaIIRgyDB17MK1GmzN8kAuFSggOTE90d7Yw0hYQWwSFqpznV84r/BCyk4PZZ2jwUcrgtGOdCAtrHvP30EYta5jVYY+DLWygb9Jk9jSx3cuVvKdpfWfE5KD/PQHsWQr5g==</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAF5PKAAAAAA==" BrandID="803572" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAK2PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="CCU" Destination="HYD" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-18" Amount="GBP91.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" ProviderCode="1G">gws-eJxNUNEOwiAM/Jjl3q9sgfG2xUk0m9UYN8OL//8ZljETSyil114PhmFwdEIvYfi3BrfzBdnWIo9XymnEctflCoXAXPRkcB3Qv9tQEhSr3UTXOacN5WL10HF6bW0Ut84U0ppIiTFI57yjtGAlqjQFRLPOuOpz57R9yRN68d4o1UjZRv7G4FDeW153tPoynDx3k7MDiUkqVAxZNStOp7VMiybtmIpPgxJaB36B/QD2J1T1vUntxtsBMsCUfgFEskaw</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAH5PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
    <air:FareInfo Key="RUAYVoAqWDKAQ2PKAAAAAA==" FareBasis="V1NUKYF" PassengerTypeCode="ADT" Origin="HYD" Destination="DEL" EffectiveDate="2021-06-17T05:59:00.000+01:00" DepartureDate="2021-06-19" Amount="GBP61.00" NegotiatedFare="false" TourCode="UKPOSUK" PrivateFare="AirlinePrivateFare" NotValidBefore="2021-06-19" NotValidAfter="2021-06-19" PseudoCityCode="8W37">
      <air:FareTicketDesignator Value="YF" />
      <air:BaggageAllowance>
        <air:MaxWeight Value="20" Unit="Kilograms" />
      </air:BaggageAllowance>
      <air:FareRuleKey FareInfoRef="RUAYVoAqWDKAQ2PKAAAAAA==" ProviderCode="1G">gws-eJxNT0GKwzAMfEyZ+0jx2vEthSQ0JGiXpUnxpf9/xspxCisj2daImdEwDEoVRknD/7gBxc8mP2Vepge2b9sWGBReciSTBqB/dak2KD57iO1rmQ/Uj8/D7uPz6LLovlLIQI+Uc5KgUSkd2IgajYOC275isd+T03OcNnyFmF3WnJRd5kcGl+3sfTvRVqs4OYVR/cLMWRpUA8WsGB5lrGpR+3yp4u37VnsEPg9fGucKzX3vyeXCmOBG/wDtVkWK</air:FareRuleKey>
      <air:Brand Key="RUAYVoAqWDKAJ5PKAAAAAA==" BrandID="803574" UpSellBrandFound="false" />
    </air:FareInfo>
  </air:FareInfoList>
  <air:RouteList>
    <air:Route Key="RUAYVoAqWDKAZ2PKAAAAAA==">
      <air:Leg Key="RUAYVoAqWDKAiuPKAAAAAA==" Group="0" Origin="CCU" Destination="DEL" />
    </air:Route>
  </air:RouteList>
  <air:AirPricePointList>
    <air:AirPricePoint Key="RUAYVoAqWDKAa2PKAAAAAA==" TotalPrice="GBP60.10" BasePrice="INR4830" ApproximateTotalPrice="GBP60.10" ApproximateBasePrice="GBP47.00" EquivalentBasePrice="GBP47.00" Taxes="GBP13.10" ApproximateTaxes="GBP13.10" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAXuPKAAAAAA==" TotalPrice="GBP60.10" BasePrice="INR4830" ApproximateTotalPrice="GBP60.10" ApproximateBasePrice="GBP47.00" EquivalentBasePrice="GBP47.00" Taxes="GBP13.10" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAWuPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAYuPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP2.40" Key="RUAYVoAqWDKAZuPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAauPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.70" Key="RUAYVoAqWDKAbuPKAAAAAAAA" />
        <air:FareCalc>CCU AI DEL Q300 4530SIP INR4830END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAcuPKAAAAAA==" TravelTime="P0DT2H15M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAWuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAosPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAeuPKAAAAAA==" TravelTime="P0DT2H20M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAWuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAqsPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAguPKAAAAAA==" TravelTime="P0DT2H30M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAWuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAssPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAb2PKAAAAAA==" TotalPrice="GBP70.90" BasePrice="INR5577" ApproximateTotalPrice="GBP70.90" ApproximateBasePrice="GBP54.00" EquivalentBasePrice="GBP54.00" Taxes="GBP16.90" ApproximateTaxes="GBP16.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAluPKAAAAAA==" TotalPrice="GBP70.90" BasePrice="INR5577" ApproximateTotalPrice="GBP70.90" ApproximateBasePrice="GBP54.00" EquivalentBasePrice="GBP54.00" Taxes="GBP16.90" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="UK" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAkuPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAmuPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.60" Key="RUAYVoAqWDKAnuPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAouPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.30" Key="RUAYVoAqWDKApuPKAAAAAAAA" />
        <air:FareCalc>CCU UK DEL Q507 5070U0RPRPV/PV INR5577END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAquPKAAAAAA==" TravelTime="P0DT2H20M0S">
              <air:BookingInfo BookingCode="U" BookingCount="6" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAkuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAusPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAsuPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="7" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAkuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAwsPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAuuPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="3" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAkuPKAAAAAA==" SegmentRef="RUAYVoAqWDKAysPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAwuPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="7" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAkuPKAAAAAA==" SegmentRef="RUAYVoAqWDKA0sPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAc2PKAAAAAA==" TotalPrice="GBP71.70" BasePrice="INR6030" ApproximateTotalPrice="GBP71.70" ApproximateBasePrice="GBP58.00" EquivalentBasePrice="GBP58.00" Taxes="GBP13.70" ApproximateTaxes="GBP13.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA0uPKAAAAAA==" TotalPrice="GBP71.70" BasePrice="INR6030" ApproximateTotalPrice="GBP71.70" ApproximateBasePrice="GBP58.00" EquivalentBasePrice="GBP58.00" Taxes="GBP13.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAzuPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA1uPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP3.00" Key="RUAYVoAqWDKA2uPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA3uPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.70" Key="RUAYVoAqWDKA4uPKAAAAAAAA" />
        <air:FareCalc>CCU AI DEL Q300 5730LIP INR6030END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKA5uPKAAAAAA==" TravelTime="P0DT2H30M0S">
              <air:BookingInfo BookingCode="L" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAzuPKAAAAAA==" SegmentRef="RUAYVoAqWDKA2sPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAd2PKAAAAAA==" TotalPrice="GBP83.70" BasePrice="INR6880" ApproximateTotalPrice="GBP83.70" ApproximateBasePrice="GBP67.00" EquivalentBasePrice="GBP67.00" Taxes="GBP16.70" ApproximateTaxes="GBP16.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA9uPKAAAAAA==" TotalPrice="GBP83.70" BasePrice="INR6880" ApproximateTotalPrice="GBP83.70" ApproximateBasePrice="GBP67.00" EquivalentBasePrice="GBP67.00" Taxes="GBP16.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKA8uPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKACvPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA-uPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP3.60" Key="RUAYVoAqWDKA/uPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAAvPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP4.10" Key="RUAYVoAqWDKABvPKAAAAAAAA" />
        <air:FareCalc>CCU AI BBI 2050EIP9I AI DEL Q300 4530SIP INR6880END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAEvPKAAAAAA==" TravelTime="P0DT16H0M0S">
              <air:BookingInfo BookingCode="E" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA8uPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4sPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKACvPKAAAAAA==" SegmentRef="RUAYVoAqWDKA7sPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAe2PKAAAAAA==" TotalPrice="GBP96.60" BasePrice="INR8300" ApproximateTotalPrice="GBP96.60" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP16.60" ApproximateTaxes="GBP16.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAIvPKAAAAAA==" TotalPrice="GBP96.60" BasePrice="INR8300" ApproximateTotalPrice="GBP96.60" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP16.60" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAHvPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKANvPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAJvPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.20" Key="RUAYVoAqWDKAKvPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKALvPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAMvPKAAAAAAAA" />
        <air:FareCalc>CCU AI GAU 2000EIP9I AI DEL Q300 6000SIP INR8300END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAPvPKAAAAAA==" TravelTime="P0DT12H35M0S">
              <air:BookingInfo BookingCode="E" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAHvPKAAAAAA==" SegmentRef="RUAYVoAqWDKA9sPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKANvPKAAAAAA==" SegmentRef="RUAYVoAqWDKACtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKASvPKAAAAAA==" TravelTime="P0DT16H0M0S">
              <air:BookingInfo BookingCode="E" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAHvPKAAAAAA==" SegmentRef="RUAYVoAqWDKA9sPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKANvPKAAAAAA==" SegmentRef="RUAYVoAqWDKAGtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAf2PKAAAAAA==" TotalPrice="GBP98.00" BasePrice="INR8260" ApproximateTotalPrice="GBP98.00" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP18.00" ApproximateTaxes="GBP18.00" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAWvPKAAAAAA==" TotalPrice="GBP98.00" BasePrice="INR8260" ApproximateTotalPrice="GBP98.00" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP18.00" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAVvPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAbvPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAXvPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.20" Key="RUAYVoAqWDKAYvPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAZvPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAavPKAAAAAAAA" />
        <air:FareCalc>CCU AI IXB Q300 3130SIP AI DEL Q300 4530SIP INR8260END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAevPKAAAAAA==" TravelTime="P1DT2H35M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAVvPKAAAAAA==" SegmentRef="RUAYVoAqWDKAItPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAbvPKAAAAAA==" SegmentRef="RUAYVoAqWDKAKtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAg2PKAAAAAA==" TotalPrice="GBP98.90" BasePrice="INR8260" ApproximateTotalPrice="GBP98.90" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP18.90" ApproximateTaxes="GBP18.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAjvPKAAAAAA==" TotalPrice="GBP98.90" BasePrice="INR8260" ApproximateTotalPrice="GBP98.90" ApproximateBasePrice="GBP80.00" EquivalentBasePrice="GBP80.00" Taxes="GBP18.90" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAivPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAovPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP9.00" Key="RUAYVoAqWDKAkvPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.20" Key="RUAYVoAqWDKAlvPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAmvPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAnvPKAAAAAAAA" />
        <air:FareCalc>CCU AI PAT Q300 3830SIP AI DEL Q300 3830SIP INR8260END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKArvPKAAAAAA==" TravelTime="P0DT18H55M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAivPKAAAAAA==" SegmentRef="RUAYVoAqWDKAMtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAovPKAAAAAA==" SegmentRef="RUAYVoAqWDKAOtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAuvPKAAAAAA==" TravelTime="P0DT21H55M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAivPKAAAAAA==" SegmentRef="RUAYVoAqWDKAMtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAovPKAAAAAA==" SegmentRef="RUAYVoAqWDKAQtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAh2PKAAAAAA==" TotalPrice="GBP104.60" BasePrice="INR9030" ApproximateTotalPrice="GBP104.60" ApproximateBasePrice="GBP87.00" EquivalentBasePrice="GBP87.00" Taxes="GBP17.60" ApproximateTaxes="GBP17.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAzvPKAAAAAA==" TotalPrice="GBP104.60" BasePrice="INR9030" ApproximateTotalPrice="GBP104.60" ApproximateBasePrice="GBP87.00" EquivalentBasePrice="GBP87.00" Taxes="GBP17.60" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAyvPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKA4vPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKA0vPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.50" Key="RUAYVoAqWDKA1vPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA2vPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.70" Key="RUAYVoAqWDKA3vPKAAAAAAAA" />
        <air:FareCalc>CCU AI IXA Q300 2500SIP AI DEL Q300 5930SIP INR9030END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKA7vPKAAAAAA==" TravelTime="P0DT19H40M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAyvPKAAAAAA==" SegmentRef="RUAYVoAqWDKAStPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA4vPKAAAAAA==" SegmentRef="RUAYVoAqWDKAUtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKA+vPKAAAAAA==" TravelTime="P0DT21H25M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAyvPKAAAAAA==" SegmentRef="RUAYVoAqWDKAWtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA4vPKAAAAAA==" SegmentRef="RUAYVoAqWDKAUtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAi2PKAAAAAA==" TotalPrice="GBP111.30" BasePrice="INR9660" ApproximateTotalPrice="GBP111.30" ApproximateBasePrice="GBP94.00" EquivalentBasePrice="GBP94.00" Taxes="GBP17.30" ApproximateTaxes="GBP17.30" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKADwPKAAAAAA==" TotalPrice="GBP111.30" BasePrice="INR9660" ApproximateTotalPrice="GBP111.30" ApproximateBasePrice="GBP94.00" EquivalentBasePrice="GBP94.00" Taxes="GBP17.30" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKACwPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAIwPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAEwPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.90" Key="RUAYVoAqWDKAFwPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAGwPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAHwPKAAAAAAAA" />
        <air:FareCalc>CCU AI HYD Q300 4530SIP AI DEL Q300 4530SIP INR9660END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKALwPKAAAAAA==" TravelTime="P0DT13H55M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKACwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAYtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAIwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAatPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAOwPKAAAAAA==" TravelTime="P0DT18H50M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKACwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAYtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAIwPKAAAAAA==" SegmentRef="RUAYVoAqWDKActPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAj2PKAAAAAA==" TotalPrice="GBP115.50" BasePrice="INR9930" ApproximateTotalPrice="GBP115.50" ApproximateBasePrice="GBP96.00" EquivalentBasePrice="GBP96.00" Taxes="GBP19.50" ApproximateTaxes="GBP19.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKATwPKAAAAAA==" TotalPrice="GBP115.50" BasePrice="INR9930" ApproximateTotalPrice="GBP115.50" ApproximateBasePrice="GBP96.00" EquivalentBasePrice="GBP96.00" Taxes="GBP19.50" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKASwPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAYwPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAUwPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.00" Key="RUAYVoAqWDKAVwPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAWwPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP4.10" Key="RUAYVoAqWDKAXwPKAAAAAAAA" />
        <air:FareCalc>CCU AI IMF 2400EIP9I AI DEL Q300 7230SIP INR9930END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAkwPKAAAAAA==" TravelTime="P0DT12H35M0S">
              <air:BookingInfo BookingCode="E" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKASwPKAAAAAA==" SegmentRef="RUAYVoAqWDKA/sPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAEtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAk2PKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" ApproximateTaxes="GBP17.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAowPKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAnwPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAtwPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKApwPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.50" Key="RUAYVoAqWDKAqwPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKArwPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAswPKAAAAAAAA" />
        <air:FareCalc>CCU AI BLR Q300 4530SIP AI DEL Q300 5930SIP INR11060END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAwwPKAAAAAA==" TravelTime="P0DT6H25M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAnwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAetPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="6" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAtwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAgtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAzwPKAAAAAA==" TravelTime="P0DT18H45M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAnwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAetPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAtwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAitPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAl2PKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" ApproximateTaxes="GBP17.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA4wPKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKA3wPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKA9wPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA5wPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.50" Key="RUAYVoAqWDKA6wPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA7wPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKA8wPKAAAAAAAA" />
        <air:FareCalc>CCU AI BOM Q300 5930SIP AI DEL Q300 4530SIP INR11060END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAAxPKAAAAAA==" TravelTime="P0DT8H40M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA3wPKAAAAAA==" SegmentRef="RUAYVoAqWDKAktPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA9wPKAAAAAA==" SegmentRef="RUAYVoAqWDKAmtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKADxPKAAAAAA==" TravelTime="P0DT10H50M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA3wPKAAAAAA==" SegmentRef="RUAYVoAqWDKAktPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA9wPKAAAAAA==" SegmentRef="RUAYVoAqWDKAotPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAm2PKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" ApproximateTaxes="GBP17.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAIxPKAAAAAA==" TotalPrice="GBP124.90" BasePrice="INR11060" ApproximateTotalPrice="GBP124.90" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP17.90" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAHxPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKANxPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAJxPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.50" Key="RUAYVoAqWDKAKxPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKALxPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAMxPKAAAAAAAA" />
        <air:FareCalc>CCU AI MAA Q300 4530SIP AI DEL Q300 5930SIP INR11060END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAQxPKAAAAAA==" TravelTime="P0DT18H15M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAHxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAqtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKANxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAstPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKATxPKAAAAAA==" TravelTime="P0DT22H20M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAHxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAqtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKANxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAutPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAn2PKAAAAAA==" TotalPrice="GBP125.60" BasePrice="INR11030" ApproximateTotalPrice="GBP125.60" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP18.60" ApproximateTaxes="GBP18.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAZwPKAAAAAA==" TotalPrice="GBP125.60" BasePrice="INR11030" ApproximateTotalPrice="GBP125.60" ApproximateBasePrice="GBP107.00" EquivalentBasePrice="GBP107.00" Taxes="GBP18.60" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAewPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAYwPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAawPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.50" Key="RUAYVoAqWDKAbwPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAcwPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.70" Key="RUAYVoAqWDKAdwPKAAAAAAAA" />
        <air:FareCalc>CCU AI IMF Q300 3200SIP AI DEL Q300 7230SIP INR11030END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAgwPKAAAAAA==" TravelTime="P0DT7H20M0S">
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAewPKAAAAAA==" SegmentRef="RUAYVoAqWDKAwtPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYwPKAAAAAA==" SegmentRef="RUAYVoAqWDKAEtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAo2PKAAAAAA==" TotalPrice="GBP136.60" BasePrice="INR11433" ApproximateTotalPrice="GBP136.60" ApproximateBasePrice="GBP111.00" EquivalentBasePrice="GBP111.00" Taxes="GBP25.60" ApproximateTaxes="GBP25.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAYxPKAAAAAA==" TotalPrice="GBP136.60" BasePrice="INR11433" ApproximateTotalPrice="GBP136.60" ApproximateBasePrice="GBP111.00" EquivalentBasePrice="GBP111.00" Taxes="GBP25.60" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKAXxPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAdxPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP12.40" Key="RUAYVoAqWDKAZxPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.80" Key="RUAYVoAqWDKAaxPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAbxPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP5.10" Key="RUAYVoAqWDKAcxPKAAAAAAAA" />
        <air:FareCalc>CCU AI X/BOM Q300 AI ATQ Q300 7403UEPP AI DEL Q300 3130SIP INR11433END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAfxPKAAAAAA==" TravelTime="P0DT22H0M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAXxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAytPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAXxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA0tPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="7" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAdxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA2tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAjxPKAAAAAA==" TravelTime="P1DT5H15M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAXxPKAAAAAA==" SegmentRef="RUAYVoAqWDKAktPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAXxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA0tPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="7" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAdxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA2tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAp2PKAAAAAA==" TotalPrice="GBP141.20" BasePrice="INR12579" ApproximateTotalPrice="GBP141.20" ApproximateBasePrice="GBP122.00" EquivalentBasePrice="GBP122.00" Taxes="GBP19.20" ApproximateTaxes="GBP19.20" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAqxPKAAAAAA==" TotalPrice="GBP141.20" BasePrice="INR12579" ApproximateTotalPrice="GBP141.20" ApproximateBasePrice="GBP122.00" EquivalentBasePrice="GBP122.00" Taxes="GBP19.20" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" ETicketability="Yes" PlatingCarrier="UK" ProviderCode="1G" Cat35Indicator="true" TotalNetPrice="GBP141.20">
        <air:FareInfoRef Key="RUAYVoAqWDKApxPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAvxPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKArxPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.30" Key="RUAYVoAqWDKAsxPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAtxPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAuxPKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK UDR Q CCUUDR1112 7418V1NUKYS/YS UK DEL Q528 3520V1NUKYS/YS INR12578END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAxxPKAAAAAA==" TravelTime="P0DT23H10M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA6tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAvxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA8tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKA1xPKAAAAAA==" TravelTime="P1DT6H20M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA6tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAvxPKAAAAAA==" SegmentRef="RUAYVoAqWDKA8tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAq2PKAAAAAA==" TotalPrice="GBP143.50" BasePrice="INR12693" ApproximateTotalPrice="GBP143.50" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP20.50" ApproximateTaxes="GBP20.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA7xPKAAAAAA==" TotalPrice="GBP143.50" BasePrice="INR12693" ApproximateTotalPrice="GBP143.50" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP20.50" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" ETicketability="Yes" PlatingCarrier="AI" ProviderCode="1G" Cat35Indicator="false">
        <air:FareInfoRef Key="RUAYVoAqWDKA6xPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAAyPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA8xPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.40" Key="RUAYVoAqWDKA9xPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA-xPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP5.10" Key="RUAYVoAqWDKA/xPKAAAAAAAA" />
        <air:FareCalc>CCU AI X/BLR Q300 AI MAA Q300 5863UEPP AI DEL Q300 5930SIP INR12693END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKACyPKAAAAAA==" TravelTime="P1DT5H40M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA6xPKAAAAAA==" SegmentRef="RUAYVoAqWDKAetPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA6xPKAAAAAA==" SegmentRef="RUAYVoAqWDKAAuPKAAAAAA==" />
              <air:BookingInfo BookingCode="S" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAAyPKAAAAAA==" SegmentRef="RUAYVoAqWDKACuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAr2PKAAAAAA==" TotalPrice="GBP144.00" BasePrice="INR13041" ApproximateTotalPrice="GBP144.00" ApproximateBasePrice="GBP126.00" EquivalentBasePrice="GBP126.00" Taxes="GBP18.00" ApproximateTaxes="GBP18.00" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAJyPKAAAAAA==" TotalPrice="GBP144.00" BasePrice="INR13041" ApproximateTotalPrice="GBP144.00" ApproximateBasePrice="GBP126.00" EquivalentBasePrice="GBP126.00" Taxes="GBP18.00" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" ETicketability="Yes" PlatingCarrier="UK" ProviderCode="1G" Cat35Indicator="true" TotalNetPrice="GBP144.00">
        <air:FareInfoRef Key="RUAYVoAqWDKAIyPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAOyPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAKyPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.40" Key="RUAYVoAqWDKALyPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAMyPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.60" Key="RUAYVoAqWDKANyPKAAAAAAAA" />
        <air:FareCalc>CCU UK BOM Q955 6370V1NUKYS/YS UK DEL Q745 4970V1NUKYS/YS INR13041END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKARyPKAAAAAA==" TravelTime="P0DT6H30M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAIyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAOyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAEuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAUyPKAAAAAA==" TravelTime="P0DT9H15M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAIyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAOyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAGuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAs2PKAAAAAA==" TotalPrice="GBP145.40" BasePrice="INR12993" ApproximateTotalPrice="GBP145.40" ApproximateBasePrice="GBP126.00" EquivalentBasePrice="GBP126.00" Taxes="GBP19.40" ApproximateTaxes="GBP19.40" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAZyPKAAAAAA==" TotalPrice="GBP145.40" BasePrice="INR12993" ApproximateTotalPrice="GBP145.40" ApproximateBasePrice="GBP126.00" EquivalentBasePrice="GBP126.00" Taxes="GBP19.40" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" ETicketability="Yes" PlatingCarrier="UK" ProviderCode="1G" Cat35Indicator="true" TotalNetPrice="GBP145.40">
        <air:FareInfoRef Key="RUAYVoAqWDKAYyPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAeyPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAayPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.50" Key="RUAYVoAqWDKAbyPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAcyPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAdyPKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK IXC Q CCUIXC1276 8505V1NUKYS/YS UK DEL Q292 2920U0RPRPV/PV INR12993END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP33.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAgyPKAAAAAA==" TravelTime="P0DT22H55M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAIuPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="5" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAeyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAKuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAkyPKAAAAAA==" TravelTime="P1DT2H20M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAYyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAIuPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAeyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAMuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAt2PKAAAAAA==" TotalPrice="GBP158.00" BasePrice="INR14247" ApproximateTotalPrice="GBP158.00" ApproximateBasePrice="GBP138.00" EquivalentBasePrice="GBP138.00" Taxes="GBP20.00" ApproximateTaxes="GBP20.00" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAqyPKAAAAAA==" TotalPrice="GBP158.00" BasePrice="INR14247" ApproximateTotalPrice="GBP158.00" ApproximateBasePrice="GBP138.00" EquivalentBasePrice="GBP138.00" Taxes="GBP20.00" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" ETicketability="Yes" PlatingCarrier="UK" ProviderCode="1G" Cat35Indicator="true" TotalNetPrice="GBP158.00">
        <air:FareInfoRef Key="RUAYVoAqWDKApyPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAvyPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAryPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.10" Key="RUAYVoAqWDKAsyPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAtyPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAuyPKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK HYD Q CCUHYD1112 7418V1NUKYS/YS UK DEL Q745 4970V1NUKYS/YS INR14246END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAxyPKAAAAAA==" TravelTime="P0DT18H55M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAOuPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAvyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAQuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKA1yPKAAAAAA==" TravelTime="P0DT22H35M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApyPKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKApyPKAAAAAA==" SegmentRef="RUAYVoAqWDKASuPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAvyPKAAAAAA==" SegmentRef="RUAYVoAqWDKAUuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAu2PKAAAAAA==" TotalPrice="GBP68.50" BasePrice="INR5630" ApproximateTotalPrice="GBP68.50" ApproximateBasePrice="GBP55.00" EquivalentBasePrice="GBP55.00" Taxes="GBP13.50" ApproximateTaxes="GBP13.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA7yPKAAAAAA==" TotalPrice="GBP68.50" BasePrice="INR5630" ApproximateTotalPrice="GBP68.50" ApproximateBasePrice="GBP55.00" EquivalentBasePrice="GBP55.00" Taxes="GBP13.50" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKA6yPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA8yPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP2.80" Key="RUAYVoAqWDKA9yPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA-yPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.70" Key="RUAYVoAqWDKA/yPKAAAAAAAA" />
        <air:FareCalc>CCU AI DEL Q300 5330UIP INR5630END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAAzPKAAAAAA==" TravelTime="P0DT2H15M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA6yPKAAAAAA==" SegmentRef="RUAYVoAqWDKAosPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKACzPKAAAAAA==" TravelTime="P0DT2H20M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA6yPKAAAAAA==" SegmentRef="RUAYVoAqWDKAqsPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAEzPKAAAAAA==" TravelTime="P0DT2H30M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA6yPKAAAAAA==" SegmentRef="RUAYVoAqWDKAssPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAv2PKAAAAAA==" TotalPrice="GBP76.50" BasePrice="INR6126" ApproximateTotalPrice="GBP76.50" ApproximateBasePrice="GBP59.00" EquivalentBasePrice="GBP59.00" Taxes="GBP17.50" ApproximateTaxes="GBP17.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAHzPKAAAAAA==" TotalPrice="GBP76.50" BasePrice="INR6126" ApproximateTotalPrice="GBP76.50" ApproximateBasePrice="GBP59.00" EquivalentBasePrice="GBP59.00" Taxes="GBP17.50" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="UK" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAGzPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAIzPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.20" Key="RUAYVoAqWDKAJzPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAKzPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.30" Key="RUAYVoAqWDKALzPKAAAAAAAA" />
        <air:FareCalc>CCU UK DEL Q556 5569U0RPRPS/PS INR6125END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAMzPKAAAAAA==" TravelTime="P0DT2H20M0S">
              <air:BookingInfo BookingCode="U" BookingCount="6" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" SegmentRef="RUAYVoAqWDKAusPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAOzPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="7" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" SegmentRef="RUAYVoAqWDKAwsPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAQzPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="3" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" SegmentRef="RUAYVoAqWDKAysPKAAAAAA==" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKASzPKAAAAAA==" TravelTime="P0DT2H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="7" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAGzPKAAAAAA==" SegmentRef="RUAYVoAqWDKA0sPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAw2PKAAAAAA==" TotalPrice="GBP116.80" BasePrice="INR10430" ApproximateTotalPrice="GBP116.80" ApproximateBasePrice="GBP101.00" EquivalentBasePrice="GBP101.00" Taxes="GBP15.80" ApproximateTaxes="GBP15.80" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAVzPKAAAAAA==" TotalPrice="GBP116.80" BasePrice="INR10430" ApproximateTotalPrice="GBP116.80" ApproximateBasePrice="GBP101.00" EquivalentBasePrice="GBP101.00" Taxes="GBP15.80" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAUzPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAWzPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.10" Key="RUAYVoAqWDKAXzPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAYzPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP1.70" Key="RUAYVoAqWDKAZzPKAAAAAAAA" />
        <air:FareCalc>CCU AI DEL Q300 10130MIP INR10430END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Percentage>0.00</air:Percentage>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Percentage>0.00</air:Percentage>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAazPKAAAAAA==" TravelTime="P0DT2H30M0S">
              <air:BookingInfo BookingCode="M" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAUzPKAAAAAA==" SegmentRef="RUAYVoAqWDKA2sPKAAAAAA==" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAx2PKAAAAAA==" TotalPrice="GBP103.60" BasePrice="INR8830" ApproximateTotalPrice="GBP103.60" ApproximateBasePrice="GBP86.00" EquivalentBasePrice="GBP86.00" Taxes="GBP17.60" ApproximateTaxes="GBP17.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAdzPKAAAAAA==" TotalPrice="GBP103.60" BasePrice="INR8830" ApproximateTotalPrice="GBP103.60" ApproximateBasePrice="GBP86.00" EquivalentBasePrice="GBP86.00" Taxes="GBP17.60" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAczPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAizPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAezPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.50" Key="RUAYVoAqWDKAfzPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAgzPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP4.10" Key="RUAYVoAqWDKAhzPKAAAAAAAA" />
        <air:FareCalc>CCU AI BBI 3200UIP9I AI DEL Q300 5330UIP INR8830END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAjzPKAAAAAA==" TravelTime="P0DT16H0M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAczPKAAAAAA==" SegmentRef="RUAYVoAqWDKA4sPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAizPKAAAAAA==" SegmentRef="RUAYVoAqWDKA7sPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAy2PKAAAAAA==" TotalPrice="GBP122.80" BasePrice="INR10850" ApproximateTotalPrice="GBP122.80" ApproximateBasePrice="GBP105.00" EquivalentBasePrice="GBP105.00" Taxes="GBP17.80" ApproximateTaxes="GBP17.80" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAnzPKAAAAAA==" TotalPrice="GBP122.80" BasePrice="INR10850" ApproximateTotalPrice="GBP122.80" ApproximateBasePrice="GBP105.00" EquivalentBasePrice="GBP105.00" Taxes="GBP17.80" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAmzPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAszPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAozPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.40" Key="RUAYVoAqWDKApzPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAqzPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKArzPKAAAAAAAA" />
        <air:FareCalc>CCU AI GAU 3750UIP9I AI DEL Q300 6800UIP INR10850END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAtzPKAAAAAA==" TravelTime="P0DT12H35M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAmzPKAAAAAA==" SegmentRef="RUAYVoAqWDKA9sPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAszPKAAAAAA==" SegmentRef="RUAYVoAqWDKACtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAwzPKAAAAAA==" TravelTime="P0DT16H0M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAmzPKAAAAAA==" SegmentRef="RUAYVoAqWDKA9sPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAszPKAAAAAA==" SegmentRef="RUAYVoAqWDKAGtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKAz2PKAAAAAA==" TotalPrice="GBP112.70" BasePrice="INR9660" ApproximateTotalPrice="GBP112.70" ApproximateBasePrice="GBP94.00" EquivalentBasePrice="GBP94.00" Taxes="GBP18.70" ApproximateTaxes="GBP18.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA0zPKAAAAAA==" TotalPrice="GBP112.70" BasePrice="INR9660" ApproximateTotalPrice="GBP112.70" ApproximateBasePrice="GBP94.00" EquivalentBasePrice="GBP94.00" Taxes="GBP18.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAzzPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKA5zPKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKA1zPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.90" Key="RUAYVoAqWDKA2zPKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA3zPKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKA4zPKAAAAAAAA" />
        <air:FareCalc>CCU AI IXB Q300 3730UIP AI DEL Q300 5330UIP INR9660END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKA6zPKAAAAAA==" TravelTime="P1DT2H35M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAzzPKAAAAAA==" SegmentRef="RUAYVoAqWDKAItPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA5zPKAAAAAA==" SegmentRef="RUAYVoAqWDKAKtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA02PKAAAAAA==" TotalPrice="GBP111.50" BasePrice="INR9460" ApproximateTotalPrice="GBP111.50" ApproximateBasePrice="GBP92.00" EquivalentBasePrice="GBP92.00" Taxes="GBP19.50" ApproximateTaxes="GBP19.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA+zPKAAAAAA==" TotalPrice="GBP111.50" BasePrice="INR9460" ApproximateTotalPrice="GBP111.50" ApproximateBasePrice="GBP92.00" EquivalentBasePrice="GBP92.00" Taxes="GBP19.50" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKA9zPKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAD0PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP9.00" Key="RUAYVoAqWDKA/zPKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP4.80" Key="RUAYVoAqWDKAA0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAB0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAC0PKAAAAAAAA" />
        <air:FareCalc>CCU AI PAT Q300 4430UIP AI DEL Q300 4430UIP INR9460END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAE0PKAAAAAA==" TravelTime="P0DT18H55M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA9zPKAAAAAA==" SegmentRef="RUAYVoAqWDKAMtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAD0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAOtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAH0PKAAAAAA==" TravelTime="P0DT21H55M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA9zPKAAAAAA==" SegmentRef="RUAYVoAqWDKAMtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAD0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAQtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA12PKAAAAAA==" TotalPrice="GBP119.30" BasePrice="INR10430" ApproximateTotalPrice="GBP119.30" ApproximateBasePrice="GBP101.00" EquivalentBasePrice="GBP101.00" Taxes="GBP18.30" ApproximateTaxes="GBP18.30" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAL0PKAAAAAA==" TotalPrice="GBP119.30" BasePrice="INR10430" ApproximateTotalPrice="GBP119.30" ApproximateBasePrice="GBP101.00" EquivalentBasePrice="GBP101.00" Taxes="GBP18.30" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAK0PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAQ0PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAM0PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.20" Key="RUAYVoAqWDKAN0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAO0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.70" Key="RUAYVoAqWDKAP0PKAAAAAAAA" />
        <air:FareCalc>CCU AI IXA Q300 3100UIP AI DEL Q300 6730UIP INR10430END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAR0PKAAAAAA==" TravelTime="P0DT19H40M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAStPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAQ0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAUtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAU0PKAAAAAA==" TravelTime="P0DT21H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAWtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAQ0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAUtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA22PKAAAAAA==" TotalPrice="GBP127.00" BasePrice="INR11260" ApproximateTotalPrice="GBP127.00" ApproximateBasePrice="GBP109.00" EquivalentBasePrice="GBP109.00" Taxes="GBP18.00" ApproximateTaxes="GBP18.00" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAY0PKAAAAAA==" TotalPrice="GBP127.00" BasePrice="INR11260" ApproximateTotalPrice="GBP127.00" ApproximateBasePrice="GBP109.00" EquivalentBasePrice="GBP109.00" Taxes="GBP18.00" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAX0PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAd0PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAZ0PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP5.60" Key="RUAYVoAqWDKAa0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAb0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAc0PKAAAAAAAA" />
        <air:FareCalc>CCU AI HYD Q300 5330UIP AI DEL Q300 5330UIP INR11260END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAe0PKAAAAAA==" TravelTime="P0DT13H55M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAX0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAYtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAd0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAatPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAh0PKAAAAAA==" TravelTime="P0DT18H50M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAX0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAYtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAd0PKAAAAAA==" SegmentRef="RUAYVoAqWDKActPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA32PKAAAAAA==" TotalPrice="GBP136.50" BasePrice="INR11930" ApproximateTotalPrice="GBP136.50" ApproximateBasePrice="GBP116.00" EquivalentBasePrice="GBP116.00" Taxes="GBP20.50" ApproximateTaxes="GBP20.50" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAl0PKAAAAAA==" TotalPrice="GBP136.50" BasePrice="INR11930" ApproximateTotalPrice="GBP136.50" ApproximateBasePrice="GBP116.00" EquivalentBasePrice="GBP116.00" Taxes="GBP20.50" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAk0PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAq0PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAm0PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.00" Key="RUAYVoAqWDKAn0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAo0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP4.10" Key="RUAYVoAqWDKAp0PKAAAAAAAA" />
        <air:FareCalc>CCU AI IMF 3400UIP9I AI DEL Q300 8230UIP INR11930END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAr0PKAAAAAA==" TravelTime="P0DT12H35M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAk0PKAAAAAA==" SegmentRef="RUAYVoAqWDKA/sPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAq0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAEtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA42PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" ApproximateTaxes="GBP18.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAv0PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAu0PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKA00PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAw0PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.30" Key="RUAYVoAqWDKAx0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAy0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAz0PKAAAAAAAA" />
        <air:FareCalc>CCU AI BLR Q300 5330UIP AI DEL Q300 6730UIP INR12660END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKA10PKAAAAAA==" TravelTime="P0DT6H25M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAu0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAetPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA00PKAAAAAA==" SegmentRef="RUAYVoAqWDKAgtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKA40PKAAAAAA==" TravelTime="P0DT18H45M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAu0PKAAAAAA==" SegmentRef="RUAYVoAqWDKAetPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA00PKAAAAAA==" SegmentRef="RUAYVoAqWDKAitPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA52PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" ApproximateTaxes="GBP18.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA80PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKA70PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAB1PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA90PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.30" Key="RUAYVoAqWDKA-0PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA/0PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAA1PKAAAAAAAA" />
        <air:FareCalc>CCU AI BOM Q300 6730UIP AI DEL Q300 5330UIP INR12660END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAC1PKAAAAAA==" TravelTime="P0DT8H40M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA70PKAAAAAA==" SegmentRef="RUAYVoAqWDKAktPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAB1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAmtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAF1PKAAAAAA==" TravelTime="P0DT10H50M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA70PKAAAAAA==" SegmentRef="RUAYVoAqWDKAktPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAB1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAotPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA62PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" ApproximateTaxes="GBP18.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAJ1PKAAAAAA==" TotalPrice="GBP141.70" BasePrice="INR12660" ApproximateTotalPrice="GBP141.70" ApproximateBasePrice="GBP123.00" EquivalentBasePrice="GBP123.00" Taxes="GBP18.70" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAI1PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAO1PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAK1PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.30" Key="RUAYVoAqWDKAL1PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAM1PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.40" Key="RUAYVoAqWDKAN1PKAAAAAAAA" />
        <air:FareCalc>CCU AI MAA Q300 5330UIP AI DEL Q300 6730UIP INR12660END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAP1PKAAAAAA==" TravelTime="P0DT18H15M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAI1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAqtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAO1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAstPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAS1PKAAAAAA==" TravelTime="P0DT22H20M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAI1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAqtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAO1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAutPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA72PKAAAAAA==" TotalPrice="GBP141.30" BasePrice="INR12630" ApproximateTotalPrice="GBP141.30" ApproximateBasePrice="GBP122.00" EquivalentBasePrice="GBP122.00" Taxes="GBP19.30" ApproximateTaxes="GBP19.30" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAW1PKAAAAAA==" TotalPrice="GBP141.30" BasePrice="INR12630" ApproximateTotalPrice="GBP141.30" ApproximateBasePrice="GBP122.00" EquivalentBasePrice="GBP122.00" Taxes="GBP19.30" LatestTicketingTime="2021-06-18T23:59:00.000+01:00" PricingMethod="Guaranteed" Refundable="true" PlatingCarrier="AI" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAV1PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAb1PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP8.10" Key="RUAYVoAqWDKAX1PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP6.20" Key="RUAYVoAqWDKAY1PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAZ1PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.70" Key="RUAYVoAqWDKAa1PKAAAAAAAA" />
        <air:FareCalc>CCU AI IMF Q300 3800UIP AI DEL Q300 8230UIP INR12630END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAc1PKAAAAAA==" TravelTime="P0DT7H20M0S">
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAV1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAwtPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAb1PKAAAAAA==" SegmentRef="RUAYVoAqWDKAEtPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA82PKAAAAAA==" TotalPrice="GBP155.90" BasePrice="INR14013" ApproximateTotalPrice="GBP155.90" ApproximateBasePrice="GBP136.00" EquivalentBasePrice="GBP136.00" Taxes="GBP19.90" ApproximateTaxes="GBP19.90" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAg1PKAAAAAA==" TotalPrice="GBP155.90" BasePrice="INR14013" ApproximateTotalPrice="GBP155.90" ApproximateBasePrice="GBP136.00" EquivalentBasePrice="GBP136.00" Taxes="GBP19.90" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" PlatingCarrier="UK" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAf1PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAl1PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAh1PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.00" Key="RUAYVoAqWDKAi1PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAj1PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAk1PKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK UDR Q CCUUDR1225 8166V1NUKYF/YF UK DEL Q603 4019V1NUKYF/YF INR14013END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAm1PKAAAAAA==" TravelTime="P0DT23H10M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA6tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAl1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA8tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAq1PKAAAAAA==" TravelTime="P1DT6H20M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAf1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA6tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAl1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA8tPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA92PKAAAAAA==" TotalPrice="GBP155.60" BasePrice="INR14189" ApproximateTotalPrice="GBP155.60" ApproximateBasePrice="GBP137.00" EquivalentBasePrice="GBP137.00" Taxes="GBP18.60" ApproximateTaxes="GBP18.60" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAv1PKAAAAAA==" TotalPrice="GBP155.60" BasePrice="INR14189" ApproximateTotalPrice="GBP155.60" ApproximateBasePrice="GBP137.00" EquivalentBasePrice="GBP137.00" Taxes="GBP18.60" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" PlatingCarrier="UK" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAu1PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKA01PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAw1PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.00" Key="RUAYVoAqWDKAx1PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAy1PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP2.60" Key="RUAYVoAqWDKAz1PKAAAAAAAA" />
        <air:FareCalc>CCU UK BOM Q1031 6869V1NUKYF/YF UK DEL Q821 5469V1NUKYF/YF INR14188END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKA11PKAAAAAA==" TravelTime="P0DT6H30M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAu1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA01PKAAAAAA==" SegmentRef="RUAYVoAqWDKAEuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKA41PKAAAAAA==" TravelTime="P0DT9H15M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAu1PKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA01PKAAAAAA==" SegmentRef="RUAYVoAqWDKAGuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA+2PKAAAAAA==" TotalPrice="GBP160.10" BasePrice="INR14403" ApproximateTotalPrice="GBP160.10" ApproximateBasePrice="GBP140.00" EquivalentBasePrice="GBP140.00" Taxes="GBP20.10" ApproximateTaxes="GBP20.10" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKA81PKAAAAAA==" TotalPrice="GBP160.10" BasePrice="INR14403" ApproximateTotalPrice="GBP160.10" ApproximateBasePrice="GBP140.00" EquivalentBasePrice="GBP140.00" Taxes="GBP20.10" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" PlatingCarrier="UK" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKA71PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAB2PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKA91PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.20" Key="RUAYVoAqWDKA-1PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKA/1PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAA2PKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK IXC Q CCUIXC1388 9254V1NUKYF/YF UK DEL Q342 3419U0RPRPS/PS INR14403END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAC2PKAAAAAA==" TravelTime="P0DT22H55M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" SegmentRef="RUAYVoAqWDKAIuPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="5" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAB2PKAAAAAA==" SegmentRef="RUAYVoAqWDKAKuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAG2PKAAAAAA==" TravelTime="P1DT2H20M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKA71PKAAAAAA==" SegmentRef="RUAYVoAqWDKAIuPKAAAAAA==" />
              <air:BookingInfo BookingCode="U" BookingCount="9" CabinClass="PremiumEconomy" FareInfoRef="RUAYVoAqWDKAB2PKAAAAAA==" SegmentRef="RUAYVoAqWDKAMuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
    <air:AirPricePoint Key="RUAYVoAqWDKA/2PKAAAAAA==" TotalPrice="GBP172.70" BasePrice="INR15681" ApproximateTotalPrice="GBP172.70" ApproximateBasePrice="GBP152.00" EquivalentBasePrice="GBP152.00" Taxes="GBP20.70" ApproximateTaxes="GBP20.70" CompleteItinerary="true">
      <air:AirPricingInfo Key="RUAYVoAqWDKAL2PKAAAAAA==" TotalPrice="GBP172.70" BasePrice="INR15681" ApproximateTotalPrice="GBP172.70" ApproximateBasePrice="GBP152.00" EquivalentBasePrice="GBP152.00" Taxes="GBP20.70" LatestTicketingTime="2021-06-17T23:59:00.000+01:00" PricingMethod="GuaranteedUsingAirlinePrivateFare" Refundable="true" PlatingCarrier="UK" ProviderCode="1G">
        <air:FareInfoRef Key="RUAYVoAqWDKAK2PKAAAAAA==" />
        <air:FareInfoRef Key="RUAYVoAqWDKAQ2PKAAAAAA==" />
        <air:TaxInfo Category="IN" Amount="GBP6.70" Key="RUAYVoAqWDKAM2PKAAAAAAAA" />
        <air:TaxInfo Category="K3" Amount="GBP7.80" Key="RUAYVoAqWDKAN2PKAAAAAAAA" />
        <air:TaxInfo Category="P2" Amount="GBP2.30" Key="RUAYVoAqWDKAO2PKAAAAAAAA" />
        <air:TaxInfo Category="YR" Amount="GBP3.90" Key="RUAYVoAqWDKAP2PKAAAAAAAA" />
        <air:FareCalc>CCU UK X/BOM UK HYD Q CCUHYD1225 8166V1NUKYF/YF UK DEL Q821 5469V1NUKYF/YF INR15681END</air:FareCalc>
        <air:PassengerType Code="ADT" />
        <air:ChangePenalty>
          <air:Amount>GBP24.00</air:Amount>
        </air:ChangePenalty>
        <air:CancelPenalty>
          <air:Amount>GBP29.00</air:Amount>
        </air:CancelPenalty>
        <air:FlightOptionsList>
          <air:FlightOption LegRef="RUAYVoAqWDKAiuPKAAAAAA==" Destination="DEL" Origin="CCU">
            <air:Option Key="RUAYVoAqWDKAR2PKAAAAAA==" TravelTime="P0DT18H55M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" SegmentRef="RUAYVoAqWDKA4tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" SegmentRef="RUAYVoAqWDKAOuPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAQ2PKAAAAAA==" SegmentRef="RUAYVoAqWDKAQuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
            <air:Option Key="RUAYVoAqWDKAV2PKAAAAAA==" TravelTime="P0DT22H35M0S">
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" SegmentRef="RUAYVoAqWDKA+tPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAK2PKAAAAAA==" SegmentRef="RUAYVoAqWDKASuPKAAAAAA==" />
              <air:BookingInfo BookingCode="V" BookingCount="9" CabinClass="Economy" FareInfoRef="RUAYVoAqWDKAQ2PKAAAAAA==" SegmentRef="RUAYVoAqWDKAUuPKAAAAAA==" />
              <air:Connection SegmentIndex="0" />
              <air:Connection SegmentIndex="1" />
            </air:Option>
          </air:FlightOption>
        </air:FlightOptionsList>
      </air:AirPricingInfo>
    </air:AirPricePoint>
  </air:AirPricePointList>
  <air:BrandList>
    <air:Brand Key="RUAYVoAqWDKAL5PKAAAAAA==" BrandID="803575" Name="ECO STANDARD" BrandedDetailsAvailable="true" Carrier="UK">
      <air:Title Type="External" LanguageCode="EN">ECO STANDARD</air:Title>
      <air:Title Type="Short" LanguageCode="EN">ECOYS</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Economy Standard and enjoy gourmet meal, added flexibility, and more</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">ECO STANDARD

• Complimentary beverage on board (tea/coffee)
• 15 kg (1 piece only) Check-in Baggage Allowance
• Hand Baggage included
• Complimentary advance seat selection, select seats only
• Buy-on-board light snacks
• Changes permitted at a fee
• Refunds before departure at a fee

• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">ECO STANDARD</air:Text>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/vistara/UK_general_large_80634.jpg</air:ImageLocation>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="150">https://cdn.travelport.com/vistara/UK_general_medium_80633.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAN5PKAAAAAA==" BrandID="361793" Name="Economy Semi Flex" BrandedDetailsAvailable="true" Carrier="AI">
      <air:Title Type="External" LanguageCode="EN">Economy Semi Flex</air:Title>
      <air:Title Type="Short" LanguageCode="EN">EcoSFlex</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Economy Semi Flex fares which include no show against a fee within an hour of departure</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">Included in your ECONOMY SEMI FLEX fare are:

**The option to no show against a fee within an hour of departure**

•  Check in 25kg baggage allowance. 
•  Carry on one bag max 8kg. 
•  Choice of continental or Indian cuisine non veg or veg. 
•  Complimentary liquors and wine. 
•  Spacious seats with a pitch of 33 inches. 
•  Rebooking against a fee until 1hr prior departure. 
•  Refunds against a fee until 1hr prior departure. 
•  Earn miles when you fly.

Note: Refer to fare rules for specific booking terms and conditions.
• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">The fare with some additional flexibility added</air:Text>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/airindia/AI_general_large_42653.jpg</air:ImageLocation>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="149">https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAP5PKAAAAAA==" BrandID="361790" Name="Economy Saver" BrandedDetailsAvailable="true" Carrier="AI">
      <air:Title Type="External" LanguageCode="EN">Economy Saver</air:Title>
      <air:Title Type="Short" LanguageCode="EN">EcoSaver</air:Title>
      <air:Text Type="MarketingAgent" LanguageCode="EN">Included in your ECONOMY SAVER fare are:

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
      <air:Text Type="Strapline" LanguageCode="EN">For our budget minded travellers</air:Text>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/airindia/AI_general_large_42653.jpg</air:ImageLocation>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="149">https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAR5PKAAAAAA==" BrandID="803574" Name="ECO FLEXI" BrandedDetailsAvailable="true" Carrier="UK">
      <air:Title Type="External" LanguageCode="EN">ECO FLEXI</air:Title>
      <air:Title Type="Short" LanguageCode="EN">ECOYF</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Economy Flexi and enjoy added flexibility, priority handling, extra baggage allowance, and more</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">ECO FLEX

• Complimentary beverage on board (tea/coffee)
• 20 kg (1 piece only) Check-in Baggage Allowance
• Hand Baggage included
• Complimentary advance seat selection
• Buy-on-board light snacks
• Changes permitted 
• Refunds before departure permitted

• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">ECO FLEXI</air:Text>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/vistara/UK_general_large_80634.jpg</air:ImageLocation>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="150">https://cdn.travelport.com/vistara/UK_general_medium_80633.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAT5PKAAAAAA==" BrandID="803573" Name="PEY VALUE" BrandedDetailsAvailable="true" Carrier="UK">
      <air:Title Type="External" LanguageCode="EN">PEY VALUE</air:Title>
      <air:Title Type="Short" LanguageCode="EN">PREPV</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Premium Economy Class for additional space and comfort</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">PEY VALUE

• Complimentary beverage on board (tea/coffee)
• Complimentary hot meal on board
• 20 kg (1 piece only) Check-in Baggage Allowance
• Hand Baggage included
• Complimentary advance seat selection
• Changes permitted at a fee
• Refunds before departure permitted at a fee

• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">PEY VALUE</air:Text>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="150">https://cdn.travelport.com/vistara/UK_general_medium_80635.jpg</air:ImageLocation>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/vistara/UK_general_large_80636.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAV5PKAAAAAA==" BrandID="361788" Name="Economy Basic" BrandedDetailsAvailable="true" Carrier="AI">
      <air:Title Type="External" LanguageCode="EN">Economy Basic</air:Title>
      <air:Title Type="Short" LanguageCode="EN">EcoBasic</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Economy Basic fares which offer rebooking against a fee until 1 hour prior departure</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">Included in your ECONOMY BASIC fare are:

•  Check in 25kg baggage allowance. 
•  Carry on one bag max 8kg. 
•  Choice of continental or Indian cuisine non veg or veg. 
•  Complimentary liquors and wine. 
•  Spacious seats with a pitch of 33 inches. 
•  Rebooking against a fee until 1hr prior departure. 
•  Refunds against a fee until 1hr prior departure. 
•  Earn miles when you fly.

Note: Refer to fare rules for specific booking terms and conditions.
• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">Always good deals</air:Text>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/airindia/AI_general_large_42653.jpg</air:ImageLocation>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="149">https://cdn.travelport.com/airindia/AI_general_medium_2171.jpg</air:ImageLocation>
    </air:Brand>
    <air:Brand Key="RUAYVoAqWDKAX5PKAAAAAA==" BrandID="803572" Name="PEY STANDARD" BrandedDetailsAvailable="true" Carrier="UK">
      <air:Title Type="External" LanguageCode="EN">PEY STANDARD</air:Title>
      <air:Title Type="Short" LanguageCode="EN">PREPS</air:Title>
      <air:Text Type="Upsell" LanguageCode="EN">Upgrade to Premium Economy Standard and enjoy extra baggage allowance, lower change/cancellation fees, and more</air:Text>
      <air:Text Type="MarketingAgent" LanguageCode="EN">PEY STANDARD

• Complimentary beverage on board (tea/coffee)
• Complimentary hot meal on board
• 25 kg (1 piece only) Check-in Baggage Allowance
• Hand Baggage included
• Complimentary advance seat selection
• Changes permitted at a fee
• Refunds permitted at a fee

• Please note that if the flight is operated by another airline then the onboard product or service maybe different to that described above.</air:Text>
      <air:Text Type="Strapline" LanguageCode="EN">PEY STANDARD</air:Text>
      <air:ImageLocation Type="Agent" ImageWidth="150" ImageHeight="150">https://cdn.travelport.com/vistara/UK_general_medium_80635.jpg</air:ImageLocation>
      <air:ImageLocation Type="Consumer" ImageWidth="1400" ImageHeight="800">https://cdn.travelport.com/vistara/UK_general_large_80636.jpg</air:ImageLocation>
    </air:Brand>
  </air:BrandList>
</air:LowFareSearchRsp>