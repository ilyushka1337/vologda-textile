<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentV2GetCardsTrashPostResponse200CardsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmID', $data)) {
                $object->setNmID($data['nmID']);
                unset($data['nmID']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('photos', $data)) {
                $values = [];
                foreach ($data['photos'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class, 'json', $context);
                }
                $object->setPhotos($values);
                unset($data['photos']);
            }
            if (\array_key_exists('video', $data)) {
                $object->setVideo($data['video']);
                unset($data['video']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values_1 = [];
                foreach ($data['sizes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values_1);
                unset($data['sizes']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values_2 = [];
                foreach ($data['characteristics'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values_2);
                unset($data['characteristics']);
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('trashedAt', $data)) {
                $object->setTrashedAt($data['trashedAt']);
                unset($data['trashedAt']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nmID') && null !== $object->getNmID()) {
                $data['nmID'] = $object->getNmID();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('photos') && null !== $object->getPhotos()) {
                $values = [];
                foreach ($object->getPhotos() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['photos'] = $values;
            }
            if ($object->isInitialized('video') && null !== $object->getVideo()) {
                $data['video'] = $object->getVideo();
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values_1 = [];
                foreach ($object->getSizes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sizes'] = $values_1;
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values_2 = [];
                foreach ($object->getCharacteristics() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['characteristics'] = $values_2;
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('trashedAt') && null !== $object->getTrashedAt()) {
                $data['trashedAt'] = $object->getTrashedAt();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => false];
        }
    }
} else {
    class ContentV2GetCardsTrashPostResponse200CardsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmID', $data)) {
                $object->setNmID($data['nmID']);
                unset($data['nmID']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('photos', $data)) {
                $values = [];
                foreach ($data['photos'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class, 'json', $context);
                }
                $object->setPhotos($values);
                unset($data['photos']);
            }
            if (\array_key_exists('video', $data)) {
                $object->setVideo($data['video']);
                unset($data['video']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values_1 = [];
                foreach ($data['sizes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values_1);
                unset($data['sizes']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values_2 = [];
                foreach ($data['characteristics'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values_2);
                unset($data['characteristics']);
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('trashedAt', $data)) {
                $object->setTrashedAt($data['trashedAt']);
                unset($data['trashedAt']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nmID') && null !== $object->getNmID()) {
                $data['nmID'] = $object->getNmID();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('photos') && null !== $object->getPhotos()) {
                $values = [];
                foreach ($object->getPhotos() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['photos'] = $values;
            }
            if ($object->isInitialized('video') && null !== $object->getVideo()) {
                $data['video'] = $object->getVideo();
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values_1 = [];
                foreach ($object->getSizes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sizes'] = $values_1;
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values_2 = [];
                foreach ($object->getCharacteristics() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['characteristics'] = $values_2;
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('trashedAt') && null !== $object->getTrashedAt()) {
                $data['trashedAt'] = $object->getTrashedAt();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItem::class => false];
        }
    }
}