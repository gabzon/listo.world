
import React, { useContext } from 'react'
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Select, Form, Row, Col, InputNumber } from 'antd';
import { FormattedMessage, useIntl } from 'react-intl';

const { Option } = Select;

const SelectCompanions = ({ form }) => {
    const intl = useIntl();
    const { getFieldDecorator } = form;

    const [enquiry, setEnquiry] = useContext(EnquiryContext);

    const updateCompanion = (e) => {
        const companion = e;
        if (companion === 'alone') {
            setEnquiry(prevEnquiry => {
                return { ...prevEnquiry, companions: companion, numberOfAdults: 1, numberOfKids: 0, numberOfBabies: 0 }
            });
        } else if (companion === 'companion') {
            setEnquiry(prevEnquiry => {
                return { ...prevEnquiry, companions: companion, numberOfAdults: 2, numberOfKids: 0, numberOfBabies: 0 }
            });
        } else {
            setEnquiry(prevEnquiry => {
                return { ...prevEnquiry, companions: companion }
            });
        }
    }

    const updateNumberOfAdults = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, numberOfAdults: e } })
    }

    const updateNumberOfKids = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, numberOfKids: e } })
    }

    const updateNumberOfBabies = (e) => {
        setEnquiry(prevEnquiry => { return { ...prevEnquiry, numberOfBabies: e } })
    }

    const displaySelect = (companion, isAdult) => {
        if (companion === 'alone') { return false; }
        if (companion === 'couple') { return false; }
        if (companion === 'family') { return true; }
        if (companion === 'group') { return true; }
        if (companion === 'friends') { return true; }
        if (companion === 'colleagues') {
            if (isAdult) {
                return true;
            }
            return false;
        }
    }

    const AdultsDecorator = {
        rules: [
            {
                required: displaySelect(enquiry.companions, true),
                message: 'Please enter the number of adults',
            },
        ],
    }

    return (

        <>
            <Form.Item label={intl.formatMessage({id:'Companions.label'})} required hasFeedback>
                <Select placeholder={intl.formatMessage({id:'Companions.placeholder'})} onChange={updateCompanion} required>
                    <Option value="alone"><FormattedMessage id="Companions.alone" /></Option>
                    <Option value="couple"><FormattedMessage id="Companions.couple" /></Option>
                    <Option value="family"><FormattedMessage id="Companions.family" /></Option>
                    <Option value="colleagues"><FormattedMessage id="Companions.colleagues" /></Option>
                    <Option value="friends"><FormattedMessage id="Companions.friends" /></Option>
                    <Option value="group"><FormattedMessage id="Companions.group" /></Option>
                </Select>
            </Form.Item>

            <Row>
                {displaySelect(enquiry.companions, true) ? <Col xs={8} sm={16} md={24} lg={5}></Col> : null}

                {
                    displaySelect(enquiry.companions, true) ?
                        <Col xs={24} sm={16} md={24} lg={6}>
                            <Form.Item help={intl.formatMessage({id:"Companions.numberAdults.help"})}>
                                {getFieldDecorator('numberOfAdults', AdultsDecorator)(
                                    <InputNumber min={1} onChange={updateNumberOfAdults} style={{ width: '100%' }} allowClear />
                                )}
                            </Form.Item>
                        </Col>
                        : null
                }

                {
                    displaySelect(enquiry.companions, false) ?
                        <Col xs={24} sm={16} md={24} lg={6}>
                            <Form.Item help={intl.formatMessage({id:'Companions.numberKids.help'})}>
                                <Select showSearch placeholder={intl.formatMessage({id:'Companions.numberKids.placeholder'})} onChange={updateNumberOfKids}>
                                    <Option value="1">1</Option>
                                    <Option value="2">2</Option>
                                    <Option value="3">3</Option>
                                    <Option value="4">4</Option>
                                    <Option value="5">5</Option>
                                    <Option value="6">6</Option>
                                    <Option value="7">7</Option>
                                    <Option value="more">More</Option>
                                </Select>
                            </Form.Item>
                        </Col>
                        : null
                }

                {
                    displaySelect(enquiry.companions, false) ?
                        <Col xs={24} sm={16} md={24} lg={6}>
                            <Form.Item help={intl.formatMessage({id:'Companions.numberBabies.help'})}>
                                <Select showSearch placeholder={intl.formatMessage({id:'Companions.numberBabies.placeholder'})} onChange={updateNumberOfBabies}>
                                    <Option value="1">1</Option>
                                    <Option value="2">2</Option>
                                    <Option value="3">3</Option>
                                    <Option value="4">4</Option>
                                    <Option value="more">More</Option>
                                </Select>
                            </Form.Item>
                        </Col>
                        : null
                }
            </Row>
        </>
    )
}

export default SelectCompanions;

//Companions.label
//Companions.placeholder
//Companions.alone
//Companions.couple
//Companions.family
//Companions.friends
//Companions.colleagues
//Companions.group