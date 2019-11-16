//TODO: //https://www.alternativeairlines.com/vegan-vegetarian-airline-food

import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { SelectPlaneClass, SelectPlaneFood, SelectPlaneSeat } from './flightOptions';
import { SelectAccomodationType, SelectAccomodationRating } from './accommodationOptions';
import { SelectTransportType, SelectCarType } from './transportOptions';
import ActivitiesOptions from './activitiesOptions';
import { useIntl } from 'react-intl';

import { Form, Switch, Icon } from 'antd';

const AdvancedOptions = () => {
    const intl = useIntl();
    const [enquiry, setEnquiry] = useContext(EnquiryContext);

    // const updateAdvancedOptions = (e) => {
    //     setEnquiry(prevEnquiry => {
    //         return { ...prevEnquiry, advancedOptions: e }
    //     })
    // }

    const updateFlightClass = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, flightClass: e } })
    }

    const updateFoodSelection = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, food: e } })
    }

    const updateSeatTypePreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, seat: e } })
    }

    const updatePropertyTypePreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, propertyType: e } })
    }

    const updateAccommodationRatingPreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, rating: e } })
    }

    const updateTransportTypePreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, transportType: e } })
    }

    const updateCarTypePreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, carType: e } })
    }

    const updateThemePreference = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, theme: e } })
    }

    return (
        <>
            <Form.Item label={intl.formatMessage({ id: "Advanced.label" })}>
                <Switch onChange={(checked, event) => setEnquiry(prevEnquiry => { return { ...prevEnquiry, advancedOptions: checked } })} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} />
            </Form.Item>

            {
                enquiry.advancedOptions && enquiry.flights ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.flightClass.label" })}>
                        <SelectPlaneClass handleClass={updateFlightClass} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.flights ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.food.label" })} help={intl.formatMessage({ id: "Advanced.food.help" })}>
                        <SelectPlaneFood handleFood={updateFoodSelection} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.flights && (enquiry.companions === 'alone') ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.seat.label" })} help={intl.formatMessage({ id: "Advanced.seat.help" })}>
                        <SelectPlaneSeat handleSeat={updateSeatTypePreference} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.accommodation ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.hostingType.label" })}>
                        <SelectAccomodationType handleProperty={updatePropertyTypePreference} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.accommodation ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.rating.label" })}>
                        <SelectAccomodationRating handleRating={updateAccommodationRatingPreference} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.transport ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.transportType.label" })}>
                        <SelectTransportType handleTransportType={updateTransportTypePreference} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.transport ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.carType.label" })}>
                        <SelectCarType handleCarType={updateCarTypePreference} />
                    </Form.Item>
                    : null
            }

            {
                enquiry.advancedOptions && enquiry.activities ?
                    <Form.Item label={intl.formatMessage({ id: "Advanced.themes.label" })}>
                        <ActivitiesOptions handleThemes={updateThemePreference} />
                    </Form.Item>
                    : null
            }

        </>
    )
}

export default AdvancedOptions;