import React, { useContext } from 'react';
import { EnquiryContext } from '../../../states/EnquiryContext';
import { Form, Slider, Tooltip, Icon } from 'antd';
import { FormattedMessage } from 'react-intl';

const marks = {
    100: '100 CHF',
    2000: '2000 CHF',
    4000: '4000 CHF',
    6000: '6000 CHF',
    8000: {
        style: {
            width: '90px'
        },
        label: '>8000 CHF',
    }
};

const Budget = ({ form: { getFieldDecorator } }) => {

    const [, setEnquiry] = useContext(EnquiryContext);

    const budgetFieldOptions = {
        rules: [
            {
                required: true,
                message: 'Please select how much would you like to spend for this trip per person',
            },
        ]
    }

    const updateBudget = (budget) => {
        setEnquiry(prevEnquiry => {
            return { ...prevEnquiry, budget: budget }
        });
    }

    return (
        <Form.Item label={
            <span>
                <FormattedMessage id="Budget.label" />
                <em className="blue ml1">
                    <Tooltip title={<FormattedMessage id="Budget.help" />}>
                        <Icon type="info-circle-o" style={{ marginRight: 4 }} />
                    </Tooltip>
                </em>
            </span>
        } required>
            {getFieldDecorator('budget', budgetFieldOptions)(
                <Slider range
                    marks={marks}
                    initialtValue={[500, 2500]}
                    max={8000}
                    min={100}
                    step={10}
                    onChange={updateBudget}
                    help="Select a budget per person. Travel agencies will try to find you the best prices"
                />
            )}
        </Form.Item>
    )
}

export default Budget;