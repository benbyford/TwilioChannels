<?php

class TwilioChannelsConfig extends ModuleConfig {

    public function getDefaults() {
        return array(
            "id" => "",
            "token" => "",
            "from_number" => ""
        );
    }
    //
    // public function ___construct() {
    //     foreach(self::getDefaults() as $key => $value) {
    //         $this->$key = $value;
    //     }
    // }

    public function getInputfields() {
        $inputfields = parent::getInputfields();

        $f = $this->modules->get('InputfieldText');
        $f->name = 'id';
        $f->label = 'Twilio SID';
        $f->notes = 'From your Twilio Account (at https://www.twilio.com/user/account)';
        $f->columnWidth = 50;
        $inputfields->add($f);

        $f = $this->modules->get('InputfieldText');
        $f->name = 'token';
        $f->label = 'Twilio API Token';
        $f->columnWidth = 50;
        $inputfields->add($f);

        $f = $this->modules->get('InputfieldTextarea');
        $f->name = 'from_number';
        $f->label = 'Your Twilio Number';
        $f->description = 'Will be used as the "from" number when sending messages or starting calls.';
        $f->columnWidth = 50;
        $inputfields->add($f);

        // $f = $this->modules->get('InputfieldText');
        // $f->name = 'from_whatsapp';
        // $f->label = 'Your Whatsapp Number';
        // $f->description = 'This will be a vaildated number with Twilio and Facebook. The format should be whatsapp:447775551111';
        // $f->columnWidth = 50;
        // $inputfields->add($f);

        return $inputfields;
    }
}
