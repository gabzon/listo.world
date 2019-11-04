import React from 'react';
//import EnquiryContext from '../../states/EnquiryContext';
import { Select } from 'antd';

const { Option } = Select;

const languages = [
    'English', 
    'French',
    'Spanish',
    'German',
    'Italian',
    'Croatian',
    'Portuguese',
    'Chinease',
    'Rusian',  
]

const PreferedLanguage = () => (
    <Select placeholder="Prefered language" mode="multiple">
        {languages.map((item, i) => {
            return (
                <Option key={i} value={item}>{item}</Option>
            )
        })}
    </Select>
)

const FormLanguage = () =>(

)

const UserOptions = () => {
    return (
        <div>
            <ThemeOptions />
        </div>        
    )
}

export default ActivitiesOptions;