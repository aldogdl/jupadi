<?php

if (!class_exists('CaptchaConfiguration')) { return; }

return [
  'ContactanosCaptcha' => [
      'UserInputID' => 'captchaCode',
      'ImageWidth'  => 100,
      'ImageHeight' => 50,
      'CodeLength'  => 4,
      'Locale'      => 'es-MX',
     'ImageStyle'   => [
       ImageStyle::Radar,
       ImageStyle::Collage,
       ImageStyle::Fingerprints,
     ],
  ],
];
