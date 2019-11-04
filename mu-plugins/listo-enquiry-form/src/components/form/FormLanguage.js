import React, { useContext } from 'react';
import { EnquiryContext } from '../states/EnquiryContext';
import { Form, Radio } from "antd";


const FormLanguage = () => {

    const [enquiry, setEnquiry] = useContext(EnquiryContext);
    
    const updateFormLanguage = (e) => {        
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, formLanguage: e.target.value }
        })
    }

    return (
        <Form.Item wrapperCol={{span:7, offset:5}}>
            <Radio.Group value={enquiry.formLanguage} onChange={updateFormLanguage} >
                <Radio.Button value="en">English</Radio.Button>
                <Radio.Button value="fr">French</Radio.Button>
                <Radio.Button value="es">Spanish</Radio.Button>
            </Radio.Group>
        </Form.Item>
    )
}


export default FormLanguage;