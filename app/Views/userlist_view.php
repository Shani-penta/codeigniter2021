<?php //print_r($users); 
if(!empty($users)){?>
<table class="table" style="width:100%;  border:1px solid #000">
 <thead>
 <tr>
  <th style="border:1px solid #000">ID</th>
    <th style="border:1px solid #000">Username</th>
    <th style="border:1px solid #000">Email</th> 
    <th style="border:1px solid #000">Mobile</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($users as $usr): ?>
  <tr>
    <td style="border:1px solid #000"><?= $usr->id; ?></td>
    <td style="border:1px solid #000"><?= $usr->username; ?></td>
    <td style="border:1px solid #000"><?= $usr->email; ?></td>
    <td style="border:1px solid #000"><?= $usr->mobile; ?></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php } else {  ?>
    <p>No rercords found</p>
<?php } ?>