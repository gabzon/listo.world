<?php
/*
|--------------------------------------------------------------------------
| TypeRocket Routes
|--------------------------------------------------------------------------
|
| Manage your web routes here.
|
*/

tr_route()->get()->match('profile')->do(function() {
    return 'Hi Member 1!';
});


//tr_route()->put('/inquiries/{id}/', 'update@Inquiry');
