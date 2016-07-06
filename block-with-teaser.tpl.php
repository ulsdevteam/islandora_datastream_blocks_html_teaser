<?php

/**
 * @file
 * Displays a block that collapses content and uses show more link.
 *
 * Available variables:
 * - $content_after_break: The part of the original block #markup content
 *   that occurs before the configured teaser break.
 * - $link_id: The unique identifier for the "More" link - also used for the
 *   anchor name.
 * - $div_id: The unique identifier for the wrapping div - identified
 *   by the id of the specific block.
 */
?>
    <script type="text/javascript">
      jQuery(document).ready(function() {
      jQuery("#<?php print $link_id; ?>, #<?php print $link_id; ?>_less").click(function() {
        jQuery("#<?php print $div_id; ?>").toggle();
        if (jQuery("#<?php print $link_id; ?>").html() !== "More...") {
          jQuery("#<?php print $link_id; ?>_less").hide();
          jQuery("#<?php print $link_id; ?>").show();
          jQuery("#<?php print $link_id; ?>").html("More...");
        } else {
          jQuery("#<?php print $link_id; ?>_less").show();
          jQuery("#<?php print $link_id; ?>").hide();
          jQuery("#<?php print $link_id; ?>").html("Less...");
        }
      });
    });
    </script>
    <a name="<?php print $link_id; ?>"></a>
    <?php print $content_before_break; ?>
    <?php
    /* Since content_before_break will contain an open <div> and the
     * content_after_break contains the </div>, this section between is indented.
     */ ?>
    <!--break-->
      <div class="link-wrapper">
        <ul class="links inline">
          <li class="node-readmore">
            <a href="#<?php print $link_id; ?>" id="<?php print $link_id; ?>">More...</a>
          </li>
        </ul>
      </div>
      <div id="<?php print $div_id; ?>" style="display:none">
        <a href="#<?php print $link_id; ?>_less" id="<?php print $link_id . "_less"; ?>">Less...</a>
        <a name="<?php print $link_id; ?>_less"></a>
        <?php print $content_after_break; ?>
    </div>
    <!-- block-with-teaser -->
