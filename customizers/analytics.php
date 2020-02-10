<?php

return array(

    'title' => 'Analytics',

    'fields' => array(

        'google' => array(

            'label' => 'Google Analytics',
            'description' => "Enter your Google Analytics tracking ID<br><a target='_blank' href='https://analytics.google.com/analytics/web'>Manage Google Analytics</a>",
            'type'  => 'text'

        ),

        'hotjar' => array(

            'label' => 'Hotjar',
            'description' => "Enter your Hotjar site ID<br><a target='_blank' href='https://insights.hotjar.com/sites/'>Manage Hotjar</a>",
            'type'  => 'text'

        ),

        'mixpanel' => array(

            'label' => 'Mixpanel',
            'description' => "Enter your Mixpanel tracking ID<br><a target='_blank' href='https://mixpanel.com/report/'>Manage Mixpanel</a>",
            'type'  => 'text'

        ),

        'facebook' => array(

            'label' => 'Facebook',
            'description' => "Enter your Facebook tracking pixel<br><a target='_blank' href='https://business.facebook.com/events_manager/pixel'>Manage Facebook Pixels</a>",
            'type'  => 'text'

        )

    )

);