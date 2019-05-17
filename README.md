# TwilioChannels

Processwire module for Twilio API

Includes API and basic usage:
- Send SMS message
- - Truncate message to single message character limit 
- - Auto-select number from range of numbers depending on $To number country of origin–this enables you to send messages with a local number to that user if one added to the config

### Usage:
`$twilio = $modules->get("TwilioChannels");`
`$twilio->sendSMS($toNumber, $message)`

### Configure:
In the module settings add your Twilio account SID and API tokens and a list of numbers you have registered with Twilio–these will be your from numbers. Adding only one number means the module will only send from one address. Adding multiple numbers followed by a matching area code will match that incoming number with that format. e.g. `+12133195725, +1, 011` (from number will match with numbers starting +1 or 011). You are not limited be the number of matches for any one number as long as each row starts with the one number which you wish to send from with those matches.