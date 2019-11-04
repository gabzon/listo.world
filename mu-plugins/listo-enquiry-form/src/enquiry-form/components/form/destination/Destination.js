import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, Input, Icon } from 'antd';
import { FormattedMessage, useIntl } from 'react-intl';
//import GooglePlacesAutocomplete from 'react-google-places-autocomplete';
//import PlacesAutocomplete, { Suggestion } from "react-places-autocomplete";
//https://gist.github.com/PhilipTKC/7ba3fbdc1d7faa2bfcb846d6dac2491e
// http://www.geonames.org/
// http://geobytes.com/free-ajax-cities-jsonp-api/
// https://github.com/lutangar/cities.json
// https://datahub.io/core/country-list
// https://peric.github.io/GetCountries/
// https://restcountries.eu
// http://country.io
// https://gist.github.com/Keeguon/2310008

let id = 1;
let dest = [];

const Destination = ({ form }) => {
    const intl = useIntl();
    const { getFieldDecorator, getFieldValue } = form;
    const [enquiry, setEnquiry] = useContext(EnquiryContext);

    const updateDestination = (e) => {
        const value = e.target.value;
        const key = e.target.id;
        const keyID = key.charAt(20)

        dest[keyID] = value;

        setEnquiry(prevEnquiy => {
            return { ...prevEnquiy, destination: dest }
        });
    }


    const remove = k => {
        const keys = form.getFieldValue('keys');

        if (keys.length === 1) { return; }

        console.log(k);

        dest.splice(k, 1);

        console.log(enquiry.destination)

        form.setFieldsValue({
            keys: keys.filter(key => key !== k),
        });

        setEnquiry(prevEnquiy => {
            return { ...prevEnquiy, destination: dest }
        });
    };

    const addDestination = () => {
        const keys = form.getFieldValue('keys');

        const nextKeys = keys.concat(id++);

        form.setFieldsValue({
            keys: nextKeys,
        });
    };

    const destinationFieldOptions = {
        validateTrigger: ['onChange', 'onBlur'],
        rules: [{
            required: true,
            message: <FormattedMessage id="Destination.required" />,
        },]
    }

    const formItemLayout = {
        labelCol: {
            xs: { span: 24 },
            sm: { span: 5 },
        },
        wrapperCol: {
            xs: { span: 24 },
            sm: { span: 18 },
        },
    };

    const formItemLayoutWithOutLabel = {
        wrapperCol: {
            xs: { span: 24, offset: 0 },
            sm: { span: 18, offset: 5 },
        },
    };

    getFieldDecorator('keys', { initialValue: [0] });

    const keys = getFieldValue('keys');

    const addMoreDestinations = () => {
        if (enquiry.roundTrip === 'multiple') {
            return true;
        }
        return false;
    }

    const destinationInputField = () => (
        <Input placeholder={intl.formatMessage({id:"Destination.placeholder"})} style={{ width: '90%', marginRight: 5 }} size="large" onChange={updateDestination} />
    )

    const formItems = keys.map((k, index) => (
        < Form.Item
            {...(index === 0 ? formItemLayout : formItemLayoutWithOutLabel)}
            label={index === 0 ? <FormattedMessage id="Destination.label" /> : ''}
            required={false}
            key={k} > {
                getFieldDecorator(`destination[${k}]`, destinationFieldOptions)(destinationInputField())} {
                keys.length > 1 ? (<
                    Icon className="dynamic-delete-button"
                    type="minus-circle-o"
                    onClick={
                        () => remove(k)
                    }
                    style={
                        { margin: '0 5px' }
                    }
                />
                ) : null
            } {
                addMoreDestinations() ? (< Icon className="dynamic-delete-button" type="plus-circle-o" onClick={() => addDestination(k)} />) : null
            }
        </Form.Item >
    ));

    return (
        <>
            {formItems}
        </>

    )
}

export default Destination;


