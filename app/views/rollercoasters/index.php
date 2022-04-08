
<?php
echo $data["title"];

?>
<table>
  <thead>
    <th>id</th>
    <th>naam</th>
    <th>park</th>
    <th>land</th>
    <th>snelheid</th>
    <th>hoogte</th>
    

  </thead>
  <tbody>
    <?=$data['rollercoaster']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/pages/index">terug</a>
