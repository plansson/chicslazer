<?php

class MagentoService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'Array' => '\\ArrayCustom',
  'Struct' => '\\Struct',
  'duration' => '\\duration',
  'dateTime' => '\\dateTimeCustom',
  'NOTATION' => '\\NOTATION',
  'time' => '\\time',
  'date' => '\\date',
  'gYearMonth' => '\\gYearMonth',
  'gYear' => '\\gYear',
  'gMonthDay' => '\\gMonthDay',
  'gDay' => '\\gDay',
  'gMonth' => '\\gMonth',
  'boolean' => '\\boolean',
  'base64Binary' => '\\base64Binary',
  'hexBinary' => '\\hexBinary',
  'float' => '\\floatCustom',
  'double' => '\\double',
  'anyURI' => '\\anyURI',
  'QName' => '\\QName',
  'string' => '\\stringCustom',
  'normalizedString' => '\\normalizedString',
  'token' => '\\token',
  'language' => '\\language',
  'Name' => '\\Name',
  'NMTOKEN' => '\\NMTOKEN',
  'NCName' => '\\NCName',
  'NMTOKENS' => '\\NMTOKENS',
  'ID' => '\\ID',
  'IDREF' => '\\IDREF',
  'ENTITY' => '\\ENTITY',
  'IDREFS' => '\\IDREFS',
  'ENTITIES' => '\\ENTITIES',
  'decimal' => '\\decimal',
  'integer' => '\\integer',
  'nonPositiveInteger' => '\\nonPositiveInteger',
  'negativeInteger' => '\\negativeInteger',
  'long' => '\\long',
  'int' => '\\intCustom',
  'short' => '\\short',
  'byte' => '\\byte',
  'nonNegativeInteger' => '\\nonNegativeInteger',
  'unsignedLong' => '\\unsignedLong',
  'unsignedInt' => '\\unsignedInt',
  'unsignedShort' => '\\unsignedShort',
  'unsignedByte' => '\\unsignedByte',
  'positiveInteger' => '\\positiveInteger',
  'associativeEntity' => '\\associativeEntity',
  'associativeArray' => '\\associativeArray',
  'associativeMultiEntity' => '\\associativeMultiEntity',
  'associativeMultiArray' => '\\associativeMultiArray',
  'filters' => '\\filters',
  'complexFilterArray' => '\\complexFilterArray',
  'complexFilter' => '\\complexFilter',
  'ArrayOfString' => '\\ArrayOfString',
  'ArrayOfInt' => '\\ArrayOfInt',
  'apiMethodEntity' => '\\apiMethodEntity',
  'ArrayOfApiMethods' => '\\ArrayOfApiMethods',
  'apiEntity' => '\\apiEntity',
  'ArrayOfApis' => '\\ArrayOfApis',
  'existsFaltureEntity' => '\\existsFaltureEntity',
  'ArrayOfExistsFaltures' => '\\ArrayOfExistsFaltures',
  'storeEntity' => '\\storeEntity',
  'storeEntityArray' => '\\storeEntityArray',
  'magentoInfoEntity' => '\\magentoInfoEntity',
  'directoryCountryEntity' => '\\directoryCountryEntity',
  'directoryCountryEntityArray' => '\\directoryCountryEntityArray',
  'directoryRegionEntity' => '\\directoryRegionEntity',
  'directoryRegionEntityArray' => '\\directoryRegionEntityArray',
  'customerCustomerEntityToCreate' => '\\customerCustomerEntityToCreate',
  'customerCustomerEntity' => '\\customerCustomerEntity',
  'customerCustomerEntityArray' => '\\customerCustomerEntityArray',
  'customerGroupEntity' => '\\customerGroupEntity',
  'customerGroupEntityArray' => '\\customerGroupEntityArray',
  'customerAddressEntityCreate' => '\\customerAddressEntityCreate',
  'customerAddressEntityItem' => '\\customerAddressEntityItem',
  'customerAddressEntityArray' => '\\customerAddressEntityArray',
  'catalogProductEntityArray' => '\\catalogProductEntityArray',
  'catalogProductAdditionalAttributesEntity' => '\\catalogProductAdditionalAttributesEntity',
  'catalogProductEntity' => '\\catalogProductEntity',
  'catalogProductRequestAttributes' => '\\catalogProductRequestAttributes',
  'catalogProductReturnEntity' => '\\catalogProductReturnEntity',
  'catalogProductCreateEntity' => '\\catalogProductCreateEntity',
  'catalogProductCreateEntityArray' => '\\catalogProductCreateEntityArray',
  'catalogProductAttributeSetEntity' => '\\catalogProductAttributeSetEntity',
  'catalogProductAttributeSetEntityArray' => '\\catalogProductAttributeSetEntityArray',
  'catalogProductTypeEntity' => '\\catalogProductTypeEntity',
  'catalogProductTypeEntityArray' => '\\catalogProductTypeEntityArray',
  'catalogProductTierPriceEntity' => '\\catalogProductTierPriceEntity',
  'catalogProductTierPriceEntityArray' => '\\catalogProductTierPriceEntityArray',
  'ArrayOfCatalogCategoryEntities' => '\\ArrayOfCatalogCategoryEntities',
  'catalogCategoryEntity' => '\\catalogCategoryEntity',
  'catalogCategoryEntityNoChildren' => '\\catalogCategoryEntityNoChildren',
  'ArrayOfCatalogCategoryEntitiesNoChildren' => '\\ArrayOfCatalogCategoryEntitiesNoChildren',
  'catalogCategoryTree' => '\\catalogCategoryTree',
  'catalogCategoryEntityCreate' => '\\catalogCategoryEntityCreate',
  'catalogCategoryInfo' => '\\catalogCategoryInfo',
  'catalogAssignedProduct' => '\\catalogAssignedProduct',
  'catalogAssignedProductArray' => '\\catalogAssignedProductArray',
  'catalogAttributeEntity' => '\\catalogAttributeEntity',
  'catalogAttributeEntityArray' => '\\catalogAttributeEntityArray',
  'catalogAttributeOptionEntity' => '\\catalogAttributeOptionEntity',
  'catalogAttributeOptionEntityArray' => '\\catalogAttributeOptionEntityArray',
  'catalogProductImageEntity' => '\\catalogProductImageEntity',
  'catalogProductImageEntityArray' => '\\catalogProductImageEntityArray',
  'catalogProductAttributeMediaTypeEntity' => '\\catalogProductAttributeMediaTypeEntity',
  'catalogProductAttributeMediaTypeEntityArray' => '\\catalogProductAttributeMediaTypeEntityArray',
  'catalogProductImageFileEntity' => '\\catalogProductImageFileEntity',
  'catalogProductAttributeMediaCreateEntity' => '\\catalogProductAttributeMediaCreateEntity',
  'catalogProductLinkEntity' => '\\catalogProductLinkEntity',
  'catalogProductLinkEntityArray' => '\\catalogProductLinkEntityArray',
  'catalogProductLinkAttributeEntity' => '\\catalogProductLinkAttributeEntity',
  'catalogProductLinkAttributeEntityArray' => '\\catalogProductLinkAttributeEntityArray',
  'catalogProductAttributeFrontendLabelEntity' => '\\catalogProductAttributeFrontendLabelEntity',
  'catalogProductAttributeFrontendLabelArray' => '\\catalogProductAttributeFrontendLabelArray',
  'catalogProductAttributeEntityToCreate' => '\\catalogProductAttributeEntityToCreate',
  'catalogProductAttributeEntityToUpdate' => '\\catalogProductAttributeEntityToUpdate',
  'catalogProductAttributeEntity' => '\\catalogProductAttributeEntity',
  'catalogProductAttributeOptionLabelEntity' => '\\catalogProductAttributeOptionLabelEntity',
  'catalogProductAttributeOptionLabelArray' => '\\catalogProductAttributeOptionLabelArray',
  'catalogProductAttributeOptionEntityToAdd' => '\\catalogProductAttributeOptionEntityToAdd',
  'catalogProductCustomOptionAdditionalFieldsEntity' => '\\catalogProductCustomOptionAdditionalFieldsEntity',
  'catalogProductCustomOptionAdditionalFieldsArray' => '\\catalogProductCustomOptionAdditionalFieldsArray',
  'catalogProductCustomOptionToAdd' => '\\catalogProductCustomOptionToAdd',
  'catalogProductCustomOptionToUpdate' => '\\catalogProductCustomOptionToUpdate',
  'catalogProductCustomOptionInfoEntity' => '\\catalogProductCustomOptionInfoEntity',
  'catalogProductCustomOptionListEntity' => '\\catalogProductCustomOptionListEntity',
  'catalogProductCustomOptionListArray' => '\\catalogProductCustomOptionListArray',
  'catalogProductCustomOptionTypesEntity' => '\\catalogProductCustomOptionTypesEntity',
  'catalogProductCustomOptionTypesArray' => '\\catalogProductCustomOptionTypesArray',
  'catalogProductCustomOptionValueInfoEntity' => '\\catalogProductCustomOptionValueInfoEntity',
  'catalogProductCustomOptionValueListEntity' => '\\catalogProductCustomOptionValueListEntity',
  'catalogProductCustomOptionValueListArray' => '\\catalogProductCustomOptionValueListArray',
  'catalogProductCustomOptionValueAddEntity' => '\\catalogProductCustomOptionValueAddEntity',
  'catalogProductCustomOptionValueAddArray' => '\\catalogProductCustomOptionValueAddArray',
  'catalogProductCustomOptionValueUpdateEntity' => '\\catalogProductCustomOptionValueUpdateEntity',
  'catalogProductSpecialPriceReturnEntity' => '\\catalogProductSpecialPriceReturnEntity',
  'salesOrderEntity' => '\\salesOrderEntity',
  'salesOrderListEntity' => '\\salesOrderListEntity',
  'salesOrderListEntityArray' => '\\salesOrderListEntityArray',
  'salesOrderAddressEntity' => '\\salesOrderAddressEntity',
  'salesOrderItemEntity' => '\\salesOrderItemEntity',
  'salesOrderItemEntityArray' => '\\salesOrderItemEntityArray',
  'orderItemIdQty' => '\\orderItemIdQty',
  'orderItemIdQtyArray' => '\\orderItemIdQtyArray',
  'salesOrderPaymentEntity' => '\\salesOrderPaymentEntity',
  'salesOrderStatusHistoryEntity' => '\\salesOrderStatusHistoryEntity',
  'salesOrderStatusHistoryEntityArray' => '\\salesOrderStatusHistoryEntityArray',
  'salesOrderShipmentEntity' => '\\salesOrderShipmentEntity',
  'salesOrderShipmentEntityArray' => '\\salesOrderShipmentEntityArray',
  'salesOrderShipmentCommentEntity' => '\\salesOrderShipmentCommentEntity',
  'salesOrderShipmentCommentEntityArray' => '\\salesOrderShipmentCommentEntityArray',
  'salesOrderShipmentTrackEntity' => '\\salesOrderShipmentTrackEntity',
  'salesOrderShipmentTrackEntityArray' => '\\salesOrderShipmentTrackEntityArray',
  'salesOrderShipmentItemEntity' => '\\salesOrderShipmentItemEntity',
  'salesOrderShipmentItemEntityArray' => '\\salesOrderShipmentItemEntityArray',
  'salesOrderInvoiceEntity' => '\\salesOrderInvoiceEntity',
  'salesOrderInvoiceEntityArray' => '\\salesOrderInvoiceEntityArray',
  'salesOrderInvoiceItemEntity' => '\\salesOrderInvoiceItemEntity',
  'salesOrderInvoiceItemEntityArray' => '\\salesOrderInvoiceItemEntityArray',
  'salesOrderInvoiceCommentEntity' => '\\salesOrderInvoiceCommentEntity',
  'salesOrderInvoiceCommentEntityArray' => '\\salesOrderInvoiceCommentEntityArray',
  'salesOrderCreditmemoEntity' => '\\salesOrderCreditmemoEntity',
  'salesOrderCreditmemoEntityArray' => '\\salesOrderCreditmemoEntityArray',
  'salesOrderCreditmemoItemEntity' => '\\salesOrderCreditmemoItemEntity',
  'salesOrderCreditmemoItemEntityArray' => '\\salesOrderCreditmemoItemEntityArray',
  'salesOrderCreditmemoCommentEntity' => '\\salesOrderCreditmemoCommentEntity',
  'salesOrderCreditmemoCommentEntityArray' => '\\salesOrderCreditmemoCommentEntityArray',
  'salesOrderCreditmemoData' => '\\salesOrderCreditmemoData',
  'catalogInventoryStockItemEntity' => '\\catalogInventoryStockItemEntity',
  'catalogInventoryStockItemEntityArray' => '\\catalogInventoryStockItemEntityArray',
  'catalogInventoryStockItemUpdateEntity' => '\\catalogInventoryStockItemUpdateEntity',
  'catalogInventoryStockItemUpdateEntityArray' => '\\catalogInventoryStockItemUpdateEntityArray',
  'shoppingCartAddressEntity' => '\\shoppingCartAddressEntity',
  'shoppingCartItemEntity' => '\\shoppingCartItemEntity',
  'shoppingCartItemEntityArray' => '\\shoppingCartItemEntityArray',
  'shoppingCartPaymentEntity' => '\\shoppingCartPaymentEntity',
  'shoppingCartInfoEntity' => '\\shoppingCartInfoEntity',
  'shoppingCartTotalsEntity' => '\\shoppingCartTotalsEntity',
  'shoppingCartTotalsEntityArray' => '\\shoppingCartTotalsEntityArray',
  'shoppingCartLicenseEntity' => '\\shoppingCartLicenseEntity',
  'shoppingCartLicenseEntityArray' => '\\shoppingCartLicenseEntityArray',
  'shoppingCartProductEntity' => '\\shoppingCartProductEntity',
  'shoppingCartProductEntityArray' => '\\shoppingCartProductEntityArray',
  'shoppingCartProductResponseEntityArray' => '\\shoppingCartProductResponseEntityArray',
  'shoppingCartCustomerEntity' => '\\shoppingCartCustomerEntity',
  'shoppingCartCustomerAddressEntity' => '\\shoppingCartCustomerAddressEntity',
  'shoppingCartCustomerAddressEntityArray' => '\\shoppingCartCustomerAddressEntityArray',
  'shoppingCartShippingMethodEntity' => '\\shoppingCartShippingMethodEntity',
  'shoppingCartShippingMethodEntityArray' => '\\shoppingCartShippingMethodEntityArray',
  'shoppingCartPaymentMethodEntity' => '\\shoppingCartPaymentMethodEntity',
  'shoppingCartPaymentMethodResponseEntity' => '\\shoppingCartPaymentMethodResponseEntity',
  'shoppingCartPaymentMethodResponseEntityArray' => '\\shoppingCartPaymentMethodResponseEntityArray',
  'catalogProductTagListEntity' => '\\catalogProductTagListEntity',
  'catalogProductTagListEntityArray' => '\\catalogProductTagListEntityArray',
  'catalogProductTagAddEntity' => '\\catalogProductTagAddEntity',
  'catalogProductTagUpdateEntity' => '\\catalogProductTagUpdateEntity',
  'catalogProductTagInfoEntity' => '\\catalogProductTagInfoEntity',
  'giftMessageEntity' => '\\giftMessageEntity',
  'giftMessageResponse' => '\\giftMessageResponse',
  'giftMessageResponseArray' => '\\giftMessageResponseArray',
  'giftMessageAssociativeProductsEntity' => '\\giftMessageAssociativeProductsEntity',
  'giftMessageAssociativeProductsEntityArray' => '\\giftMessageAssociativeProductsEntityArray',
  'catalogProductDownloadableLinkFileEntity' => '\\catalogProductDownloadableLinkFileEntity',
  'catalogProductDownloadableLinkAddSampleEntity' => '\\catalogProductDownloadableLinkAddSampleEntity',
  'catalogProductDownloadableLinkAddEntity' => '\\catalogProductDownloadableLinkAddEntity',
  'catalogProductDownloadableLinkFileInfoEntity' => '\\catalogProductDownloadableLinkFileInfoEntity',
  'catalogProductDownloadableLinkFileInfoEntityArray' => '\\catalogProductDownloadableLinkFileInfoEntityArray',
  'catalogProductDownloadableLinkEntity' => '\\catalogProductDownloadableLinkEntity',
  'catalogProductDownloadableLinkEntityArray' => '\\catalogProductDownloadableLinkEntityArray',
  'catalogProductDownloadableLinkSampleEntity' => '\\catalogProductDownloadableLinkSampleEntity',
  'catalogProductDownloadableLinkSampleEntityArray' => '\\catalogProductDownloadableLinkSampleEntityArray',
  'catalogProductDownloadableLinkInfoEntity' => '\\catalogProductDownloadableLinkInfoEntity',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'v2_soap.xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * End web service session
     *
     * @param stringCustom $sessionId
     * @return boolean
     */
    public function endSession($sessionId)
    {
      return $this->__soapCall('endSession', array($sessionId));
    }

    /**
     * Login user and retrive session id
     *
     * @param stringCustom $username
     * @param stringCustom $apiKey
     * @return string
     */
    public function login($username, $apiKey)
    {
      return $this->__soapCall('login', array($username, $apiKey));
    }

    /**
     * Start web service session
     *
     * @return string
     */
    public function startSession()
    {
      return $this->__soapCall('startSession', array());
    }

    /**
     * List of available resources
     *
     * @param stringCustom $sessionId
     * @return ArrayOfApis
     */
    public function resources($sessionId)
    {
      return $this->__soapCall('resources', array($sessionId));
    }

    /**
     * List of global faults
     *
     * @param stringCustom $sessionId
     * @return ArrayOfExistsFaltures
     */
    public function globalFaults($sessionId)
    {
      return $this->__soapCall('globalFaults', array($sessionId));
    }

    /**
     * List of resource faults
     *
     * @param stringCustom $resourceName
     * @param stringCustom $sessionId
     * @return ArrayOfExistsFaltures
     */
    public function resourceFaults($resourceName, $sessionId)
    {
      return $this->__soapCall('resourceFaults', array($resourceName, $sessionId));
    }

    /**
     * List of stores
     *
     * @param stringCustom $sessionId
     * @return storeEntityArray
     */
    public function storeList($sessionId)
    {
      return $this->__soapCall('storeList', array($sessionId));
    }

    /**
     * Store view info
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeId
     * @return storeEntity
     */
    public function storeInfo($sessionId, $storeId)
    {
      return $this->__soapCall('storeInfo', array($sessionId, $storeId));
    }

    /**
     * Info about current Magento installation
     *
     * @param stringCustom $sessionId
     * @return magentoInfoEntity
     */
    public function magentoInfo($sessionId)
    {
      return $this->__soapCall('magentoInfo', array($sessionId));
    }

    /**
     * List of countries
     *
     * @param stringCustom $sessionId
     * @return directoryCountryEntityArray
     */
    public function directoryCountryList($sessionId)
    {
      return $this->__soapCall('directoryCountryList', array($sessionId));
    }

    /**
     * List of regions in specified country
     *
     * @param stringCustom $sessionId
     * @param stringCustom $country
     * @return directoryRegionEntityArray
     */
    public function directoryRegionList($sessionId, $country)
    {
      return $this->__soapCall('directoryRegionList', array($sessionId, $country));
    }

    /**
     * Retrieve customers
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @return customerCustomerEntityArray
     */
    public function customerCustomerList($sessionId, filters $filters)
    {
      return $this->__soapCall('customerCustomerList', array($sessionId, $filters));
    }

    /**
     * Create customer
     *
     * @param stringCustom $sessionId
     * @param customerCustomerEntityToCreate $customerData
     * @return int
     */
    public function customerCustomerCreate($sessionId, customerCustomerEntityToCreate $customerData)
    {
      return $this->__soapCall('customerCustomerCreate', array($sessionId, $customerData));
    }

    /**
     * Retrieve customer data
     *
     * @param stringCustom $sessionId
     * @param intCustom $customerId
     * @param ArrayOfString $attributes
     * @return customerCustomerEntity
     */
    public function customerCustomerInfo($sessionId, $customerId, ArrayOfString $attributes)
    {
      return $this->__soapCall('customerCustomerInfo', array($sessionId, $customerId, $attributes));
    }

    /**
     * Update customer data
     *
     * @param stringCustom $sessionId
     * @param intCustom $customerId
     * @param customerCustomerEntityToCreate $customerData
     * @return boolean
     */
    public function customerCustomerUpdate($sessionId, $customerId, customerCustomerEntityToCreate $customerData)
    {
      return $this->__soapCall('customerCustomerUpdate', array($sessionId, $customerId, $customerData));
    }

    /**
     * Delete customer
     *
     * @param stringCustom $sessionId
     * @param intCustom $customerId
     * @return boolean
     */
    public function customerCustomerDelete($sessionId, $customerId)
    {
      return $this->__soapCall('customerCustomerDelete', array($sessionId, $customerId));
    }

    /**
     * Retrieve customer groups
     *
     * @param stringCustom $sessionId
     * @return customerGroupEntityArray
     */
    public function customerGroupList($sessionId)
    {
      return $this->__soapCall('customerGroupList', array($sessionId));
    }

    /**
     * Retrieve customer addresses
     *
     * @param stringCustom $sessionId
     * @param intCustom $customerId
     * @return customerAddressEntityArray
     */
    public function customerAddressList($sessionId, $customerId)
    {
      return $this->__soapCall('customerAddressList', array($sessionId, $customerId));
    }

    /**
     * Create customer address
     *
     * @param stringCustom $sessionId
     * @param intCustom $customerId
     * @param customerAddressEntityCreate $addressData
     * @return int
     */
    public function customerAddressCreate($sessionId, $customerId, customerAddressEntityCreate $addressData)
    {
      return $this->__soapCall('customerAddressCreate', array($sessionId, $customerId, $addressData));
    }

    /**
     * Retrieve customer address data
     *
     * @param stringCustom $sessionId
     * @param intCustom $addressId
     * @return customerAddressEntityItem
     */
    public function customerAddressInfo($sessionId, $addressId)
    {
      return $this->__soapCall('customerAddressInfo', array($sessionId, $addressId));
    }

    /**
     * Update customer address data
     *
     * @param stringCustom $sessionId
     * @param intCustom $addressId
     * @param customerAddressEntityCreate $addressData
     * @return boolean
     */
    public function customerAddressUpdate($sessionId, $addressId, customerAddressEntityCreate $addressData)
    {
      return $this->__soapCall('customerAddressUpdate', array($sessionId, $addressId, $addressData));
    }

    /**
     * Delete customer address
     *
     * @param stringCustom $sessionId
     * @param intCustom $addressId
     * @return boolean
     */
    public function customerAddressDelete($sessionId, $addressId)
    {
      return $this->__soapCall('customerAddressDelete', array($sessionId, $addressId));
    }

    /**
     * Set_Get current store view
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogCategoryCurrentStore($sessionId, $storeView)
    {
      return $this->__soapCall('catalogCategoryCurrentStore', array($sessionId, $storeView));
    }

    /**
     * Retrieve hierarchical tree of categories.
     *
     * @param stringCustom $sessionId
     * @param stringCustom $parentId
     * @param stringCustom $storeView
     * @return catalogCategoryTree
     */
    public function catalogCategoryTree($sessionId, $parentId, $storeView)
    {
      return $this->__soapCall('catalogCategoryTree', array($sessionId, $parentId, $storeView));
    }

    /**
     * Retrieve hierarchical tree of categories.
     *
     * @param stringCustom $sessionId
     * @param stringCustom $website
     * @param stringCustom $storeView
     * @param stringCustom $parentCategory
     * @return ArrayOfCatalogCategoryEntitiesNoChildren
     */
    public function catalogCategoryLevel($sessionId, $website, $storeView, $parentCategory)
    {
      return $this->__soapCall('catalogCategoryLevel', array($sessionId, $website, $storeView, $parentCategory));
    }

    /**
     * Retrieve hierarchical tree of categories.
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param stringCustom $storeView
     * @param ArrayOfString $attributes
     * @return catalogCategoryInfo
     */
    public function catalogCategoryInfo($sessionId, $categoryId, $storeView, ArrayOfString $attributes)
    {
      return $this->__soapCall('catalogCategoryInfo', array($sessionId, $categoryId, $storeView, $attributes));
    }

    /**
     * Create new category and return its id.
     *
     * @param stringCustom $sessionId
     * @param intCustom $parentId
     * @param catalogCategoryEntityCreate $categoryData
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogCategoryCreate($sessionId, $parentId, catalogCategoryEntityCreate $categoryData, $storeView)
    {
      return $this->__soapCall('catalogCategoryCreate', array($sessionId, $parentId, $categoryData, $storeView));
    }

    /**
     * Update category
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param catalogCategoryEntityCreate $categoryData
     * @param stringCustom $storeView
     * @return boolean
     */
    public function catalogCategoryUpdate($sessionId, $categoryId, catalogCategoryEntityCreate $categoryData, $storeView)
    {
      return $this->__soapCall('catalogCategoryUpdate', array($sessionId, $categoryId, $categoryData, $storeView));
    }

    /**
     * Move category in tree
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param intCustom $parentId
     * @param stringCustom $afterId
     * @return boolean
     */
    public function catalogCategoryMove($sessionId, $categoryId, $parentId, $afterId)
    {
      return $this->__soapCall('catalogCategoryMove', array($sessionId, $categoryId, $parentId, $afterId));
    }

    /**
     * Delete category
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @return boolean
     */
    public function catalogCategoryDelete($sessionId, $categoryId)
    {
      return $this->__soapCall('catalogCategoryDelete', array($sessionId, $categoryId));
    }

    /**
     * Retrieve list of assigned products
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @return catalogAssignedProductArray
     */
    public function catalogCategoryAssignedProducts($sessionId, $categoryId)
    {
      return $this->__soapCall('catalogCategoryAssignedProducts', array($sessionId, $categoryId));
    }

    /**
     * Assign product to category
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param stringCustom $product
     * @param stringCustom $position
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogCategoryAssignProduct($sessionId, $categoryId, $product, $position, $identifierType)
    {
      return $this->__soapCall('catalogCategoryAssignProduct', array($sessionId, $categoryId, $product, $position, $identifierType));
    }

    /**
     * Update assigned product
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param stringCustom $product
     * @param stringCustom $position
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogCategoryUpdateProduct($sessionId, $categoryId, $product, $position, $identifierType)
    {
      return $this->__soapCall('catalogCategoryUpdateProduct', array($sessionId, $categoryId, $product, $position, $identifierType));
    }

    /**
     * Remove product assignment from category
     *
     * @param stringCustom $sessionId
     * @param intCustom $categoryId
     * @param stringCustom $product
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogCategoryRemoveProduct($sessionId, $categoryId, $product, $identifierType)
    {
      return $this->__soapCall('catalogCategoryRemoveProduct', array($sessionId, $categoryId, $product, $identifierType));
    }

    /**
     * Set/Get current store view
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogProductCurrentStore($sessionId, $storeView)
    {
      return $this->__soapCall('catalogProductCurrentStore', array($sessionId, $storeView));
    }

    /**
     * Get list of additional attributes which are not in default create/update list
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productType
     * @param stringCustom $attributeSetId
     * @return catalogAttributeEntityArray
     */
    public function catalogProductListOfAdditionalAttributes($sessionId, $productType, $attributeSetId)
    {
      return $this->__soapCall('catalogProductListOfAdditionalAttributes', array($sessionId, $productType, $attributeSetId));
    }

    /**
     * Retrieve products list by filters
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @param stringCustom $storeView
     * @return catalogProductEntityArray
     */
    public function catalogProductList($sessionId, filters $filters, $storeView)
    {
      return $this->__soapCall('catalogProductList', array($sessionId, $filters, $storeView));
    }

    /**
     * Retrieve product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param stringCustom $storeView
     * @param catalogProductRequestAttributes $attributes
     * @param stringCustom $identifierType
     * @return catalogProductReturnEntity
     */
    public function catalogProductInfo($sessionId, $productId, $storeView, catalogProductRequestAttributes $attributes, $identifierType)
    {
      return $this->__soapCall('catalogProductInfo', array($sessionId, $productId, $storeView, $attributes, $identifierType));
    }

    /**
     * Create new product and return product id
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @param stringCustom $set
     * @param stringCustom $sku
     * @param catalogProductCreateEntity $productData
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogProductCreate($sessionId, $type, $set, $sku, catalogProductCreateEntity $productData, $storeView)
    {
      return $this->__soapCall('catalogProductCreate', array($sessionId, $type, $set, $sku, $productData, $storeView));
    }

    /**
     * Update product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param catalogProductCreateEntity $productData
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductUpdate($sessionId, $product, catalogProductCreateEntity $productData, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductUpdate', array($sessionId, $product, $productData, $storeView, $identifierType));
    }

    /**
     * Product multi update
     *
     * @param stringCustom $sessionId
     * @param ArrayOfString $productIds
     * @param catalogProductCreateEntityArray $productData
     * @param stringCustom $store
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductMultiUpdate($sessionId, ArrayOfString $productIds, catalogProductCreateEntityArray $productData, $store, $identifierType)
    {
      return $this->__soapCall('catalogProductMultiUpdate', array($sessionId, $productIds, $productData, $store, $identifierType));
    }

    /**
     * Update product special price
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $specialPrice
     * @param stringCustom $fromDate
     * @param stringCustom $toDate
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return int
     */
    public function catalogProductSetSpecialPrice($sessionId, $product, $specialPrice, $fromDate, $toDate, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductSetSpecialPrice', array($sessionId, $product, $specialPrice, $fromDate, $toDate, $storeView, $identifierType));
    }

    /**
     * Get product special price data
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return catalogProductSpecialPriceReturnEntity
     */
    public function catalogProductGetSpecialPrice($sessionId, $product, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductGetSpecialPrice', array($sessionId, $product, $storeView, $identifierType));
    }

    /**
     * Delete product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $identifierType
     * @return int
     */
    public function catalogProductDelete($sessionId, $product, $identifierType)
    {
      return $this->__soapCall('catalogProductDelete', array($sessionId, $product, $identifierType));
    }

    /**
     * Set/Get current store view
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogProductAttributeCurrentStore($sessionId, $storeView)
    {
      return $this->__soapCall('catalogProductAttributeCurrentStore', array($sessionId, $storeView));
    }

    /**
     * Create product attribute set based on another set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeSetName
     * @param stringCustom $skeletonSetId
     * @return int
     */
    public function catalogProductAttributeSetCreate($sessionId, $attributeSetName, $skeletonSetId)
    {
      return $this->__soapCall('catalogProductAttributeSetCreate', array($sessionId, $attributeSetName, $skeletonSetId));
    }

    /**
     * Retrieve attribute list
     *
     * @param stringCustom $sessionId
     * @param intCustom $setId
     * @return catalogAttributeEntityArray
     */
    public function catalogProductAttributeList($sessionId, $setId)
    {
      return $this->__soapCall('catalogProductAttributeList', array($sessionId, $setId));
    }

    /**
     * Retrieve attribute options
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeId
     * @param stringCustom $storeView
     * @return catalogAttributeOptionEntityArray
     */
    public function catalogProductAttributeOptions($sessionId, $attributeId, $storeView)
    {
      return $this->__soapCall('catalogProductAttributeOptions', array($sessionId, $attributeId, $storeView));
    }

    /**
     * Remove product attribute set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeSetId
     * @param stringCustom $forceProductsRemove
     * @return boolean
     */
    public function catalogProductAttributeSetRemove($sessionId, $attributeSetId, $forceProductsRemove)
    {
      return $this->__soapCall('catalogProductAttributeSetRemove', array($sessionId, $attributeSetId, $forceProductsRemove));
    }

    /**
     * Retrieve product attribute sets
     *
     * @param stringCustom $sessionId
     * @return catalogProductAttributeSetEntityArray
     */
    public function catalogProductAttributeSetList($sessionId)
    {
      return $this->__soapCall('catalogProductAttributeSetList', array($sessionId));
    }

    /**
     * Add attribute into attribute set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeId
     * @param stringCustom $attributeSetId
     * @param stringCustom $attributeGroupId
     * @param stringCustom $sortOrder
     * @return boolean
     */
    public function catalogProductAttributeSetAttributeAdd($sessionId, $attributeId, $attributeSetId, $attributeGroupId, $sortOrder)
    {
      return $this->__soapCall('catalogProductAttributeSetAttributeAdd', array($sessionId, $attributeId, $attributeSetId, $attributeGroupId, $sortOrder));
    }

    /**
     * Remove attribute from attribute set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeId
     * @param stringCustom $attributeSetId
     * @return boolean
     */
    public function catalogProductAttributeSetAttributeRemove($sessionId, $attributeId, $attributeSetId)
    {
      return $this->__soapCall('catalogProductAttributeSetAttributeRemove', array($sessionId, $attributeId, $attributeSetId));
    }

    /**
     * Create group within existing attribute set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeSetId
     * @param stringCustom $groupName
     * @return int
     */
    public function catalogProductAttributeSetGroupAdd($sessionId, $attributeSetId, $groupName)
    {
      return $this->__soapCall('catalogProductAttributeSetGroupAdd', array($sessionId, $attributeSetId, $groupName));
    }

    /**
     * Rename existing group
     *
     * @param stringCustom $sessionId
     * @param stringCustom $groupId
     * @param stringCustom $groupName
     * @return boolean
     */
    public function catalogProductAttributeSetGroupRename($sessionId, $groupId, $groupName)
    {
      return $this->__soapCall('catalogProductAttributeSetGroupRename', array($sessionId, $groupId, $groupName));
    }

    /**
     * Remove group from attribute set
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeGroupId
     * @return boolean
     */
    public function catalogProductAttributeSetGroupRemove($sessionId, $attributeGroupId)
    {
      return $this->__soapCall('catalogProductAttributeSetGroupRemove', array($sessionId, $attributeGroupId));
    }

    /**
     * Get list of possible attribute types
     *
     * @param stringCustom $sessionId
     * @return catalogAttributeOptionEntityArray
     */
    public function catalogProductAttributeTypes($sessionId)
    {
      return $this->__soapCall('catalogProductAttributeTypes', array($sessionId));
    }

    /**
     * Create new attribute
     *
     * @param stringCustom $sessionId
     * @param catalogProductAttributeEntityToCreate $data
     * @return int
     */
    public function catalogProductAttributeCreate($sessionId, catalogProductAttributeEntityToCreate $data)
    {
      return $this->__soapCall('catalogProductAttributeCreate', array($sessionId, $data));
    }

    /**
     * Set/Get current store view
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogCategoryAttributeCurrentStore($sessionId, $storeView)
    {
      return $this->__soapCall('catalogCategoryAttributeCurrentStore', array($sessionId, $storeView));
    }

    /**
     * Set/Get current store view
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeView
     * @return int
     */
    public function catalogProductAttributeMediaCurrentStore($sessionId, $storeView)
    {
      return $this->__soapCall('catalogProductAttributeMediaCurrentStore', array($sessionId, $storeView));
    }

    /**
     * Delete attribute
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attribute
     * @return boolean
     */
    public function catalogProductAttributeRemove($sessionId, $attribute)
    {
      return $this->__soapCall('catalogProductAttributeRemove', array($sessionId, $attribute));
    }

    /**
     * Get full information about attribute with list of options
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attribute
     * @return catalogProductAttributeEntity
     */
    public function catalogProductAttributeInfo($sessionId, $attribute)
    {
      return $this->__soapCall('catalogProductAttributeInfo', array($sessionId, $attribute));
    }

    /**
     * Update attribute
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attribute
     * @param catalogProductAttributeEntityToUpdate $data
     * @return boolean
     */
    public function catalogProductAttributeUpdate($sessionId, $attribute, catalogProductAttributeEntityToUpdate $data)
    {
      return $this->__soapCall('catalogProductAttributeUpdate', array($sessionId, $attribute, $data));
    }

    /**
     * Add option to attribute
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attribute
     * @param catalogProductAttributeOptionEntityToAdd $data
     * @return boolean
     */
    public function catalogProductAttributeAddOption($sessionId, $attribute, catalogProductAttributeOptionEntityToAdd $data)
    {
      return $this->__soapCall('catalogProductAttributeAddOption', array($sessionId, $attribute, $data));
    }

    /**
     * Remove option from attribute
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attribute
     * @param stringCustom $optionId
     * @return boolean
     */
    public function catalogProductAttributeRemoveOption($sessionId, $attribute, $optionId)
    {
      return $this->__soapCall('catalogProductAttributeRemoveOption', array($sessionId, $attribute, $optionId));
    }

    /**
     * Retrieve product types
     *
     * @param stringCustom $sessionId
     * @return catalogProductTypeEntityArray
     */
    public function catalogProductTypeList($sessionId)
    {
      return $this->__soapCall('catalogProductTypeList', array($sessionId));
    }

    /**
     * Retrieve product tier prices
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $identifierType
     * @return catalogProductTierPriceEntityArray
     */
    public function catalogProductAttributeTierPriceInfo($sessionId, $product, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeTierPriceInfo', array($sessionId, $product, $identifierType));
    }

    /**
     * Update product tier prices
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param catalogProductTierPriceEntityArray $tier_price
     * @param stringCustom $identifierType
     * @return int
     */
    public function catalogProductAttributeTierPriceUpdate($sessionId, $product, catalogProductTierPriceEntityArray $tier_price, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeTierPriceUpdate', array($sessionId, $product, $tier_price, $identifierType));
    }

    /**
     * Retrieve category attributes
     *
     * @param stringCustom $sessionId
     * @return catalogAttributeEntityArray
     */
    public function catalogCategoryAttributeList($sessionId)
    {
      return $this->__soapCall('catalogCategoryAttributeList', array($sessionId));
    }

    /**
     * Retrieve attribute options
     *
     * @param stringCustom $sessionId
     * @param stringCustom $attributeId
     * @param stringCustom $storeView
     * @return catalogAttributeOptionEntityArray
     */
    public function catalogCategoryAttributeOptions($sessionId, $attributeId, $storeView)
    {
      return $this->__soapCall('catalogCategoryAttributeOptions', array($sessionId, $attributeId, $storeView));
    }

    /**
     * Retrieve product image list
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return catalogProductImageEntityArray
     */
    public function catalogProductAttributeMediaList($sessionId, $product, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeMediaList', array($sessionId, $product, $storeView, $identifierType));
    }

    /**
     * Retrieve product image data
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $file
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return catalogProductImageEntity
     */
    public function catalogProductAttributeMediaInfo($sessionId, $product, $file, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeMediaInfo', array($sessionId, $product, $file, $storeView, $identifierType));
    }

    /**
     * Retrieve product image types
     *
     * @param stringCustom $sessionId
     * @param stringCustom $setId
     * @return catalogProductAttributeMediaTypeEntityArray
     */
    public function catalogProductAttributeMediaTypes($sessionId, $setId)
    {
      return $this->__soapCall('catalogProductAttributeMediaTypes', array($sessionId, $setId));
    }

    /**
     * Upload new product image
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param catalogProductAttributeMediaCreateEntity $data
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return string
     */
    public function catalogProductAttributeMediaCreate($sessionId, $product, catalogProductAttributeMediaCreateEntity $data, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeMediaCreate', array($sessionId, $product, $data, $storeView, $identifierType));
    }

    /**
     * Update product image
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $file
     * @param catalogProductAttributeMediaCreateEntity $data
     * @param stringCustom $storeView
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductAttributeMediaUpdate($sessionId, $product, $file, catalogProductAttributeMediaCreateEntity $data, $storeView, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeMediaUpdate', array($sessionId, $product, $file, $data, $storeView, $identifierType));
    }

    /**
     * Remove product image
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param stringCustom $file
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductAttributeMediaRemove($sessionId, $product, $file, $identifierType)
    {
      return $this->__soapCall('catalogProductAttributeMediaRemove', array($sessionId, $product, $file, $identifierType));
    }

    /**
     * Retrieve linked products
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @param stringCustom $product
     * @param stringCustom $identifierType
     * @return catalogProductLinkEntityArray
     */
    public function catalogProductLinkList($sessionId, $type, $product, $identifierType)
    {
      return $this->__soapCall('catalogProductLinkList', array($sessionId, $type, $product, $identifierType));
    }

    /**
     * Assign product link
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @param stringCustom $product
     * @param stringCustom $linkedProduct
     * @param catalogProductLinkEntity $data
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductLinkAssign($sessionId, $type, $product, $linkedProduct, catalogProductLinkEntity $data, $identifierType)
    {
      return $this->__soapCall('catalogProductLinkAssign', array($sessionId, $type, $product, $linkedProduct, $data, $identifierType));
    }

    /**
     * Update product link
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @param stringCustom $product
     * @param stringCustom $linkedProduct
     * @param catalogProductLinkEntity $data
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductLinkUpdate($sessionId, $type, $product, $linkedProduct, catalogProductLinkEntity $data, $identifierType)
    {
      return $this->__soapCall('catalogProductLinkUpdate', array($sessionId, $type, $product, $linkedProduct, $data, $identifierType));
    }

    /**
     * Remove product link
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @param stringCustom $product
     * @param stringCustom $linkedProduct
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function catalogProductLinkRemove($sessionId, $type, $product, $linkedProduct, $identifierType)
    {
      return $this->__soapCall('catalogProductLinkRemove', array($sessionId, $type, $product, $linkedProduct, $identifierType));
    }

    /**
     * Retrieve product link types
     *
     * @param stringCustom $sessionId
     * @return ArrayOfString
     */
    public function catalogProductLinkTypes($sessionId)
    {
      return $this->__soapCall('catalogProductLinkTypes', array($sessionId));
    }

    /**
     * Retrieve product link type attributes
     *
     * @param stringCustom $sessionId
     * @param stringCustom $type
     * @return catalogProductLinkAttributeEntityArray
     */
    public function catalogProductLinkAttributes($sessionId, $type)
    {
      return $this->__soapCall('catalogProductLinkAttributes', array($sessionId, $type));
    }

    /**
     * Add new custom option into product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param catalogProductCustomOptionToAdd $data
     * @param stringCustom $store
     * @return boolean
     */
    public function catalogProductCustomOptionAdd($sessionId, $productId, catalogProductCustomOptionToAdd $data, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionAdd', array($sessionId, $productId, $data, $store));
    }

    /**
     * Update product custom option
     *
     * @param stringCustom $sessionId
     * @param stringCustom $optionId
     * @param catalogProductCustomOptionToUpdate $data
     * @param stringCustom $store
     * @return boolean
     */
    public function catalogProductCustomOptionUpdate($sessionId, $optionId, catalogProductCustomOptionToUpdate $data, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionUpdate', array($sessionId, $optionId, $data, $store));
    }

    /**
     * Get full information about custom option in product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $optionId
     * @param stringCustom $store
     * @return catalogProductCustomOptionInfoEntity
     */
    public function catalogProductCustomOptionInfo($sessionId, $optionId, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionInfo', array($sessionId, $optionId, $store));
    }

    /**
     * Get list of available custom option types
     *
     * @param stringCustom $sessionId
     * @return catalogProductCustomOptionTypesArray
     */
    public function catalogProductCustomOptionTypes($sessionId)
    {
      return $this->__soapCall('catalogProductCustomOptionTypes', array($sessionId));
    }

    /**
     * Retrieve custom option value info
     *
     * @param stringCustom $sessionId
     * @param stringCustom $valueId
     * @param stringCustom $store
     * @return catalogProductCustomOptionValueInfoEntity
     */
    public function catalogProductCustomOptionValueInfo($sessionId, $valueId, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionValueInfo', array($sessionId, $valueId, $store));
    }

    /**
     * Retrieve custom option values list
     *
     * @param stringCustom $sessionId
     * @param stringCustom $optionId
     * @param stringCustom $store
     * @return catalogProductCustomOptionValueListArray
     */
    public function catalogProductCustomOptionValueList($sessionId, $optionId, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionValueList', array($sessionId, $optionId, $store));
    }

    /**
     * Add new custom option values
     *
     * @param stringCustom $sessionId
     * @param stringCustom $optionId
     * @param catalogProductCustomOptionValueAddArray $data
     * @param stringCustom $store
     * @return boolean
     */
    public function catalogProductCustomOptionValueAdd($sessionId, $optionId, catalogProductCustomOptionValueAddArray $data, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionValueAdd', array($sessionId, $optionId, $data, $store));
    }

    /**
     * Update custom option value
     *
     * @param stringCustom $sessionId
     * @param stringCustom $valueId
     * @param catalogProductCustomOptionValueUpdateEntity $data
     * @param stringCustom $storeId
     * @return boolean
     */
    public function catalogProductCustomOptionValueUpdate($sessionId, $valueId, catalogProductCustomOptionValueUpdateEntity $data, $storeId)
    {
      return $this->__soapCall('catalogProductCustomOptionValueUpdate', array($sessionId, $valueId, $data, $storeId));
    }

    /**
     * Remove value from custom option
     *
     * @param stringCustom $sessionId
     * @param stringCustom $valueId
     * @return boolean
     */
    public function catalogProductCustomOptionValueRemove($sessionId, $valueId)
    {
      return $this->__soapCall('catalogProductCustomOptionValueRemove', array($sessionId, $valueId));
    }

    /**
     * Retrieve list of product custom options
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param stringCustom $store
     * @return catalogProductCustomOptionListArray
     */
    public function catalogProductCustomOptionList($sessionId, $productId, $store)
    {
      return $this->__soapCall('catalogProductCustomOptionList', array($sessionId, $productId, $store));
    }

    /**
     * Remove custom option
     *
     * @param stringCustom $sessionId
     * @param stringCustom $optionId
     * @return boolean
     */
    public function catalogProductCustomOptionRemove($sessionId, $optionId)
    {
      return $this->__soapCall('catalogProductCustomOptionRemove', array($sessionId, $optionId));
    }

    /**
     * Retrieve list of orders by filters
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @return salesOrderListEntityArray
     */
    public function salesOrderList($sessionId, filters $filters)
    {
      return $this->__soapCall('salesOrderList', array($sessionId, $filters));
    }

    /**
     * Retrieve order information
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @return salesOrderEntity
     */
    public function salesOrderInfo($sessionId, $orderIncrementId)
    {
      return $this->__soapCall('salesOrderInfo', array($sessionId, $orderIncrementId));
    }

    /**
     * Add comment to order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @param stringCustom $status
     * @param stringCustom $comment
     * @param stringCustom $notify
     * @return boolean
     */
    public function salesOrderAddComment($sessionId, $orderIncrementId, $status, $comment, $notify)
    {
      return $this->__soapCall('salesOrderAddComment', array($sessionId, $orderIncrementId, $status, $comment, $notify));
    }

    /**
     * Hold order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @return boolean
     */
    public function salesOrderHold($sessionId, $orderIncrementId)
    {
      return $this->__soapCall('salesOrderHold', array($sessionId, $orderIncrementId));
    }

    /**
     * Unhold order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @return boolean
     */
    public function salesOrderUnhold($sessionId, $orderIncrementId)
    {
      return $this->__soapCall('salesOrderUnhold', array($sessionId, $orderIncrementId));
    }

    /**
     * Cancel order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @return boolean
     */
    public function salesOrderCancel($sessionId, $orderIncrementId)
    {
      return $this->__soapCall('salesOrderCancel', array($sessionId, $orderIncrementId));
    }

    /**
     * Retrieve list of shipments by filters
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @return salesOrderShipmentEntityArray
     */
    public function salesOrderShipmentList($sessionId, filters $filters)
    {
      return $this->__soapCall('salesOrderShipmentList', array($sessionId, $filters));
    }

    /**
     * Retrieve shipment information
     *
     * @param stringCustom $sessionId
     * @param stringCustom $shipmentIncrementId
     * @return salesOrderShipmentEntity
     */
    public function salesOrderShipmentInfo($sessionId, $shipmentIncrementId)
    {
      return $this->__soapCall('salesOrderShipmentInfo', array($sessionId, $shipmentIncrementId));
    }

    /**
     * Create new shipment for order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @param orderItemIdQtyArray $itemsQty
     * @param stringCustom $comment
     * @param intCustom $email
     * @param intCustom $includeComment
     * @return string
     */
    public function salesOrderShipmentCreate($sessionId, $orderIncrementId, orderItemIdQtyArray $itemsQty, $comment, $email, $includeComment)
    {
      return $this->__soapCall('salesOrderShipmentCreate', array($sessionId, $orderIncrementId, $itemsQty, $comment, $email, $includeComment));
    }

    /**
     * Add new comment to shipment
     *
     * @param stringCustom $sessionId
     * @param stringCustom $shipmentIncrementId
     * @param stringCustom $comment
     * @param stringCustom $email
     * @param stringCustom $includeInEmail
     * @return boolean
     */
    public function salesOrderShipmentAddComment($sessionId, $shipmentIncrementId, $comment, $email, $includeInEmail)
    {
      return $this->__soapCall('salesOrderShipmentAddComment', array($sessionId, $shipmentIncrementId, $comment, $email, $includeInEmail));
    }

    /**
     * Add new tracking number
     *
     * @param stringCustom $sessionId
     * @param stringCustom $shipmentIncrementId
     * @param stringCustom $carrier
     * @param stringCustom $title
     * @param stringCustom $trackNumber
     * @return int
     */
    public function salesOrderShipmentAddTrack($sessionId, $shipmentIncrementId, $carrier, $title, $trackNumber)
    {
      return $this->__soapCall('salesOrderShipmentAddTrack', array($sessionId, $shipmentIncrementId, $carrier, $title, $trackNumber));
    }

    /**
     * Send shipment info
     *
     * @param stringCustom $sessionId
     * @param stringCustom $shipmentIncrementId
     * @param stringCustom $comment
     * @return boolean
     */
    public function salesOrderShipmentSendInfo($sessionId, $shipmentIncrementId, $comment)
    {
      return $this->__soapCall('salesOrderShipmentSendInfo', array($sessionId, $shipmentIncrementId, $comment));
    }

    /**
     * Remove tracking number
     *
     * @param stringCustom $sessionId
     * @param stringCustom $shipmentIncrementId
     * @param stringCustom $trackId
     * @return boolean
     */
    public function salesOrderShipmentRemoveTrack($sessionId, $shipmentIncrementId, $trackId)
    {
      return $this->__soapCall('salesOrderShipmentRemoveTrack', array($sessionId, $shipmentIncrementId, $trackId));
    }

    /**
     * Retrieve list of allowed carriers for order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @return associativeArray
     */
    public function salesOrderShipmentGetCarriers($sessionId, $orderIncrementId)
    {
      return $this->__soapCall('salesOrderShipmentGetCarriers', array($sessionId, $orderIncrementId));
    }

    /**
     * Retrieve list of invoices by filters
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @return salesOrderInvoiceEntityArray
     */
    public function salesOrderInvoiceList($sessionId, filters $filters)
    {
      return $this->__soapCall('salesOrderInvoiceList', array($sessionId, $filters));
    }

    /**
     * Retrieve invoice information
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @return salesOrderInvoiceEntity
     */
    public function salesOrderInvoiceInfo($sessionId, $invoiceIncrementId)
    {
      return $this->__soapCall('salesOrderInvoiceInfo', array($sessionId, $invoiceIncrementId));
    }

    /**
     * Create new invoice for order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @param orderItemIdQtyArray $itemsQty
     * @param stringCustom $comment
     * @param stringCustom $email
     * @param stringCustom $includeComment
     * @return string
     */
    public function salesOrderInvoiceCreate($sessionId, $invoiceIncrementId, orderItemIdQtyArray $itemsQty, $comment, $email, $includeComment)
    {
      return $this->__soapCall('salesOrderInvoiceCreate', array($sessionId, $invoiceIncrementId, $itemsQty, $comment, $email, $includeComment));
    }

    /**
     * Add new comment to shipment
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @param stringCustom $comment
     * @param stringCustom $email
     * @param stringCustom $includeComment
     * @return boolean
     */
    public function salesOrderInvoiceAddComment($sessionId, $invoiceIncrementId, $comment, $email, $includeComment)
    {
      return $this->__soapCall('salesOrderInvoiceAddComment', array($sessionId, $invoiceIncrementId, $comment, $email, $includeComment));
    }

    /**
     * Capture invoice
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @return boolean
     */
    public function salesOrderInvoiceCapture($sessionId, $invoiceIncrementId)
    {
      return $this->__soapCall('salesOrderInvoiceCapture', array($sessionId, $invoiceIncrementId));
    }

    /**
     * Void invoice
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @return boolean
     */
    public function salesOrderInvoiceVoid($sessionId, $invoiceIncrementId)
    {
      return $this->__soapCall('salesOrderInvoiceVoid', array($sessionId, $invoiceIncrementId));
    }

    /**
     * Cancel invoice
     *
     * @param stringCustom $sessionId
     * @param stringCustom $invoiceIncrementId
     * @return boolean
     */
    public function salesOrderInvoiceCancel($sessionId, $invoiceIncrementId)
    {
      return $this->__soapCall('salesOrderInvoiceCancel', array($sessionId, $invoiceIncrementId));
    }

    /**
     * Retrieve list of creditmemos by filters
     *
     * @param stringCustom $sessionId
     * @param filters $filters
     * @return salesOrderCreditmemoEntityArray
     */
    public function salesOrderCreditmemoList($sessionId, filters $filters)
    {
      return $this->__soapCall('salesOrderCreditmemoList', array($sessionId, $filters));
    }

    /**
     * Retrieve creditmemo information
     *
     * @param stringCustom $sessionId
     * @param stringCustom $creditmemoIncrementId
     * @return salesOrderCreditmemoEntity
     */
    public function salesOrderCreditmemoInfo($sessionId, $creditmemoIncrementId)
    {
      return $this->__soapCall('salesOrderCreditmemoInfo', array($sessionId, $creditmemoIncrementId));
    }

    /**
     * Create new creditmemo for order
     *
     * @param stringCustom $sessionId
     * @param stringCustom $orderIncrementId
     * @param salesOrderCreditmemoData $creditmemoData
     * @param stringCustom $comment
     * @param intCustom $notifyCustomer
     * @param intCustom $includeComment
     * @param stringCustom $refundToStoreCreditAmount
     * @return string
     */
    public function salesOrderCreditmemoCreate($sessionId, $orderIncrementId, salesOrderCreditmemoData $creditmemoData, $comment, $notifyCustomer, $includeComment, $refundToStoreCreditAmount)
    {
      return $this->__soapCall('salesOrderCreditmemoCreate', array($sessionId, $orderIncrementId, $creditmemoData, $comment, $notifyCustomer, $includeComment, $refundToStoreCreditAmount));
    }

    /**
     * Add new comment to shipment
     *
     * @param stringCustom $sessionId
     * @param stringCustom $creditmemoIncrementId
     * @param stringCustom $comment
     * @param intCustom $notifyCustomer
     * @param intCustom $includeComment
     * @return boolean
     */
    public function salesOrderCreditmemoAddComment($sessionId, $creditmemoIncrementId, $comment, $notifyCustomer, $includeComment)
    {
      return $this->__soapCall('salesOrderCreditmemoAddComment', array($sessionId, $creditmemoIncrementId, $comment, $notifyCustomer, $includeComment));
    }

    /**
     * Cancel creditmemo
     *
     * @param stringCustom $sessionId
     * @param stringCustom $creditmemoIncrementId
     * @return boolean
     */
    public function salesOrderCreditmemoCancel($sessionId, $creditmemoIncrementId)
    {
      return $this->__soapCall('salesOrderCreditmemoCancel', array($sessionId, $creditmemoIncrementId));
    }

    /**
     * Retrieve stock data by product ids
     *
     * @param stringCustom $sessionId
     * @param ArrayOfString $products
     * @return catalogInventoryStockItemEntityArray
     */
    public function catalogInventoryStockItemList($sessionId, ArrayOfString $products)
    {
      return $this->__soapCall('catalogInventoryStockItemList', array($sessionId, $products));
    }

    /**
     * Update product stock data
     *
     * @param stringCustom $sessionId
     * @param stringCustom $product
     * @param catalogInventoryStockItemUpdateEntity $data
     * @return int
     */
    public function catalogInventoryStockItemUpdate($sessionId, $product, catalogInventoryStockItemUpdateEntity $data)
    {
      return $this->__soapCall('catalogInventoryStockItemUpdate', array($sessionId, $product, $data));
    }

    /**
     * Multi stock item update
     *
     * @param stringCustom $sessionId
     * @param ArrayOfString $productIds
     * @param catalogInventoryStockItemUpdateEntityArray $productData
     * @return boolean
     */
    public function catalogInventoryStockItemMultiUpdate($sessionId, ArrayOfString $productIds, catalogInventoryStockItemUpdateEntityArray $productData)
    {
      return $this->__soapCall('catalogInventoryStockItemMultiUpdate', array($sessionId, $productIds, $productData));
    }

    /**
     * Create shopping cart
     *
     * @param stringCustom $sessionId
     * @param stringCustom $storeId
     * @return int
     */
    public function shoppingCartCreate($sessionId, $storeId)
    {
      return $this->__soapCall('shoppingCartCreate', array($sessionId, $storeId));
    }

    /**
     * Retrieve information about shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return shoppingCartInfoEntity
     */
    public function shoppingCartInfo($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartInfo', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Get total prices for shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return shoppingCartTotalsEntityArray
     */
    public function shoppingCartTotals($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartTotals', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Create an order from shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @param ArrayOfString $licenses
     * @return string
     */
    public function shoppingCartOrder($sessionId, $quoteId, $storeId, ArrayOfString $licenses)
    {
      return $this->__soapCall('shoppingCartOrder', array($sessionId, $quoteId, $storeId, $licenses));
    }

    /**
     * Get terms and conditions
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return shoppingCartLicenseEntityArray
     */
    public function shoppingCartLicense($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartLicense', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Add product(s) to shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartProductEntityArray $products
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartProductAdd($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId)
    {
      return $this->__soapCall('shoppingCartProductAdd', array($sessionId, $quoteId, $products, $storeId));
    }

    /**
     * Update product(s) quantities in shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartProductEntityArray $products
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartProductUpdate($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId)
    {
      return $this->__soapCall('shoppingCartProductUpdate', array($sessionId, $quoteId, $products, $storeId));
    }

    /**
     * Remove product(s) from shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartProductEntityArray $products
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartProductRemove($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId)
    {
      return $this->__soapCall('shoppingCartProductRemove', array($sessionId, $quoteId, $products, $storeId));
    }

    /**
     * Get list of products in shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return shoppingCartProductResponseEntityArray
     */
    public function shoppingCartProductList($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartProductList', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Move product(s) to customer quote
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartProductEntityArray $products
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartProductMoveToCustomerQuote($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId)
    {
      return $this->__soapCall('shoppingCartProductMoveToCustomerQuote', array($sessionId, $quoteId, $products, $storeId));
    }

    /**
     * Set customer for shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartCustomerEntity $customer
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartCustomerSet($sessionId, $quoteId, shoppingCartCustomerEntity $customer, $storeId)
    {
      return $this->__soapCall('shoppingCartCustomerSet', array($sessionId, $quoteId, $customer, $storeId));
    }

    /**
     * Set customer's addresses in shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartCustomerAddressEntityArray $customer
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartCustomerAddresses($sessionId, $quoteId, shoppingCartCustomerAddressEntityArray $customer, $storeId)
    {
      return $this->__soapCall('shoppingCartCustomerAddresses', array($sessionId, $quoteId, $customer, $storeId));
    }

    /**
     * Set shipping method
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $method
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartShippingMethod($sessionId, $quoteId, $method, $storeId)
    {
      return $this->__soapCall('shoppingCartShippingMethod', array($sessionId, $quoteId, $method, $storeId));
    }

    /**
     * Get list of available shipping methods
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return shoppingCartShippingMethodEntityArray
     */
    public function shoppingCartShippingList($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartShippingList', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Set payment method
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param shoppingCartPaymentMethodEntity $method
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartPaymentMethod($sessionId, $quoteId, shoppingCartPaymentMethodEntity $method, $storeId)
    {
      return $this->__soapCall('shoppingCartPaymentMethod', array($sessionId, $quoteId, $method, $storeId));
    }

    /**
     * Get list of available payment methods
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $store
     * @return shoppingCartPaymentMethodResponseEntityArray
     */
    public function shoppingCartPaymentList($sessionId, $quoteId, $store)
    {
      return $this->__soapCall('shoppingCartPaymentList', array($sessionId, $quoteId, $store));
    }

    /**
     * Add coupon code for shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $couponCode
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartCouponAdd($sessionId, $quoteId, $couponCode, $storeId)
    {
      return $this->__soapCall('shoppingCartCouponAdd', array($sessionId, $quoteId, $couponCode, $storeId));
    }

    /**
     * Remove coupon code from shopping cart
     *
     * @param stringCustom $sessionId
     * @param intCustom $quoteId
     * @param stringCustom $storeId
     * @return boolean
     */
    public function shoppingCartCouponRemove($sessionId, $quoteId, $storeId)
    {
      return $this->__soapCall('shoppingCartCouponRemove', array($sessionId, $quoteId, $storeId));
    }

    /**
     * Retrieve list of tags by product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param stringCustom $store
     * @return catalogProductTagListEntityArray
     */
    public function catalogProductTagList($sessionId, $productId, $store)
    {
      return $this->__soapCall('catalogProductTagList', array($sessionId, $productId, $store));
    }

    /**
     * Retrieve product tag info
     *
     * @param stringCustom $sessionId
     * @param stringCustom $tagId
     * @param stringCustom $store
     * @return catalogProductTagInfoEntity
     */
    public function catalogProductTagInfo($sessionId, $tagId, $store)
    {
      return $this->__soapCall('catalogProductTagInfo', array($sessionId, $tagId, $store));
    }

    /**
     * Add tag(s) to product
     *
     * @param stringCustom $sessionId
     * @param catalogProductTagAddEntity $data
     * @return associativeArray
     */
    public function catalogProductTagAdd($sessionId, catalogProductTagAddEntity $data)
    {
      return $this->__soapCall('catalogProductTagAdd', array($sessionId, $data));
    }

    /**
     * Update product tag
     *
     * @param stringCustom $sessionId
     * @param stringCustom $tagId
     * @param catalogProductTagUpdateEntity $data
     * @param stringCustom $store
     * @return boolean
     */
    public function catalogProductTagUpdate($sessionId, $tagId, catalogProductTagUpdateEntity $data, $store)
    {
      return $this->__soapCall('catalogProductTagUpdate', array($sessionId, $tagId, $data, $store));
    }

    /**
     * Remove product tag
     *
     * @param stringCustom $sessionId
     * @param stringCustom $tagId
     * @return boolean
     */
    public function catalogProductTagRemove($sessionId, $tagId)
    {
      return $this->__soapCall('catalogProductTagRemove', array($sessionId, $tagId));
    }

    /**
     * Set a gift message to the cart
     *
     * @param stringCustom $sessionId
     * @param stringCustom $quoteId
     * @param giftMessageEntity $giftMessage
     * @param stringCustom $storeId
     * @return giftMessageResponse
     */
    public function giftMessageSetForQuote($sessionId, $quoteId, giftMessageEntity $giftMessage, $storeId)
    {
      return $this->__soapCall('giftMessageSetForQuote', array($sessionId, $quoteId, $giftMessage, $storeId));
    }

    /**
     * Setting a gift messages to the quote item
     *
     * @param stringCustom $sessionId
     * @param stringCustom $quoteItemId
     * @param giftMessageEntity $giftMessage
     * @param stringCustom $storeId
     * @return giftMessageResponse
     */
    public function giftMessageSetForQuoteItem($sessionId, $quoteItemId, giftMessageEntity $giftMessage, $storeId)
    {
      return $this->__soapCall('giftMessageSetForQuoteItem', array($sessionId, $quoteItemId, $giftMessage, $storeId));
    }

    /**
     * Setting a gift messages to the quote items by products
     *
     * @param stringCustom $sessionId
     * @param stringCustom $quoteId
     * @param giftMessageAssociativeProductsEntityArray $productsAndMessages
     * @param stringCustom $storeId
     * @return giftMessageResponseArray
     */
    public function giftMessageSetForQuoteProduct($sessionId, $quoteId, giftMessageAssociativeProductsEntityArray $productsAndMessages, $storeId)
    {
      return $this->__soapCall('giftMessageSetForQuoteProduct', array($sessionId, $quoteId, $productsAndMessages, $storeId));
    }

    /**
     * Add links to downloadable product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param catalogProductDownloadableLinkAddEntity $resource
     * @param stringCustom $resourceType
     * @param stringCustom $store
     * @param stringCustom $identifierType
     * @return int
     */
    public function catalogProductDownloadableLinkAdd($sessionId, $productId, catalogProductDownloadableLinkAddEntity $resource, $resourceType, $store, $identifierType)
    {
      return $this->__soapCall('catalogProductDownloadableLinkAdd', array($sessionId, $productId, $resource, $resourceType, $store, $identifierType));
    }

    /**
     * Retrieve list of links and samples for downloadable product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $productId
     * @param stringCustom $store
     * @param stringCustom $identifierType
     * @return catalogProductDownloadableLinkInfoEntity
     */
    public function catalogProductDownloadableLinkList($sessionId, $productId, $store, $identifierType)
    {
      return $this->__soapCall('catalogProductDownloadableLinkList', array($sessionId, $productId, $store, $identifierType));
    }

    /**
     * Remove links and samples from downloadable product
     *
     * @param stringCustom $sessionId
     * @param stringCustom $linkId
     * @param stringCustom $resourceType
     * @return boolean
     */
    public function catalogProductDownloadableLinkRemove($sessionId, $linkId, $resourceType)
    {
      return $this->__soapCall('catalogProductDownloadableLinkRemove', array($sessionId, $linkId, $resourceType));
    }

}
