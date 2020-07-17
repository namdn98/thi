    
 <?php   
     // -> hosting
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting', 'redux-framework-demo' ),
        'id'               => 'basic',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );


// slide 
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Slide', 'redux-framework-demo' ),
        'id'               => 'basic-Text',
        'customizer_width' => '400px',
        'subsection' => true,
        'fields'           => array(
            array(
                'id'       => 'title-slide',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'default'  => 'WEB HOSTING IN THE CLOUD',
            ),
            array(
                'id'       => 'des-slide',
                'type'     => 'text',
                'title'    => __( 'Mô tả', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
    

// trash
    Redux::setSection( $opt_name, array(
        'title'            => __( 'web-hosting-in-the-cloud', 'redux-framework-demo' ),
        'id'               => 'basic-Text',
        'customizer_width' => '700px',
        'subsection' => true,
        'fields'           => array(
            array(
                'id'       => 'title-web-hosting',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'default'  => 'WEB HOSTING IN THE CLOUD',
            ),
            array(
                'id'       => 'des-title-web-hosting',
                'type'     => 'text',
                'title'    => __( 'Mô tả', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

//// web-hosting-in-the-cloud

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Intro', 'redux-framework-demo' ),
        'id'               => 'hosting-intro',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '700',
        'icon'             => 'el el-cogs',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'hosting-intro-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-intro-content',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-intro-button',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );


// bang gia 1 2 3 4

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Hosting Price 1', 'redux-framework-demo' ),
        'id'         => 'Hosting-price-1',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'price-title-1',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
            array(
                'id'       => 'price-button-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'price-content-1',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
            
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Hosting Price 2', 'redux-framework-demo' ),
        'id'         => 'Hosting-price-2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'price-title-2',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
            array(
                'id'       => 'price-button-2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'price-content-2',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Hosting Price 3', 'redux-framework-demo' ),
        'id'         => 'Hosting-price-3',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'price-title-3',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
            array(
                'id'       => 'price-button-3',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'price-content-3',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Hosting Price 4', 'redux-framework-demo' ),
        'id'         => 'Hosting-price-4',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'price-title-4',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
            array(
                'id'       => 'price-button-4',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'price-content-4',
                'type'     => 'editor',
                'title'    => __( 'Editor', 'redux-framework-demo' ),
                'subtitle' => __( 'Use any of the features of WordPress editor inside your panel!', 'redux-framework-demo' ),
                'default'  => 'Powered by Redux Framework.',
            ),
        )
    ) );

// li do lua chon 
    Redux::setSection( $opt_name, array(
        'title'            => __( 'The Reason', 'redux-framework-demo' ),
        'id'               => 'reason',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'reason-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'reason-content-left',
                'type'     => 'editor',
                'title'    => __( 'Content Left', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'reason-content-right',
                'type'     => 'editor',
                'title'    => __( 'Content Right', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );


// menu hero    


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Menu Hero', 'redux-framework-demo' ),
        'id'               => 'menu hero',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'menu-hero-title-1',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-1',
                'type'     => 'editor',
                'title'    => __( 'Content 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-2',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-2',
                'type'     => 'editor',
                'title'    => __( 'Content 2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-3',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 3', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 3', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-3',
                'type'     => 'editor',
                'title'    => __( 'Content 3', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 3', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-4',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 4', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 4', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-4',
                'type'     => 'editor',
                'title'    => __( 'Content 4', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 4', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-5',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 5', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 5', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-5',
                'type'     => 'editor',
                'title'    => __( 'Content 5', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 5', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-6',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 6', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 6', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-content-6',
                'type'     => 'editor',
                'title'    => __( 'Content 6', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 6', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-7',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 7', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 7', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-title-8',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề 8', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 8', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-support',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề support', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle support', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-1-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-1-1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-1-1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-1-2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-1-2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-1-2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-2-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-2-1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-2-1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'menu-hero-part-2-2-2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2-2-2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2-2-2', 'redux-framework-demo' ),
            ),

        )
    ) );

    // thu vien khong lo

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Huge Library', 'redux-framework-demo' ),
        'id'               => 'library',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'library-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'library-content',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'addons-content-1',
                'type'     => 'editor',
                'title'    => __( 'Content 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 1', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói 1', 'redux-framework-demo' ),
            ),
        )
    ) );

//// Tiện ích

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Add-ons', 'redux-framework-demo' ),
        'id'               => 'addons',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'addons-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'addons-content-1',
                'type'     => 'editor',
                'title'    => __( 'Content 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 1', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói 1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'addons-content-2',
                'type'     => 'editor',
                'title'    => __( 'Content 2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói 2', 'redux-framework-demo' ),
            ),

            array(
                'id'       => 'addons-content-3',
                'type'     => 'editor',
                'title'    => __( 'Content 3', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 3', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói 3', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'addons-content-4',
                'type'     => 'editor',
                'title'    => __( 'Content 4', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 4', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói 4', 'redux-framework-demo' ),
            ),
        )
    ) );

// wordpress-link

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Wordpress', 'redux-framework-demo' ),
        'id'               => 'hosting-wordpress-link',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-wordpress-content',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );

//// thu tuc thanh toan 

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Check Out', 'redux-framework-demo' ),
        'id'               => 'hosting-check-out-link',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-check-out-title',
                'type'     => 'text',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-check-out-desc',
                'type'     => 'text',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-check-out-ul-li',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );

////Why Network Solutions?

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Reason To Choose', 'redux-framework-demo' ),
        'id'               => 'hosting-reason-to-choose',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-reason-to-choose-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-reason-to-choose-content',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );

    //// icon 

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Icon', 'redux-framework-demo' ),
        'id'               => 'hosting-icon',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-icon-1',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-icon-2',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-icon-3',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-logo-main',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
            ),
        )
    ) );

//// menu header

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting Menu Hero', 'redux-framework-demo' ),
        'id'               => 'hosting-menu-hero',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-list-hero-1',
                'type'     => 'editor',
                'title'    => __( 'Content 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-list-hero-2',
                'type'     => 'editor',
                'title'    => __( 'Content 2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-list-hero-3',
                'type'     => 'editor',
                'title'    => __( 'Content 3', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 3', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-list-hero-4 ',
                'type'     => 'editor',
                'title'    => __( 'Content 4', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 4', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-list-hero-5',
                'type'     => 'editor',
                'title'    => __( 'Content 5', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 5', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-list-hero-6',
                'type'     => 'editor',
                'title'    => __( 'Content 6', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle 6', 'redux-framework-demo' ),
            ),
            
        )
    ) );

//// faqs
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Hosting FAQS', 'redux-framework-demo' ),
        'id'               => 'hosting-faqs',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-faqs-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            ),
            array(
                'id' => 'cat-hoi-dap',
                'type' => 'select',
                'data' => 'categories',

                'args'  => array(
                        'taxonomies' => array( 'taxonomy_name' ),
                        'hide_empty' => false,),
                'title' => __('Button Link', 'redux-framework-demo'),
                'subtitle' => __('Which page the visitor is sent to when clicking this button', 'redux-framework-demo'),
            ),
        )
    ) );


