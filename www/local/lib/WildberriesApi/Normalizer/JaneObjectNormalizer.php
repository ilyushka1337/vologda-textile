<?php

namespace Placestart\WildberriesApi\Normalizer;

use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Placestart\WildberriesApi\Model\ResponseCardCreate::class => \Placestart\WildberriesApi\Normalizer\ResponseCardCreateNormalizer::class,
            
            \Placestart\WildberriesApi\Model\RequestMoveNmsImtConn::class => \Placestart\WildberriesApi\Normalizer\RequestMoveNmsImtConnNormalizer::class,
            
            \Placestart\WildberriesApi\Model\RequestMoveNmsImtDisconn::class => \Placestart\WildberriesApi\Normalizer\RequestMoveNmsImtDisconnNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseIncorrectDate::class => \Placestart\WildberriesApi\Normalizer\ResponseIncorrectDateNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError1::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError1Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError1AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError1AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError400::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError400AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError400AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError403::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError403Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError4::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError4Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError4AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError4AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError5::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError5Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError5AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError5AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError6::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError6Normalizer::class,
            
            \Placestart\WildberriesApi\Model\MediaErrors::class => \Placestart\WildberriesApi\Normalizer\MediaErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseError::class => \Placestart\WildberriesApi\Normalizer\ResponseErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskAlreadyExistsError::class => \Placestart\WildberriesApi\Normalizer\TaskAlreadyExistsErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskAlreadyExistsErrorData::class => \Placestart\WildberriesApi\Normalizer\TaskAlreadyExistsErrorDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskCreated::class => \Placestart\WildberriesApi\Normalizer\TaskCreatedNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskCreatedData::class => \Placestart\WildberriesApi\Normalizer\TaskCreatedDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Good::class => \Placestart\WildberriesApi\Normalizer\GoodNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SizeGoodReq::class => \Placestart\WildberriesApi\Normalizer\SizeGoodReqNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ClubDiscReq::class => \Placestart\WildberriesApi\Normalizer\ClubDiscReqNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodsList::class => \Placestart\WildberriesApi\Normalizer\GoodsListNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodsListSizesItem::class => \Placestart\WildberriesApi\Normalizer\GoodsListSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SizeGood::class => \Placestart\WildberriesApi\Normalizer\SizeGoodNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodBufferHistory::class => \Placestart\WildberriesApi\Normalizer\GoodBufferHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodHistory::class => \Placestart\WildberriesApi\Normalizer\GoodHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SupplierTaskMetadata::class => \Placestart\WildberriesApi\Normalizer\SupplierTaskMetadataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => \Placestart\WildberriesApi\Normalizer\SupplierTaskMetadataBufferNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Error::class => \Placestart\WildberriesApi\Normalizer\ErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\QuarantineGoods::class => \Placestart\WildberriesApi\Normalizer\QuarantineGoodsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Response401::class => \Placestart\WildberriesApi\Normalizer\Response401Normalizer::class,
            
            \Placestart\WildberriesApi\Model\Response429::class => \Placestart\WildberriesApi\Normalizer\Response429Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodsLists::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodsListsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodsListsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodsListsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodHistories::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodHistoriesNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodHistoriesDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistories::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodBufferHistoriesNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistoriesData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodBufferHistoriesDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseTaskHistory::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseTaskHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseTaskBuffer::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseTaskBufferNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseSizeLists::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseSizeListsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseSizeListsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseSizeListsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoods::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseQuarantineGoodsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoodsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseQuarantineGoodsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable::class => \Placestart\WildberriesApi\Normalizer\ResponseStatusNotAcceptableNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectParentAllGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectParentAllGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectAllGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectAllGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectCharcsSubjectIdGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectCharcsSubjectIdGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryColorsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryColorsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryKindsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryKindsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryCountriesGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryCountriesGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectorySeasonsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectorySeasonsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryTnvedGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryTnvedGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryVatGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryVatGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200Data::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagsGetResponse200DataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagIdPatchBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagNomenclatureLinkPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettings::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsSort::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsSortNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsFilterNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsCursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsCursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemPhotosItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemPhotosItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemTagsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemTagsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200Cursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsErrorListGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsErrorListGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsDeleteTrashPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsDeleteTrashPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsRecoverPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsRecoverPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsSortNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsCursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsFilterNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200Cursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsLimitsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200Data::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsLimitsGetResponse200DataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2BarcodesPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2BarcodesPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2BarcodesPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaFilePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaFilePostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaSavePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaSavePostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskSizePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskClubDiscountPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2HistoryTasksGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2HistoryGoodsTaskGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2BufferTasksGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2BufferGoodsTaskGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdDeleteBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200StocksItem::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostResponse200StocksItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPutBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBodyStocksItem::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPutBodyStocksItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Placestart\WildberriesApi\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Placestart\WildberriesApi\Model\ResponseCardCreate::class => false,
                \Placestart\WildberriesApi\Model\RequestMoveNmsImtConn::class => false,
                \Placestart\WildberriesApi\Model\RequestMoveNmsImtDisconn::class => false,
                \Placestart\WildberriesApi\Model\ResponseIncorrectDate::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError1::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError1AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError400::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError400AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError403::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError4::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError4AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError5::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError5AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError6::class => false,
                \Placestart\WildberriesApi\Model\MediaErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseError::class => false,
                \Placestart\WildberriesApi\Model\TaskAlreadyExistsError::class => false,
                \Placestart\WildberriesApi\Model\TaskAlreadyExistsErrorData::class => false,
                \Placestart\WildberriesApi\Model\TaskCreated::class => false,
                \Placestart\WildberriesApi\Model\TaskCreatedData::class => false,
                \Placestart\WildberriesApi\Model\Good::class => false,
                \Placestart\WildberriesApi\Model\SizeGoodReq::class => false,
                \Placestart\WildberriesApi\Model\ClubDiscReq::class => false,
                \Placestart\WildberriesApi\Model\GoodsList::class => false,
                \Placestart\WildberriesApi\Model\GoodsListSizesItem::class => false,
                \Placestart\WildberriesApi\Model\SizeGood::class => false,
                \Placestart\WildberriesApi\Model\GoodBufferHistory::class => false,
                \Placestart\WildberriesApi\Model\GoodHistory::class => false,
                \Placestart\WildberriesApi\Model\SupplierTaskMetadata::class => false,
                \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => false,
                \Placestart\WildberriesApi\Model\Error::class => false,
                \Placestart\WildberriesApi\Model\QuarantineGoods::class => false,
                \Placestart\WildberriesApi\Model\Response401::class => false,
                \Placestart\WildberriesApi\Model\Response429::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodsLists::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodsListsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodHistories::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistories::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistoriesData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseTaskHistory::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseTaskBuffer::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseSizeLists::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseSizeListsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoods::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoodsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectParentAllGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryColorsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryKindsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryCountriesGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectorySeasonsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryVatGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200Data::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettings::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsSort::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsCursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemPhotosItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemTagsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200Cursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200Cursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200Data::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2BarcodesPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200StocksItem::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBodyStocksItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Placestart\WildberriesApi\Model\ResponseCardCreate::class => \Placestart\WildberriesApi\Normalizer\ResponseCardCreateNormalizer::class,
            
            \Placestart\WildberriesApi\Model\RequestMoveNmsImtConn::class => \Placestart\WildberriesApi\Normalizer\RequestMoveNmsImtConnNormalizer::class,
            
            \Placestart\WildberriesApi\Model\RequestMoveNmsImtDisconn::class => \Placestart\WildberriesApi\Normalizer\RequestMoveNmsImtDisconnNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseIncorrectDate::class => \Placestart\WildberriesApi\Normalizer\ResponseIncorrectDateNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError1::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError1Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError1AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError1AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError400::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError400AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError400AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseBodyContentError403::class => \Placestart\WildberriesApi\Normalizer\ResponseBodyContentError403Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError4::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError4Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError4AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError4AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError5::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError5Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError5AdditionalErrors::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError5AdditionalErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseContentError6::class => \Placestart\WildberriesApi\Normalizer\ResponseContentError6Normalizer::class,
            
            \Placestart\WildberriesApi\Model\MediaErrors::class => \Placestart\WildberriesApi\Normalizer\MediaErrorsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseError::class => \Placestart\WildberriesApi\Normalizer\ResponseErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskAlreadyExistsError::class => \Placestart\WildberriesApi\Normalizer\TaskAlreadyExistsErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskAlreadyExistsErrorData::class => \Placestart\WildberriesApi\Normalizer\TaskAlreadyExistsErrorDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskCreated::class => \Placestart\WildberriesApi\Normalizer\TaskCreatedNormalizer::class,
            
            \Placestart\WildberriesApi\Model\TaskCreatedData::class => \Placestart\WildberriesApi\Normalizer\TaskCreatedDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Good::class => \Placestart\WildberriesApi\Normalizer\GoodNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SizeGoodReq::class => \Placestart\WildberriesApi\Normalizer\SizeGoodReqNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ClubDiscReq::class => \Placestart\WildberriesApi\Normalizer\ClubDiscReqNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodsList::class => \Placestart\WildberriesApi\Normalizer\GoodsListNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodsListSizesItem::class => \Placestart\WildberriesApi\Normalizer\GoodsListSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SizeGood::class => \Placestart\WildberriesApi\Normalizer\SizeGoodNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodBufferHistory::class => \Placestart\WildberriesApi\Normalizer\GoodBufferHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\GoodHistory::class => \Placestart\WildberriesApi\Normalizer\GoodHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SupplierTaskMetadata::class => \Placestart\WildberriesApi\Normalizer\SupplierTaskMetadataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => \Placestart\WildberriesApi\Normalizer\SupplierTaskMetadataBufferNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Error::class => \Placestart\WildberriesApi\Normalizer\ErrorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\QuarantineGoods::class => \Placestart\WildberriesApi\Normalizer\QuarantineGoodsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\Response401::class => \Placestart\WildberriesApi\Normalizer\Response401Normalizer::class,
            
            \Placestart\WildberriesApi\Model\Response429::class => \Placestart\WildberriesApi\Normalizer\Response429Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodsLists::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodsListsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodsListsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodsListsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodHistories::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodHistoriesNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodHistoriesDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistories::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodBufferHistoriesNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistoriesData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseGoodBufferHistoriesDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseTaskHistory::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseTaskHistoryNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseTaskBuffer::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseTaskBufferNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseSizeLists::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseSizeListsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseSizeListsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseSizeListsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoods::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseQuarantineGoodsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoodsData::class => \Placestart\WildberriesApi\Normalizer\ResponseResponseQuarantineGoodsDataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable::class => \Placestart\WildberriesApi\Normalizer\ResponseStatusNotAcceptableNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectParentAllGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectParentAllGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectAllGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectAllGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectCharcsSubjectIdGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2ObjectCharcsSubjectIdGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryColorsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryColorsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryKindsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryKindsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryCountriesGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryCountriesGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectorySeasonsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectorySeasonsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryTnvedGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryTnvedGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2DirectoryVatGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2DirectoryVatGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200Data::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagsGetResponse200DataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagIdPatchBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2TagNomenclatureLinkPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettings::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsSort::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsSortNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsFilterNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsCursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostBodySettingsCursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemPhotosItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemPhotosItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemTagsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CardsItemTagsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200Cursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsListPostResponse200CursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsErrorListGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsErrorListGetResponse200DataItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsDeleteTrashPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsDeleteTrashPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsRecoverPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsRecoverPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsSortNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsCursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostBodySettingsFilterNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200Cursor::class => \Placestart\WildberriesApi\Normalizer\ContentV2GetCardsTrashPostResponse200CursorNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsLimitsGetResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200Data::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsLimitsGetResponse200DataNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadPostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostBodyItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUpdatePostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensionsNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413::class => \Placestart\WildberriesApi\Normalizer\ContentV2CardsUploadAddPostResponse413Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV2BarcodesPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV2BarcodesPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV2BarcodesPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaFilePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaFilePostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaSavePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200::class => \Placestart\WildberriesApi\Normalizer\ContentV3MediaSavePostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskSizePostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV2UploadTaskClubDiscountPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2HistoryTasksGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2HistoryGoodsTaskGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2BufferTasksGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400::class => \Placestart\WildberriesApi\Normalizer\ApiV2BufferGoodsTaskGetResponse400Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdDeleteBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostResponse200Normalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200StocksItem::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPostResponse200StocksItemNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPutBodyNormalizer::class,
            
            \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBodyStocksItem::class => \Placestart\WildberriesApi\Normalizer\ApiV3StocksWarehouseIdPutBodyStocksItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Placestart\WildberriesApi\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Placestart\WildberriesApi\Model\ResponseCardCreate::class => false,
                \Placestart\WildberriesApi\Model\RequestMoveNmsImtConn::class => false,
                \Placestart\WildberriesApi\Model\RequestMoveNmsImtDisconn::class => false,
                \Placestart\WildberriesApi\Model\ResponseIncorrectDate::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError1::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError1AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError400::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError400AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseBodyContentError403::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError4::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError4AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError5::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError5AdditionalErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseContentError6::class => false,
                \Placestart\WildberriesApi\Model\MediaErrors::class => false,
                \Placestart\WildberriesApi\Model\ResponseError::class => false,
                \Placestart\WildberriesApi\Model\TaskAlreadyExistsError::class => false,
                \Placestart\WildberriesApi\Model\TaskAlreadyExistsErrorData::class => false,
                \Placestart\WildberriesApi\Model\TaskCreated::class => false,
                \Placestart\WildberriesApi\Model\TaskCreatedData::class => false,
                \Placestart\WildberriesApi\Model\Good::class => false,
                \Placestart\WildberriesApi\Model\SizeGoodReq::class => false,
                \Placestart\WildberriesApi\Model\ClubDiscReq::class => false,
                \Placestart\WildberriesApi\Model\GoodsList::class => false,
                \Placestart\WildberriesApi\Model\GoodsListSizesItem::class => false,
                \Placestart\WildberriesApi\Model\SizeGood::class => false,
                \Placestart\WildberriesApi\Model\GoodBufferHistory::class => false,
                \Placestart\WildberriesApi\Model\GoodHistory::class => false,
                \Placestart\WildberriesApi\Model\SupplierTaskMetadata::class => false,
                \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => false,
                \Placestart\WildberriesApi\Model\Error::class => false,
                \Placestart\WildberriesApi\Model\QuarantineGoods::class => false,
                \Placestart\WildberriesApi\Model\Response401::class => false,
                \Placestart\WildberriesApi\Model\Response429::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodsLists::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodsListsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodHistories::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistories::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistoriesData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseTaskHistory::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseTaskBuffer::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseSizeLists::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseSizeListsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoods::class => false,
                \Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoodsData::class => false,
                \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectParentAllGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryColorsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryKindsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryCountriesGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectorySeasonsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2DirectoryVatGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200Data::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettings::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsSort::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsFilter::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBodySettingsCursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemPhotosItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200CardsItemTagsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200Cursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettings::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsSort::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsCursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBodySettingsFilter::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200Cursor::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200Data::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class => false,
                \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413::class => false,
                \Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV2BarcodesPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody::class => false,
                \Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200StocksItem::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody::class => false,
                \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBodyStocksItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}