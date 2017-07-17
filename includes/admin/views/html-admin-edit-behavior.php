<div class="wrap rewardpoint">
    <form method="post" id="mainform" action="" enctype="multipart/form-data">
    <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
    <div id="post-body-content">

        <div id="titlediv">
            <div id="titlewrap">
                <label class="screen-reader-text" id="title-prompt-text" for="title">Enter title here</label>
                <input type="text" name="post_title" size="30" value="Hello world!" id="title" autocomplete="off">
            </div>
            <div class="inside">
                <div id="edit-slug-box" class="hide-if-no-js">
                    <strong>Permalink:</strong>
                    <span id="sample-permalink" tabindex="-1">http://localhost/izweb/?p=1</span>
                    <span id="change-permalinks"><a href="options-permalink.php" class="button button-small" target="_blank">Change Permalinks</a></span>
                    <span id="view-post-btn"><a href="http://localhost/izweb/?p=1" class="button button-small">View Post</a></span>
                </div>
            </div>
            </div><!-- /titlediv -->
    </div><!-- /post-body-content -->

    <div id="postbox-container-1" class="postbox-container">
    <div id="side-sortables" class="meta-box-sortables ui-sortable"><div id="submitdiv" class="postbox ">
        <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Publish</span></h3>
        <div class="inside">
            <div class="submitbox" id="submitpost">

                <div id="minor-publishing">
                    <div class="clear"></div>
                </div>

                <div id="major-publishing-actions">
                    <div id="publishing-action">
                        <span class="spinner"></span>
                        <input name="original_publish" type="hidden" id="original_publish" value="Update">
                        <input name="save" type="submit" class="button button-primary button-large" id="publish" accesskey="p" value="Update">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
    <div id="formatdiv" class="postbox ">
        <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Format</span></h3>
        <div class="inside">
            <div id="post-formats-select">
                <input type="radio" name="post_format" class="post-format" id="post-format-0" value="0" checked="checked"> <label for="post-format-0" class="post-format-icon post-format-standard">Standard</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-aside" value="aside"> <label for="post-format-aside" class="post-format-icon post-format-aside">Aside</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-image" value="image"> <label for="post-format-image" class="post-format-icon post-format-image">Image</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-video" value="video"> <label for="post-format-video" class="post-format-icon post-format-video">Video</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-audio" value="audio"> <label for="post-format-audio" class="post-format-icon post-format-audio">Audio</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-quote" value="quote"> <label for="post-format-quote" class="post-format-icon post-format-quote">Quote</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-link" value="link"> <label for="post-format-link" class="post-format-icon post-format-link">Link</label>
                <br><input type="radio" name="post_format" class="post-format" id="post-format-gallery" value="gallery"> <label for="post-format-gallery" class="post-format-icon post-format-gallery">Gallery</label>
                <br>
            </div>
        </div>
    </div>
    <div id="categorydiv" class="postbox ">
        <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Categories</span></h3>
        <div class="inside">
            <div id="taxonomy-category" class="categorydiv">
                <ul id="category-tabs" class="category-tabs">
                    <li class="tabs"><a href="#category-all">All Categories</a></li>
                    <li class="hide-if-no-js"><a href="#category-pop">Most Used</a></li>
                </ul>

                <div id="category-pop" class="tabs-panel" style="display: none;">
                    <ul id="categorychecklist-pop" class="categorychecklist form-no-clear">

                        <li id="popular-category-1" class="popular-category">
                            <label class="selectit">
                                <input id="in-popular-category-1" type="checkbox" checked="checked" value="1">
                                Uncategorized			</label>
                        </li>

                    </ul>
                </div>

                <div id="category-all" class="tabs-panel">
                    <input type="hidden" name="post_category[]" value="0">			<ul id="categorychecklist" data-wp-lists="list:category" class="categorychecklist form-no-clear">

                        <li id="category-1" class="popular-category"><label class="selectit"><input value="1" type="checkbox" name="post_category[]" id="in-category-1" checked="checked"> Uncategorized</label></li>
                    </ul>
                </div>
                <div id="category-adder" class="wp-hidden-children">
                    <h4>
                        <a id="category-add-toggle" href="#category-add" class="hide-if-no-js">
                            + Add New Category					</a>
                    </h4>
                    <p id="category-add" class="category-add wp-hidden-child">
                        <label class="screen-reader-text" for="newcategory">Add New Category</label>
                        <input type="text" name="newcategory" id="newcategory" class="form-required form-input-tip" value="New Category Name" aria-required="true">
                        <label class="screen-reader-text" for="newcategory_parent">
                            Parent Category:					</label>
                        <select name="newcategory_parent" id="newcategory_parent" class="postform">
                            <option value="-1">— Parent Category —</option>
                            <option class="level-0" value="1">Uncategorized</option>
                        </select>
                        <input type="button" id="category-add-submit" data-wp-lists="add:categorychecklist:category-add" class="button category-add-submit" value="Add New Category">
                        <input type="hidden" id="_ajax_nonce-add-category" name="_ajax_nonce-add-category" value="34b92ca187">					<span id="category-ajax-response"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="tagsdiv-post_tag" class="postbox ">
        <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Tags</span></h3>
        <div class="inside">
            <div class="tagsdiv" id="post_tag">
                <div class="jaxtag">
                    <div class="nojs-tags hide-if-js">
                        <p>Add or remove tags</p>
                        <textarea name="tax_input[post_tag]" rows="3" cols="20" class="the-tags" id="tax-input-post_tag"></textarea></div>
                    <div class="ajaxtag hide-if-no-js">
                        <label class="screen-reader-text" for="new-tag-post_tag">Tags</label>
                        <div class="taghint">Add New Tag</div>
                        <p><input type="text" id="new-tag-post_tag" name="newtag[post_tag]" class="newtag form-input-tip" size="16" autocomplete="off" value="">
                            <input type="button" class="button tagadd" value="Add"></p>
                    </div>
                    <p class="howto">Separate tags with commas</p>
                </div>
                <div class="tagchecklist"></div>
            </div>
            <p class="hide-if-no-js"><a href="#titlediv" class="tagcloud-link" id="link-post_tag">Choose from the most used tags</a></p>
        </div>
    </div>
    <div id="postimagediv" class="postbox ">
        <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Featured Image</span></h3>
        <div class="inside">
            <p class="hide-if-no-js"><a title="Set featured image" href="http://localhost/izweb/wp-admin/media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=1&amp;width=640&amp;height=280" id="set-post-thumbnail" class="thickbox">Set featured image</a></p></div>
    </div>
    </div></div>
    <div id="postbox-container-2" class="postbox-container">
        <div id="normal-sortables" class="meta-box-sortables ui-sortable"><div id="postexcerpt" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Excerpt</span></h3>
                <div class="inside">
                    <label class="screen-reader-text" for="excerpt">Excerpt</label><textarea rows="1" cols="40" name="excerpt" id="excerpt"></textarea>
                    <p>Excerpts are optional hand-crafted summaries of your content that can be used in your theme. <a href="http://codex.wordpress.org/Excerpt" target="_blank">Learn more about manual excerpts.</a></p>
                </div>
            </div>
            <div id="trackbacksdiv" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Send Trackbacks</span></h3>
                <div class="inside">
                    <p><label for="trackback_url">Send trackbacks to:</label> <input type="text" name="trackback_url" id="trackback_url" class="code" value=""><br> (Separate multiple URLs with spaces)</p>
                    <p>Trackbacks are a way to notify legacy blog systems that you’ve linked to them. If you link other WordPress sites they’ll be notified automatically using <a href="http://codex.wordpress.org/Introduction_to_Blogging#Managing_Comments" target="_blank">pingbacks</a>, no other action necessary.</p>
                </div>
            </div>
            <div id="postcustom" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Custom Fields</span></h3>
                <div class="inside">
                    <div id="postcustomstuff">
                        <div id="ajax-response"></div>

                        <table id="list-table" style="display: none;">
                            <thead>
                            <tr>
                                <th class="left">Name</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody id="the-list" data-wp-lists="list:meta">
                            <tr><td></td></tr>
                            </tbody>
                        </table><p><strong>Add New Custom Field:</strong></p>
                        <table id="newmeta">
                            <thead>
                            <tr>
                                <th class="left"><label for="metakeyselect">Name</label></th>
                                <th><label for="metavalue">Value</label></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td id="newmetaleft" class="left">
                                    <select id="metakeyselect" name="metakeyselect">
                                        <option value="#NONE#">— Select —</option>

                                        <option value="attribute_pa_size">attribute_pa_size</option>
                                        <option value="total_sales">total_sales</option></select>
                                    <input class="hide-if-js" type="text" id="metakeyinput" name="metakeyinput" value="">
                                    <a href="#postcustomstuff" class="hide-if-no-js" onclick="jQuery('#metakeyinput, #metakeyselect, #enternew, #cancelnew').toggle();return false;">
                                        <span id="enternew">Enter new</span>
                                        <span id="cancelnew" class="hidden">Cancel</span></a>
                                </td>
                                <td><textarea id="metavalue" name="metavalue" rows="2" cols="25"></textarea></td>
                            </tr>

                            <tr><td colspan="2">
                                    <div class="submit">
                                        <input type="submit" name="addmeta" id="newmeta-submit" class="button" value="Add Custom Field" data-wp-lists="add:the-list:newmeta"></div>
                                    <input type="hidden" id="_ajax_nonce-add-meta" name="_ajax_nonce-add-meta" value="15100af069"></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Custom fields can be used to add extra metadata to a post that you can <a href="http://codex.wordpress.org/Using_Custom_Fields" target="_blank">use in your theme</a>.</p>
                </div>
            </div>
            <div id="commentstatusdiv" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Discussion</span></h3>
                <div class="inside">
                    <input name="advanced_view" type="hidden" value="1">
                    <p class="meta-options">
                        <label for="comment_status" class="selectit"><input name="comment_status" type="checkbox" id="comment_status" value="open" checked="checked"> Allow comments.</label><br>
                        <label for="ping_status" class="selectit"><input name="ping_status" type="checkbox" id="ping_status" value="open" checked="checked"> Allow <a href="http://codex.wordpress.org/Introduction_to_Blogging#Managing_Comments" target="_blank">trackbacks and pingbacks</a> on this page.</label>
                    </p>
                </div>
            </div>
            <div id="commentsdiv" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Comments</span></h3>
                <div class="inside">
                    <input type="hidden" id="add_comment_nonce" name="add_comment_nonce" value="e2dded54b1">	<p class="hide-if-no-js" id="add-new-comment"><a class="button" href="#commentstatusdiv" onclick="window.commentReply &amp;&amp; commentReply.addcomment(1);return false;">Add comment</a></p>
                    <input type="hidden" id="_ajax_fetch_list_nonce" name="_ajax_fetch_list_nonce" value="f0b8c7b563"><input type="hidden" name="_wp_http_referer" value="/izweb/wp-admin/post.php?post=1&amp;action=edit"><table class="widefat fixed comments comments-box" style="display:none;">
                        <tbody id="the-comment-list" data-wp-lists="list:comment">
                        </tbody>
                    </table>
                    <p class="hide-if-no-js" id="show-comments"><a href="#commentstatusdiv" onclick="commentsBox.get(1);return false;">Show comments</a> <span class="spinner"></span></p>
                    <div class="hidden" id="trash-undo-holder">
                        <div class="trash-undo-inside">Comment by <strong></strong> moved to the trash. <span class="undo untrash"><a href="#">Undo</a></span></div>
                    </div>
                    <div class="hidden" id="spam-undo-holder">
                        <div class="spam-undo-inside">Comment by <strong></strong> marked as spam. <span class="undo unspam"><a href="#">Undo</a></span></div>
                    </div>
                </div>
            </div>
            <div id="slugdiv" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Slug</span></h3>
                <div class="inside">
                    <label class="screen-reader-text" for="post_name">Slug</label><input name="post_name" type="text" size="13" id="post_name" value="hello-world">
                </div>
            </div>
            <div id="authordiv" class="postbox  hide-if-js" style="">
                <div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span>Author</span></h3>
                <div class="inside">
                    <label class="screen-reader-text" for="post_author_override">Author</label>
                    <select name="post_author_override" id="post_author_override" class="">
                        <option value="1" selected="selected">admin</option>
                    </select></div>
            </div>
        </div><div id="advanced-sortables" class="meta-box-sortables ui-sortable"></div></div>
    </div><!-- /post-body -->
    <br class="clear">
    </div>
    </form>
</div>