import React, { useState, useContext } from 'react';
import { EnquiryProvider, EnquiryContext } from './states/EnquiryContext';
import EnquiryForm from './components/EnquiryForm';
import JsonView from './components/JsonView';
import { ConfigProvider, Row, Col, Icon, Radio } from 'antd';
import { IntlProvider } from 'react-intl';
import messages_en from './lang/en.json';
import messages_fr from './lang/fr.json';
import messages_es from './lang/es.json';
import WordPress from './components/WordPress';


const messages = {
  'en': messages_en,
  'fr': messages_fr,
  'es': messages_es
};

const browserLanguage = navigator.language.split(/[-_]/)[0];

function App() {

  //const [language, setLanguage] = useState(browserLanguage);
  //const updateFormLanguage = (e) => { setLanguage(e.target.value) }

  return (
    <EnquiryProvider className="Provider">
      <Layout />
    </EnquiryProvider>
  );
}

function Layout() {
  
  const [enquiry] = useContext(EnquiryContext);
  //const [language, setLanguage] = useState(browserLanguage);
  //const updateFormLanguage = (e) => { setLanguage(e.target.value) }

  return (
    <ConfigProvider locale={enquiry.formLanguage}>
      <IntlProvider locale={enquiry.formLanguage} messages={messages[enquiry.formLanguage]}>
        <Row type="flex" justify="center">
          <Col span={20}>
            <EnquiryForm />
          </Col>
        </Row>
      </IntlProvider>
    </ConfigProvider>
  );
}


export default App;

