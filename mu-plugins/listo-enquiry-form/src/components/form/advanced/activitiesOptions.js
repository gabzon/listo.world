import React from 'react';
import { Select } from 'antd';
import { useIntl } from 'react-intl';

const { Option } = Select;

const ActivitiesOptions = ({ handleThemes }) => {
    const intl = useIntl();
    const themes = [
        intl.formatMessage({ id: 'Advanced.themes.romance' }),
        intl.formatMessage({ id: 'Advanced.themes.shopping' }),
        intl.formatMessage({ id: 'Advanced.themes.sightseeing' }),
        intl.formatMessage({ id: 'Advanced.themes.Business' }),
        intl.formatMessage({ id: 'Advanced.themes.leisure' }),
        intl.formatMessage({ id: 'Advanced.themes.sport' }),
        intl.formatMessage({ id: 'Advanced.themes.cultural' }),
        intl.formatMessage({ id: 'Advanced.themes.nature' }),
        intl.formatMessage({ id: 'Advanced.themes.discovery' }),
        intl.formatMessage({ id: 'Advanced.themes.beach' }),
        intl.formatMessage({ id: 'Advanced.themes.wellbeing' }),
    ];

    return (
        <div>
            <Select placeholder="Themes" mode="multiple" onChange={handleThemes}>
                {themes.map((item, i) => {
                    return (
                        <Option key={i} value={item}>{item}</Option>
                    )
                })}
            </Select>            
        </div>
    )
}

export default ActivitiesOptions;