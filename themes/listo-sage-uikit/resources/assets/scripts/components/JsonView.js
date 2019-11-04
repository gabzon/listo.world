import React from 'react';
import {EnquiryContext} from '../states/EnquiryContext';

const JsonView = () => {

  const [enquiry] = React.useContext(EnquiryContext);

  return(
    <div className="bg-dark-gray pa2 ml2 mt2 white">
    <pre>{ JSON.stringify(enquiry, null, 2) }</pre>
    </div>
  )
}

export default JsonView;
