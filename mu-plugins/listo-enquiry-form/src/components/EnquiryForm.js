// How to update multiple properties objects with useState
//https://blog.logrocket.com/a-guide-to-usestate-in-react-ecb9952e406c/

import React from 'react';
import { FormattedMessage } from 'react-intl';
//import { EnquiryContext } from '../states/EnquiryContext';

import FormLanguage from './form/language/FormLanguage';
import Destination from './form/destination/Destination';
import TravelDates from './form/dates/TravelDates';
import Budget from './form/budget/Budget';
import EnquiryOptions from './form/options/EnquiryOptions';
import SelectCompanions from './form/companions/Companions';
import Comments from './form/comments/Comments';
import ContactMode from './form/contact/ContactMode';
import AdvancedOptions from './form/advanced/AdvancedOptions';
import { EnquiryContext } from '../states/EnquiryContext';
import axios from 'axios';
import WPAPI from 'wpapi';

import {
  Row,
  Col,
  Form,
  Button,
  message,
} from 'antd';


function FormLayout(props) {

  const { form } = props;

  const formItemLayout = {
    labelCol: { span: 5 },
    wrapperCol: { span: 18 },
  }

  const [enquiry] = React.useContext(EnquiryContext);

  const handleInquiry = (e) => {
    e.preventDefault();

    props.form.validateFields((err, values) => {
      if (!err) {
        console.log('Received values of form: ', values);

        const wp = new WPAPI({
          endpoint: window.wpApiSettings.endpoint,
          nonce: window.wpApiSettings.nonce
        });

        wp.enquiries = wp.registerRoute("wp/v2", "/enquiries/");

        const isList = (field) => {
          if (field != null) {
            return field.join();
          } else {
            return "";
          }
        }

        

        wp.enquiries().create({
          title: enquiry.destination.join(),
          content: enquiry.comments,
          round_trip: enquiry.roundTrip,
          companions: enquiry.companions,
          departure_date: enquiry.departureDate,
          return_date: enquiry.returnDate,
          destination: enquiry.destination.join(),
          flexibility: enquiry.flexibility,
          companions: enquiry.companions,
          number_of_adults: enquiry.numberOfAdults.toString(),
          number_of_kids: enquiry.numberOfKids,
          number_of_babies: enquiry.numberOfBabies,
          budget: enquiry.budget.join(),
          flight_options: enquiry.flights ? "1" : "0",
          accommodation_options: enquiry.accommodation ? "1" : "0",
          transport_options: enquiry.transport ? "1" : "0",
          activities_options: enquiry.activities ? "1" : "0",
          by_email: enquiry.byEmail ? "1" : "0",
          email: enquiry.email,
          by_phone_call: enquiry.byPhoneCall ? "1" : "0",
          phone_number: enquiry.phoneNumber,
          by_sms: enquiry.bySMS ? "1" : "0",
          sms_number: enquiry.phoneSMS,
          by_whatsapp: enquiry.byWhatsApp ? "1" : "0",
          whatsapp: enquiry.whatsapp,
          by_viber: enquiry.byViber ? "1" : "0",
          viber: enquiry.viber,
          by_facebook_messenger: enquiry.byFacebookMessenger ? "1" : "0",
          facebook_messenger: enquiry.facebookMessenger,
          by_skype: enquiry.bySkype ? "1" : "0",
          skype: enquiry.skype,
          advanced_options: enquiry.advancedOptions ? "1" : "0",
          flight_class: enquiry.flightClass,
          food_type: isList(enquiry.food),
          seat_preference: enquiry.seat,
          property_type: isList(enquiry.propertyType),
          property_rating: Number.isInteger(enquiry.rating) ? enquiry.rating.toString() : "",
          transport_type: isList(enquiry.transportType),
          car_type: isList(enquiry.carType),
          themes: isList(enquiry.theme),
          status: 'publish'
        }).then(function (response) {
          message
          .success('Your request has been submitted successfully. Please check your email in a few seconds for more information. Please check on your spam folder in case you did not received any email after 5 minutes', 5)
          .then(props.form.resetFields());
          console.log("enquiry", response, "enquiry");          
        }).catch(e => console.log(e));        
      }      
    });
  }

  return (
    <Row className="bg-white pt-2 mt-2">
      <Col span={24}>
        <Form layout="horizontal" onSubmit={handleInquiry} className="" {...formItemLayout}>
          <FormLanguage form={form} />
          <Destination form={form} />
          <TravelDates form={form} />
          <SelectCompanions form={form} />
          <EnquiryOptions />
          <Budget form={form} />
          <AdvancedOptions />
          <Comments />
          <ContactMode form={form} />
          <Form.Item wrapperCol={{ span: 12, offset: 5 }}>
            <Button type="primary" htmlType="submit" icon="container" shape="round">
              <FormattedMessage id="Form.submit" />
            </Button>
          </Form.Item>
        </Form>
      </Col>
    </Row>
  )
}

const EnquiryForm = Form.create({ name: 'Enquiry' })(FormLayout);

export default EnquiryForm;


