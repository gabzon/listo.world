import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, Switch, Icon, Input, List } from 'antd';
import { FaViber, FaWhatsapp } from 'react-icons/fa';

const ContactMode = ({ form }) => {
  const { getFieldDecorator } = form;

  const [enquiry, setEnquiry] = useContext(EnquiryContext);

  const updateByEmail = (e) => {
    console.log(e);
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, byEmail: e }
    })
  }

  const updateEmail = (e) => {
    const inputEmail = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, email: inputEmail }
    })
  }

  const updateByPhoneCall = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, byPhoneCall: e }
    })
  }

  const updatePhoneNumber = (e) => {
    const inputPhone = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, phoneNumber: inputPhone }
    })
  }

  const updateBySMS = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, bySMS: e }
    })
  }

  const updateSMSNumber = (e) => {
    const inputSMS = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, phoneSMS: inputSMS }
    })
  }

  const updateBySkype = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, bySkype: e }
    })
  }

  const updateSkype = (e) => {
    const inputSkype = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, skype: inputSkype }
    })
  }

  const updateByFacebook = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, byFacebookMessenger: e }
    })
  }

  const updateFacebook = (e) => {
    const inputFacebook = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, facebookMessenger: inputFacebook }
    })
  }

  const updateByWhatsApp = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, byWhatsApp: e }
    })
  }

  const updateWhatsAppNumber = (e) => {
    const inputWhatsapp = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, whatsapp: inputWhatsapp }
    })
  }

  const updateByViber = (e) => {
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, byViber: e }
    })

  }

  const updateViberNumber = (e) => {
    const inputViber = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, viber: inputViber }
    })
  }

  const displayField = (mode, field) => {
    if (field === 'email') {
      if (mode) { return true; }
    }
    if (field === 'phoneCall') {
      if (mode) { return true; }
    }
    if (field === 'sms') {
      if (mode) { return true; }
    }
    if (field === 'viber') {
      if (mode) { return true; }
    }
    if (field === 'skype') {
      if (mode) { return true; }
    }
    if (field === 'whatsapp') {
      if (mode) { return true; }
    }
    if (field === 'facebook') {
      if (mode) { return true; }
    }
    return false;
  }

  const emailDecorator = {
    rules: [
      {
        required: enquiry.byEmail,
        message: 'Please enter your email',
      },
    ],
  }

  const phoneDecorator = {
    rules: [
      {
        required: enquiry.byPhoneCall,
        message: 'Please enter your phone number',
      },
    ],
  }

  const smsDecorator = {
    rules: [
      {
        required: enquiry.bySMS,
        message: 'Please enter your phone number',
      },
    ],
  }

  const whatsappDecorator = {
    rules: [
      {
        required: enquiry.byWhatsApp,
        message: 'Please enter a whatsapp phone number',
      },
    ],
  }

  const viberDecorator = {
    rules: [
      {
        required: enquiry.byViber,
        message: 'Please enter a viber phone number',
      },
    ],
  }

  const skypeDecorator = {
    rules: [
      {
        required: enquiry.bySkype,
        message: 'Please enter your skype account',
      },
    ],
  }

  const facebookDecorator = {
    rules: [
      {
        required: enquiry.byFacebookMessenger,
        message: 'Please enter your facebook account',
      },
    ],
  }

  return (
    <Form.Item label="Contact mode:">
      <table width="100%" className="contact-mode-table">
        <tbody>
          <tr>
            <td width="25%"><Icon type="mail" /> Email: </td>
            <td width="5%"><Switch onChange={updateByEmail} defaultChecked checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td width="40%">
              {displayField(enquiry.byEmail, 'email') ?
                getFieldDecorator('email', emailDecorator)(<Input onChange={updateEmail} prefix={<Icon type="mail" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: john.smith@gmail.com" allowClear />)
                : null
              }
            </td>
          </tr>
          <tr>
            <td><Icon type="phone" /> Phone Call: </td>
            <td><Switch onChange={updateByPhoneCall} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {displayField(enquiry.byPhoneCall, 'phoneCall') ?
                getFieldDecorator('phoneCall', phoneDecorator)(<Input onChange={updatePhoneNumber} prefix={<Icon type="phone" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: +41 79 123 4567" allowClear />)
                : null
              }
            </td>
          </tr>
          <tr>
            <td><Icon type="message" /> SMS: </td>
            <td><Switch onChange={updateBySMS} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {displayField(enquiry.bySMS, 'sms') ?
                getFieldDecorator('sms', smsDecorator)(<Input onChange={updateSMSNumber} prefix={<Icon type="message" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: +41 79 123 4567" allowClear />)
                : null
              }
            </td>
          </tr>
          <tr>
            <td><FaWhatsapp /> WhatsApp</td>
            <td><Switch onChange={updateByWhatsApp} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {
                displayField(enquiry.byWhatsApp, 'whatsapp') ?
                  getFieldDecorator('whatsapp', whatsappDecorator)(<Input onChange={updateWhatsAppNumber} prefix={<Icon type="message" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: +41 79 123 4567" allowClear />)
                  : null
              }
            </td>
          </tr>
          <tr>
            <td><FaViber /> Viber</td>
            <td><Switch onChange={updateByViber} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {displayField(enquiry.byViber, 'viber') ?
                getFieldDecorator('viber', viberDecorator)(<Input onChange={updateViberNumber} prefix={<Icon type="message" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: +41 79 123 4567" allowClear />)
                : null
              }
            </td>
          </tr>
          <tr>
            <td><Icon type="skype" /> Skype:</td>
            <td><Switch onChange={updateBySkype} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {displayField(enquiry.bySkype, 'skype') ?
                getFieldDecorator('skype', skypeDecorator)(< Input onChange={updateSkype} prefix={<Icon type="skype" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: john.smith" allowClear />)
                : null
              }
            </td>
          </tr>
          <tr>
            <td><Icon type="facebook" /> Facebook messenger: </td>
            <td><Switch onChange={updateByFacebook} checkedChildren={<Icon type="check" />} unCheckedChildren={<Icon type="close" />} /></td>
            <td>
              {displayField(enquiry.byFacebookMessenger, 'facebook') ?
                getFieldDecorator('facebook', facebookDecorator)(<Input onChange={updateFacebook} prefix={<Icon type="facebook" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="ex: https://facebook.com/john.smith" allowClear />)
                : null
              }
            </td>
          </tr>
        </tbody>
      </table>
    </Form.Item>
  )
}

export default ContactMode;