Leading Systems Contao Merconis bundle changelog
===========================================

### 4.0.1 unreleased (2018-08-30)

 * Allow a customLogic file to be used for export data preparation

 * Only render order confirmation form if checkout is allowed

 * Accept aliases of non-existing categories/pages to make sure that a product import via API
 works even if the given category aliases don't make sense. Also accept product data with no
 given alias at all.

 * Add new API resource "syncDbafs"

 * Add new API resource "getStandardProductImagePath" (#26)

 * Add functionality to try to get a dummy image if no product image could be found

 * Add database relation for ls_shop_productManagementApiInspector_apiPage to make sure that
 the page reference is updated properly by the Merconis installer
 
 * Make sure that the filter options "--checkall--" and "--reset--" don't actually get stored
 in the filter criteria array
 
 
### 4.0.0 (2018-04-29)

 * Official release with some small adjustments
 
 
### 4.0.0 rc 1 (2018-04-25)

 * Some minor adjustments
 
 
### 4.0.0 beta 1 (2018-03-16)

 * Now compatible with Contao 4 (contao-bundle)