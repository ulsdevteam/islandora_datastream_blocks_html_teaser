# islandora_datastream_blocks_html_teaser

Copyright 2016 (c) University of Pittsburgh

Licensed under GPL 2 or better.


## Install
Since this requires that the islandora_datastream_block, as well as ckeditor modules are both installed, 
this simply needs to be configured so that the toolbar button is enabled.  This is configured within
the ckeditor profile options: /admin/config/content/ckeditor/edit/Full 


## Usage
Clicking the "DrupalBreak" button simply inserts a draggable HTML comment at the top of the HTML.  This
red horizontal line can just be dragged down to the area that represents the break between "teaser" version
and "full content" versions.  It operates by inserting the comment "<!--break-->" into the HTML.
