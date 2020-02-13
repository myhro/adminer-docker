<?php
require_once('plugins/login-ip.php');

/** Set allowed IP addresses
  * @param array IP address prefixes
  * @param array X-Forwarded-For prefixes if IP address matches, empty array means anything
*/
return new AdminerLoginIp(
  $ips = array(
    '',
  ),
  $forwarded_for = array (),
);
