<?php

require_once 'hooray/Chain.php';
require_once 'hooray/Hooray.php';

require_once 'hooray/links/breakTheChain/pop.php';
require_once 'hooray/links/breakTheChain/product.php';
require_once 'hooray/links/breakTheChain/shift.php';
require_once 'hooray/links/breakTheChain/sum.php';

require_once 'hooray/links/higherOrder/filter.php';
require_once 'hooray/links/higherOrder/map.php';
require_once 'hooray/links/higherOrder/reduce.php';

require_once 'hooray/links/modifiers/chunk.php';
require_once 'hooray/links/modifiers/column.php';
require_once 'hooray/links/modifiers/countValues.php';
require_once 'hooray/links/modifiers/flip.php';
require_once 'hooray/links/modifiers/growKeys.php';
require_once 'hooray/links/modifiers/keys.php';
require_once 'hooray/links/modifiers/pad.php';
require_once 'hooray/links/modifiers/push.php';
require_once 'hooray/links/modifiers/shrinkKeys.php';
require_once 'hooray/links/modifiers/splice.php';
require_once 'hooray/links/modifiers/values.php';

function hooray() {
  $args = func_get_args();
  return
    new Hooray(
      count($args) == 1 &&
      is_array($args[0]) ?
        $args[0] :
        $args);
}