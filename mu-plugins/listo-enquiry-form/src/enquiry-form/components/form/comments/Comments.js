import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, Input, Icon, Tooltip } from 'antd';
import { FormattedMessage, useIntl } from 'react-intl';

const { TextArea } = Input;

const Comments = () => {
  const intl = useIntl();
  const [, setEnquiry] = useContext(EnquiryContext);
  const updateComments = (e) => {
    const InputComments = e.target.value;
    setEnquiry(prevEnquiry => {
      return { ...prevEnquiry, comments: InputComments }
    })
  }

  return (
    <Form.Item
      label={
        <span>
          <FormattedMessage id="Comments.label" />
          <em >
            <FormattedMessage id="Comments.label" />
            <Tooltip title={<FormattedMessage id="Comments.help" />}>
              <Icon type="info-circle-o" style={{ marginRight: 4 }} />
            </Tooltip>
          </em>
        </span>}
      help={intl.formatMessage({ id: "Comments.help" })} >
      <TextArea rows={4} onChange={updateComments} />
    </Form.Item >
  )
}

export default Comments;
