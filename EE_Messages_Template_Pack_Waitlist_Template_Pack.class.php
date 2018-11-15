<?php

class  EE_Messages_Template_Pack_Waitlist_Template_Pack extends EE_Messages_Template_Pack {

    public function _set_props() {
        $this->label = __('Wait List Test Pack', 'event_espresso');
        $this->dbref = 'waitlist_template_pack';
        $this->description = __('Demonstration purposes.', 'event_espresso');
        $this->_base_url = EE_NEW_WL_URL . 'templates/';
        $this->_base_path = EE_NEW_WL_PATH . 'templates/';

        //note in this example we're stating that this template pack JUST supports the email messenger and the wait list message types
        $this->_supports = array(
            'email' => array(
                'registration_added_to_waitlist',
                'registration_demoted_to_waitlist', 
                'waitlist_can_register'
            )
        );

        $this->_variations = array();
        
        $this->_default_variation_labels = array( 'email' => __('Wait List Pack Default', 'event_espresso' ) );
    }
}
