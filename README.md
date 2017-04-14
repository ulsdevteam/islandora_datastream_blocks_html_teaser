# islandora_datastream_blocks_html_teaser

Allow any islandora datastream blocks that display HTML content to display a teaser version that can be expanded.  This module works closely with [islandora_datastream_blocks](https://github.com/ulsdevteam/islandora_datastream_blocks) and [islandora_datastream_htmleditor](https://github.com/ulsdevteam/islandora_datastream_htmleditor) to provide an additional "teaser" view of any HTML metadata block.

## Install

Since this requires that the islandora_datastream_block, as well as ckeditor modules are both installed, 
this simply needs to be configured so that the toolbar button is enabled.  This is configured within
the ckeditor profile options: `/admin/config/content/ckeditor/edit/Full`.

## Configuration

There is no configuration or additional permissions to use this module.  The permissions to edit the HTML metadata content is controlled by the related module [islandora_datastream_htmleditor](https://github.com/ulsdevteam/islandora_datastream_htmleditor).

## Usage

Clicking the "DrupalBreak" button simply inserts a draggable HTML comment at the top of the HTML.  This
red horizontal line can just be dragged down to the area that represents the break between "teaser" version
and "full content" versions.  It operates by inserting the comment "<!--break-->" into the HTML.

## Author / License

Written by Brian Gillingham for the [University of Pittsburgh](http://www.pitt.edu).  Copyright (c) University of Pittsburgh.

Released under a license of GPL v2 or later.
