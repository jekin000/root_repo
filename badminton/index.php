<?php
    $page_title = 'Welcome to Moments!';
    require_once('header.php');
    require_once('navmenu.php')
?>

<?php
    echo '<strong>Moment Activity:</strong>';
    echo '<table border="0",cellpadding="2" >';
    echo '  <tr class="heading">';
    echo '      <td>Name</td>';
    echo '      <td>date</td>';
    echo '      <td>time</td>';
    echo '      <td>FieldNO</td>';
    echo '  </tr>';
    echo '  <tr class="result">';
    echo '      <td valign="top" width="20%">My Badminton</td>';
    echo '      <td valign="top" width="20%">2016-08-06</td>';
    echo '      <td valign="top" width="20%">9:00->10:00</td>';
    echo '      <td valign="top" width="20%">4</td>';
    echo '  </tr>';
    echo '</table>';
    echo '<br />';

    echo '<strong>Card information:</strong>';
    echo '<table border="0",cellpadding="2" >';
    echo '  <tr class="heading">';
    echo '      <td>Balance</td>';
    echo '      <td>CardNo</td>';
    echo '      <td>telephone</td>';
    echo '  </tr>';
    echo '  <tr class="result">';
    echo '      <td valign="top" width="20%">520</td>';
    echo '      <td valign="top" width="20%">000025</td>';
    echo '      <td valign="top" width="20%">025-58015702</td>';
    echo '  </tr>';
    echo '</table>';
?>

<?php
    require_once('footer.php')
?>
