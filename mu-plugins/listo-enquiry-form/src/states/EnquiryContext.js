import React, { useState, createContext } from 'react';

const EnquiryContext = createContext();

const browserLanguage = navigator.language.split(/[-_]/)[0];

const EnquiryProvider = (props) => {
  const initialState = {
    formLanguage: browserLanguage,
    destination: null,
    roundTrip: 'round trip',
    departureDate: null,
    returnDate: null,
    flexibility: null,
    companions: 'alone',
    numberOfAdults: 1,
    numberOfKids: 0,
    numberOfBabies: 0,
    budget: [200,2500],
    flights: true,
    accommodation: false,
    transport: false,
    activities: false,
    comments: null,
    email: null,
    phoneNumber: null,
    byEmail: true,
    byPhoneCall: false,
    bySMS: false,
    phoneSMS: null,
    byWhatsApp: false,
    whatsapp: null,
    byViber: false,
    viber: null,
    byFacebookMessenger: false,
    facebookMessenger: null,
    bySkype: false,
    skype: null,
    advancedOptions: false,
    flightClass: null,
    food: null,
    seat: null,
    propertyType: null,
    rating: null,    
    transportType: null,
    carType: null,
    theme: null,    
  }

  const [enquiry, setEnquiry] = useState(initialState);

  return (
    <EnquiryContext.Provider value={[enquiry,setEnquiry]}>
      {props.children}
    </EnquiryContext.Provider>
  )
}

export { EnquiryProvider, EnquiryContext };
