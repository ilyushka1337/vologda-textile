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
    class ContentV2CardsUploadAddPostBodyCardsToAddItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values = [];
                foreach ($data['characteristics'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values);
                unset($data['characteristics']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values_1 = [];
                foreach ($data['sizes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values_1);
                unset($data['sizes']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            $data['vendorCode'] = $object->getVendorCode();
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values = [];
                foreach ($object->getCharacteristics() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['characteristics'] = $values;
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values_1 = [];
                foreach ($object->getSizes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sizes'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => false];
        }
    }
} else {
    class ContentV2CardsUploadAddPostBodyCardsToAddItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions::class, 'json', $context));
                unset($data['dimensions']);
            }
            if (\array_key_exists('characteristics', $data)) {
                $values = [];
                foreach ($data['characteristics'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem::class, 'json', $context);
                }
                $object->setCharacteristics($values);
                unset($data['characteristics']);
            }
            if (\array_key_exists('sizes', $data)) {
                $values_1 = [];
                foreach ($data['sizes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem::class, 'json', $context);
                }
                $object->setSizes($values_1);
                unset($data['sizes']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            $data['vendorCode'] = $object->getVendorCode();
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('characteristics') && null !== $object->getCharacteristics()) {
                $values = [];
                foreach ($object->getCharacteristics() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['characteristics'] = $values;
            }
            if ($object->isInitialized('sizes') && null !== $object->getSizes()) {
                $values_1 = [];
                foreach ($object->getSizes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['sizes'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBodyCardsToAddItem::class => false];
        }
    }
}