//// footer
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer', 'redux-framework-demo' ),
        'id'               => 'footer',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => 'max-content',
        'icon'             => 'el el-cogs',
        'fields'     => array(
            array(
                'id'       => 'hosting-footer-content-col-1',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề cột 1', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle cột 1', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-footer-content-col-2',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề cột 2', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle cột 2', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-footer-content-col-3',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề cột 3', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle cột 3', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'hosting-footer-content-col-4',
                'type'     => 'editor',
                'title'    => __( 'Tiêu đề cột 4', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle cột 4', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer-title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'default'  => 'WEB HOSTING IN THE CLOUD',
            ),
            array(
                'id'       => 'footer-copyright',
                'type'     => 'editor',
                'title'    => __( 'Content', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Tên gói', 'redux-framework-demo' ),
                'default'  => 'WEB HOSTING IN THE CLOUD',
            ),
        )
    ) );



// background
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Background', 'redux-framework-demo' ),
        'id'         => 'background',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'        => 'opt_header_logo',
                'type'      => 'media',
                'url'       => true,
                'title'     => __('Logo', 'demo' ),
                'compiler'  => 'false',
                'subtitle'  => __('Upload your logo', 'demo' ),
            ),
            array(
                'id'        => 'hosting-in-the-cloud-img-1',
                'type'      => 'media',
                'url'       => true,
                'title'     => __('Logo', 'demo' ),
                'compiler'  => 'false',
                'subtitle'  => __('Upload your logo', 'demo' ),
            ),
            array(
                'id'        => 'hosting-in-the-cloud-img-2',
                'type'      => 'media',
                'url'       => true,
                'title'     => __('Logo', 'demo' ),
                'compiler'  => 'false',
                'subtitle'  => __('Upload your logo', 'demo' ),
            ),
            array(
                'id'        => 'hosting-in-the-cloud-img-2-hidden',
                'type'      => 'media',
                'url'       => true,
                'title'     => __('Logo', 'demo' ),
                'compiler'  => 'false',
                'subtitle'  => __('Upload your logo', 'demo' ),
            ),
        ),
    ) );


  // --------------------------

//   khong dc xoa 
    if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => __( 'Documentation', 'redux-framework-demo' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }

?>