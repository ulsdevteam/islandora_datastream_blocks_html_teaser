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
      jQuery("#<?php print $link_id; ?>").click(function() {
        jQuery("#<?php print $div_id; ?>").toggle();
        if (jQuery("#<?php print $link_id; ?>").html() !== "Read more...") {
          jQuery("#<?php print $link_id; ?>").html("Read more...");
        } else {
          jQuery("#<?php print $link_id; ?>").html("Show less...");
        }
      });
    });
    </script>
    <?php print $content_before_break; ?>
    <?php
    /* Since content_before_break will contain an open <div> and the
     * content_after_break contains the </div>, this section between is indented.
     */ ?>
    <!--break-->
      <span id="<?php print $link_id; ?>" class="span-like-link">Read more...</span>
      <div id="<?php print $div_id; ?>" style="display:none">
        <?php print $content_after_break; ?>
    </div>
    <!-- block-with-teaser -->
