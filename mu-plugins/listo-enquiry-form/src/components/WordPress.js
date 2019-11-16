import React from 'react';
import { Button } from 'antd';
import WPAPI from 'wpapi';

const WordPress = () => {

    const clicked = () => {
        console.log('wordpress');
        console.log(window);
        const wp = new WPAPI({
            'endpoint': window.wpApiSettings.endpoint,
            'nonce': window.wpApiSettings.nonce
        });
        // wp.types().type('enquiries').create({
        //     // "title" and "content" are the only required properties
        //     title: 'Enquiry from Dolores Cannon',
        //     content: 'Convoluded 5 hopefully one day',
        //     // Post will be created as a draft by default if a specific "status"
        //     // is not specified            
        //     status: 'publish'
        // }).then(function( response ) {
        //     // "response" will hold all properties of your newly-created post,
        //     // including the unique `id` the post was assigned on creation
        //     console.log( response.id );
        // });

        wp.enquiries = wp.registerRoute("wp/v2", "/enquiries/");
        wp.enquiries().create({
            title: 'Chernobyl',
            content: 'Convoluded 5 hopefully one day',
            budget: '332',
            companions: 'Friends and Family',
            email: 'mrlipa@hotmail.com',
            departure_date: '2020-12-12',
            destination: 'Chernobyl',            
            flexibility: '3 days',
            status: 'publish'
        }).then(function (response) {
            console.log("enquiry", response, "enquiry");
        });

    }

    return <Button type="primary" onClick={clicked}>Wordpress</Button>
}

export default WordPress;