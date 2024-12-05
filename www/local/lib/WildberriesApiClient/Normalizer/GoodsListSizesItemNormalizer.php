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
    class GoodsListSizesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\GoodsListSizesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\GoodsListSizesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\GoodsListSizesItem();
            if (\array_key_exists('discountedPrice', $data) && \is_int($data['discountedPrice'])) {
                $data['discountedPrice'] = (double) $data['discountedPrice'];
            }
            if (\array_key_exists('clubDiscountedPrice', $data) && \is_int($data['clubDiscountedPrice'])) {
                $data['clubDiscountedPrice'] = (double) $data['clubDiscountedPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sizeID', $data)) {
                $object->setSizeID($data['sizeID']);
                unset($data['sizeID']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('discountedPrice', $data)) {
                $object->setDiscountedPrice($data['discountedPrice']);
                unset($data['discountedPrice']);
            }
            if (\array_key_exists('clubDiscountedPrice', $data)) {
                $object->setClubDiscountedPrice($data['clubDiscountedPrice']);
                unset($data['clubDiscountedPrice']);
            }
            if (\array_key_exists('techSizeName', $data)) {
                $object->setTechSizeName($data['techSizeName']);
                unset($data['techSizeName']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sizeID') && null !== $object->getSizeID()) {
                $data['sizeID'] = $object->getSizeID();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('discountedPrice') && null !== $object->getDiscountedPrice()) {
                $data['discountedPrice'] = $object->getDiscountedPrice();
            }
            if ($object->isInitialized('clubDiscountedPrice') && null !== $object->getClubDiscountedPrice()) {
                $data['clubDiscountedPrice'] = $object->getClubDiscountedPrice();
            }
            if ($object->isInitialized('techSizeName') && null !== $object->getTechSizeName()) {
                $data['techSizeName'] = $object->getTechSizeName();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\GoodsListSizesItem::class => false];
        }
    }
} else {
    class GoodsListSizesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\GoodsListSizesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\GoodsListSizesItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\GoodsListSizesItem();
            if (\array_key_exists('discountedPrice', $data) && \is_int($data['discountedPrice'])) {
                $data['discountedPrice'] = (double) $data['discountedPrice'];
            }
            if (\array_key_exists('clubDiscountedPrice', $data) && \is_int($data['clubDiscountedPrice'])) {
                $data['clubDiscountedPrice'] = (double) $data['clubDiscountedPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sizeID', $data)) {
                $object->setSizeID($data['sizeID']);
                unset($data['sizeID']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('discountedPrice', $data)) {
                $object->setDiscountedPrice($data['discountedPrice']);
                unset($data['discountedPrice']);
            }
            if (\array_key_exists('clubDiscountedPrice', $data)) {
                $object->setClubDiscountedPrice($data['clubDiscountedPrice']);
                unset($data['clubDiscountedPrice']);
            }
            if (\array_key_exists('techSizeName', $data)) {
                $object->setTechSizeName($data['techSizeName']);
                unset($data['techSizeName']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('sizeID') && null !== $object->getSizeID()) {
                $data['sizeID'] = $object->getSizeID();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('discountedPrice') && null !== $object->getDiscountedPrice()) {
                $data['discountedPrice'] = $object->getDiscountedPrice();
            }
            if ($object->isInitialized('clubDiscountedPrice') && null !== $object->getClubDiscountedPrice()) {
                $data['clubDiscountedPrice'] = $object->getClubDiscountedPrice();
            }
            if ($object->isInitialized('techSizeName') && null !== $object->getTechSizeName()) {
                $data['techSizeName'] = $object->getTechSizeName();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\GoodsListSizesItem::class => false];
        }
    }
}