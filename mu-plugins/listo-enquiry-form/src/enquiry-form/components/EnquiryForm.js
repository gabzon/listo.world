// How to update multiple properties objects with useState
//https://blog.logrocket.com/a-guide-to-usestate-in-react-ecb9952e406c/

import React from 'react';
import { FormattedMessage } from 'react-intl';
//import { EnquiryContext } from '../states/EnquiryContext';

import Destination from './form/destination/Destination';
import TravelDates from './form/dates/TravelDates';
import Budget from './form/budget/Budget';
import EnquiryOptions from './form/options/EnquiryOptions';
import SelectCompanions from './form/companions/Companions';
import Comments from './form/comments/Comments';
import ContactMode from './form/contact/ContactMode';
import AdvancedOptions from './form/advanced/AdvancedOptions';
import axios from 'axios';

import {
  Row,
  Col,
  Form,
  Button
  //message, 
} from 'antd';


function FormLayout(props) {

  const { form } = props;

  const formItemLayout = {
    labelCol: { span: 5 },
    wrapperCol: { span: 18 },
  }

  const handleInquiry = (e) => {
    e.preventDefault();

    props.form.validateFields((err, values) => {
      if (!err) {
        console.log('Received values of form: ', values);
        const data = {
          "title": "Leeds",
          "content": "A hot mom lives there",
          "status": "publish",
          "destination": "Nicaragua",
          "flexibility": "exact",
          "companions": "alone",
          "email": "1"
        }        
        
        const token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvbGlzdG8ud29ybGQiLCJpYXQiOjE1NzA1NzYzNDAsIm5iZiI6MTU3MDU3NjM0MCwiZXhwIjoxNTcxMTgxMTQwLCJkYXRhIjp7InVzZXIiOnsiaWQiOiIxIn19fQ.MJc0-IhOQyCA31Znzj3o0qlYt5v9UapTKX4dQcHfqTI';        

        const options = {
          method: 'post',
          //url: 'http://localhost/listo.world/web/wp-json/wp/v2/enquiries',
          //url: 'https://listo.world/web/wp-json/wp/v2/enquiries',
          url: 'http://localhost:3000/api/web/wp-json/wp/v2/enquiries',
          headers: {            
            //'access-control-allow-headers': 'origin, content-type, credentials, x-auth-token',
            //'Access-Control-Allow-Origin': 'http://localhost:3000/',            
            //'access-control-allow-credentials': true,   
            //'crossDomain': true,         
            'content-type': 'application/json',
            'authorization': `bearer ${token}`
          },
          data: data,
          withCredentials: false
        }

        console.log(options);
        //axios.defaults.headers.post['Access-Control-Allow-Origin'] = 'http://localhost:3000/';
        axios(options)
        .then(res => {
          console.log(res);
          console.log('yes');
        })
        .catch(function (error) {
          console.log('Error', error.message);
        });

      }
    });
  }

  // axios.post('https://api-helper.azurewebsites.net/token', {
  //   username: 'api',
  //   password: 'MY_PASSWORD',
  //   grant_type: 'MY_GRANT_TYPE'
  // }, {

  //   })
  //   .then(response => {
  //     console.log(response)
  //   })
  //   .catch(error => {
  //     console.log(error.response)
  //   });


  return (
    <Row className="bg-white pt2 mt2">
      <Col span={24}>
        <Form layout="horizontal" onSubmit={handleInquiry} className="" {...formItemLayout}>
          <Destination form={form} />
          <TravelDates form={form} />
          <SelectCompanions form={form} />
          <EnquiryOptions />
          <Budget form={form} />
          <AdvancedOptions />
          <Comments />
          <ContactMode form={form} />
          <Form.Item wrapperCol={{ span: 12, offset: 5 }}>
            <Button type="primary" htmlType="submit" icon="container" shape="round">
              <FormattedMessage id="Form.submit" />
            </Button>
          </Form.Item>
        </Form>
      </Col>
    </Row>
  )
}

const EnquiryForm = Form.create({ name: 'Enquiry' })(FormLayout);

export default EnquiryForm;
