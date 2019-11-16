import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, Button } from 'antd';
import { FaPlaneDeparture, FaRegBuilding, FaCar, FaHiking } from "react-icons/fa";
import { FormattedMessage, useIntl } from 'react-intl';

const ButtonGroup = Button.Group;

const EnquiryOptions = () => {
  const intl = useIntl();
  const [enquiry, setEnquiry] = useContext(EnquiryContext);

  const updateFlights = (e) => {
    const flightQuery = !enquiry.flights;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, flights: flightQuery }
    });
    console.log(flightQuery);
  }

  const updateAccommodation = (e) => {
    const accommodationQuery = !enquiry.accommodation;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, accommodation: accommodationQuery }
    });
  }

  const updateTransport = (e) => {
    const transportQuery = !enquiry.transport;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, transport: transportQuery }
    });
  }

  const updateActivities = (e) => {
    const activitiesQuery = !enquiry.activities;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, activities: activitiesQuery }
    });
  }

  return (
    <Form.Item label={intl.formatMessage({id:'Options.label'})} required>
      <ButtonGroup>
        <Button type="primary" ghost={!enquiry.flights} onClick={updateFlights}>
          <FaPlaneDeparture />&nbsp; <FormattedMessage id="Options.flights" />
        </Button>
        <Button type="primary" ghost={!enquiry.accommodation} onClick={updateAccommodation}>
          <FaRegBuilding />&nbsp; <FormattedMessage id="Options.accommodation" />
        </Button>
        <Button type="primary" ghost={!enquiry.transport} onClick={updateTransport}>
          <FaCar />&nbsp; <FormattedMessage id="Options.transport" />
          </Button>
        <Button type="primary" ghost={!enquiry.activities} onClick={updateActivities}>
        <FaHiking />&nbsp; <FormattedMessage id="Options.activities" />
          </Button>
      </ButtonGroup>
    </Form.Item>
  )
}

export default EnquiryOptions;
