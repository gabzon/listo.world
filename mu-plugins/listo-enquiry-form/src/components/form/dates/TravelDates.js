import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, DatePicker, Row, Col, Select, Radio } from 'antd';
import { FormattedMessage, useIntl } from 'react-intl';

const { Option } = Select;
const { RangePicker } = DatePicker;

const TravelDates = ({ form }) => {
    const intl = useIntl();
    const { getFieldDecorator } = form;
    const [enquiry, setEnquiry] = useContext(EnquiryContext);

    const dateFormat = 'YYYY/MM/DD';

    const updateRoundTrip = (e) => {
        let roundTrip = e.target.value;        
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, roundTrip: roundTrip }
        });
    }

    const updateFlexibility = (e) => {
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, flexibility: e }
        })        
    }

    const updateDates = (e, dates) => {
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, deparetureDate: dates[0], returnDate: dates[1] }
        });
    }

    const updateDate = (e, date) => {
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, deparetureDate: date,  }
        });
    }

    const displayDatePicker = () => {
        if ( enquiry.roundTrip === 'round trip') { return true }
        if ( enquiry.roundTrip === 'one way') { return false }
        if ( enquiry.roundTrip === 'multiple') { return true }
    }

    const datesFieldOptions = {
        rules: [
            {
                required: true,
                message: <FormattedMessage id="Dates.required" />,
            },
        ]
    }
    const flexibilityOptions = {
        rules: [
            {
                required: true,
                message: <FormattedMessage id="Flexibility.required" />
            }
        ]
    }

    return (
        <>
            <Form.Item label="Flexibility">
                <Row>
                    <Col span={8}>                    
                        {getFieldDecorator('flexibility', flexibilityOptions)(
                            <Select placeholder="Flexibility" onChange={updateFlexibility}>
                                <Option value="exact"><FormattedMessage id="Flexibility.exact"/></Option>
                                <Option value="+/- 3 days">+/- 3 <FormattedMessage id="Flexibility.days"/></Option>
                                <Option value="+/- 1 week">+/- 1 <FormattedMessage id="Flexibility.week"/></Option>
                                <Option value="+/- 2 weeks">+/- 2 <FormattedMessage id="Flexibility.weeks"/></Option>
                                <Option value="+/- 1 Month">+/- 1 <FormattedMessage id="Flexibility.month"/></Option>
                                <Option value="whenever"><FormattedMessage id="Flexibility.whenever"/></Option>
                            </Select>
                        )}
                    </Col>
                    <Col span={13} offset={1}>
                        <Radio.Group value={enquiry.roundTrip} onChange={updateRoundTrip}>
                            <Radio.Button value="round trip"><FormattedMessage id="Mode.RoundTrip" /></Radio.Button>
                            <Radio.Button value="one way"><FormattedMessage id="Mode.Oneway" /></Radio.Button>
                            <Radio.Button value="multiple"><FormattedMessage id="Mode.Multiple" /></Radio.Button>
                        </Radio.Group>
                    </Col>
                </Row>
            </Form.Item>
            <Form.Item label={intl.formatMessage({id: "Dates.label"})}>                
                { displayDatePicker() ?
                    getFieldDecorator('travelDates', datesFieldOptions)(
                        <RangePicker
                            format={dateFormat}
                            onChange={updateDates}
                            placeholder={[intl.formatMessage({id: "Dates.departure"}), intl.formatMessage({id: "Dates.return"})]} />
                    )
                    : getFieldDecorator('travelDates', datesFieldOptions)(<DatePicker placeholder={intl.formatMessage({id:"Dates.single"})} onChange={updateDate} format={dateFormat} />)                                         
                }
            </Form.Item>
        </>
    )
}

export default TravelDates;