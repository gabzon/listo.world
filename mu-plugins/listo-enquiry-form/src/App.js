import React, { useState } from 'react';
import { EnquiryProvider } from './states/EnquiryContext';
import EnquiryForm from './components/EnquiryForm';
import JsonView from './components/JsonView';
import { ConfigProvider, Row, Col, Layout, Icon, Radio } from 'antd';
import { IntlProvider } from 'react-intl';
import messages_en from './lang/en.json';
import messages_fr from './lang/fr.json';

//import { addLocaleData } from 'react-intl';
//import en from 'react-intl/locale-data/en';
//import fr from 'react-intl/locale-data/fr';

//const appLocale = window.appLocale;

const messages = {
  'en': messages_en,
  'fr': messages_fr,
  //'es': messages_es
};

const browserLanguage = navigator.language.split(/[-_]/)[0];

function App() {

  const { Header, Content, Footer } = Layout;
  const [language, setLanguage] = useState(browserLanguage);
  const updateFormLanguage = (e) => { setLanguage(e.target.value) }

  return (
    <EnquiryProvider className="Provider">
      <ConfigProvider locale={language}>
        <IntlProvider locale={language} messages={messages[language]}>
          <Layout className="layout">
            <Header style={{ color: 'white' }}>
              <Row>
                <Col span={18}>
                  <Icon type="form" /> Listo Form
                </Col>
                <Col span={6}>
                  <Radio.Group value={language} onChange={updateFormLanguage} >
                    <Radio.Button value="en">English</Radio.Button>
                    <Radio.Button value="fr">French</Radio.Button>
                    <Radio.Button value="es">Spanish</Radio.Button>
                  </Radio.Group>
                </Col>
              </Row>
            </Header>
            <Content style={{ padding: '0 50px' }} className="content">
              <Row>
                <Col span={17}>
                  <EnquiryForm />
                </Col>
                <Col span={7}>
                  <JsonView />
                </Col>
              </Row>
            </Content>
            <Footer style={{ textAlign: 'center' }}>Ant Design ©2018 Created by Ant UED</Footer>
          </Layout>
        </IntlProvider>
      </ConfigProvider>
    </EnquiryProvider>
  )
}

export default App;
