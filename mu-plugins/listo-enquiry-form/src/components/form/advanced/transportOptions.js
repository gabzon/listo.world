//https://www.rentalcars.com/en/guides/rental-basics/hire-car-groups/
//https://www.zestcarrental.com/blog/2015/06/09/car-hire-classes-explained/

import React from 'react';
import { Select, Icon } from 'antd';

const { Option } = Select;

const SelectTransportType = ({handleTransportType}) => {
    return (
        <Select placeholder="Transport type" mode="multiple" onChange={handleTransportType} allowClear>
            <Option value="public transportation">Public transportation</Option>
            <Option value="group bus">Group Bus</Option>
            <Option value="moto">Moto / Scooter / Quad</Option>
            <Option value="bike">Bicycle</Option>
            <Option value="boat">Boat</Option>
            <Option value="car">Rental car</Option>
            <Option value="limousine">Limousine</Option>
            <Option value="motorhome">Motorhome</Option>
            <Option value="other">Other</Option>
        </Select>
    );
}

const SelectCarType = ({handleCarType}) => {
    return (
    <Select placeholder="Transport type" mode="multiple" onChange={handleCarType} allowClear suffixIcon={<Icon type="car"/>}>
        <Option value="Mini">Mini (Doors: 2/4 | Seats: 4 | City trips, for one or two people)</Option>
        <Option value="Economy">Economy (Doors: 2/4 | Seats: 4/5 | City and short trips)</Option>
        <Option value="Compact">Compact (Doors: 2/4 | Seats: 5 | Bags: 2 large | City and mid-length trips)</Option>
        <Option value="Compact Estate">Compact Estate (Doors: 4 | Seats: 5 | Bags: 3 large | City and mid-length trips with extra luggage)</Option>
        <Option value="Intermediate">Intermediate (Doors: 4 | Seats: 5 | Bags: 2 large 1 small | Mid-length to long trips)</Option>
        <Option value="Intermediate Estate">Intermediate Estate (Doors: 4 | Seats: 5 | Bags: 3 large | Mid-length to long trips with extra luggage)</Option>
        <Option value="Standard">Standard (Doors: 4 | Seats: 5 | Bags: 2 large 1 small | Mid-length to long trips with extra comfort)</Option>
        <Option value="Standard Estate">Standard Estate (Doors: 4 | Seats: 5 | Bags: 3 large | Mid-length to long trips with extra comfort and luggage)</Option>
        <Option value="Full-size">Full-size (Doors: 4 | Seats: 5 | Bags: 3 large | Long trips, extra comfort and better performance)</Option>
        <Option value="Full-size Estate">Full-size Estate (Doors: 4 | Seats: 5 | Bags: 3 large | Long trips with extra luggage)</Option>
        <Option value="Luxury">Luxury (Doors: 4 | Seats: 5 | Bags: 3 large | Travelling in style)</Option>
        <Option value="Convertible">Convertible (Doors: 2 | Seats: 4 | Bags: 1–2 large | Open-air driving experience)</Option>
        <Option value="SUV">SUV (Doors: 4 | Seats: 5 | Bags: 1–3 large  | Long trips and rural roads)</Option>
        <Option value="People Carrier">People Carrier (Doors:  4 | Seats: 7-9 | Bags: 2–6 large | Groups and large families)</Option>
        <Option value="Sport" suffix="asdlkfasd">Sport</Option>
    </Select>
    )
}

export { SelectTransportType, SelectCarType };
