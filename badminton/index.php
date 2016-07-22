<?php
    $page_title = 'Welcome to Badminton!';
    require_once('header.php');
    require_once('navmenu.php')
?>

<?php
    echo '<table border="0",cellpadding="2" >';
    echo '  <tr class="heading">';
    echo '      <td>Balance</td>';
    echo '      <td>CardNo</td>';
    echo '      <td>Date</td>';
    echo '      <td>Begin</td>';
    echo '      <td>End</td>';
    echo '      <td>FieldNum</td>';
    echo '  </tr>';
    echo '  <tr class="result">';
    echo '      <td valign="top" width="20%">520</td>';
    echo '      <td valign="top" width="20%">200</td>';
    echo '      <td valign="top" width="20%"></td>';
    echo '      <td valign="top" width="20%"></td>';
    echo '      <td valign="top" width="10%"></td>';
    echo '      <td valign="top" width="10%"></td>';
    echo '  </tr>';
    echo '</table>';
?>

<?php
    require_once('footer.php')
?>
