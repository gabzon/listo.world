import React from 'react';
import { Checkbox, Rate } from 'antd';
import { useIntl } from 'react-intl';

const SelectAccomodationType = ({ handleProperty }) => {
    const intl = useIntl();

    const propertyType = [
        { label: intl.formatMessage({ id: 'Advanced.propertyType.hotel' }), value: 'hotel' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.apartment' }), value: 'apartment' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.house' }), value: 'house' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.hostel' }), value: 'hostel' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.guestHouse' }), value: 'guest-house' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.bnb' }), value: 'bed-and-breakfast' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.camping' }), value: 'camping' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.boat' }), value: 'boat' },
        { label: intl.formatMessage({ id: 'Advanced.propertyType.resort' }), value: 'resort' },
    ];
    
    return (
        <Checkbox.Group options={propertyType} onChange={handleProperty} />
    )
}

const SelectAccomodationRating = ({ handleRating }) => {
    return (
        <Rate onChange={handleRating} />
    )
}

export { SelectAccomodationType, SelectAccomodationRating }