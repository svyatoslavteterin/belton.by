<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for miniShop2.

2.1.12 pl
==============
- Improved installation script for MODX 2.4.

2.1.11 pl
==============
- Added new events: "msOnBeforeGetOrderCost" and "msOnGetOrderCost".
- [mgr] Direct links to orders in manager.

2.1.10 pl1
==============
- Added support of Tickets 1.6.
- Updated pdoTools version in the installer.

2.1.9 beta
==============
- Fixed modification of order price by delivery and payment in default order handler.
- Fixed processing of decimal prices in PayPal payment class.
- Improved chunk tpl.msOrder.payment.

2.1.8 pl3
==============
- Fixed controllers for MODX 2.3.
- Fixed routes to processors for MODX 2.3.
- Fixed product getlist processor for MODX 2.3.
- Fixed sorting products in category grid by clicking on column header.
- Disabled Bootstrap icons for MODX 2.3.
- Fixed product gallery for MODX 2.3.
- Fixed issue with deleting product files children in MODX 2.3.
- Fixed "autocomplete_err_noquery" error in MODX 2.3.
- [#148] Fixed duplicate connector.
- Fixed work of "minishop2-combo-user" in MODX 2.3.

2.1.8 beta
==============
- Added field "name" in object msOrderProduct for storing pagetitle of the product.
- Fixed log level in PayPal method.
- Added integer field "type" to msOrder.
- Fixed CustomerProfile connection in schema.
- Improved price and weight formatting in orders table.
- Some UI improvements and fixes.

2.1.7 pl5
==============
- [#131] Fixed update of product thumb when you update thumbnails.
- [#129] [msGetOrder] Fixed setting of placeholders.
- Fixed work with comments on product panel.
- [msOrder] Now snippet loads "building", "room" and "comment" from extended field of users profile.
- [mgr] Fixed parameter "maxUploadSize" in gallery.

2.1.7 pl1
==============
- [#119] Improved compatibility with AjaxManager.
- [#118] Fixed negative cost in payment and delivery methods.
- [#113] Added Lithuanian lexicons.
- [#112] Restrict cart items to specific contexts.
- [#111] Fixed remove of products links.
- [#107] Fixed empty customer field if fullname is not specified.
- [#106] Additional check of friendly filename in gallery.
- New system setting "ms2_category_remember_grid".

2.1.6 pl4
==============
- [#110] Fix generate thumbs on upload for Amazon S3.
- Fixed counting money spent in new customers.
- [#104] Fixed placeholder [[+cart_weight]] in emails.
- [#102] Improved checking of thumbnails url.
- [#98] Refactored permissions in processors.
- [#94] Formatted placeholder [[+cost]] in snippet msCart
- [#78] Fixed setting flag isfolder to false for old category of the product.
- Fixed handling of non-ajax requests.
- Removed unnecessary ajax request on add to cart. Fixed possibly E_NOTICE.

2.1.5 pl
==============
- Improved rename of files in gallery.
- Added default media source in product "create" processor.
- Added default template in product "create" processor.
- Added buttons in orders management page.

2.1.4 pl5
==============
- Added script for import products in core/components/minishop2/import/csv.php.
- Fixed icons in chunks.
- [#95] Fixed price and weight format.
- Improved installator. Now you can update chunks on install.
- Fixed possible errors on thumbnail generation.
- Progressive thumbnails in gallery.

2.1.3 pl2
==============
- Support Bootstrap3.
- Fixed E_WARNING in snippet msOptions.
- Fixed bug with php-apc on create order.

2.1.2 pl2
==============
- Fixed possibly E_NOTICE in snippets.

2.1.2 pl
==============
- [#77] Fixed change type of existing resource to "msProduct".
- Added ability to hide tabs of product page in manager. See new system settings.
- Improved style of horizontal product tabs.
- Improved proportions in settings tab of category.
- Improved rename of product images.
- Improved retrieving of first thumbnail of image in gallery.
- If you specified wrong "ms2_product_thumbnail_size" parameter, gallery will still work.
- Added support of non-image files in gallery.
- Improved snippet "msGallery" for display non-image files.
- [#84] Fixed displaying of  email of vendor in manager.

2.1.1 pl2
==============
- Fixed parameter "&parents" in msProducts.

2.1.1 pl
==============
- Snippet msProducts supports pdoTools 1.8.0. Parameter "&showHidden" enabled by default.
- Fixed fatal error with "clearCache" when msProduct created trough processor and it`s parent is not msCategory.
- Improved generation of thumbnails.

2.1.1 pl
==============
- Fixed access permissions tab on product update.
- Fixed getPrice and getWeight calls in snippet msProducts.
- Improved xtype "minishop2-combo-user".
- Added support of component "msDiscount".
- Added counting of total spent sum by every customer in msCustomerProfile.

2.1.0 pl2
==============
- Fixed placeholders on msProduct page due to issues with @INLINE chunks.

2.1.0 pl1
==============
- Added new events: "msOnGetProductPrice" and "msOnGetProductWeight".
- Fixed wrong events in database from previous release.
- Changed "vendor_" to "vendor." in msProduct::toArray() for sameness with the snippet msProducts.
- Moved all logic from old action.php to new plugin. File leaved for compatibility with users modified javascript.

2.1.0 pl
==============
- Changed default sort in goods grid on "menuindex, ASC".
- Improved method msDelivery::getCost().
- Added method msPayment::getCost().
- Improved method msOrderHandler::getCost(). Now you can specify additional percent for delivery and payment in manager.
- New object "msCustomerProfile". It can be extended by plugins like "msProductData".
- Plugin "miniShop2" can automatic save referrers.
- In snippet "msProducts" you can override "where", "select", "leftJoin", "innerJoin" and "rightJoin" properties. Added pdoFetch 1.4.1 support.
- Improved other snippets.
- Added new fields in "msProductFile": "hash" for sha1 of file and json field "properties".
- Changed uploader in product gallery to "Plupload" (Thanks to Alex Rahimov).
- Added check for duplicate images in product gallery by checking hash of the content of file.
- Added new parameters for media source: "maxUploadWidth" and "maxUploadHeight" for frontend image resize.
- Gallery upload processor now can receive parameters "id" and "file" for external images upload.
- Added renaming files of product gallery together with thumbnails.
- [#77] Fixed changing type of existing resource to "msCategory".
- [#76] Fixed parameter "offset" in msGallery.
- [#75] Remove multi-category links when category removed.
- [#74] Refresh data in order from users profile if he is authenticated.
- [#73] Added virtual vendor fields. You can get it by $res->get(\'vendor_name\');
- [#66] Fixed saving payments methods when create a new delivery.
- [#65] Added new system events: "msOnBeforeValidateOrderValue" and "msOnValidateOrderValue".
- [#64] Added ability to stop switching order status from system plugin.
- [#63] Added new parameters for media source: "imageNameType". Switching to "friendly" will generate names for uploaded files by FURLs algorithm.
- [#61] Added ability to sort products in category by drag and drop.
- [#62] Fixed work with "*.gif" files in products gallery.
- [#59] Improved regular expression for email verification.
- [#59] Improved validation of customer name and email when create order.
- [#59] msOrderHandler::add() now can return an error.
- [#59] Improved registration of javascript on frontend.
- [#59] Improved show\\hide of msMiniCart with css.
- [#59] Refactored default frontend javascript.
- [#59] Works with no javascript. (Thanks to Alexey Kartashov)
- [#58] Fixed PayPal non-USD currency.
- [#56] Added JSON field "properties" to "msProductFile".
- [#52] Added ability to customize orders in manager by 3 system setting: "ms2_order_grid_fields", "ms2_order_address_fields" and "ms2_order_product_fields".
- [#50] Fixed checking of the existence of the Tickets component.
- [#5] Possible fixed "Cannot execute queries while other unbuffered queries are active" on php < 5.3.
- Some fixes for MySql STRICT_TRANS_TABLES mode.
- Updated jQuery to version 1.10.2
- Added method PayPal::getPaymentLink() for continuing interrupted payment process. You will see [[+payment_link]] in emails.
- Added parameters "&tplSingle" and "&toSeparatePlaceholders" to snippet msGallery.
- Gallery UI improvements for MODX 2.2.9
- Returned action.php for backward compatibility with the old javascript

2.0.1 pl3
==============
- Added german lexicon.
- Now you can specify version of file in "ms2_frontend_js".
- [#60] Fixed type of field "index" in "msOrder".
- Improved listing of products in the categories of manager.

2.0.1 pl2
==============
- Improved submit of order form.
- msProducts saves order of ids received through &resources=``. It need for smooth work with mSearch2.
- [mgr] Fixed search in vendors combo

2.0.1 pl1
==============
- Added loading of lexicons for 3rd party payment methods. They must be named in "msp.%name%.inc.php" format.
- Added placeholder [[+payment_link]] in the new user email. It will work only if payment method has function getPaymentLink(msOrder $order);
- Removed placeholder [[+id]] from product page because of issues.
- [#53] Completely refactored call and processing plugin events.
- [#45] Added system setting for specify default content of category.

2.0.1 pl
==============
- Added 2 new events on order remove: "msOnBeforeRemoveOrder" and "msOnRemoveOrder".
- Improved classes: "msProduct" and "msCategory". Now $modx->getCollection(\'msProduct\'); returns only products.

2.0.1 beta3
==============
- Fixed msGallery

2.0.1 beta2
==============
- [#44] Enabled duplicate of category.
- [#42] Added parameter "returnIds" to snippet msProducts.
- [#41] Fixed panel with tvs on product create.
- Parameter "resources" not suppressing "parents" in msProducts anymore. Now they working together: resources that are not in parents will not be returned.
- Snippet msGallery now can to display placeholders like [[+600x]] or [[+x600]].
- Fixed display an original image in msGallery. If upgrade, replace placeholders [[+image]] to [[+url]] in chunk "tpl.msGallery.row" manually.
- Added setting placeholder [[+idx]] to snippets msGallery and msProducts.
- Added parameter "where" in snippet msGallery, for specify JSON encoded string with additional query data.
- Added parameters "limit" and "offset" for pagination. msGallery can be used with getPage now.

2.0.1 beta1
==============
- Maybe fixed bug with php-apc and sessions
- Fixed plugin params on events "msOnBeforeCreateOrder" and "msOnCreateOrder". Now you can change $msOrder by link.
- Fixed error with no changing status of order in manager.

2.0.1 beta
==============
- [#38] Added "menuindex" in product fields.
- [#37] Ability to override method miniShop2::changeOrderStatus() in custom order class.
- [#36] Removed filter_var(), because of issues on stupid hostings.
- [#35] Added 2 system setting to enable or disable the remembering of panel tabs.
- [#32] Enabled displaying of errors when uploading files in product gallery.
- [#30] "miniShopManagerPolicy" is automatically assigned to a group "Administrators".
- [#29] Added verification of object instance, when loading neighborhood resources in manager.
- [#28] Returned the lost fields in images of msGallery.
- [#27] Improved ajax requests in default javascript.
- [#26] Improvements of categories tree.
- [#25] Removed replacing of empty alias to id. Added 2 system setting for switching using resource id as alias for categories and products.
- Fixed quick fields in snippet msOrder. Update your chunks for delivery and payment methods.
- Improved "totalVar" placeholder in snippet msGallery.
- Fixed model. Added proper primary keys for xPDOObjects.
- Ability to load only "miniShop2Config" object on frontend, without default javascript and jQuery.
- Fixed parameter "depth" in snippet "msProducts".
- New permissions for work with order: "save" and "view". New events for update order.
- Added ability to add\\update\\remove products in order.

2.0.0 pl3
==============
- Compatibility with pdoTools 1.2.0

2.0.0 pl2
==============
- [mgr] Fixed formatting of dates in category grid.
- [mgr] Fixed decimals in product category grid.
- Added ability to create system setting "ms2_cart_max_count" to override maximum number of products for one operation.
- Fixed placeholders in emails subjects.
- Fixed generation of thumbnails in gallery for working with ImageMagick.
- Fixed link type "Many to many".
- Fixed requirement of non-existing permission "update_document" in processors.
- Added system setting "ms2_price_snippet" for modification of product price.
- Added system setting "ms2_weight_snippet" for modification of product weight.
- Product key in msCartHandler now generates with using "$price" and "$weight", because they can be modified when adding to cart.

2.0.0 pl1
==============
- [mgr] Changing of product image now cleans its cache.
- [mgr] New icons in tree
- Small improvements of the snippets at initialization.
- Added selection of product links in snippet msProducts. See the new snippet properties.
- Added ability to use msProducts with any modResource class.
- Added property "tvPrefix" to msProducts for compatibility with getResources.
- Added property "outputSeparator" to snippets msOptions and msProducts.
- Added system parameter "ms2_price_format" for specifying how to format price of product.
- Added system parameter "ms2_price_format_no_zeros" for optional removing extra zeros at the end of price.
- Added system parameter "ms2_weight_format" for specifying how to format weight of product.
- Added system parameter "ms2_weight_format_no_zeros" for optional removing extra zeros at the end of weight.

2.0.0 rc6
==============
- Fixed cleaning pdoTools in msGallery
- Improved saving payment method in order when quickly switch delivery.

2.0.0 rc5
==============
- Integration of PayPal express-checkout payment method.

2.0.0 rc4
==============
- Fixed bugs in snippets
- Fixed joining images by rank when includeThumbs.

2.0.0 rc
==============
- [mgr] Added displaying of nested products in categories. System setting "ms2_category_show_nested_products" can disable it.
- [mgr] Added the ability to link products together.
- [mgr] Added link to resource from ordered products.
- [mgr] Added ability to specify web document for Vendor by property "resource".
- [#6] Fixed error when order makes authenticated user without email.
- [#8] Fixed remove of order.
- [#9] Fixed date formatting in manager for working in Firefox.
- [#10] Added checking for negative value of adding products in cart.
- [#12] Added regeneration site maps after new product create.
- [#14] Added check of "register_globals" on cart/add.
- Added system setting "ms2_product_thumbnail_size" for setting default size of product thumbnail.
- Added vendor placeholders on product page. Now you can use [[+vendor.name]], [[+vendor.logo]] etc.
- Added beta scripts for console converting miniShop1 to miniShop2.
- Added partial french translation.
- Added method miniShop2::getTagged() from MS1.
- Added ability to load plugins, that can add new or overload existing product fields in model and manager.
- Added parameters for joining thumbnails and tvs in snippets msProducts, msCart and msGetOrder.
- Improved save of product options.
- Fixed automatic install of pdoTools.
- Fixed fetching images in snippet msGallery
- Other fixes and improvements.

2.0.0 beta-1
==============
- Added manager pages
- Added create and manage orders

2.0.0 beta-0
==============
- Initial release.',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
miniShop2
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/miniShop2/issues',
    'chunks' => 
    array (
      'msProduct.content' => '<h1>[[*pagetitle]]</h1>
<div id="msProduct" class="row">
	<div class="span5 col-md-5">
		[[!msGallery]]
	</div>
	<div class="span7 col-md-7">
		<form class="form-horizontal ms2_form" method="post">
			<input type="hidden" name="id" value="[[*id]]" />
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_article]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">
						[[+article]]
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_price]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">
						[[!+price]] [[%ms2_frontend_currency]]
						[[!+old_price:gt=`0`:then=`<span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>`:else=``]]
					</label>
				</div>
			</div>
			<div class="form-group form-inline">
				<label class="col-sm-2 control-label" for="product_price">[[%ms2_cart_count]]:</label>
				<div class="col-sm-3">
					<input type="number" name="count" id="product_price" class="input-sm form-control" value="1" />
					[[%ms2_frontend_count_unit]]
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_weight]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">[[+weight]] [[%ms2_frontend_weight_unit]]</label>
				</div>
			</div>
			[[!msOptions?name=`color`]]
			[[!msOptions?name=`size`]]
			[[-!msOptions?name=`tags`&tplRow=``&tplOuter=``]]
			<div class="form-group">
				<label class="col-sm-2 control-label">[[%ms2_product_made_in]]:</label>
				<div class="col-sm-3">
					<label class="checkbox">[[+made_in]]</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3">
					<button type="submit" class="btn btn-default" name="ms2_action" value="cart/add"><i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]</button>
				</div>
			</div>
		</form>

	</div>
</div>
[[*content]]',
      'tpl.msCart.empty' => '[[%ms2_cart_is_empty]]',
      'tpl.msCart.outer' => '<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_price]]</th>
			<th class="remove span2 col-md-2">[[%ms2_cart_remove]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+total_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+total_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+total_cost]]</span> [[%ms2_frontend_currency]]</th>
			<th>&nbsp;</th>
		</tr>
	</table>
	<form method="post">
		<button class="btn btn-default" type="submit" name="ms2_action" value="cart/clean" title="[[%ms2_cart_clean]]"><i class="glyphicon glyphicon-remove"></i> [[%ms2_cart_clean]]</button>
	</form>
</div>',
      'tpl.msCart.row' => '<tr id="[[+key]]">
	<td class="image"><img src="[[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" /></td>
	<td class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a><br/>
		<small><i>[[+option.color]] [[+option.size]]</i></small>
	</td>
	<td class="count">
		<form method="post" class="ms2_form form-inline" role="form">
			<input type="hidden" name="key" value="[[+key]]" />
			<div class="form-group">
				<input type="number" name="count" value="[[+count]]" max-legth="4" class="input-sm form-control" />
				[[%ms2_frontend_count_unit]]
				<button class="btn btn-default" type="submit" name="ms2_action" value="cart/change"><i class="glyphicon glyphicon-refresh"></i></button>
			</div>
		</form>
	</td>
	<td class="weight"><span>[[+weight]]</span> [[%ms2_frontend_weight_unit]]</td>
	<td class="price"><span>[[+price]]</span> [[%ms2_frontend_currency]][[+old_price]]</td>
	<td class="remove">
		<form method="post" class="ms2_form">
			<input type="hidden" name="key" value="[[+key]]">
			<button class="btn btn-default" type="submit" name="ms2_action" value="cart/remove" title="[[%ms2_cart_remove]]"><i class="glyphicon glyphicon-remove"></i></button>
		</form>
	</td>
</tr>
<!--minishop2_option.color [[%ms2_frontend_color]]: [[+option.color]];-->
<!--minishop2_option.size [[%ms2_frontend_size]]: [[+option.size]];-->
<!--minishop2_old_price <br/><span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>-->',
      'tpl.msEmail.cancelled.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_cancelled_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.new.manager' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_new_manager]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.new.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_new_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>

[[+payment_link]]',
      'tpl.msEmail.paid.manager' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_paid_manager]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.paid.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_paid_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msEmail.sent.user' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_email_subject_sent_user]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msGallery.empty' => '<div id="msGallery">
	<img src="[[++assets_url]]components/minishop2/img/web/ms2_medium.png" width="360" height="270" alt="no photo" title="" />
</div>',
      'tpl.msGallery.outer' => '<div id="msGallery">
	<a rel="fancybox" href="[[+url:default=`/assets/components/minishop2/img/web/ms2_big.png`]]" target="_blank">
		<img src="[[+360x270:default=`/assets/components/minishop2/img/web/ms2_medium.png`]]" width="360" height="270" alt="" title="" id="mainImage" />
	</a>
	<div class="row">
		[[+rows]]
	</div>
</div>',
      'tpl.msGallery.row' => '<div class="span2 col-md-2">
	<a href="[[+360x270:default=`[[+url]]`]]" class="thumbnail" data-image="[[+url]]">
		<img src="[[+120x90]]" alt="" title="[[+name]]" width="120" height="90">
	</a>
</div>',
      'tpl.msGetOrder.row' => '<tr>
	<td class="image"><img src="[[++site_url]][[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" /></td>
	<td class="title">[[+link:isnot=``:then=`<a href="[[+link]]">[[+name]]</a>`:else=`[[+name]]`]]<br/>
		<small><i>[[+option.color]] [[+option.size]]</i></small>
	</td>
	<td class="count">[[+count]] [[%ms2_frontend_count_unit]]</td>
	<td class="weight">[[+weight]] [[%ms2_frontend_weight_unit]]</td>
	<td class="price">[[+price]] [[%ms2_frontend_currency]]</td>
</tr>
<!--minishop2_option.color [[%ms2_frontend_color]]: [[+option.color]];-->
<!--minishop2_option.size [[%ms2_frontend_size]]: [[+option.size]];-->
',
      'tpl.msMiniCart' => '<div id="msMiniCart" [[+total_count:isnot=`0`:then=`class="full"`:else=``]]>
	<div class="empty">
		<h5><i class="glyphicon glyphicon-shopping-cart"></i> [[%ms2_minicart]]</h5>
		[[%ms2_minicart_is_empty]]
	</div>
	<div class="not_empty">
		<h5><i class="glyphicon glyphicon-shopping-cart"></i> [[%ms2_minicart]]</h5>
		[[%ms2_minicart_goods]]: <strong class="ms2_total_count">[[+total_count]]</strong> [[%ms2_frontend_count_unit]],
		[[%ms2_minicart_cost]]: <strong class="ms2_total_cost">[[+total_cost]]</strong> [[%ms2_frontend_currency]]
	</div>
</div>',
      'tpl.msOptions.outer' => '<div class="form-group">
	<label class="col-sm-2 control-label">[[%ms2_product_[[+name]]]]:</label>
	<div class="col-sm-3">
		<select name="options[[[+name]]]" class="form-control">[[+rows]]</select>
	</div>
</div>',
      'tpl.msOptions.row' => '<option value="[[+value]]" [[+selected]]>[[+value]]</option>',
      'tpl.msOrder.delivery' => '<div class="checkbox">
	<label class="delivery input-parent">
		<input type="radio" name="delivery" value="[[+id]]" id="delivery_[[+id]]" data-payments=\'[[+payments]]\' [[+checked]]>
		[[+logo:default=`[[+name]]`]] <!--&mdash; <i>[[+price]] [[%ms2_frontend_currency]]</i>-->
		[[+description]]
	</label>
</div>
<!--minishop2_logo <img src="[[+logo]]" />-->
<!--minishop2_description <p><small>[[+description]]</small></p>-->',
      'tpl.msOrder.outer' => '<form class="form-horizontal ms2_form" id="msOrder" method="post">
	<div class="row">
		<div class="span6 col-md-6">
			<h4>[[%ms2_frontend_credentials]]:</h4>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label" for="email"><span class="required-star">*</span> [[%ms2_frontend_email]]</label>
				<div class="col-sm-6">
					<input type="email" id="email" placeholder="[[%ms2_frontend_email]]" name="email" value="[[+email]]" class="form-control [[+errors.email]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="receiver"><span class="required-star">*</span> [[%ms2_frontend_receiver]]</label>
				<div class="col-sm-6">
					<input type="text" id="receiver" placeholder="[[%ms2_frontend_receiver]]" name="receiver" value="[[+receiver]]" class="form-control [[+errors.receiver]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="phone"><span class="required-star">*</span> [[%ms2_frontend_phone]]</label>
				<div class="col-sm-6">
					<input type="text" id="phone" placeholder="[[%ms2_frontend_phone]]" name="phone" value="[[+phone]]" class="form-control [[+errors.phone]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="comment"><span class="required-star">*</span> [[%ms2_frontend_comment]]</label>
				<div class="col-sm-6">
					<textarea name="comment" id="comment" placeholder="[[%ms2_frontend_comment]]" class="form-control [[+errors.comment]]">[[+comment]]</textarea>
				</div>
			</div>
		</div>
		<div class="span6 col-md-6" id="payments">
			<h4>[[%ms2_frontend_payments]]:</h4>
			<div class="form-group">
				<label class="col-sm-4 control-label" ><span class="required-star">*</span> [[%ms2_frontend_payment_select]]</label>
				<div class="col-sm-6">
					[[+payments]]
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span6 col-md-6" id="deliveries">
			<h4>[[%ms2_frontend_deliveries]]:</h4>
			<div class="form-group">
				<label class="col-sm-4 control-label" ><span class="required-star">*</span> [[%ms2_frontend_delivery_select]]</label>
				<div class="col-sm-6">
					[[+deliveries]]
				</div>
			</div>
		</div>
		<div class="span6 col-md-6">
			<h4>[[%ms2_frontend_address]]:</h4>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label" for="index"><span class="required-star">*</span> [[%ms2_frontend_index]]</label>
				<div class="col-sm-4">
					<input type="text" id="index" placeholder="[[%ms2_frontend_index]]"  name="index" value="[[+index]]" class="form-control [[+errors.index]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="region"><span class="required-star">*</span> [[%ms2_frontend_region]]</label>
				<div class="col-sm-6">
					<input type="text" id="region" placeholder="[[%ms2_frontend_region]]" name="region" value="[[+region]]" class="form-control [[+errors.region]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="city"><span class="required-star">*</span> [[%ms2_frontend_city]]</label>
				<div class="col-sm-6">
					<input type="text" id="city" placeholder="[[%ms2_frontend_city]]" name="city" value="[[+city]]" class="form-control [[+errors.city]]">
				</div>
			</div>
			<div class="form-group input-parent">
				<label class="col-sm-4 control-label"  for="street"><span class="required-star">*</span> [[%ms2_frontend_street]]</label>
				<div class="col-md-6">
					<div class="col-md-4">
						<input type="text" id="street" placeholder="[[%ms2_frontend_street]]" name="street" value="[[+street]]" class="form-control [[+errors.street]]">
					</div>
					<div class="col-md-4">
						<input type="text" id="building" placeholder="[[%ms2_frontend_building]]" name="building" value="[[+building]]" class="form-control [[+errors.building]]">
					</div>
					<div class="col-md-4">
						<input type="text" id="room" placeholder="[[%ms2_frontend_room]]" name="room" value="[[+room]]" class="form-control [[+errors.room]]">
					</div>
				</div>
			</div>
		</div>
	</div>
	<button type="button" name="ms2_action" value="order/clean" class="btn btn-default ms2_link"><i class="glyphicon glyphicon-remove"></i> [[%ms2_frontend_order_cancel]]</button>
	<hr/>
	<div class="well">
		<div class="col-md-offset-2">
			<h3>[[%ms2_frontend_order_cost]]: <span id="ms2_order_cost">[[+order_cost:default=`0`]]</span> [[%ms2_frontend_currency]]</h3>
			<button type="submit" name="ms2_action" value="order/submit" class="btn btn-default btn-primary ms2_link">[[%ms2_frontend_order_submit]]</button>
		</div>
	</div>
</form>',
      'tpl.msOrder.payment' => '<div class="checkbox">
	<label class="payment input-parent">
		<input type="radio" name="payment" value="[[+id]]" id="payment_[[+id]]" [[+checked]]>
		[[+logo]]
		[[+description]]
	</label>
</div>
<!--minishop2_logo <img src="[[+logo]]" />-->
<!--minishop2_!logo [[+name]]-->
<!--minishop2_description <p><small>[[+description]]</small></p>-->
',
      'tpl.msOrder.success' => '[[!msGetOrder?id=`[[+id]]`]]

<h3>[[%ms2_frontend_order_success]]</h3>

<div id="msCart">
	<table class="table table-striped">
		<tr class="header">
			<th class="image span2 col-md-2">&nbsp;</th>
			<th class="title span4 col-md-4">[[%ms2_cart_title]]</th>
			<th class="count span2 col-md-2">[[%ms2_cart_count]]</th>
			<th class="weight span1 col-md-1">[[%ms2_cart_weight]]</th>
			<th class="price span1 col-md-1">[[%ms2_cart_cost]]</th>
		</tr>
		[[+goods]]
		<tr class="footer">
			<th class="total" colspan="2">[[%ms2_cart_total]]:</th>
			<th class="total_count"><span class="ms2_total_count">[[+cart_count]]</span> [[%ms2_frontend_count_unit]]</th>
			<th class="total_weight"><span class="ms2_total_weight">[[+cart_weight]]</span> [[%ms2_frontend_weight_unit]]</th>
			<th class="total_cost"><span class="ms2_total_cost">[[+cart_cost]]</span> [[%ms2_frontend_currency]]</th>
		</tr>
	</table>
	<h4>[[%ms2_frontend_order_cost]]: [[+cart_cost]] [[%ms2_frontend_currency]] + [[+delivery_cost]] [[%ms2_frontend_currency]] = <big>[[+cost]]</big> [[%ms2_frontend_currency]]</h4>
</div>',
      'tpl.msProducts.row' => '<div class="row ms2_product">
	<div class="span2 col-md-2"><img src="[[+thumb:default=`[[++assets_url]]components/minishop2/img/web/ms2_small.png`]]" width="120" height="90" /></div>
	<div class="row span10 col-md-10">
		<form method="post" class="ms2_form">
			<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
			<span class="flags">[[+new]] [[+popular]] [[+favorite]]</span>
			<span class="price">[[+price]] [[%ms2_frontend_currency]]</span>
			[[+old_price]]
			<button class="btn btn-default" type="submit" name="ms2_action" value="cart/add"><i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]</button>
			<input type="hidden" name="id" value="[[+id]]">
			<input type="hidden" name="count" value="1">
			<input type="hidden" name="options" value="[]">
		</form>
		<p><small>[[+introtext]]</small></p>
	</div>
</div>
<br/><br/>
<!--minishop2_popular <i class="glyphicon glyphicon-star" title="[[%ms2_frontend_popular]]"></i>-->
<!--minishop2_new <i class="glyphicon glyphicon-flag" title="[[%ms2_frontend_new]]"></i>-->
<!--minishop2_favorite <i class="glyphicon glyphicon-bookmark" title="[[%ms2_frontend_favorite]]"></i>-->
<!--minishop2_old_price <span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>-->',
    ),
    'setup-options' => 'minishop2-2.1.12-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '3fb84fa73dd8b9f00b2e2fc435191d43',
      'native_key' => 'minishop2',
      'filename' => 'modNamespace/42b2653c49397e09b10688ddb622af52.vehicle',
      'namespace' => 'minishop2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b9bc0e8322e70f7f0694b1c99b00cf2',
      'native_key' => 'ms2_category_grid_fields',
      'filename' => 'modSystemSetting/6246a843de472140ea38e83717e6d962.vehicle',
      'namespace' => 'minishop2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '120546d186776b231c78ace2ec099564',
      'native_key' => 'ms2_category_show_nested_products',
      'filename' => 'modSystemSetting/f1478c121d9e9b5b0081e41f05117d0c.vehicle',
      'namespace' => 'minishop2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a1d2a9d326f27df6ad9f5bfbc1d595cc',
      'native_key' => 'ms2_category_show_comments',
      'filename' => 'modSystemSetting/23ef533b81c3b4d0ec9b7df92e38b08b.vehicle',
      'namespace' => 'minishop2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4fb3cddcbf412e66b180bb7e55524ebf',
      'native_key' => 'ms2_category_remember_tabs',
      'filename' => 'modSystemSetting/85308bea64cce8877412277b835367f1.vehicle',
      'namespace' => 'minishop2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a078386397e6f232969cf283a4b4543',
      'native_key' => 'ms2_category_remember_grid',
      'filename' => 'modSystemSetting/b44186dba0d734f18f5095cab7bfcac1.vehicle',
      'namespace' => 'minishop2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3bb8a810fd161045777ed6b55228985',
      'native_key' => 'ms2_category_id_as_alias',
      'filename' => 'modSystemSetting/54c729e80bdfff757a40a28f1267b089.vehicle',
      'namespace' => 'minishop2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44af33f7ccc3dd573180bb1d3a9c6ccd',
      'native_key' => 'ms2_category_content_default',
      'filename' => 'modSystemSetting/cbcde0bf7187a4b577f39a23b7d756ee.vehicle',
      'namespace' => 'minishop2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a0bd036f1fdb7f7f528f3c7be28a5e8f',
      'native_key' => 'ms2_product_main_fields',
      'filename' => 'modSystemSetting/1d513946d38590bf1b73d0b1e5aa4da9.vehicle',
      'namespace' => 'minishop2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aa8c56f7e82cffed573370c331d778f3',
      'native_key' => 'ms2_product_extra_fields',
      'filename' => 'modSystemSetting/7ac148b467ae6151b46d77f3e0d7df22.vehicle',
      'namespace' => 'minishop2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'db4c1ec3ee54cfae182ba19dd220901c',
      'native_key' => 'ms2_product_show_comments',
      'filename' => 'modSystemSetting/02a1c9241f4809d7cd0798ab642ba2a3.vehicle',
      'namespace' => 'minishop2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd5580e717343597d474722f3c34f290e',
      'native_key' => 'ms2_template_product_default',
      'filename' => 'modSystemSetting/ac7af0b69ad7765dbd07fe7f02ad1707.vehicle',
      'namespace' => 'minishop2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b24a49191b203ba653f33bb79bcab5cd',
      'native_key' => 'ms2_product_show_in_tree_default',
      'filename' => 'modSystemSetting/867461f7486c7b2c25bc3265367ce5fe.vehicle',
      'namespace' => 'minishop2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f2124fe3935022ef803e0cf49a9789be',
      'native_key' => 'ms2_product_source_default',
      'filename' => 'modSystemSetting/4d27241a8bc268169a0904a3a2f1d266.vehicle',
      'namespace' => 'minishop2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b7405b8700bb1ffaae296079507784be',
      'native_key' => 'ms2_product_thumbnail_size',
      'filename' => 'modSystemSetting/88e8bf9fb02e5c3514816e45189c20ec.vehicle',
      'namespace' => 'minishop2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '83140ad180e2eccc2a978ef77a535944',
      'native_key' => 'ms2_product_vertical_tabs',
      'filename' => 'modSystemSetting/f58d6f0d4faae030f230a4b11b1a7ca6.vehicle',
      'namespace' => 'minishop2',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e4fc71903d8d38bd66b848f22a76a1ee',
      'native_key' => 'ms2_product_remember_tabs',
      'filename' => 'modSystemSetting/257a9298d260050b88479dee561a5415.vehicle',
      'namespace' => 'minishop2',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b5b38410a803c4fe830eedfc8ce83b2b',
      'native_key' => 'ms2_product_id_as_alias',
      'filename' => 'modSystemSetting/fa15a146e5a14f0a68015ff32b631301.vehicle',
      'namespace' => 'minishop2',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b7f1ce03c09036d1818c95e4b25658a',
      'native_key' => 'ms2_price_format',
      'filename' => 'modSystemSetting/54f268e568369deea195f0a8b74209ee.vehicle',
      'namespace' => 'minishop2',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a2bf42af48ce4accf4c8e59e4a75b3a6',
      'native_key' => 'ms2_weight_format',
      'filename' => 'modSystemSetting/155ebd618f5b3a9d939d778bcab446ee.vehicle',
      'namespace' => 'minishop2',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c07681454a4387fe4c16fca1fab59f88',
      'native_key' => 'ms2_price_format_no_zeros',
      'filename' => 'modSystemSetting/a1c14222eb2815fab597d196f13dc893.vehicle',
      'namespace' => 'minishop2',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80da5a238ce8ea91728035303fa2f487',
      'native_key' => 'ms2_weight_format_no_zeros',
      'filename' => 'modSystemSetting/b27414f63daafc241cc93a48315b5b26.vehicle',
      'namespace' => 'minishop2',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70c51b27a0d934db395ee83c1178acdd',
      'native_key' => 'ms2_product_tab_extra',
      'filename' => 'modSystemSetting/518261e05e6cf9587f774ef35d0ded13.vehicle',
      'namespace' => 'minishop2',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b90f1d4102a5ab58d6b9eae08ee6aa1d',
      'native_key' => 'ms2_product_tab_gallery',
      'filename' => 'modSystemSetting/c64bc1c5028106955ea5580416c135ca.vehicle',
      'namespace' => 'minishop2',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4aa33c05b21e09a08e52dd1e1276f80c',
      'native_key' => 'ms2_product_tab_links',
      'filename' => 'modSystemSetting/0bab1ac6fc6d2b436be8406e86dda107.vehicle',
      'namespace' => 'minishop2',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '014dc95ebdc930a7406b0dd67f036421',
      'native_key' => 'ms2_cart_handler_class',
      'filename' => 'modSystemSetting/527f8ee4f9b355c33d25b7823116590b.vehicle',
      'namespace' => 'minishop2',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53ed0ab39c9c234b4bf0c43133d8889a',
      'native_key' => 'ms2_order_grid_fields',
      'filename' => 'modSystemSetting/b3d54001ff59668ed62fef3d4bee5aa5.vehicle',
      'namespace' => 'minishop2',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '450b4846341454f008bedd116fe0dc88',
      'native_key' => 'ms2_order_address_fields',
      'filename' => 'modSystemSetting/d5642d695c34d05a4ca54303faee69a0.vehicle',
      'namespace' => 'minishop2',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bad3191c0b010586b7ecd89ef9dd7f23',
      'native_key' => 'ms2_order_product_fields',
      'filename' => 'modSystemSetting/65f6746cdaae8723a4b17ad067dde973.vehicle',
      'namespace' => 'minishop2',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8c87abeff32dd4b69f2869142b39b726',
      'native_key' => 'ms2_order_handler_class',
      'filename' => 'modSystemSetting/20125e26125a591607803eceb87a3c09.vehicle',
      'namespace' => 'minishop2',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cd813cb27df764cf4f9dc139760a08f3',
      'native_key' => 'ms2_order_user_groups',
      'filename' => 'modSystemSetting/27a1f838e1e4ea69f951b58684582144.vehicle',
      'namespace' => 'minishop2',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '356d2292649dd13684585f4fdddfe96e',
      'native_key' => 'ms2_date_format',
      'filename' => 'modSystemSetting/43ea1e09602dbdd9a2e2724befa598af.vehicle',
      'namespace' => 'minishop2',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1eaf79700b569057566248e2fe41cdd4',
      'native_key' => 'ms2_email_manager',
      'filename' => 'modSystemSetting/d84e13762d931a95f28b3d40bed28859.vehicle',
      'namespace' => 'minishop2',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2ebad21b86ca057af204587d1303a763',
      'native_key' => 'ms2_frontend_css',
      'filename' => 'modSystemSetting/230cf6103a06fdd0688a9e7f8514aa5b.vehicle',
      'namespace' => 'minishop2',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '537a105416c28ab7c109b6fbd22084b8',
      'native_key' => 'ms2_frontend_js',
      'filename' => 'modSystemSetting/b39698a4f1fe6e549150f63fa9a45829.vehicle',
      'namespace' => 'minishop2',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3aa89b46e6ae1b7bf6db4323b1dceaac',
      'native_key' => 'ms2_payment_paypal_api_url',
      'filename' => 'modSystemSetting/4fa9438fff955cc0850b11f23da1b182.vehicle',
      'namespace' => 'minishop2',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '925e4f37a32da3fa9245dd31e909f43d',
      'native_key' => 'ms2_payment_paypal_checkout_url',
      'filename' => 'modSystemSetting/3c2ec32842e2fe537c050361b3f0621f.vehicle',
      'namespace' => 'minishop2',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '71d2bb58126cbd9ac7e44d847060a37c',
      'native_key' => 'ms2_payment_paypal_currency',
      'filename' => 'modSystemSetting/1e5909f1a38f2a0b6dfe1a54bc6468ea.vehicle',
      'namespace' => 'minishop2',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '99ba675d53354a057261c1194b4aa19f',
      'native_key' => 'ms2_payment_paypal_user',
      'filename' => 'modSystemSetting/340e274dbe2a954d4629ab980fb91606.vehicle',
      'namespace' => 'minishop2',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cbd2732b304d607ec50a0b0a7c827157',
      'native_key' => 'ms2_payment_paypal_pwd',
      'filename' => 'modSystemSetting/cab1dc68e235e910445cecced6210a8e.vehicle',
      'namespace' => 'minishop2',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7f1d22cbd2a7226fec6dc36387409e1b',
      'native_key' => 'ms2_payment_paypal_signature',
      'filename' => 'modSystemSetting/a0a0104702f2a78f699caf1f493349cc.vehicle',
      'namespace' => 'minishop2',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c709db83a1105ac9baf5f00b337e0276',
      'native_key' => 'ms2_payment_paypal_success_id',
      'filename' => 'modSystemSetting/f30df5442dcb55e65398d939c893ed10.vehicle',
      'namespace' => 'minishop2',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '171119e50aeba7c2ea8aa22d025cad14',
      'native_key' => 'ms2_payment_paypal_cancel_id',
      'filename' => 'modSystemSetting/b40f5e6fe8cfc4b462c6ab8508750a4a.vehicle',
      'namespace' => 'minishop2',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6f1ca53ffe9b3956e95a5f9c52d67c43',
      'native_key' => 'ms2_payment_paypal_cancel_order',
      'filename' => 'modSystemSetting/e3cb0883516a84042016fc0af0430adf.vehicle',
      'namespace' => 'minishop2',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'fc302f59863c98eb2f1c3abe86d2d08f',
      'native_key' => 'msOnBeforeAddToCart',
      'filename' => 'modEvent/a7e3ecfb15476ca287f7c3eefc0971b4.vehicle',
      'namespace' => 'minishop2',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f64ebcaff7df9a03a367f81950c58647',
      'native_key' => 'msOnAddToCart',
      'filename' => 'modEvent/d549865d79624f744bdc28d44d88ee44.vehicle',
      'namespace' => 'minishop2',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1c8fd3d9e5072b6bc90ffc8b3507bca8',
      'native_key' => 'msOnBeforeChangeInCart',
      'filename' => 'modEvent/aa4998d5c89832e8ee1c38805c01ce52.vehicle',
      'namespace' => 'minishop2',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd2e7972d3918e8a2db8b3d99866e690a',
      'native_key' => 'msOnChangeInCart',
      'filename' => 'modEvent/6d4c6ae0987e3998c47ba5eeeddd2adb.vehicle',
      'namespace' => 'minishop2',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8e4d9827beb61a4620ce921ba9070ad8',
      'native_key' => 'msOnBeforeRemoveFromCart',
      'filename' => 'modEvent/0c497442eea30499687f69bf171d2a98.vehicle',
      'namespace' => 'minishop2',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '4b90ff4a3632331982a55df54c35ba9e',
      'native_key' => 'msOnRemoveFromCart',
      'filename' => 'modEvent/7e545ea59e9f73e1234cd9ddf551afbb.vehicle',
      'namespace' => 'minishop2',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f382568b406d281d1852077e4d6b7481',
      'native_key' => 'msOnBeforeEmptyCart',
      'filename' => 'modEvent/15b52d74dd18b8e224a3f11763c60df8.vehicle',
      'namespace' => 'minishop2',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a7fdf0aa10c73a50e2ffc764489ab7e9',
      'native_key' => 'msOnEmptyCart',
      'filename' => 'modEvent/06d30b75df69283eea6a4b981fc0a02d.vehicle',
      'namespace' => 'minishop2',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6f929f4b088f2a77077fd6ff58f30fc8',
      'native_key' => 'msOnBeforeAddToOrder',
      'filename' => 'modEvent/a4035ed936102c0db7eb068872827446.vehicle',
      'namespace' => 'minishop2',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'bbb02f2de5382a367afb091e8d2db4c6',
      'native_key' => 'msOnAddToOrder',
      'filename' => 'modEvent/eb12332c18521db8c5a3322202fb57be.vehicle',
      'namespace' => 'minishop2',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c6fc303e3d7e3a6c2837dcc8dea0628e',
      'native_key' => 'msOnBeforeRemoveFromOrder',
      'filename' => 'modEvent/0b44290e2fe6eec77bbf93dccf2d3ef5.vehicle',
      'namespace' => 'minishop2',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c9b7c7511a129bb924c36f84a00931ab',
      'native_key' => 'msOnRemoveFromOrder',
      'filename' => 'modEvent/812f63eaaee55668e6253924454aefbc.vehicle',
      'namespace' => 'minishop2',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'bee4a404f25515bce305d67bc9ff69b3',
      'native_key' => 'msOnBeforeEmptyOrder',
      'filename' => 'modEvent/923203193ebb42b611b83914dad2f959.vehicle',
      'namespace' => 'minishop2',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c5a5fc42140b1eef22005b705b0eb4ed',
      'native_key' => 'msOnEmptyOrder',
      'filename' => 'modEvent/f289891cf3b803bed518eac787846cc1.vehicle',
      'namespace' => 'minishop2',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b328955161536e0b8781527c1c44c0ac',
      'native_key' => 'msOnBeforeGetOrderCost',
      'filename' => 'modEvent/b8127670ac4bc335b98d5b3f26c151af.vehicle',
      'namespace' => 'minishop2',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '15ea55700b28b3a116a1ee31178cbea9',
      'native_key' => 'msOnGetOrderCost',
      'filename' => 'modEvent/57caa79bf0cc8a44f7e1affded27fa8f.vehicle',
      'namespace' => 'minishop2',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '83bfe4f9b0878d01b9a7eb02b4a047bd',
      'native_key' => 'msOnBeforeChangeOrderStatus',
      'filename' => 'modEvent/0a9c2d22109657af1a8d6cf226461d14.vehicle',
      'namespace' => 'minishop2',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ac5856c3115a6c82417b079c386bf6a6',
      'native_key' => 'msOnChangeOrderStatus',
      'filename' => 'modEvent/fb6fade4dcd1eaea8e9a5b67c8dce87e.vehicle',
      'namespace' => 'minishop2',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0e61429db5b78f109b2fbe08da0fd20c',
      'native_key' => 'msOnBeforeUpdateOrder',
      'filename' => 'modEvent/dbf18f6fdc2fa87e0d594f2cba1c996b.vehicle',
      'namespace' => 'minishop2',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b85c4a45ab1d22de9e693186d2f7888a',
      'native_key' => 'msOnUpdateOrder',
      'filename' => 'modEvent/18ca67afe184ad3f2566709323a7eb34.vehicle',
      'namespace' => 'minishop2',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e21621c3f0186614603aabba07dd9dd3',
      'native_key' => 'msOnBeforeCreateOrder',
      'filename' => 'modEvent/e7df234672d10dbceb03ced10c125771.vehicle',
      'namespace' => 'minishop2',
    ),
    65 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '055ab299716a4780bf9ac962fd0e6fb1',
      'native_key' => 'msOnCreateOrder',
      'filename' => 'modEvent/04b84ad84fcb0161001037011c8ef7e3.vehicle',
      'namespace' => 'minishop2',
    ),
    66 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0dd35051838e18ae300879486d13297b',
      'native_key' => 'msOnBeforeRemoveOrder',
      'filename' => 'modEvent/38d3ef0c0fa119836bdaaa80ce4530ae.vehicle',
      'namespace' => 'minishop2',
    ),
    67 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '58a8dd9303ffcad42277bfc919f5a975',
      'native_key' => 'msOnRemoveOrder',
      'filename' => 'modEvent/045b42b2b49b3258ca6a80d3f3c26def.vehicle',
      'namespace' => 'minishop2',
    ),
    68 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '2b67b0286abd8427d33218f7d5fb2a71',
      'native_key' => 'msOnSubmitOrder',
      'filename' => 'modEvent/696831a39c95b59dd8cfabe2e719f763.vehicle',
      'namespace' => 'minishop2',
    ),
    69 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a5baa77fcba6bd4194cbab2cd880adbc',
      'native_key' => 'msOnManagerCustomCssJs',
      'filename' => 'modEvent/0d364a07d66447758fa186b501a5c024.vehicle',
      'namespace' => 'minishop2',
    ),
    70 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c3b0d7d19115270938ceda788c39e246',
      'native_key' => 'msOnBeforeValidateOrderValue',
      'filename' => 'modEvent/9969a540f0beb2b38f3304b1d5e7b5fa.vehicle',
      'namespace' => 'minishop2',
    ),
    71 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '9930aa8e74861bca7ff95b2d157ed415',
      'native_key' => 'msOnValidateOrderValue',
      'filename' => 'modEvent/0799cece82246422eec8fc04bd96ce98.vehicle',
      'namespace' => 'minishop2',
    ),
    72 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c93f80548911fb12c6a970a545ec7fc0',
      'native_key' => 'msOnGetProductPrice',
      'filename' => 'modEvent/316196216ec4d0a4f21e64595122edcb.vehicle',
      'namespace' => 'minishop2',
    ),
    73 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f3d742109c552b286a80134e2334d66b',
      'native_key' => 'msOnGetProductWeight',
      'filename' => 'modEvent/fcfebd41df4acc585e2128b6bcd020ec.vehicle',
      'namespace' => 'minishop2',
    ),
    74 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => 'a49070ebc3360a865ad33bcff09a1c77',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/c2746c792054ad52d9bbf50e928cbd6a.vehicle',
      'namespace' => 'minishop2',
    ),
    75 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '03040914da52c1cdda16f0aa847cf754',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/b65afc137cb017451a181f7026f6b737.vehicle',
      'namespace' => 'minishop2',
    ),
    76 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '9a80ffa9ee62f60142e4ca87052e7fb3',
      'native_key' => 'minishop2',
      'filename' => 'modMenu/bf17744ca6ad9f90b8aea0528a486ecc.vehicle',
      'namespace' => 'minishop2',
    ),
    77 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '59d09d0c2c7e44d8d192438aa0c6561f',
      'native_key' => 'ms2_orders',
      'filename' => 'modMenu/c5f997fa6d910f29184b397914ec7d81.vehicle',
      'namespace' => 'minishop2',
    ),
    78 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '4264d83570a85f906cfc7d64f2261cb1',
      'native_key' => 'ms2_settings',
      'filename' => 'modMenu/2c871c605876f32507af6124addc4971.vehicle',
      'namespace' => 'minishop2',
    ),
    79 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'fea6fa1f86d0d5477ca413b752a0e3f5',
      'native_key' => 1,
      'filename' => 'modCategory/a88e415b01db7f2bf83c3ea9d05c2292.vehicle',
      'namespace' => 'minishop2',
    ),
  ),
);