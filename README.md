# XpressLeadProAPI
A PHP Library for Xpress Lead Pro API

Author: Thomas Stokes <br>
Returns in json format<br><br>

<strong>Example use:</strong> <br>
<code>
require "XpressLeadProApi.php";
</code>
<br>
<code>
$xlp = new XpressLeadProApi($auth_key,$exhibitor_id,$event_code);
</code><br>
<code>
$badge = $xlp->GetBadgeLayout();
</code>
<br>
<code>
var_dump($badge);
</code><br>
$scan = $xlp->GetBadgeInfo("200000","Last");
</code>
<br>
<code>
var_dump($scan);
</code>
