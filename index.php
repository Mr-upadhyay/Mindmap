<?php

$mindMap = array(
  'centralNode' => array(
    'text' => 'This is the central node',
    'color' => '#00008B',
  ),
  'subNodes' => array(
    array(
      'text' => 'This is a sub-node',
      'color' => '#00FF00',
    ),
    array(
      'text' => 'This is another sub-node',
      'color' => '#0000FF',
    ),
  ),
);

echo '<ul>';
foreach ($mindMap['subNodes'] as $subNode) {
  echo '<li style="color: ' . $subNode['color'] . '">' . $subNode['text'] . '</li>';
}
echo '</ul>';

?>
