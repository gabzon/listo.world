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
            return { ...prevEnquiry, departureDate: dates[0], returnDate: dates[1] }
        });
    }

    const updateDate = (e, date) => {
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, departureDate: date,  }
        });
    }

    const displayDatePicker = () => {
        if ( enquiry.roundTrip === 'round trip') { return true }
        if ( enquiry.roundTrip === 'one way') { return false }
        if ( enquiry.roundTrip === 'multicity') { return true }
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
                    <Col xs={24} sm={24} md={8} lg={8}>                    
                        {getFieldDecorator('flexibility', flexibilityOptions)(
                            <Select placeholder="Flexibility" onChange={updateFlexibility}>
                                <Option value="Exact dates"><FormattedMessage id="Flexibility.exact"/></Option>
                                <Option value="+/- 3 days">+/- 3 <FormattedMessage id="Flexibility.days"/></Option>
                                <Option value="+/- 1 week">+/- 1 <FormattedMessage id="Flexibility.week"/></Option>
                                <Option value="+/- 2 weeks">+/- 2 <FormattedMessage id="Flexibility.weeks"/></Option>
                                <Option value="+/- 1 Month">+/- 1 <FormattedMessage id="Flexibility.month"/></Option>
                                <Option value="Weekend"><FormattedMessage id="Flexibility.weekend"/></Option>
                                <Option value="Long weekend"><FormattedMessage id="Flexibility.longWeekend"/></Option>
                                <Option value="Best Period"><FormattedMessage id="Flexibility.best"/></Option>
                            </Select>
                        )}
                    </Col>
                    <Col xs={23} sm={23} md={13} lg={13}>
                        <Radio.Group value={enquiry.roundTrip} onChange={updateRoundTrip}>
                            <Radio.Button value="round trip"><FormattedMessage id="Mode.RoundTrip" /></Radio.Button>
                            <Radio.Button value="one way"><FormattedMessage id="Mode.Oneway" /></Radio.Button>
                            <Radio.Button value="multicity"><FormattedMessage id="Mode.Multicity" /></Radio.Button>
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