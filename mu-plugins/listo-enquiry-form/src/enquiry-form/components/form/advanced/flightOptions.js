import React from 'react';
import { Select, Tooltip, Icon} from 'antd';
import { FormattedMessage, useIntl } from 'react-intl';

const { Option } = Select;

const SelectPlaneClass = ({ handleClass }) => {
    const intl = useIntl();
    return (
        <Select placeholder={intl.formatMessage({id: "Advanced.flightClass.placeholder" })} onChange={handleClass} allowClear>
            <Option value="economy"><FormattedMessage id="Advanced.flightClass.economy" /></Option>
            <Option value="premium"><FormattedMessage id="Advanced.flightClass.premium" /></Option>
            <Option value="business"><FormattedMessage id="Advanced.flightClass.business" /></Option>
            <Option value="first"><FormattedMessage id="Advanced.flightClass.first" /></Option>
            <Option value="private jet"><FormattedMessage id="Advanced.flightClass.private"/></Option>
        </Select>
    );
}  

const SelectPlaneFood = ({ handleFood }) => {
    return (
        <Select placeholder="Select your food type" mode="multiple" onChange={handleFood} allowClear>
            <Option value="regular">Regular</Option>
            <Option value="vegeterian">Vegetarian</Option>
            <Option value="vegan">Vegan</Option>
            <Option value="gluten">Gluten free</Option>
            <Option value="Lactose free">Lactose free</Option>
            <Option value="diabetic">Diabetic</Option>
            <Option value="low calories">Low Calories</Option>
            <Option value="low fat">Low Fat</Option>
            <Option value="low salt">Low Salt</Option>
        </Select>
    )
}

const SelectPlaneSeat = ({ handleSeat }) => {
    return (
        <Select placeholder="Seat" onChange={handleSeat} allowClear>
            <Option value="window">Window</Option>
            <Option value="aisle">Aisle</Option>
            <Option value="exit row">
                Exit Row  <Tooltip title="You might not be allowed to keep items such as hand-luggage" placement="top">
                    <span> <Icon type="info-circle" style={{ float: 'right', color: '#d3d3d3', padding: '7px 0 0 5px' }} /></span>
                </Tooltip>
            </Option>
            <Option value="legroom space">Legroom Space</Option>
        </Select>
    )
}

export { SelectPlaneClass, SelectPlaneFood, SelectPlaneSeat };